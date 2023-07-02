@extends('layouts.frontend.master')
@section('content')
    {{-- bradcrump start --}}
    <div class="page-title text-center">
        <div class="contact_tag1 text-center text-bold">All Blogs</div>
        <hr class="hr_for_all">
        <div class="contact_tag text-center text-bold"> Discover Art You Love From the World's Leading Online Gallery</div>
    </div>
    {{-- bradcrump end --}}
    <!-- ##### Works Area Start ##### -->
    <section class="all_blogs_area relative map-before">
        <div class="container">
            <div class="row">
                @foreach ($blogs as $blog)
                    <div class="col-12 col-md-6 col-lg-4">
                        <!-- Content -->
                        <a href="{{ route('blog_details',$blog->slug) }}">
                            <div class="service_single_content text-center wow fadeInUp" data-wow-delay="0.2s">

                                <div class="serv_icon">
                                    <img src="storage/blog/{{ $blog->photo }}" alt="">
                                </div>
                                <div class="blog_title">
                                    {{ $blog->title }}
                                </div>
                                <a href="{{ $blog->slug }}" class="blog_content text-center">See More</a>
                            </div>
                        </a>
                    </div>
                @endforeach
                {{-- <div class="col-12 col-md-6 col-lg-4">
                    <!-- Content -->
                    <div class="service_single_content text-center wow fadeInUp" data-wow-delay="0.2s">

                        <div class="serv_icon">
                            <img src="{{ asset('frontend/images/blog/image2.png') }}" alt="">
                        </div>
                        <div class="blog_title">
                            Global Perspectives
                        </div>
                        <a href="" class="blog_content text-center">See More</a>
                    </div>
                </div> --}}
                {{-- <div class="col-12 col-md-6 col-lg-4">
                    <!-- Content -->
                    <div class="service_single_content text-center wow fadeInUp" data-wow-delay="0.2s">

                        <div class="serv_icon">
                            <img src="{{ asset('frontend/images/blog/image3.png') }}" alt="">
                        </div>
                        <div class="blog_title">
                            The Other Art Fair
                        </div>
                        <a href="" class="blog_content text-center">See More</a>
                    </div>
                </div>
                <div class="col-12  col-md-6 col-lg-4">
                    <!-- Content -->
                    <div class="service_single_content text-center wow fadeInUp" data-wow-delay="0.2s">

                        <div class="serv_icon">
                            <img src="{{ asset('frontend/images/blog/image1.png') }}" alt="">
                        </div>
                        <div class="blog_title">
                            Art Makes the Home
                        </div>
                        <a href="" class="blog_content text-center">See More</a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Content -->
                    <div class="service_single_content text-center wow fadeInUp" data-wow-delay="0.2s">

                        <div class="serv_icon">
                            <img src="{{ asset('frontend/images/blog/image2.png') }}" alt="">
                        </div>
                        <div class="blog_title">
                            Art Makes the Home
                        </div>
                        <a href="" class="blog_content text-center">See More</a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Content -->
                    <div class="service_single_content text-center wow fadeInUp" data-wow-delay="0.2s">

                        <div class="serv_icon">
                            <img src="{{ asset('frontend/images/blog/image3.png') }}" alt="">
                        </div>
                        <div class="blog_title">
                            Art Makes the Home
                        </div>
                        <a href="" class="blog_content text-center">See More</a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Content -->
                    <div class="service_single_content text-center wow fadeInUp" data-wow-delay="0.2s">

                        <div class="serv_icon">
                            <img src="{{ asset('frontend/images/blog/image3.png') }}" alt="">
                        </div>
                        <div class="blog_title">
                            Art Makes the Home
                        </div>
                        <a href="" class="blog_content text-center">See More</a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Content -->
                    <div class="service_single_content text-center wow fadeInUp" data-wow-delay="0.2s">

                        <div class="serv_icon">
                            <img src="{{ asset('frontend/images/blog/image3.png') }}" alt="">
                        </div>
                        <div class="blog_title">
                            Art Makes the Home
                        </div>
                        <a href="" class="blog_content text-center">See More</a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Content -->
                    <div class="service_single_content text-center wow fadeInUp" data-wow-delay="0.2s">

                        <div class="serv_icon">
                            <img src="{{ asset('frontend/images/blog/image3.png') }}" alt="">
                        </div>
                        <div class="blog_title">
                            Art Makes the Home
                        </div>
                        <a href="" class="blog_content text-center">See More</a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Content -->
                    <div class="service_single_content text-center wow fadeInUp" data-wow-delay="0.2s">

                        <div class="serv_icon">
                            <img src="{{ asset('frontend/images/blog/image3.png') }}" alt="">
                        </div>
                        <div class="blog_title">
                            Art Makes the Home
                        </div>
                        <a href="" class="blog_content text-center">See More</a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Content -->
                    <div class="service_single_content text-center wow fadeInUp" data-wow-delay="0.2s">

                        <div class="serv_icon">
                            <img src="{{ asset('frontend/images/blog/image3.png') }}" alt="">
                        </div>
                        <div class="blog_title">
                            Art Makes the Home
                        </div>
                        <a href="" class="blog_content text-center">See More</a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Content -->
                    <div class="service_single_content text-center wow fadeInUp" data-wow-delay="0.2s">

                        <div class="serv_icon">
                            <img src="{{ asset('frontend/images/blog/image3.png') }}" alt="">
                        </div>
                        <div class="blog_title">
                            Art Makes the Home
                        </div>
                        <a href="" class="blog_content text-center">See More</a>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <!-- ##### Works Area Start ##### -->
@endsection
