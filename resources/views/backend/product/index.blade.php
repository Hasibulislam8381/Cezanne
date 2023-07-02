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
                                <h4 class="text-center">Active Products</h4>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead class="text-center">
                                        <tr>
                                            <th>Id</th>
                                            <th>Photo</th>
                                            <th>Title</th>
                                            <th>Slug</th>
                                            <th>Artist Name</th>
                                            <th>Medium</th>
                                            <th>Ref No</th>
                                            <th>Size</th>
                                            <th>Price</th>
                                            <th>Sale Price</th>
                                            <th>Description</th>
                                            <th>Additional Info</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table">

                                        @foreach ($activeProducts as $product)
                                            <tr>
                                                <td>{{ $product->id }}</td>
                                                <td>
                                                    <img src="{{ asset('storage/product/' . $product->photo) }}" width="80px"
                                                        alt="" style="padding: 0!important">
                                                </td>
                                                <td>{{ $product->title }}</td>
                                                <td>{{ $product->slug }}</td>
                                                <td>{{ $product->artist_name }}</td>
                                                <td>{{ $product->medium }}</td>
                                                <td>{{ $product->ref_no }}</td>
                                                <td>{{ $product->size }}</td>
                                                <td>{{ $product->price }}</td>
                                                <td>{{ $product->sale_price }}</td>
                                                <td>{{ Str::limit($product->description, 20, '...') }}</td>
                                                <td>{{ Str::limit($product->add_info, 20, '...') }}</td>
                                                <td class="td_btn">

                                                    <a href="{{ route('backend.product.edit', $product->id) }}"
                                                        class="btn btn-sm btn-info">Edit</a>
                                                    <a href="{{ route('backend.product.status', $product->id) }}"
                                                        class=" btn {{ $product->status == 'publish' ? 'btn btn-warning' : 'btn btn-success' }}">{{ $product->status == 'publish' ? 'Draft' : 'Publish' }}</a>
                                                    <a href="{{ route('backend.product.trash', $product->id) }}"
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
                                <h4 class="text-center">Draft products</h4>
                            </div>
                            <div class="card-body">
                                <table class=" table">
                                    <thead class="text-center">
                                      <tr>
                                        <th>Id</th>
                                        <th>Photo</th>
                                        <th>Title</th>
                                        <th>Slug</th>
                                        <th>Artist Name</th>
                                        <th>Medium</th>
                                        <th>Ref No</th>
                                        <th>Size</th>
                                        <th>Price</th>
                                        <th>Sale Price</th>
                                        <th>Description</th>
                                        <th>Additional Info</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="table">

                                    @foreach ($draftProducts as $product)
                                        <tr>
                                            <td>{{ $product->id }}</td>
                                            <td>
                                                <img src="{{ asset('storage/product/' . $product->photo) }}" width="80px"
                                                    alt="" style="padding: 0!important">
                                            </td>
                                            <td>{{ $product->title }}</td>
                                            <td>{{ $product->slug }}</td>
                                            <td>{{ $product->artist_name }}</td>
                                            <td>{{ $product->medium }}</td>
                                            <td>{{ $product->ref_no }}</td>
                                            <td>{{ $product->size }}</td>
                                            <td>{{ $product->price }}</td>
                                            <td>{{ $product->sale_price }}</td>
                                            <td>{{ Str::limit($product->description, 20, '...') }}</td>
                                            <td>{{ Str::limit($product->add_info, 20, '...') }}</td>
                                                <td class="td_btn">

                                                    <a href="{{ route('backend.product.edit', $product->id) }}"
                                                        class="btn btn-sm btn-info">Edit</a>
                                                    <a href="{{ route('backend.product.status', $product->id) }}"
                                                        class=" btn {{ $product->status == 'publish' ? 'btn btn-warning' : 'btn btn-success' }}">{{ $product->status == 'publish' ? 'Draft' : 'Publish' }}</a>
                                                    <a href="{{ route('backend.product.trash', $product->id) }}"
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
                                <h4 class="text-center">Trashed products</h4>
                            </div>
                            <div class="card-body">
                                <table class=" table">
                                    <thead class="text-center">
                                      <tr>
                                        <th>Id</th>
                                        <th>Photo</th>
                                        <th>Title</th>
                                        <th>Slug</th>
                                        <th>Artist Name</th>
                                        <th>Medium</th>
                                        <th>Ref No</th>
                                        <th>Size</th>
                                        <th>Price</th>
                                        <th>Sale Price</th>
                                        <th>Description</th>
                                        <th>Additional INfo</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="table">

                                    @foreach ($trashedProducts as $product)
                                        <tr>
                                            <td>{{ $product->id }}</td>
                                            <td>
                                                <img src="{{ asset('storage/product/' . $product->photo) }}" width="80px"
                                                    alt="" style="padding: 0!important">
                                            </td>
                                            <td>{{ $product->title }}</td>
                                            <td>{{ $product->slug }}</td>
                                            <td>{{ $product->artist_name }}</td>
                                            <td>{{ $product->medium }}</td>
                                            <td>{{ $product->ref_no }}</td>
                                            <td>{{ $product->size }}</td>
                                            <td>{{ $product->price }}</td>
                                            <td>{{ $product->sale_price }}</td>
                                            <td>{{ Str::limit($product->description, 20, '...') }}</td>
                                            <td>{{ Str::limit($product->add_info, 20, '...') }}</td>
                                                <td class="td_btn">
                                                    <a href="{{ route('backend.product.reStore', $product->id) }}"
                                                        class="btn btn-sm btn-success">Restore</a>

                                                    <form action="{{ route('backend.product.delete', $product->id) }}"
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
