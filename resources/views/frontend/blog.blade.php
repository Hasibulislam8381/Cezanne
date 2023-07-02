<!-- ##### Works Area Start ##### -->
<section class="our_services_area relative map-before">
    <div class="container">

        <div class="text-center">
            <div class="all_headline">Blog</div>
        </div>
        <div class="blog_tag">
            Discover Art You Love From the World's Leading Online Gallery
        </div>


        <div class="row">
            @foreach ($blogs as $blog)
            <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                <!-- Content -->
                <a href="{{ route('blog_details',$blog->slug) }}">
                    <div class="service_single_content text-center wow fadeInUp" data-wow-delay="0.2s">

                        <div class="serv_icon">
                            <img src="storage/blog/{{ $blog->photo }}" alt="blog-photo">
                        </div>
                        <div class="blog_title">
                            {{ $blog->title }}
                        </div>
                        <a href="{{ $blog->slug }}" class="blog_content text-center">See More</a>
                    </div>
                </a>
            </div>                
            @endforeach
            {{-- <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                <!-- Content -->
                <a href="{{ route('blog_details') }}">
                    <div class="service_single_content text-center wow fadeInUp" data-wow-delay="0.2s">

                        <div class="serv_icon">
                            <img src="{{ asset('frontend/images/blog/image2.png') }}" alt="">
                        </div>
                        <div class="blog_title">
                            Global Perspectives
                        </div>
                        <a href="" class="blog_content text-center">See More</a>
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                <!-- Content -->
                <a href="{{ route('blog_details') }}">
                    <div class="service_single_content text-center wow fadeInUp" data-wow-delay="0.2s">

                        <div class="serv_icon">
                            <img src="{{ asset('frontend/images/blog/image3.png') }}" alt="">
                        </div>
                        <div class="blog_title">
                            The Other Art Fair
                        </div>
                        <a href="" class="blog_content text-center">See More</a>
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                <!-- Content -->
                <a href="{{ route('blog_details') }}">
                    <div class="service_single_content text-center wow fadeInUp" data-wow-delay="0.2s">

                        <div class="serv_icon">
                            <img src="{{ asset('frontend/images/blog/image1.png') }}" alt="">
                        </div>
                        <div class="blog_title">
                            Art Makes the Home
                        </div>
                        <a href="" class="blog_content text-center">See More</a>
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                <!-- Content -->
                <a href="{{ route('blog_details') }}">
                    <div class="service_single_content text-center wow fadeInUp" data-wow-delay="0.2s">

                        <div class="serv_icon">
                            <img src="{{ asset('frontend/images/blog/image2.png') }}" alt="">
                        </div>
                        <div class="blog_title">
                            Art Makes the Home
                        </div>
                        <a href="" class="blog_content text-center">See More</a>
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                <!-- Content -->
                <a href="{{ route('blog_details') }}">
                    <div class="service_single_content text-center wow fadeInUp" data-wow-delay="0.2s">

                        <div class="serv_icon">
                            <img src="{{ asset('frontend/images/blog/image3.png') }}" alt="">
                        </div>
                        <div class="blog_title">
                            Art Makes the Home
                        </div>
                        <a href="" class="blog_content text-center">See More</a>
                    </div>
                </a>
            </div> --}}
            <div class="text-center col-lg-12 col-md-12 col-sm-12 col-12 blog_works_btn">
                <div class="glance_btn">
                    <a href="{{ route('all_blogs') }}" class="works_btn">All Blogs</a>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- ##### Works Area Start ##### -->
