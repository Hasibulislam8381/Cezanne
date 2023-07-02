@extends('layouts.backend.master')
@section('content')
  <div class="container-fluid page__heading-container" >
    <div class="page__heading d-flex align-items-end">
      <div class="flex">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{ route('admin') }}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Frame</li>
          </ol>
        </nav>
        <h1 class="m-0">Frame</h1>
      </div>
    </div>
  </div>
  <section>
    <div class="container-fluid" >
      <div class="row justify-content-center" >
        <div class="col-lg-8" >
          <div class="card">
            <div class="card-header">
              <h1 class="text-center">Add Frame Info</h1>
            </div>
            <div class="card-body">
              <form action="{{ route('backend.frame.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class=" form-group">
                  <b>Name:</b>
                  <input type="text" name="name" class=" form-control" placeholder="Enter Frame Name">
                </div>
                <div class=" form-group">
                  <b>Material:</b>
                  <input type="text" name="material" class=" form-control" placeholder="Enter Frame Material">
                </div>
                <div class=" form-group">
                  <b>Ref No:</b>
                  <input type="text" name="ref_no" class=" form-control" placeholder="Enter Frame Ref No">
                </div>
                <div class=" form-group">
                  <b>Size:</b>
                  <input type="text" name="size" class=" form-control" placeholder="Enter Frame Size">
                </div>
                <div class="form-group">
                  <b>Price:</b>
                  <input type="number" name="price" class=" form-control" placeholder="Enter Frame Price">
                </div>
                <div class=" form-group">
                  <b>Sale Price:</b>
                  <input type="number" name="sale_price" class=" form-control" placeholder="Enter Sale Price">
                </div>
                <div class=" form-group">
                  <b>Photo:</b>
                  <input type="file" name="photo" class=" form-control">
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