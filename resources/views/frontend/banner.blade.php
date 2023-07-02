<!-- ##### Welcome Area Start ##### -->

<section class="home-slider">
    <div class="flexslider">
        <ul class="slides">
            <div class="row">
                <div class="banner_slides owl-carousel">

                    @foreach ($banner as $banners)
                    <div class="col-md-12">
                        <img src="{{ asset('storage/banner/' . $banners->banner_image) }}" alt="Slider 1" />
                        <div class="slider-content">
                            <div class="container">
                                <div class="slider-text">
                                    <h1>{{ $banners->banner_head }}</h1>
                                    <p>{{ $banners->banner_des }}</p>
                                    <center><a class="buy" href="#">Buy Now</a></center>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                
               
                </div>
            </div>





        </ul>
    </div>
</section>
<!-- ##### Welcome Area End ##### -->
