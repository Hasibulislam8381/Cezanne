<?php

namespace App\Http\Controllers\Backend;

use App\Models\GeneralInfo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class GeneralInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $generalInfos = GeneralInfo::all();
        return view('backend.general_info.index',compact('generalInfos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // 
        return view('backend.general_info.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
       
        $request->validate([
            'site_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'logo' => 'required|mimes:png,jpg,jpeg|max:2000',
            'favicon_logo' => 'required|mimes:png,jpg,jpeg|max:2000',
            'footer_logo' => 'required|mimes:png,jpg,jpeg|max:2000',
            'facebook' => 'required',
            'instragram' => 'required',
            'linkedin' => 'required',
            'youtube' => 'required',
            'address' => 'required',
            'copyright_text' => 'required',
        ]);
        $logo = $request->file('logo');
        $favicon_logo = $request->file('favicon_logo');
        $footer_logo = $request->file('footer_logo');


        if ($logo) {
            $logoName = uniqid() . '.' . $logo->getClientOriginalExtension();
            Image::make($logo)->save(public_path('storage/general_info/' . $logoName));
        }
         if ($favicon_logo) {
            $faviconLogo = uniqid() . '.' . $favicon_logo->getClientOriginalExtension();
            Image::make($favicon_logo)->save(public_path('storage/general_info/' . $faviconLogo));
        }
         if ($footer_logo) {
            $footerLogo = uniqid() . '.' . $footer_logo->getClientOriginalExtension();
            Image::make($footer_logo)->save(public_path('storage/general_info/' . $footerLogo));
        }
        GeneralInfo::create([
            'site_name' => $request->site_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'logo' => $logoName,
            'favicon_logo' => $faviconLogo,
            'footer_logo' => $footerLogo,
            'facebook' => $request->facebook,
            'instragram' => $request->instragram,
            'linkedin' => $request->linkedin,
            'youtube' => $request->youtube,
            'address' => $request->address,
            'copyright_text' => $request->copyright_text,

        ]);
        return back()->with('success', 'Generral Item Added Successful!');
    }

    /**
     * Display the specified resource.
     */
    public function show(GeneralInfo $generalInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GeneralInfo $generalInfo)
    {
        //
        $generalInfo=GeneralInfo::first();
        return view('backend.general_info.edit',compact('generalInfo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, GeneralInfo $generalInfo)
    {
        //
          $request->validate([
            'site_name' => 'nullable',
            'email' => 'nullable',
            'phone' => 'nullable',
            'logo' => 'nullable|mimes:png,jpg,jpeg|max:2000',
            'favicon_logo' => 'nullable|mimes:png,jpg,jpeg|max:2000',
            'footer_logo' => 'nullable|mimes:png,jpg,jpeg|max:2000',
            'facebook' => 'nullable',
            'instragram' => 'nullable',
            'linkedin' => 'nullable',
            'youtube' => 'nullable',
            'address' => 'nullable',
            'copyright_text' => 'nullable',
        ]);
        $logo = $request->file('logo');
        $favicon_logo = $request->file('favicon_logo');
        $footer_logo = $request->file('footer_logo');


        if ($logo) {
            $logoName = uniqid() . '.' . $logo->getClientOriginalExtension();
            Image::make($logo)->save(public_path('storage/general_info/' . $logoName));
        }else{
            $logoName = $generalInfo->logo;
        }
        if ($favicon_logo) {
            $faviconLogo = uniqid() . '.' . $favicon_logo->getClientOriginalExtension();
            Image::make($favicon_logo)->save(public_path('storage/general_info/' . $faviconLogo));
        }
        else{
            $faviconLogo = $generalInfo->favicon_logo;
        }
         if ($footer_logo) {
            $footerLogo = uniqid() . '.' . $footer_logo->getClientOriginalExtension();
            Image::make($footer_logo)->save(public_path('storage/general_info/' . $footerLogo));
        }
        else{
            $footerLogo = $generalInfo->footer_logo;
        }
       
         $generalInfo->update([
            'site_name' => $request->site_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'logo' => $logoName,
            'favicon_logo' => $faviconLogo,
            'footer_logo' => $footerLogo,
            'facebook' => $request->facebook,
            'instragram' => $request->instragram,
            'linkedin' => $request->linkedin,
            'youtube' => $request->youtube,
            'address' => $request->address,
            'copyright_text' => $request->copyright_text,

        ]);
        return back()->with('success', 'Generral info updated!');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GeneralInfo $generalInfo)
    {
        //
    }
}
