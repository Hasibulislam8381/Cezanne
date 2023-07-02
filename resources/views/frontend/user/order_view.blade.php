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
                    <div class="user_info_box_shadow">
                        <div class="card-header">
                            Order Summary
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td class="order_td">Order Date:</td>
                                            <td class="order_info_font_size">20-06-2023</td>
                                        </tr>
                                        <tr>
                                            <td class="order_td">Name:</td>
                                            <td class="order_info_font_size">Md Imran Hossain</td>
                                        </tr>
                                        <tr>
                                            <td class="order_td">Email:</td>
                                            <td class="order_info_font_size">imran@gmail.com</td>
                                        </tr>
                                        <tr>
                                            <td class="order_td">Shipping Address:</td>
                                            <td class="order_info_font_size">Jatrabari, Anyang-Si, Korea South</td>
                                        </tr>
                                    </tbody>

                                </table>
                            </div>
                            <div class="col-lg-6">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td class="order_td">Order Status:</td>
                                            <td class="order_info_font_size"><span style="background: yellow; padding:5px">Pending</span></td>
                                        </tr>
                                        <tr>
                                            <td class="order_td">Total Order Amount:</td>
                                            <td class="order_info_font_size">$360</td>
                                        </tr>
                                        <tr>
                                            <td class="order_td">Shipping:</td>
                                            <td class="order_info_font_size">Flat shipping rate</td>
                                        </tr>
                                        <tr>
                                            <td class="order_td">Payment Method:</td>
                                            <td class="order_info_font_size">Cash On Delivery</td>
                                        </tr>
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3">

                </div>
                <div class="col-lg-9 col-md-8 col-sm-12 col-12 mt-4">
                    <div class="user_info_box_shadow">
                        <div class="text-center">
                            Order Code:1560245789
                        </div>
                        <div class="card-header">
                            Order Details
                        </div>
                        <div class="row">
                            <table class="table">
                                <thead>
                                    <tr class="purchase_th">
                                        <th>SL</th>
                                        <th>Product Name</th>
                                        <th>Variation</th>
                                        <th>Quantity</th>
                                        <th>Delivery Type</th>
                                        <th>Price</th>
                                    </tr>

                                </thead>
                                <tbody>
                                    <tr class="purchase_td">
                                        <td>1</td>
                                        <td>Pran Toast Biscuit </td>
                                        <td>null</td>
                                        <td>4</td>
                                        <td>Home Delivery</td>
                                        <td>$10</td>
                                    </tr>
                                </tbody>

                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
