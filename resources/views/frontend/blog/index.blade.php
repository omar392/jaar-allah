@extends('frontend.layouts.master')
@section('content')
<div class="page-title-area title-bg-four">
    <div class="title-shape">
        <img src="{{asset('frontend/assets/img/title/title-bg-shape.png')}}" alt="Shape">
    </div>
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="title-content">
                    <h2 style="font-family: tajawal">{{__('website.blog')}}</h2>
                    <ul>
                        <li>
                            <a href="{{route('website')}}">{{__('website.home')}}</a>
                        </li>
                        <li>
                            <i class='bx bx-chevron-right'></i>
                        </li>
                        <li>
                            <span>{{__('website.blog')}}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="blog-area three ptb-100">
    <div class="container">
        <div class="row align-items-center">
            @foreach ($blogs as $item)
            <div class="col-lg-6">
                <div class="blog-item">
                    <a href="blog-details.html">
                        <img src="{{ asset('upload/blog/' . $item->image) }}" alt="Blog">
                    </a>
                    <ul>
                        <li>
                            <i class='bx bxs-calendar'></i>
                            <span>{{$item->created_at}}</span>
                        </li>
                    </ul>
                    <h3 style="font-family: tajawal">
                        <a href="{{route('front.blog.details',[$item->id])}}">{{$item->name}}</a>
                    </h3>
                    <a class="blog-btn" href="{{route('front.blog.details',[$item->id])}}">{{__('website.read')}}</a>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>
@endsection