@extends('layouts.frontend.master')
@section('content')
    {{-- bradcrump start --}}
    <div class="page-title text-center">
        <div class="contact_tag1 text-center text-bold">Our Talented Artists</div>
        <hr class="hr_for_all">
    </div>
    {{-- bradcrump end --}}
    <section class="all_artist_area clearfix" id="team">
        <div class="container">
            <div class="row">
                <!-- Single Team Member -->

                @foreach ($artist as $artists)
                    <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                        <a href="" class="">
                            <div class="team_img">

                                <img src="{{ asset('storage/artist/' . $artists->artist_image) }}" alt="chef-1">

                            </div>
                            <div class="team-content artist_content text-center">

                                <div class="artist_tag1">{{ $artists->artist_name }}</div>

                                <div class="artist_tag2">{{ $artists->designation }}
                                </div>
                            </div>

                        </a>
                    </div>
                @endforeach


            </div>
        </div>
    </section>
@endsection
