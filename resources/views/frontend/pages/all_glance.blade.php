@extends('layouts.frontend.master')
@section('content')
{{-- bradcrump start --}}
<div class="page-title text-center">
  <div class="contact_tag1 text-center text-bold">Works At A Glance</div>
  <hr class="hr_for_all">
</div>
{{-- bradcrump end --}}
<section class="all_glance_area clearfix" id="team">
  <div class="container">

      <div class="row">
          <!-- Single Team Member -->
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
          </div>

      </div>
  </div>
</section>

@endsection