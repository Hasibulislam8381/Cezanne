@extends('layouts.backend.master')
@section('content')

<div class="container-fluid page__heading-container">
    <div class="page__heading d-flex align-items-end">
      <div class="flex">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Category</li>
          </ol>
        </nav>
        <h1 class="m-0">All General Info</h1>
      </div>
    </div>
  </div>
<div class="table-responsive">
<table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Site Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col">Logo</th>
        <th scope="col">Favicon Logo</th>
        <th scope="col">Footer Logo</th>
        <th scope="col">Facebook</th>
        <th scope="col">Instagram</th>
        <th scope="col">LinkedIn</th>
        <th scope="col">Youtube</th>
        <th scope="col">Address</th>
        <th scope="col">Copyright Text</th>
        <th scope="col">Action</th>
        
      </tr>
    </thead>

    <tbody>
    @foreach ($generalInfos as $generalInfo)
      <tr>
        <th scope="row">{{ $generalInfo->id }}</th>
        <td>{{ $generalInfo->site_name }}</td>
        <td>{{ $generalInfo->email }}</td>
        <td>{{ $generalInfo->phone }}</td>
        <td>{{ $generalInfo->logo }}</td>
        <td>{{ $generalInfo->favicon_logo }}</td>
        <td>{{ $generalInfo->footer_logo }}</td>
        <td>{{ $generalInfo->facebook }}</td>
        <td>{{ $generalInfo->instragram }}</td>
        <td>{{ $generalInfo->linkedin }}</td>
        <td>{{ $generalInfo->youtube }}</td>
        <td>{{ $generalInfo->address }}</td>
        <td>{{ $generalInfo->copyright_text }}</td>
        <td class="td_btn">
          <a href="{{ route('backend.general_info.edit', $generalInfo->id) }}"
            class="btn btn-sm btn-info">Edit</a>
        </td>
      </tr>
      @endforeach
    </tbody>

  </table>
</div>

@endsection