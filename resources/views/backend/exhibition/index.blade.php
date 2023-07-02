@extends('layouts.backend.master')
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
                            type="button" role="tab" aria-controls="pills-home" aria-selected="true">Active</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                            aria-selected="false">Draft</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                            aria-selected="false">Trash</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"
                        tabindex="0">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="text-center">Active exhibition</h4>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead class="text-center">
                                        <tr>
                                            <th>Id</th>
                                            <th>Photo</th>
                                            <th>Title</th>
                                            <th>Price</th>
                                            <th>Sale Price</th>
                                            <th>Description</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table text-center">

                                        @foreach ($activeExhibitions as $exhibition)
                                            <tr>
                                                <td>{{ $exhibition->id }}</td>
                                                <td>
                                                    <img src="{{ asset('storage/exhibition/' . $exhibition->photo) }}" width="80px"
                                                        alt="" style="padding: 0!important">
                                                </td>
                                                <td>{{ $exhibition->title }}</td>
                                                <td>{{ $exhibition->price }}</td>
                                                <td>{{ $exhibition->sale_price }}</td>
                                                <td>{{ Str::limit($exhibition->description, 20, '...') }}</td>
                                                <td class="td_btn">

                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#myModal"
                                                        onclick="updatedata('{{ $exhibition->id }}','{{ $exhibition->title }}','{{ $exhibition->description }}','{{ $exhibition->price }}','{{ $exhibition->sale_price }}')"
                                                        class="btn btn-sm btn-info">Edit</a>
                                                    <a href="{{ route('backend.exhibition.status', $exhibition->id) }}"
                                                        class=" btn {{ $exhibition->status == 'publish' ? 'btn btn-warning' : 'btn btn-success' }}">{{ $exhibition->status == 'publish' ? 'Draft' : 'Publish' }}</a>
                                                    <a href="{{ route('backend.exhibition.trash', $exhibition->id) }}"
                                                        class=" btn btn-sm btn-warning">Trash</a>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"
                        tabindex="0">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="text-center">Draft exhibitions</h4>
                            </div>
                            <div class="card-body">
                                <table class=" table">
                                    <thead class="text-center">
                                      <tr>
                                        <th>Id</th>
                                        <th>Photo</th>
                                        <th>Material</th>
                                        <th>Ref No</th>
                                        <th>Size</th>
                                        <th>Price</th>
                                        <th>Sale Price</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="table text-center">

                                    @foreach ($draftExhibitions as $exhibition)
                                        <tr>
                                            <td>{{ $exhibition->id }}</td>
                                            <td>
                                                <img src="{{ asset('storage/exhibition/' . $exhibition->photo) }}" width="80px"
                                                    alt="" style="padding: 0!important">
                                            </td>
                                            <td>{{ $exhibition->material }}</td>
                                            <td>{{ $exhibition->ref_no }}</td>
                                            <td>{{ $exhibition->size }}</td>
                                            <td>{{ $exhibition->price }}</td>
                                            <td>{{ $exhibition->sale_price }}</td>
                                                <td class="td_btn">

                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#myModal"
                                                        onclick="updatedata('{{ $exhibition->id }}','{{ $exhibition->title }}','{{ $exhibition->description }}','{{ $exhibition->price }}','{{ $exhibition->sale_price }}')"
                                                        class="btn btn-sm btn-info">Edit</a>
                                                    <a href="{{ route('backend.exhibition.status', $exhibition->id) }}"
                                                        class=" btn {{ $exhibition->status == 'publish' ? 'btn btn-warning' : 'btn btn-success' }}">{{ $exhibition->status == 'publish' ? 'Draft' : 'Publish' }}</a>
                                                    <a href="{{ route('backend.exhibition.trash', $exhibition->id) }}"
                                                        class="btn btn-sm btn-warning">Trash</a>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab"
                        tabindex="0">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="text-center">Trashed exhibitions</h4>
                            </div>
                            <div class="card-body">
                                <table class=" table">
                                    <thead class="text-center">
                                      <tr>
                                        <th>Id</th>
                                        <th>Photo</th>
                                        <th>Material</th>
                                        <th>Ref No</th>
                                        <th>Size</th>
                                        <th>Price</th>
                                        <th>Sale Price</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="table text-center">

                                    @foreach ($trashedExhibitions as $exhibition)
                                        <tr>
                                            <td>{{ $exhibition->id }}</td>
                                            <td>
                                                <img src="{{ asset('storage/exhibition/' . $exhibition->photo) }}" width="80px"
                                                    alt="" style="padding: 0!important">
                                            </td>
                                            <td>{{ $exhibition->material }}</td>
                                            <td>{{ $exhibition->ref_no }}</td>
                                            <td>{{ $exhibition->size }}</td>
                                            <td>{{ $exhibition->price }}</td>
                                            <td>{{ $exhibition->sale_price }}</td>
                                                <td class="td_btn">
                                                    <a href="{{ route('backend.exhibition.reStore', $exhibition->id) }}"
                                                        class="btn btn-sm btn-success">Restore</a>

                                                    <form action="{{ route('backend.exhibition.delete', $exhibition->id) }}"
                                                        method="POST" class="delete_form">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger"
                                                            onclick="return confirm('Are you Sure to Delete?')">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
<script>
    function updatedata(id, title, description,price,sale_price) {
        $("#id").val(id);
        $("#title").val(title);
        $("#description").val(description);
        $("#price").val(price);
        $("#sale_price").val(sale_price);
    }
</script>
<!-- sample modal content -->
<div id="myModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Edit Work Info</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('backend.exhibition.update',$exhibition->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class=" form-group">
                      <b>Name:</b>
                      <input type="text" name="title" id="title" class=" form-control" placeholder="Enter Frame Name">
                      <input type="hidden" name="id" id="id" class=" form-control" placeholder="Enter Frame Name">
                    </div>
                    <div class="form-group">
                      <b>Price:</b>
                      <input type="number" name="price" id="price" class=" form-control" placeholder="Enter Frame Price">
                    </div>
                    <div class=" form-group">
                      <b>Sale Price:</b>
                      <input type="number" name="sale_price" id="sale_price" class=" form-control" placeholder="Enter Sale Price">
                    </div>
                    <div class=" form-group">
                      <b>Description:</b>
                      <textarea name="description" id="description" class="form-control" rows="7"></textarea>
                    </div>
                    <div class=" form-group">
                      <b>Photo:</b>
                      <input type="file" name="photo" class=" form-control">
                    </div>               
                    <button type="submit" name="submit" class="btn btn-primary mt-3">Submit</button>
                  </form>
            </div>
            {{-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary waves-effect waves-light">Save changes</button>
            </div> --}}
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->