@extends('layouts.frontend.master')
@section('content')
<div class="page-title text-center">
  <div class="contact_tag1 text-center text-bold">Blog Details</div>
  <hr class="hr_for_all">
</div>
  <section class="blog_details_area relative map-before">
    <div class="container">
      <div class="row">
        <div class="blog_details_row">          
          <div class="col-lg-8">
            <div class="blog_details_content text-justify">
              {{ $blogs->description }}
            </div>
            <div class="blog_details_date">
              <i class="fa-solid fa-calendar-days"></i>
              {{ $blogs->date }}
            </div>
          </div>
          <div class="col-lg-4">
            <img src="{{ url( 'storage/blog/' .$blogs->photo) }}" class="blog_details_img" alt="">
          </div>
          
        </div>
      </div>
    </div>
  </section>
@endsection