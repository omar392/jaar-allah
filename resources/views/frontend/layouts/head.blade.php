<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @if (app()->getLocale() == 'ar')
    <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.rtl.min.css')}}">
    @endif
    @if (app()->getLocale() == 'en')
    <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.min.css')}}">
    @endif
    <link rel="stylesheet" href="{{asset('frontend/assets/css/boxicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/assets/css/meanmenu.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/assets/css/animate.min.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/owl.theme.default.min.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/assets/fonts/flaticon.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/assets/css/modal-video.min.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/assets/css/odometer.min.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/assets/css/responsive.css')}}">

    @if (app()->getLocale() == 'ar')
    <link rel="stylesheet" href="{{asset('frontend/assets/css/rtl.css')}}">
    @endif
    <title>د.جار الله</title>
    <link rel="icon" type="image/png" href="{{asset('frontend/assets/img/favicon.png')}}">
    <link href="http://fonts.cdnfonts.com/css/tajawal" rel="stylesheet">
    @toastr_css
    <style>
        
        body {
            font-family: 'Tajawal', sans-serif;
            /* marquee div container */

        }

        
        .marquee {
    font-size: 2vw;
    color: #fff;
    font-family: 'Courier New', Courier, monospace;
    height: 2.5vw;
    overflow: hidden;
    background-color: #000;
    position: relative;
}
/* nested div inside the container */
.marquee div {
    display: block;
    width: 200%;
    position: absolute; 
    overflow: hidden;
    animation: marquee 12s linear infinite;
}
/* span with text */
@if (app()->getLocale() == 'ar')
.marquee span {
    float: right;
    width: 50%;
}
/* keyframe */
@keyframes marquee {
    0% { right: 0; }
    100% { right: -100%; }
}
@endif
@if (app()->getLocale() == 'en')
.marquee span {
    float: left;
    width: 50%;
}
/* keyframe */
@keyframes marquee {
    0% { left: 0; }
    100% { left: -100%; }
}
@endif
    </style>
</head>