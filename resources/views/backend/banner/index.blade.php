@extends('layouts.backend.master')
@section('content')

<div class="container-fluid page__heading-container">
    <div class="page__heading d-flex align-items-end">
      <div class="flex">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Banner</li>
          </ol>
        </nav>
        <h1 class="m-0">All Banner</h1>
      </div>
    </div>
  </div>
<div class="table-responsive">
<table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Banner Image</th>
        <th scope="col">Banner Head</th>
        <th scope="col">Banner Description</th>
        <th scope="col">Action</th>
        
      </tr>
    </thead>

    <tbody>
    @foreach ($banners as $banner)
      <tr>
        <th scope="row">{{ $banner->id }}</th>
     <td> <img src="{{ url('storage/banner/' . $banner->banner_image) }}" class="mt-2" width="60" alt="Banner Image"></td>    
     <td>{{$banner->banner_head}}</td>    
     <td>{{$banner->banner_des}}</td>    
     <td class="td_btn">
        <form action="{{ route('backend.banner.delete', $banner->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
        </form>
        
        
    </td>
      </tr>
      @endforeach
    </tbody>

  </table>
</div>

@endsection