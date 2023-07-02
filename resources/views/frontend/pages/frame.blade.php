@extends('layouts.frontend.master')
@section('content')
{{-- bradcrump start --}}
<div class="page-title text-center">
    <div class="contact_tag1 text-center text-bold">Our Best Frames</div>
    <hr class="hr_for_all">
</div>
{{-- bradcrump end --}}
<section class="frame_area clearfix" id="team">
  <div class="container">

      <div class="row">
          <!-- Single Team Member -->
          @foreach ($frames as $frame)
          <div class="col-12 col-sm-6 col-lg-4">
            <div class="our-team ">
                <div class="team_img">
                    <img src="{{ url('storage/frame/'.$frame->photo) }}" alt="chef-1">
                </div>
                <div class="team-content text-left">
                  <div class="at_a_glance_tag1">{{ $frame->name }}</div>
                  <div class="at_a_glance_tag2">Material: <span style="font-weight: bold">{{ $frame->material }}</span></div>
                  <div class="at_a_glance_tag3">Ref No:{{ $frame->ref_no }}</div>
                  <div class="at_a_glance_tag3">Size: {{ $frame->size }} Inches</div>
              </div>
              <a href="">
                  <div class="buy_frame">
                      <div class="buy_frame_content text-center col-md-12">
                          buy now
                      </div>
                  </div>
              </a>

            </div>
        </div>
          @endforeach
          {{-- <div class="col-12 col-sm-6 col-lg-4">
              <div class="our-team ">
                  <div class="team_img">
                      <img src="{{ asset('frontend/images/glance/image 2.png') }}" alt="chef-1">

                  </div>
                  <div class="team-content text-left">
                    <div class="at_a_glance_tag1">Classic Wooden Build</div>
                    <div class="at_a_glance_tag2">Material: <span style="font-weight: bold">Wood</span></div>
                    <div class="at_a_glance_tag3">Ref No:6634</div>
                    <div class="at_a_glance_tag3">Size: 40 x 20 Inches</div>
                </div>
                <a href="">
                    <div class="buy_frame">
                        <div class="buy_frame_content text-center col-md-12">
                            buy now
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
                      <div class="at_a_glance_tag1">Classic Wooden Build</div>
                      <div class="at_a_glance_tag2">Material: <span style="font-weight: bold">Wood</span></div>
                      <div class="at_a_glance_tag3">Ref No:6634</div>
                      <div class="at_a_glance_tag3">Size: 40 x 20 Inches</div>
                  </div>
                  <a href="">
                      <div class="buy_frame">
                          <div class="buy_frame_content text-center col-md-12">
                              buy now
                          </div>
                      </div>
                  </a>
              </div>
          </div> --}}

      </div>
      <div class="row justify-content-center">
        <div class="mt-3">
            {{ $frames->links() }}
        </div>
    </div>
  </div>
</section>

@endsection