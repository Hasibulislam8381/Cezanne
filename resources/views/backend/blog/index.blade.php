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
                                <h4 class="text-center">Active Blogs</h4>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead class="text-center">
                                        <tr>
                                            <th>Id</th>
                                            <th>Photo</th>
                                            <th>Title</th>
                                            <th>Slug</th>
                                            <th>Description</th>
                                            <th>Published Date</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table">

                                        @foreach ($activeBlogs as $blog)
                                            <tr>
                                                <td>{{ $blog->id }}</td>
                                                <td>
                                                    <img src="{{ asset('storage/blog/' . $blog->photo) }}" width="80px"
                                                        alt="" style="padding: 0!important">
                                                </td>
                                                <td>{{ $blog->title }}</td>
                                                <td>{{ $blog->slug }}</td>
                                                <td>{{ Str::limit($blog->description, 20, '...') }}</td>
                                                <td>{{ $blog->date }}</td>
                                                <td>{{ $blog->status }}</td>
                                                <td class="td_btn">

                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#myModal"
                                                        onclick="updatedata('{{ $blog->id }}','{{ $blog->title }}','{{ $blog->description }}','{{ $blog->date }}','{{ $blog->slug }}')"
                                                        class="btn btn-sm btn-info">Edit</a>
                                                    <a href="{{ route('backend.blog.status', $blog->id) }}"
                                                        class=" btn {{ $blog->status == 'publish' ? 'btn btn-warning' : 'btn btn-success' }}">{{ $blog->status == 'publish' ? 'Draft' : 'Publish' }}</a>
                                                    <a href="{{ route('backend.blog.trash', $blog->id) }}"
                                                        class=" btn btn-sm btn-warning">Trash</a>


                                                    </form>
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
                                <h4 class="text-center">Draft blogs</h4>
                            </div>
                            <div class="card-body">
                                <table class=" table">
                                    <thead class="text-center">
                                        <tr>
                                            <th>Id</th>
                                            <th>Photo</th>
                                            <th>Title</th>
                                            <th>Slug</th>
                                            <th>Description</th>
                                            <th>Published Date</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table">

                                        @foreach ($draftBlogs as $blog)
                                            <tr>
                                                <td>{{ $blog->id }}</td>
                                                <td>
                                                    <img src="{{ asset('storage/blog/' . $blog->photo) }}" width="80px"
                                                        alt="">
                                                </td>
                                                <td>{{ $blog->title }}</td>
                                                <td>{{ $blog->slug }}</td>
                                                <td>{{ Str::limit($blog->description, 20, '...') }}</td>
                                                <td>{{ $blog->date }}</td>
                                                <td>{{ $blog->status }}</td>
                                                <td class="td_btn">

                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#myModal"
                                                        onclick="updatedata('{{ $blog->id }}','{{ $blog->title }}','{{ $blog->description }}','{{ $blog->date }}','{{ $blog->slug }}')"
                                                        class="btn btn-sm btn-info">Edit</a>

                                                    <a href="{{ route('backend.blog.status', $blog->id) }}"
                                                        class=" btn {{ $blog->status == 'publish' ? 'btn btn-warning' : 'btn btn-success' }}">{{ $blog->status == 'publish' ? 'Draft' : 'Publish' }}</a>
                                                    <a href="{{ route('backend.blog.trash', $blog->id) }}"
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
                                <h4 class="text-center">Trashed blogs</h4>
                            </div>
                            <div class="card-body">
                                <table class=" table">
                                    <thead class="text-center">
                                        <tr>
                                            <th>Id</th>
                                            <th>Photo</th>
                                            <th>Title</th>
                                            <th>Slug</th>
                                            <th>Description</th>
                                            <th>Published Date</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table">

                                        @foreach ($trashedBlogs as $blog)
                                            <tr>
                                                <td>{{ $blog->id }}</td>
                                                <td>
                                                    <img src="{{ asset('storage/blog/' . $blog->photo) }}" width="80px"
                                                        alt="">
                                                </td>
                                                <td>{{ $blog->title }}</td>
                                                <td>{{ $blog->slug }}</td>
                                                <td>{{ Str::limit($blog->description, 20, '...') }}</td>
                                                <td>{{ $blog->date }}</td>
                                                <td>{{ $blog->status }}</td>
                                                <td class="td_btn">
                                                    <a href="{{ route('backend.blog.reStore', $blog->id) }}"
                                                        class="btn btn-sm btn-success">Restore</a>

                                                    <form action="{{ route('backend.blog.delete', $blog->id) }}"
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
    function updatedata(id, title, description,date,slug) {
        $("#id").val(id);
        $("#title").val(title);
        $("#description").val(description);
        $("#date").val(date);
        $("#slug").val(slug);
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
                <form action="{{ route('backend.blog.update',$blog->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class=" form-group">
                      <b>Name:</b>
                      <input type="text" name="title" id="title" class=" form-control" placeholder="Enter Frame Name">
                      <input type="hidden" name="id" id="id" class=" form-control" placeholder="Enter Frame Name">
                      <input type="hidden" name="slug" id="slug" class=" form-control" placeholder="Enter Frame Name">
                    </div>
                    <div class=" form-group">
                        <b>Date:</b>
                        <input type="date" name="date" id="date" class="form-control">
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