<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.rtl.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/boxicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/fonts/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/modal-video.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/odometer.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/rtl.css') }}">
    <title>د.جار الله للفكر القانونى</title>
    <link rel="icon" type="image/png" href="{{ asset('frontend/assets/img/favicon.png') }}">
    <link href="http://fonts.cdnfonts.com/css/tajawal" rel="stylesheet">
    <style>
        body {
            font-family: 'Tajawal', sans-serif;
        }
    </style>
</head>
<body>
    <div class="loader">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="pre-load">
                    <div class="inner one"></div>
                    <div class="inner two"></div>
                    <div class="inner three"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="error-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="error-item">
                    <h1>404</h1>
                    <h2>Sorry! You Page Not Found</h2>
                    <h2 style="font-family: tajawal">هذه الصفحة غير موجودة !!</h2>
                    <a class="common-btn" href="{{ route('website') }}">
                        {{ __('website.home') }}
                        <span></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="go-top">
        <i class="bx bxs-up-arrow-alt"></i>
        <i class="bx bxs-up-arrow-alt"></i>
    </div>
    <script src="{{ asset('frontend/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/form-validator.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/contact-form-script.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.meanmenu.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery-modal-video.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/odometer.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.appear.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/smoothscroll.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/custom.js') }}"></script>
</body>

</html>
