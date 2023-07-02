@extends('layouts.frontend.master')
@section('content')
{{-- bradcrump start --}}
<div class="page-title text-center">
    <div class="contact_tag1 text-center text-bold">Let's Have A Look</div>
    <hr class="hr_for_all">
</div>
{{-- bradcrump end --}}
    <section class="all_artist_area clearfix" id="team">
        <div class="container">
            <div class="row">
                <!-- Single Team Member -->
                @foreach ($exhibitions as $exhibition)
                <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                    <div class="team_img">
                        <img src="{{ url('storage/exhibition/'.$exhibition->photo) }}" alt="chef-1">
                    </div>
                    <a href="">
                        <div class="buy_frame buy_exhibition">
                            <div class="buy_frame_content buy_exhibition_content text-center col-md-12">
                                buy now
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
                
                {{-- <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                    <div class="team_img">
                        <img src="{{ asset('frontend/images/works/image 2.png') }}" alt="chef-1">
                    </div>
                    <a href="">
                        <div class="buy_frame buy_exhibition">
                            <div class="buy_frame_content buy_exhibition_content text-center col-md-12">
                                buy now
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                    <div class="team_img">
                        <img src="{{ asset('frontend/images/works/image 2.png') }}" alt="chef-1">
                    </div>
                    <a href="">
                        <div class="buy_frame buy_exhibition">
                            <div class="buy_frame_content buy_exhibition_content text-center col-md-12">
                                buy now
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                    <div class="team_img">
                        <img src="{{ asset('frontend/images/works/image 2.png') }}" alt="chef-1">
                    </div>
                    <a href="">
                        <div class="buy_frame buy_exhibition">
                            <div class="buy_frame_content buy_exhibition_content text-center col-md-12">
                                buy now
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                    <div class="team_img">
                        <img src="{{ asset('frontend/images/works/image 2.png') }}" alt="chef-1">
                    </div>
                    <a href="">
                        <div class="buy_frame buy_exhibition">
                            <div class="buy_frame_content buy_exhibition_content text-center col-md-12">
                                buy now
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                    <div class="team_img">
                        <img src="{{ asset('frontend/images/works/image 2.png') }}" alt="chef-1">
                    </div>
                    <a href="">
                        <div class="buy_frame buy_exhibition">
                            <div class="buy_frame_content buy_exhibition_content text-center col-md-12">
                                buy now
                            </div>
                        </div>
                    </a>
                </div> --}}
            </div>
            <div class="row justify-content-center">
                <div class="mt-3">
                    {{ $exhibitions->links() }}
                  </div>
            </div>
        </div>
    </section>
@endsection
