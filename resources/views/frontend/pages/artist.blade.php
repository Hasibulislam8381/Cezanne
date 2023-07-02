@extends('layouts.frontend.master')
@include('frontend.banner')
@section('content')
    <div class="artist_page">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="box_shadow" >
                        <div class="img_body">
                            <img src="{{ asset('frontend/images/team-img/juli.png') }}" class="card-img-top rounded-circle"
                                alt="...">
                            <div class="card-body">
                                <h5 style="color: #FB8601" class="card-title">Jean-Antoine Watteau</h5>
                                <p class="card-text">Watteau (1684–1721) was arguably the greatest
                                    French painter of the 18th-century, a transition
                                    figure between Baroque art and the Roccoco
                                    style that followed. He emphasized color
                                    movement, structuring his compositions
                                    that they almost resembled theater scenes
                                    it was the atmospheric quality of his work
                                    that would become highly influential for a
                                    rtists like J.M.W Turner and the Impressts.</p>
                                <p style="color:#333333" class="text-footer">Jean-Antoine Watteau, The Shop
                                    Sign of Gersaint, (1720–21)</p>

                            </div>

                        </div>
                        <div class="filter-price">
                            <div class="filter_border">
                                <div style="color: black" class="filter">Filter</div>
                            </div>


                            <div class="select-price">
                                <p style="color: black">price </p>
                                <div class="select">
                                    <select style="border:none" name="" id="">
                                        <option value=""></option>
                                        <option value=""></option>
                                        <option value=""></option>
                                    </select>
                                </div>

                            </div>


                        </div>
                        <div class="">
                            <div class="best_work">Best Work</div>
                            <img src="{{ asset('frontend/images/team-img/rectangle.png') }}" class="rectangle-img"
                                alt="...">
                        </div>
                        <div class="artist_icon">
                            <i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-sharp fa-solid fa-star"></i>
                        </div>
                    </div>
                </div>
                    <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                        <section class=" clearfix" id="team">
                            <div class="container">

                                <div class="row">
                                    <!-- Single Team Member -->
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                        <div class="our-team ">
                                            <div class="team_img">
                                                <img src="{{ asset('frontend/images/glance/image 2.png') }}" alt="chef-1">
                                            </div>
                                            <div class="team-content text-left">
                                                <div class="at_a_glance_tag1">Afro Collage A</div>
                                                <div class="at_a_glance_tag2">Artist Name: <span
                                                        style="font-weight: bold">Mrs. Naieem</span>
                                                </div>
                                                <div class="at_a_glance_tag2">Medium: <span
                                                        style="font-weight: bold">Paint</span></div>
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
                                    <div class="col-12 col-sm-6  col-md-6 col-lg-6">
                                        <div class="our-team ">
                                            <div class="team_img">
                                                <img src="{{ asset('frontend/images/glance/image 2.png') }}" alt="chef-1">

                                            </div>
                                            <div class="team-content text-left">
                                                <div class="at_a_glance_tag1">Afro Collage A</div>
                                                <div class="at_a_glance_tag2">Artist Name: <span
                                                        style="font-weight: bold">Mrs. Naieem</span>
                                                </div>
                                                <div class="at_a_glance_tag2">Medium: <span
                                                        style="font-weight: bold">Paint</span></div>
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
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="our-team ">
                                            <div class="team_img">
                                                <img src="{{ asset('frontend/images/glance/image 2.png') }}"
                                                    alt="chef-1">

                                            </div>
                                            <div class="team-content text-left">
                                                <div class="at_a_glance_tag1">Afro Collage A</div>
                                                <div class="at_a_glance_tag2">Artist Name: <span
                                                        style="font-weight: bold">Mrs. Naieem</span>
                                                </div>
                                                <div class="at_a_glance_tag2">Medium: <span
                                                        style="font-weight: bold">Paint</span></div>
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
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="our-team ">
                                            <div class="team_img">
                                                <img src="{{ asset('frontend/images/glance/image 2.png') }}"
                                                    alt="chef-1">

                                            </div>
                                            <div class="team-content text-left">
                                                <div class="at_a_glance_tag1">Afro Collage A</div>
                                                <div class="at_a_glance_tag2">Artist Name: <span
                                                        style="font-weight: bold">Mrs. Naieem</span>
                                                </div>
                                                <div class="at_a_glance_tag2">Medium: <span
                                                        style="font-weight: bold">Paint</span></div>
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
                        </section>
                </div>
            </div>
        </div>
    </div>
@endsection
