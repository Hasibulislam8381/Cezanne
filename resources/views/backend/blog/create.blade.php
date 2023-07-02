@extends('layouts.backend.master')
@section('content')
  <div class="container-fluid page__heading-container">
    <div class="page__heading d-flex align-items-end">
      <div class="flex">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{ route('index') }}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Blogs</li>
          </ol>
        </nav>
        <h1 class="m-0">Blogs</h1>
      </div>
    </div>
  </div>
  <section>
    <div class="container-fluid" >
      <div class="row justify-content-center" >
        <div class="col-lg-8" >
          <div class="card">
            <div class="card-header">
              <h1 class="text-center">Add blog Info</h1>
            </div>
            <div class="card-body">
              <form action="{{ route('backend.blog.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class=" form-group">
                  <b>Title:</b>
                  <input type="text" name="title" class=" form-control" placeholder="Enter Blog Title">
                </div>
                <div class=" form-group">
                  <b>Photo:</b>
                  <input type="file" name="photo" class=" form-control">
                </div>
                <div class=" form-group">
                  <b>Date:</b>
                  <input type="date" name="date" class="form-control">
                </div>
                <div class=" form-group">
                  <b>Description:</b>
                  <textarea name="description" class=" form-control " rows="7" placeholder="Enter Blog Description"></textarea>
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
