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
                        <h2 style="font-family: tajawal">{{$service->name}}</h2>
                        <ul>
                            <li>
                                <a href="{{route('website')}}">{{__('website.home')}}</a>
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
                            <h3>Get In Touch</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <textarea name="your-message" rows="6" class="form-control"
                                        placeholder="Message"></textarea>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn common-btn">
                                        Send Message
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
                                <div class="col-sm-6 col-lg-6">
                                    <img src="{{ asset('upload/service/' . $service->image) }}" alt="Details">
                                </div>
                            </div>
                            <p>{!! $service->description !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
