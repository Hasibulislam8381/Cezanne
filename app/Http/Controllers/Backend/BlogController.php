<?php

namespace App\Http\Controllers\Backend;

use App\Models\Blog;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $activeBlogs=Blog::where('status', 'publish')->get();
        $draftBlogs=Blog::where('status', 'draft')->get();
        $trashedBlogs = Blog::onlyTrashed()->orderBy('id', 'desc')->get();
        return view('backend.blog.index',compact('activeBlogs','draftBlogs','trashedBlogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {        
        $request->validate([
            'title' => 'required|unique:blogs,title',
            'date' => 'required',
            'description' => 'nullable',
            'photo' => 'required|mimes:png,jpg,jpeg|max:2000',
        ]);
        $photo = $request->file('photo');
        if ($photo) {
            $photoName = uniqid() . '.' . $photo->getClientOriginalExtension();
            Image::make($photo)->save(public_path('storage/blog/' . $photoName));
        }
        Blog::create([
            'title' => $request->title,
            'date' => $request->date,
            'description' => $request->description,
            'photo' => $photoName,

        ]);
        return back()->with('success', 'Blog Added Successful!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        
        $request->validate([
            'title' => 'required|unique:blogs,title',
            'date' => 'required',
            'description' => 'nullable',
            'photo' => 'nullable|mimes:png,jpg,jpeg|max:2000',
        ]);
        $photo = $request->file('photo');
        if ($photo) {
            $path = public_path('storage/blog/' . $blog->photo);
            if (file_exists($path)) {
                unlink($path);
            }

            $photoName = uniqid() . '.' . $photo->getClientOriginalExtension();
            Image::make($photo)->save(public_path('storage/blog/' . $photoName));
        }else{
            $photoName=$blog->photo;
        }
        $slug = Str::slug($request->title);
        Blog::where('id',$request->id)->update([
            'id' => $request->id,
            'title' => $request->title,
            'slug' => $slug,
            'date' => $request->date,
            'description' => $request->description,
            'photo' => $photoName,

        ]);

        return redirect(route('backend.blog.index'))->with('success', 'Blog Info Edited!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        $blog->status == 'draft';
        $blog->save();
        $blog->delete();
        return back()->with('success','Blog Item Trashed');
    }
    public function status(Blog $blog){
        if($blog->status == 'publish'){
            $blog->status = 'draft';
            $blog->save();
        }else{
            $blog->status = 'publish';
            $blog->save();
        }
        return back()->with('success', $blog->status == 'publish' ? 'Blog info Published' : 'Blog info Drafted');
    }
    public function reStore($id){
        $blog=Blog::onlyTrashed()->find($id);
        $blog->restore();
        return back()->with('success', 'Blog Info Restored');
    }
    public function permDelete($id){
        $blog = Blog::onlyTrashed()->find($id);
        $blog->forceDelete();
        return back()->with('success', 'Blog Info Deleted');
    }
}
