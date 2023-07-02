@extends('layouts.backend.master')
@section('content')
  <div class="container-fluid page__heading-container" >
    <div class="page__heading d-flex align-items-end">
      <div class="flex">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Product</li>
          </ol>
        </nav>
        <h1 class="m-0">Product</h1>
      </div>
    </div>
  </div>
  <section>
    <div class="container-fluid" >
      <div class="row justify-content-center" >
        <div class="col-lg-8" >
          <div class="card">
            <div class="card-header">
              <h1 class="text-center">Edit Product Info</h1>
            </div>
            <div class="card-body">
              <form action="{{ route('backend.product.update',$product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class=" form-group">
                  <b>Title:</b>
                  <input type="text" name="title" class=" form-control" value="{{ $product->title }}">
                </div>
                <div class="form-group">
                  <label for="">Select Category</label>
                  <select name="category" id="" class="form-control mb-3">
                    <option selected disabled>Select Category</option>
                    @foreach ($categories as $category)
                      <option value="{{ $category->id }}" {{ $category->id == $product->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
                    @endforeach
                  </select>
                </div>
                <div class=" form-group">
                  <b>Artist Name:</b>
                  <input type="text" name="artist_name" class=" form-control" value="{{ $product->artist_name }}">
                </div>
                <div class=" form-group">
                  <b>Medium:</b>
                  <input type="text" name="medium" class=" form-control" value="{{ $product->medium }}">
                </div>
                <div class=" form-group">
                  <b>Refference No:</b>
                  <input type="text" name="ref_no" class=" form-control" value="{{ $product->ref_no }}">
                </div>
                <div class=" form-group">
                  <b>Size:</b>
                  <input type="text" name="size" class=" form-control" value="{{ $product->size }}">
                </div>
                <div class=" form-group">
                  <b>SKU Code:</b>
                  <input type="text" name="sku_code" class=" form-control" value="{{ $product->sku_code }}">
                </div>
                <div class=" form-group">
                  <b>Description:</b>
                  <textarea name="description" class=" form-control " rows="7">{{ $product->description }}"</textarea>
                </div>
                <div class=" form-group">
                  <b>Additional Info:</b>
                  <textarea name="add_info" class=" form-control " rows="7">{{ $product->add_info }}"</textarea>
                </div>                
                <div class=" form-group">
                  <b>Price:</b>
                  <input type="number" name="price" class=" form-control" value="{{ $product->price }}">
                </div>                
                <div class=" form-group">
                  <b>Sale Price:</b>
                  <input type="number" name="sale_price" class=" form-control" value="{{ $product->sale_price }}">
                </div>
                <div class=" form-group">
                  <b>Photo:</b>
                  <input type="file" name="photo" class="form-control">
                  <img src="{{ url('storage/product/' . $product->photo) }}" class="mt-2" width="60" alt="product">
                </div>                
                <button type="submit" name="submit" class="btn btn-primary mt-3">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection