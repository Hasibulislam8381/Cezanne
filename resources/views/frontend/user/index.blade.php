@extends('layouts.frontend.master')
@section('content')
    <div class="page-title text-center">
        <div class="contact_tag1 text-center text-bold">User Profile</div>
        <hr class="hr_for_all">
    </div>
    <div class="user_profile_page">
        <div class="container">
            <div class="row">
                @include('frontend.user.sidebar')
                <div class="col-lg-9 col-md-8 col-sm-12 col-12">
                    <div class="col-lg-6 pb-3">
                      <div class="user_info_box_shadow text-center">
                        Total Carts
                        <div>
                          0
                        </div>
                        <div>
                          <i class="fa-solid fa-cart-shopping"></i>
                          Carts
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 pb-3">
                      <div class="user_info_box_shadow text-center">
                        Total Wishlists
                        <div>
                          0
                        </div>
                        <div>
                          <i class="fa-solid fa-heart"></i>
                          Wishlist
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 pb-3">
                      <div class="user_info_box_shadow text-center">
                        Total Orders
                        <div>
                          0
                        </div>
                        <div>
                          <i class="fa-solid fa-box"></i>
                          Products Ordered
                        </div>
                      </div>
                      
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
