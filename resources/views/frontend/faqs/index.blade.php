@extends('frontend.layouts.master')
@section('content')
    
<div class="page-title-area title-bg-six">
    <div class="title-shape">
        <img src="{{asset('frontend/assets/img/title/title-bg-shape.png')}}" alt="Shape">
    </div>
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="title-content">
                    <h2 style="font-family: tajawal">{{__('website.faqs')}}</h2>
                    <ul>
                        <li>
                            <a href="{{route('website')}}">{{__('website.home')}}</a>
                        </li>
                        <li>
                            <i class='bx bx-chevron-right'></i>
                        </li>
                        <li>
                            <span>{{__('website.faqs')}}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="faq-area pt-100 pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="faq-img">
                    <img src="{{asset('frontend/assets/img/faq-main1.jpg')}}" alt="FAQ">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="faq-item">
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
        </div>
    </div>
</div>
@endsection