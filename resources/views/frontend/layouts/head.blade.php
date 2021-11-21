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
                
    <style>
        
        body {
            font-family: 'Tajawal', sans-serif;
        }
        </style>
</head>