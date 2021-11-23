@extends('frontend.layouts.master')
@section('content')
<div class="page-title-area title-bg-three">
    <div class="title-shape">
        <img src="{{asset('frontend/assets/img/title/title-bg-shape.png')}}" alt="Shape">
    </div>
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="title-content">
                    <h2 style="font-family: tajawal">{{__('website.services')}}</h2>
                    <ul>
                        <li>
                            <a href="{{route('home')}}">{{__('website.home')}}</a>
                        </li>
                        <li>
                            <i class='bx bx-chevron-right'></i>
                        </li>
                        <li>
                            <span>{{__('website.services')}}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="projects-area ptb-100">
    <div class="container">
        <div class="section-title">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <span class="sub-title">{{__('website.services')}}</span>
                    {{-- <h2>Some Of Our <span>Projects</span> Where We Achive Great Success</h2> --}}
                </div>
                <div class="col-lg-6">
                    {{-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis libero facilis consequatur deleniti, ipsa provident? Culpa tenetur incidunt reprehenderit qui a voluptas perferendis officiis</p> --}}
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($services as $item)
            <div class="col-sm-6 col-lg-4">
                <div class="projects-item card-overlay">
                    <img src="{{ asset('upload/service/' . $item->image) }}" alt="Projects">
                    <div class="inner">
                        <span>{{$item->name}}</span>
                        <h3 style="font-family: tajawal">
                            <a href="{{route('front.services.details',[$item->id])}}">{{__('website.read')}}</a>
                        </h3>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection