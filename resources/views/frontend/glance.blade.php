<section class="glance_area clearfix" id="team">
    <div class="container">
        <div class="row">
            <div class="text-center col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="all_headline">Works At A Glance</div>
            </div>
        </div>
    </div>
    <div class="container">

        <div class="row">
            <!-- Single Team Member -->
            @foreach ($products as $product)
            <div class="col-12 col-sm-6 col-lg-4">
                <a href="{{ route('product',$product->slug) }}">
                    <div class="our-team">
                        <div class="team_img">
                            <img src="{{ url('storage/product/'.$product->photo) }}" alt="chef-1">
                        </div>
                        <div class="team-content text-left">
                            <div class="at_a_glance_tag1">{{ $product->title }}</div>
                            <div class="at_a_glance_tag2">Artist Name: <span style="font-weight: bold">{{ $product->artist_name }}</span>
                            </div>
                            <div class="at_a_glance_tag2">Medium: <span style="font-weight: bold">{{ $product->medium }}</span></div>
                            <div class="at_a_glance_tag3">Ref No:{{ $product->ref_no }}</div>
                            <div class="at_a_glance_tag3">Size: {{ $product->size }} Inches</div>
                        </div>
                        <a href="">
                            <div class="buy_frame">
                                <div class="buy_frame_content col-md-8">
                                    buy With frame:
                                </div>
                                <div class="buy_frame_content col-md-4">
                                    {{ $product->price }} BDT
                                </div>
                            </div>
                        </a>
    
                        <a href="">
                            <div class="buy_frame">
                                <div class="buy_frame_content col-md-8">
                                    buy Without frame:
                                </div>
                                <div class="buy_frame_content col-md-4">
                                    {{ $product->price_w_frame }} BDT
                                </div>
                            </div>
                        </a>
    
                    </div>
                </a>
            </div>
            @endforeach
            {{-- <div class="col-12 col-sm-6 col-lg-4">
                <a href="{{ route('product') }}">
                    <div class="our-team ">
                        <div class="team_img">
                            <img src="{{ asset('frontend/images/glance/image 2.png') }}" alt="chef-1">
    
                        </div>
                        <div class="team-content text-left">
                            <div class="at_a_glance_tag1">Afro Collage A</div>
                            <div class="at_a_glance_tag2">Artist Name: <span style="font-weight: bold">Mrs. Naieem</span>
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
                </a>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <a href="{{ route('product') }}">
                    <div class="our-team ">
                        <div class="team_img">
                            <img src="{{ asset('frontend/images/glance/image 2.png') }}" alt="chef-1">
    
                        </div>
                        <div class="team-content text-left">
                            <div class="at_a_glance_tag1">Afro Collage A</div>
                            <div class="at_a_glance_tag2">Artist Name: <span style="font-weight: bold">Mrs. Naieem</span>
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
                </a>
            </div> --}}

        </div>
    </div>
    <div class="text-center col-lg-12 col-md-12 col-sm-12 col-12 glance_works_btn ">
        <div class="glance_btn">
            <a href="{{ route('all_product') }}" class="works_btn">All Works</a>
        </div>
    </div>
</section>
