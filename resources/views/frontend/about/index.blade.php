@extends('frontend.layouts.master')
@section('content')
<div class="page-title-area title-bg-one">
    <div class="title-shape">
        <img src="{{asset('frontend/assets/img/title/title-bg-shape.png')}}" alt="Shape">
    </div>
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="title-content">
                    <h2 style="font-family: tajawal">{{__('website.about')}}</h2>
                    <ul>
                        <li>
                            <a href="{{route('website')}}">{{__('website.home')}}</a>
                        </li>
                        <li>
                            <i class='bx bx-chevron-right'></i>
                        </li>
                        <li>
                            <span>{{__('website.about')}}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="founder-area section-overlay pt-100 pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="founder-content">
                    <div class="section-title">
                        <span class="sub-title">The Founder & CEO</span>
                        <h2>Victor James</h2>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna</p>
                    </div>
                    <p class="founder-p">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
                    <ul class="nav nav-pills" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">{{__('website.about')}}</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">{{__('website.mission')}}</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">{{__('website.vision')}}</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <p>{{$about->about}}</p>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <p>{{$about->mission}}</p>
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                            <p>{{$about->vision}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="founder-img">
                    <img src="{{asset('frontend/assets/img/founder-main1.jpg')}}" alt="Founder">
                </div>
            </div>
        </div>
    </div>
</section>
<div class="counter-area four pt-100 pb-70" dir="ltr">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-3 card-overlay">
                <div class="counter-item">
                    <h3>
                        <span class="odometer" data-count="{{$counter->years}}"></span>
                        {{-- <span class="target">+</span> --}}
                    </h3>
                    <p>{{__('website.years')}}</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 card-overlay">
                <div class="counter-item">
                    <h3>
                        <span class="odometer" data-count="{{$counter->issues}}"></span>
                        {{-- <span class="target">+</span> --}}
                    </h3>
                    <p>{{__('website.issues')}}</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 card-overlay">
                <div class="counter-item">
                    <h3>
                        <span class="odometer" data-count="{{$counter->branches}}"></span>
                        {{-- <span class="target">+</span> --}}
                    </h3>
                    <p>{{__('website.branches')}}</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 card-overlay">
                <div class="counter-item">
                    <h3>
                        <span class="odometer" data-count="{{$counter->team}}"></span>
                        {{-- <span class="target">+</span> --}}
                    </h3>
                    <p>{{__('website.team')}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection