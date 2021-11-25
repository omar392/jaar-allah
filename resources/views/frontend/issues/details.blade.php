@extends('frontend.layouts.master')
@section('content')
    <div class="page-title-area title-bg-two">
        <div class="title-shape">
            <img src="{{asset('frontend/assets/img/title/title-bg-shape.png')}}" alt="Shape">
        </div>
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="title-content">
                        <h2 style="font-family: tajawal">{{$issue->title}}</h2>
                        <ul>
                            <li>
                                <a href="{{route('website')}}">{{__('website.home')}}</a>
                            </li>
                            <li>
                                <i class='bx bx-chevron-right'></i>
                            </li>
                            <li>
                                <span>{{__('website.issues')}}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="service-details-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="widget-area">
                        <div class="services widget-item">
                            <ul>
                                @foreach ($services as $item)
                                <li>
                                    <a href="">
                                        {{$item->name}}
                                        <i class='bx bx-chevron-right'></i>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="report widget-item">
                            <ul>
                                <li>
                                    <i class='bx bxs-file-pdf'></i>
                                    <a href="#">Download Report</a>
                                </li>
                                <li>
                                    <i class='bx bx-download'></i>
                                    <a href="#">Download Brochure</a>
                                </li>
                            </ul>
                        </div>
                        <div class="touch widget-item">
                            <h3 style="font-family: tajawal">{{__('website.contact')}}</h3>
                            <form id="contactForm" action="{{route('contact.store')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" placeholder="{{__('website.name')}}">
                                    @error('name')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="{{__('website.email')}}">
                                    @error('email')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="number" name="phone" class="form-control" placeholder="{{__('website.phone')}}">
                                    @error('phone')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="email" name="subject" class="form-control" placeholder="{{__('website.subject')}}">
                                    @error('subject')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <textarea name="address" rows="6" class="form-control"
                                        placeholder="{{__('website.message')}}"></textarea>
                                        @error('address')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn common-btn">
                                        {{__('website.send')}}
                                        <span></span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="details-item">
                        <div class="details-img">
                            <div class="row">
                                {{-- <div class="col-sm-6 col-lg-6"> --}}
                                    <img src="{{ asset('upload/issue/' . $issue->image) }}" alt="Details">
                                {{-- </div> --}}
                            </div>
                            <p>{!! $issue->description !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
