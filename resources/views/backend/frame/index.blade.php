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
                                <h4 class="text-center">Active frame</h4>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead class="text-center">
                                        <tr>
                                            <th>Id</th>
                                            <th>Photo</th>
                                            <th>Name</th>
                                            <th>Material</th>
                                            <th>Ref No</th>
                                            <th>Size</th>
                                            <th>Price</th>
                                            <th>Sale Price</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table text-center">

                                        @foreach ($activeFrames as $frame)
                                            <tr>
                                                <td>{{ $frame->id }}</td>
                                                <td>
                                                    <img src="{{ asset('storage/frame/' . $frame->photo) }}" width="80px"
                                                        alt="" style="padding: 0!important">
                                                </td>
                                                <td>{{ $frame->name }}</td>
                                                <td>{{ $frame->material }}</td>
                                                <td>{{ $frame->ref_no }}</td>
                                                <td>{{ $frame->size }}</td>
                                                <td>{{ $frame->price }}</td>
                                                <td>{{ $frame->sale_price }}</td>
                                                <td class="td_btn">

                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#myModal"
                                                        onclick="updatedata('{{ $frame->id }}','{{ $frame->name }}','{{ $frame->material }}','{{ $frame->ref_no }}','{{ $frame->size }}','{{ $frame->price }}','{{ $frame->sale_price }}')"
                                                        class="btn btn-sm btn-info">Edit</a>
                                                    <a href="{{ route('backend.frame.status', $frame->id) }}"
                                                        class=" btn {{ $frame->status == 'publish' ? 'btn btn-warning' : 'btn btn-success' }}">{{ $frame->status == 'publish' ? 'Draft' : 'Publish' }}</a>
                                                    <a href="{{ route('backend.frame.trash', $frame->id) }}"
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
                                <h4 class="text-center">Draft Frames</h4>
                            </div>
                            <div class="card-body">
                                <table class=" table">
                                    <thead class="text-center">
                                      <tr>
                                        <th>Id</th>
                                        <th>Photo</th>
                                        <th>Name</th>
                                        <th>Material</th>
                                        <th>Ref No</th>
                                        <th>Size</th>
                                        <th>Price</th>
                                        <th>Sale Price</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="table text-center">

                                    @foreach ($draftFrames as $frame)
                                        <tr>
                                            <td>{{ $frame->id }}</td>
                                            <td>
                                                <img src="{{ asset('storage/frame/' . $frame->photo) }}" width="80px"
                                                    alt="" style="padding: 0!important">
                                            </td>
                                            <td>{{ $frame->name }}</td>
                                            <td>{{ $frame->material }}</td>
                                            <td>{{ $frame->ref_no }}</td>
                                            <td>{{ $frame->size }}</td>
                                            <td>{{ $frame->price }}</td>
                                            <td>{{ $frame->sale_price }}</td>
                                                <td class="td_btn">

                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#myModal"
                                                        onclick="updatedata('{{ $frame->id }}','{{ $frame->name }}','{{ $frame->material }}','{{ $frame->ref_no }}','{{ $frame->size }}','{{ $frame->price }}','{{ $frame->sale_price }}')"
                                                        class="btn btn-sm btn-info">Edit</a>
                                                    <a href="{{ route('backend.frame.status', $frame->id) }}"
                                                        class=" btn {{ $frame->status == 'publish' ? 'btn btn-warning' : 'btn btn-success' }}">{{ $frame->status == 'publish' ? 'Draft' : 'Publish' }}</a>
                                                    <a href="{{ route('backend.frame.trash', $frame->id) }}"
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
                                <h4 class="text-center">Trashed frames</h4>
                            </div>
                            <div class="card-body">
                                <table class=" table">
                                    <thead class="text-center">
                                      <tr>
                                        <th>Id</th>
                                        <th>Photo</th>
                                        <th>Name</th>
                                        <th>Material</th>
                                        <th>Ref No</th>
                                        <th>Size</th>
                                        <th>Price</th>
                                        <th>Sale Price</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="table text-center">

                                    @foreach ($trashedFrames as $frame)
                                        <tr>
                                            <td>{{ $frame->id }}</td>
                                            <td>
                                                <img src="{{ asset('storage/frame/' . $frame->photo) }}" width="80px"
                                                    alt="" style="padding: 0!important">
                                            </td>
                                            <td>{{ $frame->name }}</td>
                                            <td>{{ $frame->material }}</td>
                                            <td>{{ $frame->ref_no }}</td>
                                            <td>{{ $frame->size }}</td>
                                            <td>{{ $frame->price }}</td>
                                            <td>{{ $frame->sale_price }}</td>
                                                <td class="td_btn">
                                                    <a href="{{ route('backend.frame.reStore', $frame->id) }}"
                                                        class="btn btn-sm btn-success">Restore</a>

                                                    <form action="{{ route('backend.frame.delete', $frame->id) }}"
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
    function updatedata(id, name, material,ref_no,size,price,sale_price) {
        $("#id").val(id);
        $("#name").val(name);
        $("#material").val(material);
        $("#ref_no").val(ref_no);
        $("#size").val(size);
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
                <form action="{{ route('backend.frame.update',$frame->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class=" form-group">
                      <b>Name:</b>
                      <input type="text" name="name" id="name" class=" form-control" placeholder="Enter Frame Name">
                      <input type="hidden" name="id" id="id" class=" form-control" placeholder="Enter Frame Name">
                    </div>
                    <div class=" form-group">
                      <b>Material:</b>
                      <input type="text" name="material" id="material" class=" form-control" placeholder="Enter Frame Material">
                    </div>
                    <div class=" form-group">
                      <b>Ref No:</b>
                      <input type="text" name="ref_no" id="ref_no" class=" form-control" placeholder="Enter Frame Ref No">
                    </div>
                    <div class=" form-group">
                      <b>Size:</b>
                      <input type="text" name="size" id="size" class=" form-control" placeholder="Enter Frame Size">
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