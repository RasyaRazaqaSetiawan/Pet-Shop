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
    <link rel="stylesheet" href="{{asset('frontend/css/swiper10-bundle.min.css')}}">

    <!--------------- bootstrap-css ---------------->
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap-5.3.2.min.css')}}">

    <!---------------------- Range Slider ------------------->
    <link rel="stylesheet" href="{{asset('frontend/css/nouislider.min.css')}}">

    <!---------------------- Scroll ------------------->
    <link rel="stylesheet" href="{{asset('frontend/asset/css/aos-3.0.0.css')}}">

    <!--------------- additional-css ---------------->
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
</head>

<body>

    <style>
        /* Tambahkan ini di file CSS Anda */
    .category-section {
        display: flex;
        flex-wrap: wrap;
        gap: 10px; /* Sesuaikan dengan kebutuhan */
    }
    
    .product-wrapper {
        flex: 1 1 20%; /* Atur ukuran sesuai kebutuhan */
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-bottom: 20px;
    }
    
    .wrapper-img img {
        max-width: 100%;
        height: auto;
    }
    
    .wrapper-info {
        margin-top: 10px;
        text-align: center;
    }
    
    
    </style>
    
    <!---- Header ------->
    @include('include.frontend.header')
    <!---- /Header ------->

    <!---- Content ------->
    @include('include.frontend.content')
    <!---- /Content ------->

    <!---- Footer ------->
    @include('include.frontend.footer')
    <!---- /Footer ------->

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

    <!-- Tambahkan link ke Bootstrap CSS dan JS jika belum ada -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.0.0-beta2/css/bootstrap.min.css"
    rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.0.0-beta2/js/bootstrap.min.js"></script>

</body>

</html>