<?php

namespace App\Http\Controllers\Backend;

use App\Models\Banner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $banners = Banner::all();
        return view('backend.banner.index', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('backend.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'banner_image' => 'required|mimes:png,jpg,jpeg|max:2000',
            'banner_head' => 'required',
            'banner_des' => 'required',
        ]);
        $banner_image = $request->file('banner_image');


        if ($banner_image) {
            $bannerImage = uniqid() . '.' . $banner_image->getClientOriginalExtension();
            Image::make($banner_image)->save(public_path('storage/banner/' . $bannerImage));
        }

        Banner::create([

            'banner_image' => $bannerImage,
            'banner_head' => $request->banner_head,
            'banner_des' => $request->banner_des,
        ]);
        return back()->with('success', 'Banner Added Successful!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $banners = Banner::findOrFail($id);
        $banners->forceDelete();
        return back()->with('success', 'Banner Info Deleted');
    }
}
