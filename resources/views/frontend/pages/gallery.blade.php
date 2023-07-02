@extends('layouts.frontend.master')
@section('content')
    {{-- bradcrump start --}}
    <div class="page-title text-center">
        <div class="contact_tag1 text-center text-bold">Product Gallery</div>
        <hr class="hr_for_all">
    </div>
    {{-- bradcrump end --}}
    <section class="gallery_area">
        <div class="container">
            <div class="row">
                <div class="gallery">
                    @foreach ($products as $product)
                    <div class="col-lg-4">
                        <a href="{{ url('storage/product/' .$product->photo)}}" class="big">
                            <img src="{{ url('storage/product/' .$product->photo) }}" alt="" title="Image 1">
                        </a>
                    </div>
                    @endforeach

                    {{-- <div class="col-lg-4">
                        <a href="{{ asset('frontend/images/works/image2.png') }}" class="big">
                            <img src="{{ asset('frontend/images/works/image2.png') }}" alt="" title="Image 2">
                        </a>
                    </div>

                    <div class="col-lg-4">
                        <a href="{{ asset('frontend/images/works/image3.png') }}" class="big">
                            <img src="{{ asset('frontend/images/works/image3.png') }}" alt="" title="Image 3">
                        </a>
                    </div>

                    <div class="col-lg-4">
                        <a href="{{ asset('frontend/images/blog/image1.png') }}" class="big">
                            <img src="{{ asset('frontend/images/blog/image1.png') }}" alt="" title="Image 4">
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="{{ asset('frontend/images/blog/image2.png') }}" class="big">
                            <img src="{{ asset('frontend/images/blog/image2.png') }}" alt="" title="Image 4">
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="{{ asset('frontend/images/blog/image3.png') }}" class="big">
                            <img src="{{ asset('frontend/images/blog/image3.png') }}" alt="" title="Image 4">
                        </a>
                    </div> --}}

                </div>
            </div>
            <div class="row justify-content-center">
                <div class="mt-3">
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </section>
@endsection
