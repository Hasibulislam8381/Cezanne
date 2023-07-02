@extends('layouts.frontend.master')
@section('content')
    {{-- bradcrump start --}}
    <div class="page-title text-center">
        <div class="contact_tag1 text-center text-bold">All Works</div>
        <hr class="hr_for_all">
    </div>
    {{-- bradcrump end --}}
    <!-- ##### Works Area Start ##### -->
    <section class="all_works_area">
        <div class="container">

            <div class="row">
                @foreach ($works as $work)
                    <div class="col-12 col-md-6 col-lg-4">
                        <!-- Content -->
                        <div class="service_single_content text-center wow fadeInUp" data-wow-delay="0.2s">

                            <div class="serv_icon">
                                <img src="{{ url('storage/work/' . $work->photo) }}" alt="">
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
            <div class="row justify-content-center">
                <div class="mt-3">
                    {{ $works->links() }}
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Works Area Start ##### -->
@endsection
