<?php

namespace App\Http\Controllers\Backend;

use App\Models\Exhibition;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class ExhibitionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $activeExhibitions = Exhibition::where('status', 'publish')->get();
        $draftExhibitions = Exhibition::where('status', 'draft')->get();
        $trashedExhibitions = Exhibition::onlyTrashed()->orderBy('id', 'desc')->get();
        return view('backend.exhibition.index', compact('activeExhibitions', 'draftExhibitions', 'trashedExhibitions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.exhibition.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:exhibitions,title',
            'description' => 'nullable',
            'price' => 'nullable',
            'sale_price' => 'nullable',
            'photo' => 'required|mimes:png,jpg,jpeg|max:2000',
        ]);
        $photo = $request->file('photo');
        if ($photo) {
            $photoName = time() . uniqid() . '.' . $photo->getClientOriginalExtension();
            Image::make($photo)->save(public_path('storage/exhibition/' . $photoName));
        }
        Exhibition::create([
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'sale_price' => $request->sale_price,
            'photo' => $photoName,

        ]);
        return back()->with('success', 'Exhibition Added Successful!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Exhibition $exhibition)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Exhibition $exhibition)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Exhibition $exhibition)
    {
        $request->validate([
            'title' => 'required|unique:exhibitions,title',
            'description' => 'nullable',
            'price' => 'nullable',
            'sale_price' => 'nullable',
            'photo' => 'nullable|mimes:png,jpg,jpeg|max:2000',
        ]);
        $photo = $request->file('photo');
        if ($photo) {
            $photoName = time() . uniqid() . '.' . $photo->getClientOriginalExtension();
            Image::make($photo)->save(public_path('storage/exhibition/' . $photoName));
        }else{
            $photoName = $exhibition->photo;
        }
        Exhibition::where('id',$request->id)->update([
            'id' => $request->id,
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'sale_price' => $request->sale_price,
            'photo' => $photoName,

        ]);
        return back()->with('success', 'Exhibition Info Edit Successful!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Exhibition $exhibition)
    {
        $exhibition->status == 'draft';
        $exhibition->save();
        $exhibition->delete();
        return back()->with('success','Exhibition Item Trashed');
    }
    public function status(Exhibition $exhibition){
        if($exhibition->status == 'publish'){
            $exhibition->status = 'draft';
            $exhibition->save();
        }else{
            $exhibition->status = 'publish';
            $exhibition->save();
        }
        return back()->with('success', $exhibition->status == 'publish' ? 'Exhibition info Published' : 'Exhibition info Drafted');
    }
    public function reStore($id){
        $exhibition=Exhibition::onlyTrashed()->find($id);
        $exhibition->restore();
        return back()->with('success', 'Exhibition Info Restored');
    }
    public function permDelete($id){
        $exhibition = Exhibition::onlyTrashed()->find($id);
        $exhibition->forceDelete();
        return back()->with('success', 'Exhibition Info Deleted');
    }
}
