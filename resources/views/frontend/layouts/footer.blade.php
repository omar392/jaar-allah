
    <footer class="footer-area two three pt-100">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="footer-item">
                        <div class="footer-logo">
                            <a class="footer-inva" href="index.html">
                                <img src="{{ asset('frontend/assets/img/logo-three.png') }}" alt="Logo">
                            </a>
                            <p>{{$about->about}}</p>
                            <ul>
                                <li>
                                    <a href="{{$settings->facebook}}" target="_blank">
                                        <i class='bx bxl-facebook'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{$settings->twitter}}" target="_blank">
                                        <i class='bx bxl-twitter'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{$settings->linkedin}}" target="_blank">
                                        <i class='bx bxl-linkedin'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{$settings->instagram}}" target="_blank">
                                        <i class='bx bxl-instagram'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{$settings->youtube}}" target="_blank">
                                        <i class='bx bxl-youtube'></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="footer-item">
                        <div class="footer-link">
                            <h3>Important Links</h3>
                            <ul>
                                <li>
                                    <i class='bx bx-chevron-right'></i>
                                    <a href="about.html">{{__('website.about')}}</a>
                                </li>
                                <li>
                                    <i class='bx bx-chevron-right'></i>
                                    <a href="services.html">{{__('website.services')}}</a>
                                </li>
                                <li>
                                    <i class='bx bx-chevron-right'></i>
                                    <a href="blog.html">{{__('website.blog')}}</a>
                                </li>
                                <li>
                                    <i class='bx bx-chevron-right'></i>
                                    <a href="{{route('front.faqs')}}">{{__('website.faqs')}}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="footer-item">
                        <div class="footer-hours">
                            <h3>Open Hours</h3>
                            <ul>
                                <li>Monday <span>8:00 - 21:00</span></li>
                                <li>Tuesday <span>8:00 - 21:00</span></li>
                                <li>Wednesday <span>8:00 - 21:00</span></li>
                                <li>Thursday <span>8:00 - 21:00</span></li>
                                <li>Sunday <span>8:00 - 21:00</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="footer-item">
                        <div class="footer-contact">
                            <h3 style="font-family: tajawal">{{__('website.continfo')}}</h3>
                            <ul>
                                <li>
                                    <i class='bx bxs-location-plus'></i>
                                    <span>{{$settings->address}}</span>
                                </li>
                                <li>
                                    <i class='bx bxs-phone-call'></i>
                                    <a href="tel:{{$settings->phone}}">{{$settings->phone}}</a>
                                </li>
                                <li>
                                    <i class='bx bxs-paper-plane'></i>
                                    <a><span>{{$settings->email}}</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area" dir="ltr">
            <div class="container">
                <p>© {{ now()->year }} Designed  & Developed By <a href="https://greenwayim.com" target="_blank">Green Way</a></p>
            </div>
        </div>
        <div class="footer-shape">
            <img src="{{ asset('frontend/assets/img/footer-bg2.png') }}" alt="Footer">
        </div>
    </footer>