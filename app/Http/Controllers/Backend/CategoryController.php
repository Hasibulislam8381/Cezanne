<?php

namespace App\Http\Controllers\Backend;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $activeCategory = Category::where('status', 'publish')->get();
        $draftCategory = Category::where('status', 'draft')->get();
        $trashedCategory = Category::onlyTrashed()->orderBy('id', 'desc')->get();
        return view('backend.category.index', compact('activeCategory', 'draftCategory', 'trashedCategory'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $photo = $request->file('photo');
        $request->validate([
            'name' => 'required|unique:categories,name',
            'photo' => 'required|mimes:png,jpg,jpeg|max:2000',
        ]);
        if ($photo) {
            $photoName = uniqid() . '.' . $photo->getClientOriginalExtension();
            Image::make($photo)->save(public_path('storage/category/' . $photoName));
        }
        Category::create([
            'name' => $request->name,
            'photo' => $photoName,

        ]);
        return back()->with('success', 'Category Added Successful!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {

        $request->validate([
            'name' => 'required|unique:categories,name',
            'photo' => 'nullable|mimes:png,jpg,jpeg|max:2000',
        ]);
        $photo = $request->file('photo');
        if ($photo) {
            $photoName = uniqid() . '.' . $photo->getClientOriginalExtension();
            Image::make($photo)->save(public_path('storage/category/' . $photoName));
        } else {
            $photoName = $category->photo;
        }
        Category::where('id', $request->id)->update([
            'name' => $request->name,
            'photo' => $photoName,

        ]);
        return back()->with('success', 'Category Edited!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->status == 'draft';
        $category->save();
        $category->delete();
        return back()->with('success', 'Category Item Trashed');
    }
    public function status(Category $category)
    {
        if ($category->status == 'publish') {
            $category->status = 'draft';
            $category->save();
        } else {
            $category->status = 'publish';
            $category->save();
        }
        return back()->with('success', $category->status == 'publish' ? 'Category info Published' : 'Category info Drafted');
    }
    public function reStore($id)
    {
        $category = Category::onlyTrashed()->find($id);
        $category->restore();
        return back()->with('success', 'Category Info Restored');
    }
    public function permDelete($id)
    {
        $category = Category::onlyTrashed()->find($id);
        $category->forceDelete();
        return back()->with('success', 'Category Info Deleted');
    }
}
