@extends('layouts.backend.master')
@section('content')
  <div class="container-fluid page__heading-container" >
    <div class="page__heading d-flex align-items-end">
      <div class="flex">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">General Info</li>
          </ol>
        </nav>
        <h1 class="m-0">General Info</h1>
      </div>
    </div>
  </div>
  <section>
    <div class="container-fluid" >
      <div class="row justify-content-center" >
        <div class="col-lg-8" >
          <div class="card">
            <div class="card-header">
              <h1 class="text-center">Edit General Info</h1>
            </div>
            <div class="card-body">
              <form action="{{ route('backend.general_info.update',$generalInfo->id) }}"  method="POST" enctype="multipart/form-data">
                @csrf

                <div class=" form-group">
                    <b>Site Name:</b>
                    <input type="text" name="site_name" class=" form-control" value="{{ $generalInfo->site_name }}">
                  </div>
                  <div class=" form-group">
                    <b>Email:</b>
                   <input type="text" name="email" class="form-control" value="{{ $generalInfo->email }}">
                  </div>
                  <div class=" form-group">
                    <b>Phone:</b>
                    <input type="text" name="phone" class=" form-control" value="{{ $generalInfo->phone }}">
                  </div>
                
                  <div class=" form-group">
                    <b>Facebook:</b>
                    <input type="text" name="facebook" class=" form-control" value="{{ $generalInfo->facebook }}">
                  </div>
                  <div class=" form-group">
                    <b>Instagram:</b>
                    <input type="text" name="instragram" class=" form-control" value="{{ $generalInfo->instragram }}">
                  </div>
                  <div class=" form-group">
                    <b>LinkedIn:</b>
                    <input type="text" name="linkedin" class=" form-control" value="{{ $generalInfo->linkedin }}">
                  </div>             
                  <div class=" form-group">
                    <b>Youtube:</b>
                    <input type="text" name="youtube" class=" form-control" value="{{ $generalInfo->youtube }}">
                  </div>             
                  <div class=" form-group">
                    <b>Address:</b>
                    <input type="text" name="address" class=" form-control" value="{{ $generalInfo->address }}">
                  </div>             
                  <div class=" form-group">
                    <b>Copyright Text:</b>
                    <input type="text" name="copyright_text" class=" form-control" value="{{ $generalInfo->copyright_text }}">
                  </div>  
                  
                  <div class=" form-group">
                    <b>Logo:</b>
                    <input type="file" name="logo" class="form-control">
                    <img src="{{ url('storage/general_info/' . $generalInfo->logo) }}" class="mt-2" width="60" alt="Logo">
                  </div> 

                  <div class=" form-group">
                    <b>Favicon logo:</b>
                    <input type="file" name="favicon_logo" class="form-control">
                    <img src="{{ url('storage/general_info/' . $generalInfo->favicon_logo) }}" class="mt-2" width="60" alt="favicon_logo">
                  </div> 
                
             
                <div class=" form-group">
                  <b>Footer Logo:</b>
                  <input type="file" name="footer_logo" class="form-control">
                  <img src="{{ url('storage/general_info/' . $generalInfo->footer_logo) }}" class="mt-2" width="60" alt="footer_logo">
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