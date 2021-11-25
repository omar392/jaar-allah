@extends('frontend.layouts.master')
@section('content')
    <div class="banner-area three">
        <div class="banner-slider-two owl-theme owl-carousel">
            @foreach ($banners as $item)
                <div class="banner-item">
                    <div class="d-table">
                        <div class="d-table-cell">
                            <div class="container-fluid">
                                <div class="row align-items-center">
                                    <div class="col-lg-7">
                                        <div class="banner-content">
                                            <h1 style="font-family: tajawal">{{ $item->name }}</h1>
                                            <p>{!! $item->description !!}</p>
                                            <a class="common-btn three" href="{{ route('contact.us') }}">
                                                {{ __('website.contact') }}
                                                <span></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="banner-img">
                                            <img src="{{ asset('upload/banner/' . $item->image) }}" alt="Banner">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <span class="banner-count">{{ $loop->iteration }}</span>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="banner-shape">
            <img src="{{ asset('frontend/assets/img/banner/banner-shape4.png') }}" alt="Shape">
        </div>
    </div>
    <section class="services-area three pt-100 pb-70">
        <div class="container">
            <div class="section-title three">
                <h2 style="font-family: tajawal">{{ __('website.services') }}</h2>
                <p>{{ $about->about }}</p>
            </div>
            <div class="row">
                @foreach ($services as $item)
                    <div class="col-sm-6 col-lg-4">
                        <div class="services-item">
                            <i class="flaticon-marketing-strategy"></i>
                            <h3 style="font-family: tajawal">
                                <a href="{{ route('front.services.details', [$item->id]) }}">{{ $item->name }}</a>
                            </h3>
                            <a class="services-btn"
                                href="{{ route('front.services.details', [$item->id]) }}">{{ __('website.read') }}</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <div class="counter-area two three pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="faq-item">
                        <div class="section-title three">
                            <h2 style="font-family: tajawal">{{ __('website.faqs') }}</h2>
                        </div>
                        <ul class="accordion">
                            @foreach ($faqs as $item)
                                <li>
                                    <a>{{ $item->ask }}</a>
                                    <p>{!! $item->answer !!}</p>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6" dir="ltr">
                    <div class="row">
                        <div class="col-sm-6 col-lg-6">
                            <div class="counter-item">
                                <h3>
                                    <span class="odometer" data-count="{{ $counter->years }}"></span>
                                    <span class="target">+</span>
                                </h3>
                                <p>{{ __('website.years') }}</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-6">
                            <div class="counter-item">
                                <h3>
                                    <span class="odometer" data-count="{{ $counter->issues }}"></span>
                                    <span class="target">+</span>
                                </h3>
                                <p>{{ __('website.issues') }}</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-6">
                            <div class="counter-item">
                                <h3>
                                    <span class="odometer" data-count="{{ $counter->branches }}"></span>
                                    <span class="target">+</span>
                                </h3>
                                <p>{{ __('website.branches') }}</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-6">
                            <div class="counter-item">
                                <h3>
                                    <span class="odometer" data-count="{{ $counter->team }}"></span>
                                    <span class="target">+</span>
                                </h3>
                                <p>{{ __('website.team') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="team-area three ptb-100">
        <div class="container">
            <div class="section-title three">
                <h2 style="font-family: tajawal">{{ __('website.team') }}</h2>
            </div>
            <div class="row">
                @foreach ($team as $item)
                    <div class="col-sm-6 col-lg-4">
                        <div class="team-item">
                            <div class="top">
                                <img src="{{ asset('upload/team/' . $item->image) }}" alt="Team">
                            </div>
                            <div class="bottom">
                                <h3 style="font-family: tajawal">
                                    <a href="team-details.html">{{ $item->name }}</a>
                                </h3>
                                <span>{{ $item->job }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="text-center">
                <a class="common-btn three" href="{{ route('front.team') }}">
                    {{ __('website.team') }}
                    <span></span>
                </a>
            </div>
        </div>
    </section>
    <section class="testimonials-area three ptb-100">
        <div class="testimonials-shape">
            <img src="{{ asset('frontend/assets/img/testimonials-shape2.png') }}" alt="Shape">
            <img src="{{ asset('frontend/assets/img/testimonials-shape3.png') }}" alt="Shape">
        </div>
        <div class="container">
            <div class="testimonials-slider owl-theme owl-carousel">
                @foreach ($opinions as $item)


                    <div class="testimonials-item">
                        <i class='bx bxs-quote-right icon'></i>
                        <p>{!! $item->description !!}</p>
                        <img src="{{ asset('upload/opinion/' . $item->image) }}" alt="Testimonials">
                        <h3 style="font-family: tajawal">{{ $item->name }}</h3>
                        <span>{{ $item->job }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="subscribe-area three ptb-100">
        <div class="subscribe-img">
            <img src="{{ asset('frontend/assets/img/subscribe-main2.png') }}" alt="Subscribe">
        </div>
        <div class="container">
            <div class="subscribe-wrap">
                <div class="section-title two">
                    <h2 style="font-family: tajawal">{{ __('website.sup1') }}</h2>
                </div>
                <form class="newsletter-form" action="{{ route('email.store') }}" method="POST">
                    @csrf
                    <input type="text" class="form-control" placeholder="{{ __('website.email') }}" name="email">
                    @error('email')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <button class="btn common-btn three" type="submit">
                        {{ __('website.sup') }}
                        <span></span>
                    </button>
                </form>
            </div>
        </div>
    </section>
    <div class="logo-area two">
        <div class="container">
            <div class="logo-slider owl-theme owl-carousel">
                @foreach ($customers as $item)
                    <div class="logo-item">
                        <img src="{{ asset('upload/customer/' . $item->image) }}" alt="Logo">
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
