<?php

namespace App\Http\Controllers\backend;

use App\Models\Artist;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $artist = Artist::all();
        return view('backend.artist.index', compact('artist'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.artist.create');
        //

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'artist_image' => 'required|mimes:png,jpg,jpeg|max:2000',
            'artist_name' => 'required',
            'designation' => 'required',
            'short_des' => 'required',
        ]);
        $artist_image = $request->file('artist_image');


        if ($artist_image) {
            $artistImage = uniqid() . '.' . $artist_image->getClientOriginalExtension();
            Image::make($artist_image)->save(public_path('storage/artist/' . $artistImage));
        }

        Artist::create([

            'artist_image' => $artistImage,
            'artist_name' => $request->artist_name,
            'designation' => $request->designation,
            'short_des' => $request->short_des,
        ]);
        return back()->with('success', 'Artist Added Successful!');
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
        //
        $artists = Artist::findOrFail($id);
        $artists->forceDelete();
        return back()->with('success', 'Artist Info Deleted');
    }
}
