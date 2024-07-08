<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="keywords"
        content="ShopUS, bootstrap-5, bootstrap, sass, css, HTML Template, HTML,html, bootstrap template, free template, figma, web design, web development,front end, bootstrap datepicker, bootstrap timepicker, javascript, ecommerce template">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="./assets/images/homepage-one/icon.png">

    <!--title  -->
    <title>Shopus: Your One-Stop Destination for Fashion and Style</title>


    <!--------------- swiper-css ---------------->
    <link rel="stylesheet" href="{{asset ('frontend/css/swiper10-bundle.min.css') }}">

    <!--------------- bootstrap-css ---------------->
    <link rel="stylesheet" href="{{asset ('frontend/css/bootstrap-5.3.2.min.css')}}">

    <!---------------------- Range Slider ------------------->
    <link rel="stylesheet" href="{{asset('frontend/css/nouislider.min.css')}}">

    <!---------------------- Scroll ------------------->
    <link rel="stylesheet" href="{{asset('frontend/css/aos-3.0.0.css')}}">

    <!--------------- additional-css ---------------->
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">



</head>

<body>


    <!--------------- header-section --------------->
    @include('include.frontend.header')
    <!--------------- header-section-end --------------->

<!--------------- hero-section --------------->
    @include('include.frontend.Welcome.carousel')
<!--------------- hero-section-end --------------->

<!--------------- category-section--------------->
    @include('include.frontend.Welcome.kategori')
<!--------------- category-section-end --------------->


    <!--------------- arrival-section--------------->
    @include('include.frontend.Welcome.arrival')
    <!--------------- arrival-section-end--------------->

    <!--------------- top-sell-section--------------->
    {{-- @include('include.frontend.Welcome.top-sell') --}}
    <!--------------- top-sell-section-end--------------->

    <!--------------- weekly-section--------------->
    @include('include.frontend.Welcome.weekly')
    <!--------------- weekly-section-end--------------->

    <!--------------- flash-section--------------->
    @include('include.frontend.Welcome.flash')
    <!--------------- flash-section-end--------------->

    <!--------------- footer-section--------------->
    @include('include.frontend.footer')
    <!--------------- footer-section-end--------------->

    <!--------------- jQuery ---------------->
    <script src="{{asset('frontend/assets/js/jquery_3.7.1.min.js')}}"></script>

    <!--------------- bootstrap-js ---------------->
    <script src="{{asset('frontend/assets/js/bootstrap_5.3.2.bundle.min.js')}}"></script>

    <!--------------- Range-Slider-js ---------------->
    <script src="{{asset('frontend/assets/js/nouislider.min.js')}}"></script>

    <!--------------- scroll-Animation-js ---------------->
    <script src="{{asset('frontend/assets/js/aos-3.0.0.js')}}"></script>

    <!--------------- swiper-js ---------------->
    <script src="{{asset('frontend/assets/js/swiper10-bundle.min.js')}}"></script>

    <!--------------- additional-js ---------------->
    <script src="{{asset('frontend/assets/js/shopus.js')}}"></script>


</body>

</html>
