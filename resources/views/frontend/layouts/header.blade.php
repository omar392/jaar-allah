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
                            <a><span>{{ $settings->email }}</span></a>
                        </li>
                        <li>
                            <i class='bx bx-phone-call'></i>
                            <a href="tel:{{ $settings->phone }}">{{ $settings->phone }}</a>
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
                            <a href="{{ $settings->facebook }}" target="_blank">
                                <i class='bx bxl-facebook'></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ $settings->twitter }}" target="_blank">
                                <i class='bx bxl-twitter'></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ $settings->youtube }}" target="_blank">
                                <i class='bx bxl-youtube'></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ $settings->instagram }}" target="_blank">
                                <i class='bx bxl-instagram'></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <marquee width="60%" direction="right" height="30px">
    This is a sample scrolling text that has scrolls texts to right.
</marquee> --}}
<div class="marquee" dir="rtl">
    <div>
      @foreach ($news as $item)
      <span>** &amp; ** {{$item->new}} ** &amp; **</span>
      @endforeach
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
                <a class="navbar-brand" href="{{ route('website') }}">
                    <img src="{{ asset('frontend/assets/img/logo-four.png') }}" alt="Logo">
                </a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="{{ route('website') }}"
                                class="nav-link {{ URL::route('website') === URL::current() ? 'active' : '' }}">{{ __('website.home') }}</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('front.about') }}"
                                class="nav-link {{ URL::route('front.about') === URL::current() ? 'active' : '' }}">{{ __('website.about') }}</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('front.services') }}"
                                class="nav-link {{ URL::route('front.services') === URL::current() ? 'active' : '' }}">{{ __('website.services') }}</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('front.issues') }}" class="nav-link {{ URL::route('front.issues') === URL::current() ? 'active' : '' }}">{{ __('website.issues1') }}</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('front.blog') }}" class="nav-link {{ URL::route('front.blog') === URL::current() ? 'active' : '' }}">{{ __('website.blog') }}</a>
                        </li>
                        <li class="nav-item">
                            <a href="#"
                                class="nav-link dropdown-toggle {{ URL::route('front.faqs') === URL::current() ? 'active' : '' }} {{ URL::route('front.gallery') === URL::current() ? 'active' : '' }} {{ URL::route('front.team') === URL::current() ? 'active' : '' }} {{ URL::route('front.decisions') === URL::current() ? 'active' : '' }} {{ URL::route('front.terms') === URL::current() ? 'active' : '' }}">{{ __('website.pages') }}
                                <i class='bx bx-chevron-down'></i></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="{{ route('front.decisions') }}"
                                        class="nav-link {{ URL::route('front.decisions') === URL::current() ? 'active' : '' }}">{{ __('website.decisions') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('front.faqs') }}"
                                        class="nav-link {{ URL::route('front.faqs') === URL::current() ? 'active' : '' }}">{{ __('website.faqs') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('front.terms') }}"
                                        class="nav-link {{ URL::route('front.terms') === URL::current() ? 'active' : '' }}">{{ __('website.terms') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('front.team') }}"
                                        class="nav-link {{ URL::route('front.team') === URL::current() ? 'active' : '' }}">{{ __('website.team') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('front.gallery') }}"
                                        class="nav-link {{ URL::route('front.gallery') === URL::current() ? 'active' : '' }}">{{ __('website.gallery') }}</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('contact.us') }}"
                                class="nav-link {{ URL::route('contact.us') === URL::current() ? 'active' : '' }}">{{ __('website.contact') }}</a>
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

