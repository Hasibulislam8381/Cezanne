<?php

namespace App\Http\Controllers\Backend;

use App\Models\Work;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $activeWorks = Work::where('status', 'publish')->get();
        $draftWorks = Work::where('status', 'draft')->get();
        $trashedWorks = Work::onlyTrashed()->orderBy('id', 'desc')->get();
        return view('backend.work.index', compact('activeWorks', 'draftWorks', 'trashedWorks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.work.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:works,name',
            'short_description' => 'nullable',
            'photo' => 'required|mimes:png,jpg,jpeg|max:2000',
        ]);
        $photo = $request->file('photo');
        if ($photo) {
            $photoName = time() . uniqid() . '.' . $photo->getClientOriginalExtension();
            Image::make($photo)->save(public_path('storage/work/' . $photoName));
        }
        Work::create([
            'name' => $request->name,
            'short_description' => $request->short_description,
            'photo' => $photoName,

        ]);
        return back()->with('success', 'Work info Added Successful!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Work $work)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Work $work)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Work $work)
    {

        $request->validate([
            'name' => 'required|unique:works,name',
            'short_description' => 'nullable',
            'photo' => 'nullable|mimes:png,jpg,jpeg|max:2000',
        ]);
        $photo = $request->file('photo');
        if ($photo) {
            $photoName = time() . uniqid() . '.' . $photo->getClientOriginalExtension();
            Image::make($photo)->save(public_path('storage/work/' . $photoName));
        } else {
            $photoName = $work->photo;
        }

        Work::where('id', $request->id)->update([
            'id' => $request->id,
            'name' => $request->name,
            'short_description' => $request->short_description,
            'photo' => $photoName,

        ]);
        return back()->with('success', 'Work info Edit Successful!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Work $work)
    {
        $work->status == 'draft';
        $work->save();
        $work->delete();
        return back()->with('success', 'work Item Trashed');
    }
    public function status(Work $work)
    {
        if ($work->status == 'publish') {
            $work->status = 'draft';
            $work->save();
        } else {
            $work->status = 'publish';
            $work->save();
        }
        return back()->with('success', $work->status == 'publish' ? 'Work info Published' : 'Work info Drafted');
    }
    public function reStore($id)
    {
        $work = Work::onlyTrashed()->find($id);
        $work->restore();
        return back()->with('success', 'Work Info Restored');
    }
    public function permDelete($id)
    {
        $work = Work::onlyTrashed()->find($id);
        $work->forceDelete();
        return back()->with('success', 'Work Info Deleted');
    }
}
