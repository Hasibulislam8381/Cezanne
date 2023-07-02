@extends('layouts.backend.master')
@section('content')
  <div class="container-fluid page__heading-container" >
    <div class="page__heading d-flex align-items-end">
      <div class="flex">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{ route('admin') }}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Exhibition</li>
          </ol>
        </nav>
        <h1 class="m-0">Exhibition</h1>
      </div>
    </div>
  </div>
  <section>
    <div class="container-fluid" >
      <div class="row justify-content-center" >
        <div class="col-lg-8" >
          <div class="card">
            <div class="card-header">
              <h1 class="text-center">Add Exhibition Info</h1>
            </div>
            <div class="card-body">
              <form action="{{ route('backend.exhibition.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class=" form-group">
                  <b>Title:</b>
                  <input type="text" name="title" class=" form-control" placeholder="Enter Exhibition Title">
                </div>
                
                <div class=" form-group">
                  <b>Ref No:</b>
                  <input type="text" name="ref_no" class=" form-control" placeholder="Enter Exhibition Ref No">
                </div>
                <div class=" form-group">
                  <b>Size:</b>
                  <input type="text" name="size" class=" form-control" placeholder="Enter Exhibition Size">
                </div>
                <div class="form-group">
                  <b>Price:</b>
                  <input type="number" name="price" class=" form-control" placeholder="Enter Exhibition Price">
                </div>
                <div class=" form-group">
                  <b>Sale Price:</b>
                  <input type="number" name="sale_price" class=" form-control" placeholder="Enter Exhibition Sale Price">
                </div>
                <div class=" form-group">
                  <b>Description:</b>
                  <textarea name="description" class="form-control" placeholder="Enter Exhibition Description" rows="7"></textarea>
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