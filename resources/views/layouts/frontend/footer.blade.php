<!-- ##### Footer Area Start ##### -->
<footer class="footer-area bg-img">
    <div class="container">
        <div class="footer_upper_part">
            <div class="footer_border">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="footer_logo">
                            <img width="60px" src="{{ url('storage/general_info/' . $data->footer_logo) }}"
                                alt="{{ $data->footer_logo }}">

                        </div>
                        <div class="footer_des">
                            <h5>Cezanne</h5>
                            Korem ipsum dolor sit amet, consectetur adipiscing elit. Korem ipsum dolor sit amet,
                            consectetur
                            adipiscing elit.Korem ipsum dolor sit amet, consectetur adipiscing elit.
                        </div>

                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="quick_contact">
                            <h5>Quick Contact</h5>
                            <div class="footer_menu_link">
                                <a href="{{ route('all_works') }}">Works</a>
                                <a href="{{ route('frame') }}">Frame</a>
                                <a href="{{ route('gallery') }}">Gallery</a>
                                <a href="{{ route('all_blogs') }}">Blog</a>
                                <a href="{{ route('privacy') }}">Privacy Policy</a>
                                <a href="{{ route('terms_and_condition') }}">Terms and Condition</a>
                                <a href="{{ route('return_policy') }}">Return Policy</a>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="quick_contact">
                            <h5>Contact Me</h5>
                            <div class="footer_menu_link">
                                <a href="mailto:{{ $data->email }}"><i class="fa fa-envelope" aria-hidden="true"></i><span
                                        class="contact_info">{{ $data->email }}</span></a>
                                <a href="tel:{{ $data->phone }}"><i class="fa fa-phone" aria-hidden="true"></i><span
                                        class="contact_info">{{ $data->phone }}</span></a>
                                <a href="#" class="">
                                    <table>
                                        <tr>
                                            <td><i class="fa fa-map-marker location" aria-hidden="true"></i></td>
                                            <td class="add_info">{{ $data->address }}</td>
                                        </tr>
                                    </table>
                                </a>
                            </div>
                            <div class="social_link">
                                <a href="{{ $data->facebook }}" class="facebook"><i class="fa fa-facebook"
                                        aria-hidden="true"></i></a>
                                <a href="{{ $data->instragram }}"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="{{ $data->linkedin }}"><i class="fa-brands fa-linkedin-in" aria-hidden="true"></i></a>
                                <a href="{{ $data->youtube }}" class="youtube"><i class="fa fa-youtube-play"
                                        aria-hidden="true"></i></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="footer_lower_part">
        <div class="container">
            <div class="f_border_bottom">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="subscribe">Subscribe, For Weekly Updates</div>
                    </div>
                    <div class="col-lg-6">
                        <div class="footer_input_field">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control footer_input" placeholder="Enter Your Email*">
                                <a href="" class="input-group-text footer_signup text-uppercase"
                                    id="basic-addon2">SignUp
                                    Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="copyright">
                    &copy; Copyright reserved Cezanne. Designed By <a href="https://www.techdynobd.com/"
                        class="tdbd_url">Techdyno BD
                        Ltd</a> All Rights Reserved
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ##### Footer Area End ##### -->
