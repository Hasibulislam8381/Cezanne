@extends('layouts.backend.master')
@section('content')
  <div class="container-fluid page__heading-container" >
    <div class="page__heading d-flex align-items-end">
      <div class="flex">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Banner</li>
          </ol>
        </nav>
        <h1 class="m-0">Banner</h1>
      </div>
    </div>
  </div>
  <section>
    <div class="container-fluid" >
      <div class="row justify-content-center" >
        <div class="col-lg-8" >
          <div class="card">
            <div class="card-header">
              <h1 class="text-center">Add Banner</h1>
            </div>
            <div class="card-body">
              <form action="{{ route('backend.banner.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
            
                <div class=" form-group">
                  <b>Banner Image:</b>
                  <input type="file" name="banner_image" class=" form-control">
                </div>                

                <div class=" form-group">
                  <b>Banner Head</b>
                  <input type="text" name="banner_head" class=" form-control">
                </div>
                <div class=" form-group">
                  <b>Banner Description</b>
                  <input type="text" name="banner_des" class=" form-control">
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