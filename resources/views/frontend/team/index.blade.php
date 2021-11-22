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
                    <h2 style="font-family: tajawal">{{__('website.team')}}</h2>
                    <ul>
                        <li>
                            <a href="{{route('website')}}">{{__('website.home')}}</a>
                        </li>
                        <li>
                            <i class='bx bx-chevron-right'></i>
                        </li>
                        <li>
                            <span>{{__('website.team')}}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="team-area ptb-100">
    <div class="container">
        <div class="row">
        @foreach ($team as $item)
        <div class="col-sm-6 col-lg-4">
            <div class="team-item">
                <div class="top card-overlay">
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
    </div>
</section>

@endsection