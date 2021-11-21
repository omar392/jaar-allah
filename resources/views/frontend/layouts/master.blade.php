<!DOCTYPE html>
<html dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}">


    @include('frontend.layouts.head')


<body>

    @include('frontend.layouts.header')


    @yield('content')

    @include('frontend.layouts.footer')


    <div class="go-top">
        <i class="bx bxs-up-arrow-alt"></i>
        <i class="bx bxs-up-arrow-alt"></i>
    </div>


@include('frontend.layouts.scripts')
</body>

</html>
