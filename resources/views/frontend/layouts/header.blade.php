<div class="loader">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="pre-load">
                <div class="inner one"></div>
                <div class="inner two"></div>
                <div class="inner three"></div>
            </div>
        </div>
    </div>
</div>


<div class="header-area three">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-lg-8">
                <div class="left">
                    <ul>
                        <li>
                            <i class='bx bx-mail-send'></i>
                            <a><span>{{$settings->email}}</span></a>
                        </li>
                        <li>
                            <i class='bx bx-phone-call'></i>
                            <a href="tel:{{$settings->phone}}">{{$settings->phone}}</a>
                        </li>
                        {{-- <li>
                            <i class='bx bx-time'></i>
                            <span>Mon - Sat: 8:00 AM - 7:00 PM</span>
                        </li> --}}
                    </ul>
                </div>
            </div>
            <div class="col-sm-3 col-lg-4">
                <div class="right">
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
                            <a href="{{$settings->youtube}}" target="_blank">
                                <i class='bx bxl-youtube'></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{$settings->instagram}}" target="_blank">
                                <i class='bx bxl-instagram'></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="navbar-area sticky-top">

    <div class="mobile-nav">
        <a href="index.html" class="logo">
            <img src="{{ asset('frontend/assets/img/logo-four.png') }}" alt="Logo">
        </a>
    </div>

    <div class="main-nav three">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="{{route('website')}}">
                    <img src="{{ asset('frontend/assets/img/logo-four.png') }}" alt="Logo">
                </a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="{{route('website')}}" class="nav-link {{ URL::route('website') === URL::current() ? 'active' : ''}}">{{__('website.home')}}</a>
                        </li>
                        <li class="nav-item">
                            <a href="about.html" class="nav-link">{{__('website.about')}}</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">{{__('website.services')}}</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">{{__('website.blog')}}</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link dropdown-toggle">{{__('website.pages')}} <i class='bx bx-chevron-down'></i></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="blog.html" class="nav-link">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a href="blog-details.html" class="nav-link">Blog Details</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('contact.us')}}" class="nav-link {{ URL::route('contact.us') === URL::current() ? 'active' : ''}}">{{__('website.contact')}}</a>
                        </li>
                    </ul>
                    <div class="side-nav">
                        {{-- <div class="nav-search">
                            <i id="search-btn" class="bx bx-search-alt"></i>
                            <div id="search-overlay" class="block">
                                <div class="centered">
                                    <div id="search-box">
                                        <i id="close-btn" class="bx bx-x"></i>
                                        <form>
                                            <input type="text" class="form-control" placeholder="Search..." />
                                            <button type="submit" class="btn">Search</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            @if ($localeCode == LaravelLocalization::getCurrentLocale())
                            @elseif($url = LaravelLocalization::getLocalizedURL($localeCode))
                                <a href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                    @if (app()->getLocale() == 'ar')
                                        <img src="{{ asset('frontend/assets/img/flag1.jpg') }}" alt="Flag">
                                        <span style="color: #FFF">Eng</span>
                                    @else
                                        <img src="{{ asset('frontend/assets/img/kuw.png') }}"
                                            style="width: 40px;height: 20px;" alt="Flag">
                                        <span style="color: #FFF">العربية</span>
                                    @endif
                                </a>
                            @endif
                        @endforeach
                    </div> 
                </div>
        </div>
        </nav>
    </div>
</div>
</div>
