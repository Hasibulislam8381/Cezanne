<?php

namespace App\Http\Controllers\Backend;

use App\Models\Frame;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class FrameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $activeFrames = Frame::where('status', 'publish')->get();
        $draftFrames = Frame::where('status', 'draft')->get();
        $trashedFrames = Frame::onlyTrashed()->orderBy('id', 'desc')->get();
        return view('backend.frame.index', compact('activeFrames', 'draftFrames', 'trashedFrames'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.frame.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:frames,name',
            'material' => 'nullable',
            'ref_no' => 'nullable',
            'size' => 'nullable',
            'price' => 'nullable',
            'sale_price' => 'nullable',
            'photo' => 'required|mimes:png,jpg,jpeg|max:2000',
        ]);
        $photo = $request->file('photo');
        if ($photo) {
            $photoName = uniqid() . '.' . $photo->getClientOriginalExtension();
            Image::make($photo)->save(public_path('storage/frame/' . $photoName));
        }
        Frame::create([
            'name' => $request->name,
            'material' => $request->material,
            'ref_no' => $request->ref_no,
            'size' => $request->size,
            'price' => $request->price,
            'sale_price' => $request->sale_price,
            'photo' => $photoName,

        ]);
        return back()->with('success', 'Frame Added Successful!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Frame $frame)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Frame $frame)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Frame $frame)
    {
        $request->validate([
            'name' => 'required|unique:frames,name',
            'material' => 'nullable',
            'ref_no' => 'nullable',
            'size' => 'nullable',
            'price' => 'nullable',
            'sale_price' => 'nullable',
            'photo' => 'nullable|mimes:png,jpg,jpeg|max:2000',
        ]);
        $photo = $request->file('photo');
        if ($photo) {
            $photoName = uniqid() . '.' . $photo->getClientOriginalExtension();
            Image::make($photo)->save(public_path('storage/frame/' . $photoName));
        }else{
            $photoName = $frame->photo;
        }
        Frame::where('id',$request->id)->update([
            'id' => $request->id,
            'name' => $request->name,
            'material' => $request->material,
            'ref_no' => $request->ref_no,
            'size' => $request->size,
            'price' => $request->price,
            'sale_price' => $request->sale_price,
            'photo' => $photoName,

        ]);
        return back()->with('success', 'Frame Info Edit Successful!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Frame $frame)
    {
        $frame->status == 'draft';
        $frame->save();
        $frame->delete();
        return back()->with('success', 'Frame Item Trashed');
    }
    public function status(Frame $frame)
    {
        if ($frame->status == 'publish') {
            $frame->status = 'draft';
            $frame->save();
        } else {
            $frame->status = 'publish';
            $frame->save();
        }
        return back()->with('success', $frame->status == 'publish' ? 'Frame info Published' : 'Frame info Drafted');
    }
    public function reStore($id)
    {
        $frame = Frame::onlyTrashed()->find($id);
        $frame->restore();
        return back()->with('success', 'Frame Info Restored');
    }
    public function permDelete($id)
    {
        $frame = Frame::onlyTrashed()->find($id);
        $frame->forceDelete();
        return back()->with('success', 'Frame Info Deleted');
    }
}
