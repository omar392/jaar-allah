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
                    <h2 style="font-family: tajawal">{{__('website.terms')}}</h2>
                    <ul>
                        <li>
                            <a href="{{route('website')}}">{{__('website.home')}}</a>
                        </li>
                        <li>
                            <i class='bx bx-chevron-right'></i>
                        </li>
                        <li>
                            <span>{{__('website.terms')}}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="rules-area ptb-100">
    <div class="container">
        <div class="rules-item">
            <img src="{{asset('frontend/assets/img/rules-main2.jpg')}}" alt="Rules">
            @foreach ($terms as $item)
            <h3> {{ $loop->iteration }} - {{$item->name}}</h3>
            <p>{!! $item->description !!}</p>
            @endforeach
        </div>
    </div>
</div>
@endsection