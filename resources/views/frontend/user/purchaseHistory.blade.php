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
                    <table class="table">
                      <thead>
                        <tr class="purchase_th">
                          <th>Code</th>
                          <th>Date</th>
                          <th>Amount</th>
                          <th>Delivery Status</th>
                          <th>Payment Status</th>
                          <th>Options</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="purchase_td">
                          <td>asf</td>
                          <td>asf</td>
                          <td>asf</td>
                          <td>asf</td>
                          <td>asf</td>
                          <td>asf</td>
                        </tr>
                      </tbody>
                    </table>


                  </div>

                </div>
            </div>
        </div>
    </div>
@endsection
