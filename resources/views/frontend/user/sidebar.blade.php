<div class="col-lg-3 col-md-4 col-sm-12 col-12">
  <div class="box_shadow">
      <div class="img_body">
          <img src="{{ asset('frontend/images/team-img/juli.png') }}" class="card-img-top rounded-circle"
              alt="...">
          <div class="card-body">
              <div>User Name</div>
              <div class="user_email">imran@gmail.com</div>
          </div>
          <hr>

      </div>
      <div class="user_info">
          <div class="user_info_a">
            <a href="{{ route('user_dashboard') }}">
              <div class="user_dashboard">
                  <i class="fa-solid fa-house"></i>Dashboard
              </div>
          </a>
          </div>
          <div class="user_info_a">
            <a href="{{ route('purchaseHistory') }}">
              <div class="user_dashboard">
                  <i class="fa-regular fa-calendar-days"></i> Purchase History
              </div>
          </a>
          </div>
          <div class="user_info_a">
            <a href="{{ route('wishlist') }}">
              <div class="user_dashboard">
                  <i class="fa-solid fa-heart"></i> Wishlist
              </div>
          </a>
          </div>
          <div class="user_info_a">
            <a href="{{ route('user_profile') }}">
              <div class="user_dashboard">
                  <i class="fa-solid fa-user"></i> Manage Profile
              </div>
          </a>
          </div>
      </div>
  </div>
</div>