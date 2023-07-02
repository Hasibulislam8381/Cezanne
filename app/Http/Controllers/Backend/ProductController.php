<?php

namespace App\Http\Controllers\Backend;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $activeProducts = Product::where('status', 'publish')->get();
        $draftProducts = Product::where('status', 'draft')->get();
        $trashedProducts = Product::onlyTrashed()->orderBy('id', 'desc')->get();
        return view('backend.product.index', compact('activeProducts', 'draftProducts', 'trashedProducts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::get(['id', 'name']);
        return view('backend.product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:products,title',
            'sku_code' => 'required',
            'description' => 'nullable',
            'add_info' => 'nullable',
            'artist_name' => 'nullable',
            'medium' => 'nullable',
            'ref_no' => 'nullable',
            'size' => 'nullable',
            'price' => 'nullable',
            'sale_price' => 'nullable',
            'photo' => 'required|mimes:png,jpg,jpeg|max:2000',
        ]);
        $photo = $request->file('photo');
        if ($photo) {
            $photoName = uniqid() . '.' . $photo->getClientOriginalExtension();
            Image::make($photo)->save(public_path('storage/product/' . $photoName));
        }
        Product::create([
            'title' => $request->title,
            'category_id' => $request->category,
            'sku_code' => $request->sku_code,
            'description' => $request->description,
            'add_info' => $request->add_info,
            'artist_name' => $request->artist_name,
            'medium' => $request->medium,
            'ref_no' => $request->ref_no,
            'size' => $request->size,
            'price' => $request->price,
            'sale_price' => $request->sale_price,
            'photo' => $photoName,

        ]);
        return back()->with('success', 'Product Added Successful!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories=Category::all();
        return view('backend.product.edit',compact('product','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'title' => 'required|unique:products,title',
            'sku_code' => 'required',
            'description' => 'nullable',
            'add_info' => 'nullable',
            'artist_name' => 'nullable',
            'medium' => 'nullable',
            'ref_no' => 'nullable',
            'size' => 'nullable',
            'price' => 'nullable',
            'sale_price' => 'nullable',
            'photo' => 'nullable|mimes:png,jpg,jpeg|max:2000',
        ]);
        $photo = $request->file('photo');
        if ($photo) {
            $photoName = uniqid() . '.' . $photo->getClientOriginalExtension();
            Image::make($photo)->save(public_path('storage/product/' . $photoName));
        }else{
            $photoName = $product->photo;
        }
        $product->update([
            'title' => $request->title,
            'category_id' => $request->category,
            'sku_code' => $request->sku_code,
            'description' => $request->description,
            'add_info' => $request->add_info,
            'artist_name' => $request->artist_name,
            'medium' => $request->medium,
            'ref_no' => $request->ref_no,
            'size' => $request->size,
            'price' => $request->price,
            'sale_price' => $request->sale_price,
            'photo' => $photoName,

        ]);
        return back()->with('success', 'Product Added Successful!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->status == 'draft';
        $product->save();
        $product->delete();
        return back()->with('success', 'Product Item Trashed');
    }
    public function status(Product $product)
    {
        if ($product->status == 'publish') {
            $product->status = 'draft';
            $product->save();
        } else {
            $product->status = 'publish';
            $product->save();
        }
        return back()->with('success', $product->status == 'publish' ? 'Product info Published' : 'Product info Drafted');
    }
    public function reStore($id)
    {
        $product = Product::onlyTrashed()->find($id);
        $product->restore();
        return back()->with('success', 'Product Info Restored');
    }
    public function permDelete($id)
    {
        $product = Product::onlyTrashed()->find($id);
        $product->forceDelete();
        return back()->with('success', 'Product Info Deleted');
    }
}
