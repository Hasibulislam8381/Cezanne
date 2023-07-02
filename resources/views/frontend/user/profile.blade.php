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
                            Manage Profile
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-2">
                                <div class="col-lg-3">
                                    <label for="">Your Name</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" placeholder="" value="Md Imran Hossain">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-2">
                                <div class="col-lg-3">
                                    <label for="">Your Phone</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" placeholder="" value="1236548">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-2">
                                <div class="col-lg-3">
                                    <label for="">Your Password</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="password" class="form-control" placeholder="" value="1236548">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-2">
                                <div class="col-lg-3">
                                    <label for="">Confirm Password</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="password" class="form-control" placeholder="" value="1236548">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-2">
                                <div class="col-lg-3">
                                    <label for="">Your Photo</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="file" class="form-control" placeholder="" value="">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-2">
                                <div class="col-lg-3">
                                    <label for="">Your Address</label>
                                </div>
                                <div class="col-lg-9">
                                    <textarea name="" id="" class="form-control" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="text-center col-lg-12 col-md-12 col-sm-12 col-12 blog_works_btn">
                                <div class="glance_btn">
                                    <a href="" class="works_btn">Update Profile</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3">

                </div>
                <div class="col-lg-9 col-md-8 col-sm-12 col-12 mt-4">
                    <div class="user_info_box_shadow">
                        <div class="card-header">
                            Change Your Email
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-2">
                                <div class="col-lg-3">
                                    <label for="">Your Email</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="file" class="form-control" placeholder="" value="">
                                </div>
                            </div>
                            <div class="text-center col-lg-12 col-md-12 col-sm-12 col-12 blog_works_btn">
                              <div class="glance_btn">
                                  <a href="" class="works_btn">Update Email</a>
                              </div>
                          </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
