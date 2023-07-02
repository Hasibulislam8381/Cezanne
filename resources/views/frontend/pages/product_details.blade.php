@extends('layouts.frontend.master')
@section('content')
    <div class="page-title text-center">
        <div class="contact_tag1 text-center text-bold">Afro Collage A</div>
        <hr class="hr_for_all">
    </div>
    <div class="product_page">
        <div class="container">
            <div class="single_product">
                <div class="row">
                    <div class="col-12 col-sm-12 col-lg-7 col-md-6">
                        <div class="">
                            <div class="team-content text-left">
                                <div class="product_title">{{ $product->title }}</div>
                                <div class="product_tag1">Artist Name: <span style="font-weight: bold">{{ $product->artist_name }}</span>
                                </div>
                                <div class="product_tag1">Medium: <span style="font-weight: bold">{{ $product->medium }}</span></div>
                                <div class="product_tag2">Ref No:{{ $product->ref_no }}</div>
                                <div class="product_tag2">Size: {{ $product->size }} Inches</div>
                            </div>
                            <div class="product_sh_des">
                                {{ $product->description }}
                            </div>
                            <div class="product_p_by_frame">
                                <a href="">
                                    <div class="buy_frame ml">
                                        <div class="buy_frame_content col-md-8">
                                            buy With frame:
                                        </div>
                                        <div class="buy_frame_content col-md-4">
                                            {{ $product->price }} BDT
                                        </div>
                                    </div>
                                </a>
                                <a href="">
                                    <div class="buy_frame ml">
                                        <div class="buy_frame_content col-md-8">
                                            buy Without frame:
                                        </div>
                                        <div class="buy_frame_content col-md-4">
                                            {{ $product->price_w_frame }} BDT
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-12 col-12">
                        <div class="product_image">
                            <img src="{{ url('storage/product/'.$product->photo) }}" class="product_p_img"
                                alt="chef-1">
                        </div>
                    </div>
                </div>
            </div>
            {{-- ----- --}}

            <section class="glance_area clearfix" id="team">
                <div class="container">
                    <div class="row">
                        <div class="text-center col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="all_headline">Related Products</div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <!-- Single Team Member -->
                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="our-team ">
                                <div class="team_img">
                                    <img src="{{ asset('frontend/images/glance/image 2.png') }}" alt="chef-1">
                                </div>
                                <div class="team-content text-left">
                                    <div class="at_a_glance_tag1">Afro Collage A</div>
                                    <div class="at_a_glance_tag2">Artist Name: <span style="font-weight: bold">Mrs.
                                            Naieem</span>
                                    </div>
                                    <div class="at_a_glance_tag2">Medium: <span style="font-weight: bold">Paint</span></div>
                                    <div class="at_a_glance_tag3">Ref No:6634</div>
                                    <div class="at_a_glance_tag3">Size: 40 x 20 Inches</div>
                                </div>
                                <a href="">
                                    <div class="buy_frame">
                                        <div class="buy_frame_content col-md-8">
                                            buy With frame:
                                        </div>
                                        <div class="buy_frame_content col-md-4">
                                            9000 BDT
                                        </div>
                                    </div>
                                </a>

                                <a href="">
                                    <div class="buy_frame">
                                        <div class="buy_frame_content col-md-8">
                                            buy Without frame:
                                        </div>
                                        <div class="buy_frame_content col-md-4">
                                            9000 BDT
                                        </div>
                                    </div>
                                </a>

                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="our-team ">
                                <div class="team_img">
                                    <img src="{{ asset('frontend/images/glance/image 2.png') }}" alt="chef-1">

                                </div>
                                <div class="team-content text-left">
                                    <div class="at_a_glance_tag1">Afro Collage A</div>
                                    <div class="at_a_glance_tag2">Artist Name: <span style="font-weight: bold">Mrs.
                                            Naieem</span>
                                    </div>
                                    <div class="at_a_glance_tag2">Medium: <span style="font-weight: bold">Paint</span></div>
                                    <div class="at_a_glance_tag3">Ref No:6634</div>
                                    <div class="at_a_glance_tag3">Size: 40 x 20 Inches</div>
                                </div>
                                <a href="">
                                    <div class="buy_frame">
                                        <div class="buy_frame_content col-md-8">
                                            buy With frame:
                                        </div>
                                        <div class="buy_frame_content col-md-4">
                                            9000 BDT
                                        </div>
                                    </div>
                                </a>
                                <a href="">
                                    <div class="buy_frame">
                                        <div class="buy_frame_content col-md-8">
                                            buy Without frame:
                                        </div>
                                        <div class="buy_frame_content col-md-4">
                                            9000 BDT
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="our-team ">
                                <div class="team_img">
                                    <img src="{{ asset('frontend/images/glance/image 2.png') }}" alt="chef-1">

                                </div>
                                <div class="team-content text-left">
                                    <div class="at_a_glance_tag1">Afro Collage A</div>
                                    <div class="at_a_glance_tag2">Artist Name: <span style="font-weight: bold">Mr.
                                            Naieem</span>
                                    </div>
                                    <div class="at_a_glance_tag2">Medium: <span style="font-weight: bold">Paint</span></div>
                                    <div class="at_a_glance_tag3">Ref No:6634</div>
                                    <div class="at_a_glance_tag3">Size: 40 x 20 Inches</div>
                                </div>
                                <a href="">
                                    <div class="buy_frame">
                                        <div class="buy_frame_content col-md-8">
                                            buy With frame:
                                        </div>
                                        <div class="buy_frame_content col-md-4">
                                            9000 BDT
                                        </div>
                                    </div>
                                </a>
                                <a href="">
                                    <div class="buy_frame">
                                        <div class="buy_frame_content col-md-8">
                                            buy Without frame:
                                        </div>
                                        <div class="buy_frame_content col-md-4">
                                            9000 BDT
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="our-team ">
                                <div class="team_img">
                                    <img src="{{ asset('frontend/images/glance/image 2.png') }}" alt="chef-1">
                                </div>
                                <div class="team-content text-left">
                                    <div class="at_a_glance_tag1">Afro Collage A</div>
                                    <div class="at_a_glance_tag2">Artist Name: <span style="font-weight: bold">Mrs.
                                            Naieem</span>
                                    </div>
                                    <div class="at_a_glance_tag2">Medium: <span style="font-weight: bold">Paint</span>
                                    </div>
                                    <div class="at_a_glance_tag3">Ref No:6634</div>
                                    <div class="at_a_glance_tag3">Size: 40 x 20 Inches</div>
                                </div>
                                <a href="">
                                    <div class="buy_frame">
                                        <div class="buy_frame_content col-md-8">
                                            buy With frame:
                                        </div>
                                        <div class="buy_frame_content col-md-4">
                                            9000 BDT
                                        </div>
                                    </div>
                                </a>

                                <a href="">
                                    <div class="buy_frame">
                                        <div class="buy_frame_content col-md-8">
                                            buy Without frame:
                                        </div>
                                        <div class="buy_frame_content col-md-4">
                                            9000 BDT
                                        </div>
                                    </div>
                                </a>

                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="our-team ">
                                <div class="team_img">
                                    <img src="{{ asset('frontend/images/glance/image 2.png') }}" alt="chef-1">

                                </div>
                                <div class="team-content text-left">
                                    <div class="at_a_glance_tag1">Afro Collage A</div>
                                    <div class="at_a_glance_tag2">Artist Name: <span style="font-weight: bold">Mrs.
                                            Naieem</span>
                                    </div>
                                    <div class="at_a_glance_tag2">Medium: <span style="font-weight: bold">Paint</span>
                                    </div>
                                    <div class="at_a_glance_tag3">Ref No:6634</div>
                                    <div class="at_a_glance_tag3">Size: 40 x 20 Inches</div>
                                </div>
                                <a href="">
                                    <div class="buy_frame">
                                        <div class="buy_frame_content col-md-8">
                                            buy With frame:
                                        </div>
                                        <div class="buy_frame_content col-md-4">
                                            9000 BDT
                                        </div>
                                    </div>
                                </a>
                                <a href="">
                                    <div class="buy_frame">
                                        <div class="buy_frame_content col-md-8">
                                            buy Without frame:
                                        </div>
                                        <div class="buy_frame_content col-md-4">
                                            9000 BDT
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="our-team ">
                                <div class="team_img">
                                    <img src="{{ asset('frontend/images/glance/image 2.png') }}" alt="chef-1">

                                </div>
                                <div class="team-content text-left">
                                    <div class="at_a_glance_tag1">Afro Collage A</div>
                                    <div class="at_a_glance_tag2">Artist Name: <span style="font-weight: bold">Mrs.
                                            Naieem</span>
                                    </div>
                                    <div class="at_a_glance_tag2">Medium: <span style="font-weight: bold">Paint</span>
                                    </div>
                                    <div class="at_a_glance_tag3">Ref No:6634</div>
                                    <div class="at_a_glance_tag3">Size: 40 x 20 Inches</div>
                                </div>
                                <a href="">
                                    <div class="buy_frame">
                                        <div class="buy_frame_content col-md-8">
                                            buy With frame:
                                        </div>
                                        <div class="buy_frame_content col-md-4">
                                            9000 BDT
                                        </div>
                                    </div>
                                </a>
                                <a href="">
                                    <div class="buy_frame">
                                        <div class="buy_frame_content col-md-8">
                                            buy Without frame:
                                        </div>
                                        <div class="buy_frame_content col-md-4">
                                            9000 BDT
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="text-center col-lg-12 col-md-12 col-sm-12 col-12 glance_works_btn ">
                    <div class="glance_btn">
                        <a href="#" class="works_btn">All Products</a>
                    </div>
                </div>
            </section>

        </div>
    </div>
@endsection
