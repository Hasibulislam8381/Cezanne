<!-- ##### Works Area Start ##### -->
<section class="our_services_area relative map-before">
    <div class="container">

        <div class="text-center">
            <div class="all_headline">Works</div>
        </div>


        <div class="row">
            @foreach ($works as $work)
            <div class="col-12 col-md-6 col-lg-4">
                <!-- Content -->
                <div class="service_single_content text-center wow fadeInUp" data-wow-delay="0.2s">

                    <div class="serv_icon">
                        <img src="{{ url('storage/work/' .$work->photo) }}" alt="">
                    </div>
                    <div class="service-content text-center">
                        <div class="artist">
                            {{ $work->name }}
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            {{-- <div class="col-12 col-md-6 col-lg-4">
                <!-- Content -->
                <div class="service_single_content text-center wow fadeInUp" data-wow-delay="0.2s">

                    <div class="serv_icon">
                        <img src="{{ asset('frontend/images/works/image 3.png') }}" alt="">
                    </div>
                    <div class="service-content text-center">
                        <div class="artist">
                            Artists
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <!-- Content -->
                <div class="service_single_content text-center wow fadeInUp" data-wow-delay="0.2s">

                    <div class="serv_icon">
                        <img src="{{ asset('frontend/images/works/image 2.png') }}" alt="">
                    </div>
                    <div class="service-content text-center">
                        <div class="artist">
                            Artists
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <!-- Content -->
                <div class="service_single_content text-center wow fadeInUp" data-wow-delay="0.2s">

                    <div class="serv_icon">
                        <img src="{{ asset('frontend/images/works/image 4.png') }}" alt="">
                    </div>
                    <div class="service-content text-center">
                        <div class="artist">
                            Artists
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <!-- Content -->
                <div class="service_single_content text-center wow fadeInUp" data-wow-delay="0.2s">

                    <div class="serv_icon">
                        <img src="{{ asset('frontend/images/works/image 3.png') }}" alt="">
                    </div>
                    <div class="service-content text-center">
                        <div class="artist">
                            Artists
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <!-- Content -->
                <div class="service_single_content text-center wow fadeInUp" data-wow-delay="0.2s">

                    <div class="serv_icon">
                        <img src="{{ asset('frontend/images/works/image 2.png') }}" alt="">
                    </div>
                    <div class="service-content text-center">
                        <div class="artist">
                            Artists
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
        <div>
          <a href="{{ route('all_works') }}" class="works_btn">All Works</a>
        </div>
    </div>
</section>
<!-- ##### Works Area Start ##### -->
