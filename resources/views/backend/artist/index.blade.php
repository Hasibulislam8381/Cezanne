@extends('layouts.backend.master')
@section('content')

<div class="container-fluid page__heading-container">
    <div class="page__heading d-flex align-items-end">
      <div class="flex">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Artist</li>
          </ol>
        </nav>
        <h1 class="m-0">All Artist</h1>
      </div>
    </div>
  </div>
<div class="table-responsive">
<table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Artist Image</th>
        <th scope="col">Artist Name</th>
        <th scope="col">Artist Designation</th>
        <th scope="col">Short_description</th>
        <th scope="col">Action</th>
        
      </tr>
    </thead>

    <tbody>
    @foreach ($artist as $artists)
      <tr>
        <th scope="row">{{ $artists->id }}</th>
     <td> <img src="{{ url('storage/artist/' . $artists->artist_image) }}" class="mt-2" width="60" alt="Artist Image"></td>    
     <td>{{$artists->artist_name}}</td>    
     <td>{{$artists->designation}}</td>    
     <td>{{$artists->short_des}}</td>    
     <td class="td_btn">
        <form action="{{ route('backend.artist.delete', $artists->id) }}" method="POST">
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