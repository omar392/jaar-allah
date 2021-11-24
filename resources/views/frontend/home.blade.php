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
                                        <h1 style="font-family: tajawal">{{$item->name}}</h1>
                                        <p>{!! $item->description !!}</p>
                                        <a class="common-btn three" href="{{route('contact.us')}}">
                                            {{__('website.contact')}}
                                            <span></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="banner-img">
                                        <img src="{{ asset('upload/banner/' . $item->image) }}"
                                            alt="Banner">
                                        {{-- <img src="{{ asset('frontend/assets/img/banner/banner-shape3.png') }}" --}}
                                            {{-- alt="Banner"> --}}
                                        {{-- <img src="{{ asset('frontend/assets/img/banner/banner-shape2.png') }}" --}}
                                            {{-- alt="Shape"> --}}
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
    {{-- <section class="features-area pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-6 col-lg-4">
                    <div class="section-title three">
                        <h2>Our Dedicated Top <span>Features</span> For Your Satisfaction</h2>
                        <p>Lorem ipsum dolor sit amet, consetetur sadip ng elitr, sed diam nonumy eirmod tempor invi
                            dunt ut labore</p>
                        <a class="common-btn three" href="services.html">
                            Explore All Features
                            <span></span>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="features-item">
                        <div class="top">
                            <img src="{{ asset('frontend/assets/img/features1.jpg') }}" alt="Features">
                        </div>
                        <div class="bottom">
                            <h3>24/7 Support</h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="features-item">
                        <div class="top">
                            <img src="{{ asset('frontend/assets/img/features2.jpg') }}" alt="Features">
                        </div>
                        <div class="bottom">
                            <h3>Lifetime Support</h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="features-inner">
                        <ul class="align-items-center">
                            <li>
                                <i class="flaticon-progress-report"></i>
                            </li>
                            <li>
                                <h3>35+ Years Experience</h3>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="features-inner">
                        <ul class="align-items-center">
                            <li>
                                <i class="flaticon-trusted"></i>
                            </li>
                            <li>
                                <h3>100% Trust Worthiness</h3>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="features-inner">
                        <ul class="align-items-center">
                            <li>
                                <i class="flaticon-customer-feedback"></i>
                            </li>
                            <li>
                                <h3>100% Client Satisfaction</h3>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}


    {{-- <section class="about-area two three pt-100 pb-70">
        <div class="about-shape">
            <img src="{{asset('frontend/assets/img/about/about-shape1.png')}}" alt="Shape">
        </div>
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img">
                        <div class="row">
                            <div class="col-sm-6 col-lg-6">
                                <img class="about-long" src="{{ asset('frontend/assets/img/about/about4.jpg') }}"
                                    alt="About">
                            </div>
                            <div class="col-sm-6 col-lg-6">
                                <img class="about-long-two" src="{{ asset('frontend/assets/img/about/about5.jpg') }}"
                                    alt="About">
                            </div>
                        </div>
                        <div class="years">
                            <h3>25+ <br> <span>Years</span></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="section-title three">
                            <h2>We Are A Trusted Company With <span>25+</span> Years Of Experience</h2>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                                invidunt ut labore et dolore magna.</p>
                        </div>
                        <p class="about-p">It is a long established fact that a reader will be distracted by the
                            readable content of a page when looking at its layout. The point of using Lorem Ipsum is
                            that it has a more-or-less normal distribution of letters</p>
                        <div class="row">
                            <div class="col-sm-6 col-lg-6">
                                <ul>
                                    <li>
                                        <i class="flaticon-medal-of-award"></i>
                                    </li>
                                    <li>
                                        <h3>25+ Years Experience</h3>
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-sm-6 col-lg-6">
                                <ul>
                                    <li>
                                        <i class="flaticon-star"></i>
                                    </li>
                                    <li>
                                        <h3>Growing Success</h3>
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-sm-6 col-lg-6">
                                <ul>
                                    <li>
                                        <i class="flaticon-insurance"></i>
                                    </li>
                                    <li>
                                        <h3>100% Trusted Company</h3>
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-sm-6 col-lg-6">
                                <ul>
                                    <li>
                                        <i class="flaticon-dollars-money-bag-with-a-clock"></i>
                                    </li>
                                    <li>
                                        <h3>Finance Management</h3>
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <a class="common-btn three" href="#">
                            Explore About Us
                            <span></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="services-area three pt-100 pb-70">
        <div class="container">
            <div class="section-title three">
                <h2 style="font-family: tajawal">{{__('website.services')}}</h2>
                <p>{{$about->about}}</p>
            </div>
            <div class="row">
                @foreach ($services as $item)
                <div class="col-sm-6 col-lg-4">
                    <div class="services-item">
                        <i class="flaticon-marketing-strategy"></i>
                        <h3 style="font-family: tajawal">
                            <a href="{{route('front.services.details',[$item->id])}}">{{$item->name}}</a>
                        </h3>
                        <a class="services-btn" href="{{route('front.services.details',[$item->id])}}">{{__('website.read')}}</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    {{-- <div class="skills-area ptb-100">
        <div class="skills-img">
            <img src="{{ asset('frontend/assets/img/skills-main.png') }}" alt="Skills">
        </div>
        <div class="container">
            <div class="skills-content">
                <div class="section-title three">
                    <h2>We Also Show The Final Result In <span>Stats</span> For Your Better Understanding</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis libero facilis consequatur
                        deleniti, ipsa provident? Culpa tenetur incidunt reprehenderit qui a voluptas</p>
                </div>
                <div class="skill-wrap">
                    <div class="skill">
                        <h3>Goal Achived</h3>
                        <div class="skill-bar skill1 wow fadeInRightBig">
                            <span class="skill-count1">75%</span>
                        </div>
                    </div>
                    <div class="skill">
                        <h3>Success Rate</h3>
                        <div class="skill-bar skill2 wow fadeInRightBig">
                            <span class="skill-count2">90%</span>
                        </div>
                    </div>
                    <div class="skill">
                        <h3>Business Growth</h3>
                        <div class="skill-bar skill3 wow fadeInRightBig">
                            <span class="skill-count3">80%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="counter-area two three pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="faq-item">
                        <div class="section-title three">
                            <h2 style="font-family: tajawal">{{__('website.faqs')}}</h2>
                        </div>
                        <ul class="accordion">
                            @foreach ($faqs as $item)
                            <li>
                                <a>{{$item->ask}}</a>
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
                                    <span class="odometer" data-count="{{$counter->years}}"></span>
                                    <span class="target">+</span>
                                </h3>
                                <p>{{__('website.years')}}</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-6">
                            <div class="counter-item">
                                <h3>
                                    <span class="odometer" data-count="{{$counter->issues}}"></span>
                                    <span class="target">+</span>
                                </h3>
                                <p>{{__('website.issues')}}</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-6">
                            <div class="counter-item">
                                <h3>
                                    <span class="odometer" data-count="{{$counter->branches}}"></span>
                                    <span class="target">+</span>
                                </h3>
                                <p>{{__('website.branches')}}</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-6">
                            <div class="counter-item">
                                <h3>
                                    <span class="odometer" data-count="{{$counter->team}}"></span>
                                    <span class="target">+</span>
                                </h3>
                                <p>{{__('website.team')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <section class="pricing-area three pt-100 pb-70">
        <div class="pricing-shape">
            <img src="{{ asset('frontend/assets/img/pricing-shape1.png') }}" alt="Shape">
            <img src="{{ asset('frontend/assets/img/pricing-shape1.png') }}" alt="Shape">
        </div>
        <div class="container">
            <div class="section-title three">
                <h2>Affordable Pricing Plans</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis libero facilis consequatur
                    deleniti, ipsa provident? Culpa tenetur incidunt reprehenderit qui a voluptas</p>
            </div>
            <div class="row align-items-center">
                <div class="col-sm-6 col-lg-4">
                    <div class="pricing-item">
                        <i class="flaticon-rocket"></i>
                        <h3>Basic Plan</h3>
                        <h4><span class="one">$</span> 39 <span class="two">/Month</span></h4>
                        <ul>
                            <li>Business Planning</li>
                            <li>Financial Investment</li>
                            <li class="deleted">Lifetime</li>
                            <li class="deleted">24/7 Hours Support</li>
                        </ul>
                        <a class="common-btn three" href="#">
                            Purchase Now
                            <span></span>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="pricing-item active">
                        <i class="flaticon-rocket-1"></i>
                        <h3>Premium Plan</h3>
                        <h4><span class="one">$</span> 69 <span class="two">/Month</span></h4>
                        <ul>
                            <li>Business Planning</li>
                            <li>Financial Investment</li>
                            <li>Lifetime</li>
                            <li>24/7 Hours Support</li>
                        </ul>
                        <a class="common-btn three" href="#">
                            Purchase Now
                            <span></span>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 offset-sm-3 offset-lg-0 col-lg-4">
                    <div class="pricing-item">
                        <i class="flaticon-rocket-2"></i>
                        <h3>Advanced Plan</h3>
                        <h4><span class="one">$</span> 99 <span class="two">/Month</span></h4>
                        <ul>
                            <li>Business Planning</li>
                            <li>Financial Investment</li>
                            <li>Lifetime</li>
                            <li>24/7 Hours Support</li>
                        </ul>
                        <a class="common-btn three" href="#">
                            Purchase Now
                            <span></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <section class="team-area three ptb-100">
        <div class="container">
            <div class="section-title three">
                <h2 style="font-family: tajawal">{{__('website.team')}}</h2>
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
                                <a href="team-details.html">{{$item->name}}</a>
                            </h3>
                            <span>{{$item->job}}</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="text-center">
                <a class="common-btn three" href="{{route('front.team')}}">
                    {{__('website.team')}}
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
                <div class="testimonials-item">
                    <i class='bx bxs-quote-right icon'></i>
                    <p>Inva is excellent in their work and I really amazed to see how they managed everything throughout
                        the year without any problem. They has an excellent sense of finance & economy.</p>
                    <img src="{{asset('frontend/assets/img/testimonials1.jpg')}}" alt="Testimonials">
                    <h3>Tom Henry</h3>
                    <span>CEO of Company</span>
                    <ul>
                        <li>
                            <i class='bx bxs-star checked'></i>
                        </li>
                        <li>
                            <i class='bx bxs-star checked'></i>
                        </li>
                        <li>
                            <i class='bx bxs-star checked'></i>
                        </li>
                        <li>
                            <i class='bx bxs-star checked'></i>
                        </li>
                        <li>
                            <i class='bx bxs-star checked'></i>
                        </li>
                    </ul>
                </div>
                <div class="testimonials-item">
                    <i class='bx bxs-quote-right icon'></i>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page
                        when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less.</p>
                    <img src="{{ asset('frontend/assets/img/testimonials2.jpg') }}" alt="Testimonials">
                    <h3>Jac Jacson</h3>
                    <span>Director</span>
                    <ul>
                        <li>
                            <i class='bx bxs-star checked'></i>
                        </li>
                        <li>
                            <i class='bx bxs-star checked'></i>
                        </li>
                        <li>
                            <i class='bx bxs-star checked'></i>
                        </li>
                        <li>
                            <i class='bx bxs-star checked'></i>
                        </li>
                        <li>
                            <i class='bx bxs-star'></i>
                        </li>
                    </ul>
                </div>
                <div class="testimonials-item">
                    <i class='bx bxs-quote-right icon'></i>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                        alteration in some form, by injected humour, or randomised words.</p>
                    <img src="{{ asset('frontend/assets/img/testimonials3.jpg') }}" alt="Testimonials">
                    <h3>Micheal Shon</h3>
                    <span>Manager</span>
                    <ul>
                        <li>
                            <i class='bx bxs-star checked'></i>
                        </li>
                        <li>
                            <i class='bx bxs-star checked'></i>
                        </li>
                        <li>
                            <i class='bx bxs-star checked'></i>
                        </li>
                        <li>
                            <i class='bx bxs-star checked'></i>
                        </li>
                        <li>
                            <i class='bx bxs-star'></i>
                        </li>
                    </ul>
                </div>
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
                    <h2>Subscribe Our Newsletter</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis libero facilis consequatur
                        deleniti, ipsa provident? Culpa tenetur incidunt</p>
                </div>
                <form class="newsletter-form" data-toggle="validator">
                    <input type="email" class="form-control" placeholder="Enter Your Email" name="EMAIL" required
                        autocomplete="off">
                    <button class="btn common-btn three" type="submit">
                        Subscribe
                        <span></span>
                    </button>
                    <div id="validator-newsletter" class="form-result"></div>
                </form>
            </div>
        </div>
    </section>
    @endsection
