<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="keywords"
        content="ShopUS, bootstrap-5, bootstrap, sass, css, HTML Template, HTML,html, bootstrap template, free template, figma, web design, web development,front end, bootstrap datepicker, bootstrap timepicker, javascript, ecommerce template,dashboard,bootstrap-dashboard">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="./assets/images/homepage-one/icon.png">

    <!--title  -->
    <title>Shopus | Profile</title>


    <!--------------- swiper-css ---------------->
    <link rel="stylesheet" href="{{asset('frontend/css/swiper10-bundle.min.css')}}">

    <!--------------- bootstrap-css ---------------->
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap-5.3.2.min.css')}}">
  
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

    <!--------------- blog-tittle-section---------------->
    <section class="blog about-blog">
        <div class="container">
            <div class="blog-bradcrum">
                <span><a href="index.html">Home</a></span>
                <span class="devider">/</span>
                <span><a href="#">Dashboard</a></span>
            </div>
            <div class="blog-heading about-heading">
                <h1 class="heading">User Dashboard</h1>
            </div>
        </div>
    </section>
    <!--------------- blog-tittle-section-end---------------->

    <!---------------user-profile-section---------------->
    <section class="user-profile footer-padding">
        <div class="container">
            <div class="user-profile-section">
                <div class="dashboard-heading ">
                    <h5 class="dashboard-title">Profile Page</h5>
                </div>
                <div class="user-dashboard">
                    <div class="nav nav-item nav-pills  me-3" id="v-pills-tab" role="tablist"
                        aria-orientation="vertical">

                        <!-- nav-buttons -->
                        <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
                            aria-selected="true">
                            <span>
                                <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.21258 4.98254C9.21258 6.17687 9.20926 7.37119 9.21391 8.56552C9.21723 9.41928 9.69987 9.9079 10.5483 9.90989C12.2512 9.91454 13.9547 9.91454 15.6576 9.90989C16.5007 9.9079 16.9966 9.40799 16.9979 8.56751C16.9999 6.16757 16.9999 3.76763 16.9979 1.36835C16.9973 0.508624 16.4961 0.00340804 15.6423 0.00274416C13.9613 0.000752505 12.2804 0.00141639 10.5994 0.00274416C9.69722 0.00340804 9.2159 0.488044 9.21391 1.40022C9.21059 2.59388 9.21258 3.78821 9.21258 4.98254ZM7.78722 12.0522C7.78722 10.8579 7.78921 9.66359 7.78656 8.46926C7.78456 7.57036 7.31122 7.09104 6.42028 7.08971C4.73933 7.08639 3.05837 7.08705 1.37742 7.08971C0.489805 7.09104 0.00251398 7.57965 0.0018501 8.46395C0.000522332 10.8526 0.000522332 13.2413 0.0018501 15.6299C0.00251398 16.4896 0.503747 16.9969 1.35551 16.9982C3.04775 17.0002 4.73933 17.0002 6.43157 16.9982C7.2913 16.9969 7.78257 16.5036 7.78589 15.6359C7.78988 14.4409 7.78722 13.2466 7.78722 12.0522ZM3.89022 5.66236C4.75261 5.66236 5.61499 5.66767 6.47738 5.66103C7.28665 5.65439 7.77925 5.16444 7.78523 4.35782C7.79253 3.34075 7.79253 2.32302 7.78523 1.30595C7.77925 0.505968 7.27337 0.00473581 6.47339 0.00274416C4.75924 -0.00123915 3.04576 -0.000575264 1.33161 0.00274416C0.519016 0.00407193 0.00516952 0.516591 0.00251398 1.32719C-0.00146932 2.32236 -0.000141552 3.31752 0.00251398 4.31268C0.00450564 5.15648 0.49578 5.65638 1.33626 5.66169C2.18736 5.667 3.03846 5.66236 3.89022 5.66236ZM13.1083 11.3372C12.2459 11.3372 11.3835 11.3319 10.5211 11.3386C9.71248 11.3452 9.21988 11.8358 9.21457 12.6431C9.20793 13.6602 9.20727 14.6779 9.21457 15.695C9.22055 16.493 9.72908 16.9955 10.5271 16.9969C12.2412 17.0008 13.9547 17.0002 15.6689 16.9969C16.4801 16.9955 16.994 16.481 16.9973 15.6704C17.0013 14.6752 16.9999 13.6801 16.9973 12.6849C16.9953 11.8418 16.502 11.3425 15.6622 11.3379C14.8111 11.3333 13.9594 11.3372 13.1083 11.3372Z" />
                                    <path
                                        d="M9.21223 4.98269C9.21223 3.78837 9.21024 2.59404 9.2129 1.39971C9.21489 0.487533 9.69621 0.00289744 10.5984 0.00223355C12.2794 0.000905786 13.9603 0.000241902 15.6413 0.00223355C16.495 0.00356132 16.9963 0.508777 16.9969 1.36784C16.9983 3.76778 16.9989 6.16773 16.9969 8.567C16.9963 9.40748 16.5004 9.90739 15.6566 9.90938C13.9537 9.91402 12.2502 9.91402 10.5473 9.90938C9.69886 9.90672 9.21622 9.41877 9.2129 8.56501C9.20891 7.37135 9.21223 6.17702 9.21223 4.98269Z" />
                                    <path
                                        d="M7.78832 12.0524C7.78832 13.2467 7.79098 14.441 7.78699 15.6353C7.78434 16.503 7.2924 16.9963 6.43267 16.9976C4.74043 16.9996 3.04885 16.9996 1.35661 16.9976C0.504845 16.9963 0.00361284 16.4891 0.00294895 15.6294C0.00162118 13.2407 0.00162118 10.8521 0.00294895 8.4634C0.00361284 7.57911 0.490904 7.09115 1.37852 7.08916C3.05947 7.08651 4.74043 7.08584 6.42138 7.08916C7.31231 7.09115 7.785 7.56981 7.78766 8.46871C7.79031 9.6637 7.78832 10.858 7.78832 12.0524Z" />
                                    <path
                                        d="M3.89062 5.6621C3.03952 5.6621 2.18775 5.66609 1.33665 5.66077C0.496177 5.65613 0.00490302 5.15622 0.00224748 4.31243C-0.000408054 3.31726 -0.00107194 2.3221 0.00224748 1.32694C0.0055669 0.516336 0.519413 0.00381733 1.33201 0.00248957C3.04616 -0.000829855 4.75964 -0.000829855 6.47379 0.00248957C7.27311 0.00448122 7.77965 0.50505 7.78563 1.30569C7.79293 2.32276 7.79293 3.3405 7.78563 4.35757C7.77965 5.16485 7.28771 5.6548 6.47777 5.66077C5.61539 5.66741 4.753 5.6621 3.89062 5.6621Z" />
                                    <path
                                        d="M13.1081 11.3378C13.9592 11.3378 14.811 11.3338 15.6621 11.3391C16.5019 11.3444 16.9952 11.843 16.9972 12.6862C16.9998 13.6813 17.0005 14.6765 16.9972 15.6716C16.9939 16.4822 16.48 16.9968 15.6687 16.9981C13.9546 17.0014 12.2411 17.0014 10.527 16.9981C9.72831 16.9961 9.21977 16.4935 9.21446 15.6962C9.20716 14.6791 9.20716 13.6614 9.21446 12.6443C9.21977 11.837 9.71237 11.3464 10.521 11.3398C11.3834 11.3325 12.2458 11.3378 13.1081 11.3378Z" />
                                </svg>
                            </span>
                            <span class="text">Dashboard</span>
                        </button>

                        <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile"
                            aria-selected="false">
                            <span>
                                <svg width="14" height="19" viewBox="0 0 14 19" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.96898 10.7061H3.78814C1.6967 10.7061 0.00346265 12.4028 0 14.4942V18.3481H13.7606V14.4942C13.7571 12.4028 12.0604 10.7061 9.96898 10.7061Z" />
                                    <path
                                        d="M6.88098 9.17603C9.41488 9.17603 11.469 7.12191 11.469 4.58802C11.469 2.05412 9.41488 0 6.88098 0C4.34709 0 2.29297 2.05412 2.29297 4.58802C2.29297 7.12191 4.34709 9.17603 6.88098 9.17603Z" />
                                </svg>
                            </span>
                            <span class="text">
                                Personal Info
                            </span>
                        </button>

                        <button class="nav-link" id="v-pills-order-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-order" type="button" role="tab" aria-controls="v-pills-order"
                            aria-selected="false">
                            <span>
                                <svg width="15" height="18" viewBox="0 0 15 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.9643 15.8454C10.8728 15.8399 10.8054 15.8331 10.7381 15.8331C9.37517 15.8324 8.01229 15.8324 6.60539 15.8324C6.85294 16.5145 6.77799 17.099 6.11648 17.4676C5.68672 17.7076 5.24457 17.6615 4.86018 17.3562C4.36027 16.9594 4.3087 16.4409 4.56175 15.8317C3.82667 15.8317 3.13285 15.8406 2.43903 15.8296C1.53136 15.8152 0.910425 14.8958 1.25974 14.0638C1.34845 13.852 1.51898 13.6581 1.69295 13.502C2.43628 12.8384 3.19199 12.1872 3.95182 11.5429C4.11204 11.4075 4.16499 11.2816 4.11479 11.074C3.36389 7.96037 2.61506 4.8454 1.87999 1.72768C1.82085 1.476 1.71564 1.42512 1.48597 1.432C0.997754 1.44712 0.507472 1.43681 0 1.43681C0 1.06824 0 0.741614 0 0.390921C0.782525 0.390921 1.54786 0.377856 2.31182 0.397798C2.58825 0.405362 2.70308 0.630905 2.76772 0.885329C3.01389 1.86177 3.27725 2.83339 3.5138 3.81189C3.57775 4.07732 3.68846 4.22034 3.96901 4.19971C3.98001 4.19903 3.9917 4.20315 4.00339 4.20315C4.60369 4.21003 4.95026 4.4507 5.25488 5.03863C6.60195 7.64613 10.1907 7.96587 12.0686 5.68981C12.2206 5.50622 12.3512 5.44639 12.585 5.4904C13.0911 5.58529 13.6027 5.64855 14.1136 5.71801C14.333 5.74826 14.4306 5.85416 14.4251 6.08314C14.3839 7.93906 14.3461 9.79498 14.3144 11.6509C14.3089 11.9816 14.0937 11.9665 13.8661 11.9665C11.0819 11.9651 8.29697 11.9693 5.51274 11.9596C5.2425 11.959 5.03897 12.0291 4.8368 12.2072C4.05428 12.8962 3.25525 13.5659 2.47135 14.2536C2.37095 14.3416 2.32488 14.4908 2.25337 14.6111C2.38264 14.6552 2.51192 14.737 2.64119 14.737C6.60608 14.7439 10.571 14.7425 14.5358 14.7425C14.6823 14.7425 14.8288 14.7425 15 14.7425C15 15.1152 15 15.4514 15 15.8193C14.3426 15.8193 13.6935 15.8193 13.0127 15.8193C13.25 16.4568 13.2156 17.0055 12.6442 17.4064C12.2536 17.68 11.7406 17.6814 11.3521 17.4091C10.78 17.011 10.7339 16.4636 10.9643 15.8454Z" />
                                    <path
                                        d="M8.8449 6.1337C7.15883 6.12476 5.787 4.74744 5.78906 3.06549C5.79113 1.37254 7.18564 -0.00685072 8.88753 2.55979e-05C10.5702 0.00690192 11.9413 1.38835 11.9392 3.07374C11.9372 4.77563 10.555 6.14264 8.8449 6.1337ZM9.94924 1.61802C9.38194 2.22039 8.85178 2.78287 8.31199 3.35636C8.11326 3.12806 7.94342 2.93278 7.76394 2.72786C7.48201 2.96853 7.22553 3.1872 6.95735 3.41618C7.28191 3.80125 7.57484 4.16708 7.8884 4.51502C8.10157 4.75225 8.43232 4.77082 8.65236 4.54458C9.33656 3.83907 10.0042 3.11775 10.6382 2.44593C10.4031 2.16332 10.1858 1.9027 9.94924 1.61802Z" />
                                </svg>
                            </span>
                            <span class="text">
                                Order
                            </span>
                        </button>
                        <div class="nav-link">
                            <a type="button" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                                <span>
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_113_3043)">
                                            <path
                                                d="M7.50224 15.7537C7.50224 16.0247 7.50895 16.2465 7.5 16.4683C7.4597 17.5682 6.52164 18.2515 5.4806 17.9155C4.00075 17.4383 2.52761 16.9387 1.05448 16.4392C0.380597 16.2107 0 15.6641 0 14.9405C0 10.4892 0 6.03569 0.00223881 1.58218C0.00223881 0.627852 0.629104 0.00955666 1.59403 0.00731646C4.28731 0.00283606 6.98284 -0.00164434 9.67612 0.000595862C11.0104 0.00283606 11.9798 0.961641 12 2.29904C12.0112 2.99126 12.0067 3.68124 12 4.37347C11.9955 4.90439 11.6933 5.25162 11.2478 5.25162C10.8022 5.25386 10.4955 4.90663 10.491 4.37571C10.4843 3.69693 10.4933 3.0159 10.4888 2.33712C10.4843 1.79276 10.209 1.50153 9.67388 1.49705C8.72463 1.48585 7.77761 1.49481 6.82836 1.49481C6.72313 1.49481 6.61791 1.49481 6.46791 1.49481C6.51492 1.55081 6.53284 1.59114 6.56418 1.60682C7.24254 1.91597 7.51119 2.46481 7.51119 3.1884C7.50672 6.72791 7.50895 10.2674 7.50895 13.8069C7.50895 13.9436 7.50895 14.0802 7.50895 14.2415C8.32164 14.2415 9.09179 14.2662 9.8597 14.2303C10.2649 14.2124 10.4888 13.8898 10.491 13.4396C10.4978 12.5031 10.4955 11.5645 10.4933 10.6259C10.4933 10.2854 10.594 10.0008 10.9119 9.83507C11.3888 9.58865 11.9754 9.89332 11.9888 10.4511C12.0179 11.5511 12.0493 12.6577 11.9664 13.7532C11.8746 14.9494 10.9052 15.7447 9.69403 15.7514C8.97537 15.7559 8.26343 15.7537 7.50224 15.7537Z" />
                                            <path
                                                d="M13.4942 6.75005C13.4942 6.02423 13.5009 5.33425 13.492 4.64651C13.4875 4.27463 13.5927 3.96997 13.9532 3.81539C14.3136 3.66082 14.6046 3.79523 14.8688 4.06181C15.8002 5.0027 16.7405 5.93462 17.674 6.87326C18.1061 7.30786 18.1129 7.69094 17.6897 8.11882C16.7494 9.06642 15.8024 10.0073 14.8599 10.9549C14.6091 11.2058 14.327 11.3402 13.9755 11.1946C13.6129 11.0445 13.492 10.7533 13.4964 10.3769C13.5032 9.68695 13.4987 8.99473 13.4987 8.24875C13.3576 8.24875 13.2345 8.24875 13.1114 8.24875C12.2808 8.24875 11.4479 8.25099 10.6173 8.24651C10.0711 8.24427 9.75315 7.962 9.75987 7.4938C9.76435 7.03456 10.0912 6.75453 10.6352 6.75229C11.5666 6.75005 12.5024 6.75005 13.4942 6.75005Z" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_113_3043">
                                                <rect width="18" height="18" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </span>
                                <span class="text">
                                    Logout
                                </span>
                            </a>
                        </div>

                    </div>

                    <!-- nav-content -->
                    <div class="tab-content nav-content" id="v-pills-tabContent" style="flex: 1 0%;">

                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                            aria-labelledby="v-pills-home-tab" tabindex="0">
                            <div class="user-profile">
                                <div class="user-title">
                                    <p class="paragraph">Hello, Sajjad</p>
                                    <h5 class="heading">Welcome to your Profile </h5>
                                </div>
                                <div class="profile-section">
                                    <div class="row g-5">
                                        <div class="col-lg-4 col-sm-6">
                                            <div class="product-wrapper">
                                                <div class="wrapper-img">
                                                    <span>
                                                        <svg width="62" height="62" viewBox="0 0 62 62" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <rect width="62" height="62" rx="4" />
                                                            <path
                                                                d="M45.4473 20.0309C45.482 20.3788 45.5 20.7314 45.5 21.0883C45.5 26.919 40.7564 31.6625 34.9258 31.6625C29.0951 31.6625 24.3516 26.919 24.3516 21.0883C24.3516 20.7314 24.3695 20.3788 24.4042 20.0309H21.9805L21.0554 12.6289H13.7773V14.7438H19.1884L21.5676 33.7774H47.1868L48.8039 20.0309H45.4473Z" />
                                                            <path
                                                                d="M22.0967 38.0074H19.0648C17.3157 38.0074 15.8926 39.4305 15.8926 41.1797C15.8926 42.9289 17.3157 44.352 19.0648 44.352H19.2467C19.1293 44.6829 19.0648 45.0386 19.0648 45.4094C19.0648 47.1586 20.4879 48.5816 22.2371 48.5816C24.4247 48.5816 25.9571 46.4091 25.2274 44.352H35.1081C34.377 46.413 35.9157 48.5816 38.0985 48.5816C39.8476 48.5816 41.2707 47.1586 41.2707 45.4094C41.2707 45.0386 41.2061 44.6829 41.0888 44.352H43.3856V42.2371H19.0648C18.4818 42.2371 18.0074 41.7628 18.0074 41.1797C18.0074 40.5966 18.4818 40.1223 19.0648 40.1223H46.4407L46.9384 35.8926H21.8323L22.0967 38.0074Z" />
                                                            <path
                                                                d="M34.9262 29.5477C39.5907 29.5477 43.3856 25.7528 43.3856 21.0883C43.3856 16.4238 39.5907 12.6289 34.9262 12.6289C30.2616 12.6289 26.4668 16.4238 26.4668 21.0883C26.4668 25.7528 30.2617 29.5477 34.9262 29.5477ZM33.8688 17.916H35.9836V20.6503L37.7886 22.4554L36.2932 23.9508L33.8687 21.5262V17.916H33.8688Z" />
                                                        </svg>
                                                    </span>
                                                </div>
                                                <div class="wrapper-content">
                                                    <p class="paragraph">New Orders</p>
                                                    <h3 class="heading">656</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-6">
                                            <div class="product-wrapper">
                                                <div class="wrapper-img">
                                                    <span>
                                                        <svg width="62" height="62" viewBox="0 0 62 62" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <rect width="62" height="62" rx="4" fill="white" />
                                                            <path
                                                                d="M45.2253 29.8816H44.4827L43.6701 26.3651C43.376 25.1043 42.2552 24.2217 40.9662 24.2217H36.8474V20.8453C36.8474 19.038 35.3764 17.5811 33.5831 17.5811H18.1724C16.4631 17.5811 15.0762 18.968 15.0762 20.6772V37.0967C15.0762 38.8058 16.4631 40.1928 18.1724 40.1928H19.2931C19.8955 42.1962 21.7448 43.6533 23.9304 43.6533C26.1159 43.6533 27.9792 42.1962 28.5816 40.1928C28.8455 40.1928 35.3459 40.1928 35.1942 40.1928C35.7966 42.1962 37.6459 43.6533 39.8315 43.6533C42.031 43.6533 43.8803 42.1962 44.4827 40.1928H45.2253C46.7663 40.1928 47.9992 38.9599 47.9992 37.4189V32.6555C47.9992 31.1145 46.7663 29.8816 45.2253 29.8816ZM23.9304 40.8513C22.7897 40.8513 21.8849 39.8969 21.8849 38.7918C21.8849 37.657 22.7956 36.7324 23.9304 36.7324C25.0652 36.7324 25.9898 37.657 25.9898 38.7918C25.9898 39.9151 25.0692 40.8513 23.9304 40.8513ZM28.9739 25.0622L24.799 28.3125C24.2023 28.7767 23.3035 28.6903 22.8236 28.0604L21.2125 25.9449C20.7361 25.3284 20.8622 24.4458 21.4787 23.9835C22.0811 23.5072 22.9637 23.6332 23.4401 24.2496L24.1966 25.2303L27.2507 22.8487C27.8531 22.3864 28.7357 22.4845 29.2121 23.1009C29.6884 23.7173 29.5763 24.586 28.9739 25.0622ZM39.8315 40.8513C38.6906 40.8513 37.7861 39.8969 37.7861 38.7918C37.7861 37.657 38.7107 36.7324 39.8315 36.7324C40.9662 36.7324 41.8909 37.657 41.8909 38.7918C41.8909 39.9166 40.9683 40.8513 39.8315 40.8513ZM37.618 27.0236H40.2798C40.6021 27.0236 40.8962 27.2337 41.0083 27.542L41.8629 30.0497C42.031 30.5541 41.6667 31.0724 41.1344 31.0724H37.618C37.1976 31.0724 36.8474 30.7222 36.8474 30.3019V27.7942C36.8474 27.3739 37.1976 27.0236 37.618 27.0236Z"
                                                                fill="#FFBB38" />
                                                        </svg>

                                                    </span>
                                                </div>
                                                <div class="wrapper-content">
                                                    <p class="paragraph">Delivery Completed</p>
                                                    <h3 class="heading">99783</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-6">
                                            <div class="product-wrapper">
                                                <div class="wrapper-img">
                                                    <span>
                                                        <svg width="62" height="62" viewBox="0 0 62 62" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <rect width="62" height="62" rx="4" fill="white" />
                                                            <path
                                                                d="M26.7975 34.4331C23.7162 36.0289 22.9563 36.8019 21.6486 39.6816C20.7665 38.8387 19.9011 38.0123 19.0095 37.1599C19.5288 36.3146 20.0327 35.4942 20.5353 34.6726C20.8803 34.1071 20.4607 33.0579 19.8228 32.899C18.8862 32.6666 17.9484 32.4426 17 32.2114C17 30.4034 17 28.6274 17 26.7827C17.9212 26.561 18.8542 26.3405 19.7849 26.1117C20.4678 25.9433 20.8922 24.9048 20.527 24.306C20.0339 23.4987 19.5371 22.6925 19.0605 21.916C20.3551 20.6201 21.6225 19.354 22.9243 18.0534C23.7067 18.5335 24.5283 19.0398 25.3535 19.5425C25.887 19.8673 26.9433 19.4452 27.0927 18.8442C27.3262 17.9064 27.5491 16.965 27.7839 16C29.5883 16 31.3785 16 33.2197 16C33.4366 16.907 33.6548 17.8234 33.8777 18.7386C34.0555 19.4678 35.0763 19.8969 35.7082 19.5093C36.5144 19.0149 37.3182 18.5205 38.0829 18.051C39.3763 19.3445 40.6318 20.6 41.943 21.9124C41.4783 22.6723 40.9756 23.4904 40.4753 24.3108C40.1114 24.9071 40.5405 25.9398 41.2258 26.1081C42.1434 26.3334 43.0646 26.5503 44 26.7756C44 28.5954 44 30.3892 44 32.2197C43.1298 32.426 42.2667 32.6287 41.4048 32.8338C40.4658 33.0579 40.0651 34.0122 40.5654 34.8267C41.029 35.5819 41.4914 36.3383 41.9727 37.122C41.1487 38.004 40.3473 38.8612 39.4901 39.7776C38.5393 37.1741 36.8297 35.4243 34.3163 34.4592C37.5565 31.5332 36.8558 27.4668 34.659 25.411C32.2973 23.1999 28.5995 23.2616 26.3138 25.5639C24.1537 27.7406 23.7186 31.6885 26.7975 34.4331Z"
                                                                fill="#FFBB38" />
                                                            <path
                                                                d="M38.0695 46.3142C33.0415 46.3142 28.0847 46.3142 23.0389 46.3142C23.0389 45.9763 23.0342 45.6491 23.0401 45.3219C23.0626 44.0391 22.9796 42.7421 23.1361 41.4747C23.5357 38.2571 26.1261 35.9239 29.3722 35.8208C30.5886 35.7817 31.8417 35.7757 33.0249 36.0164C35.8643 36.595 37.8916 39.0254 38.0552 41.9359C38.1359 43.3704 38.0695 44.8133 38.0695 46.3142Z"
                                                                fill="#FFBB38" />
                                                            <path
                                                                d="M30.5375 33.9233C28.2244 33.9091 26.3501 32.011 26.3832 29.7193C26.4176 27.4122 28.3169 25.5568 30.6157 25.584C32.8849 25.6101 34.7486 27.5011 34.7403 29.7691C34.7332 32.075 32.8481 33.9375 30.5375 33.9233Z"
                                                                fill="#FFBB38" />
                                                        </svg>

                                                    </span>
                                                </div>
                                                <div class="wrapper-content">
                                                    <p class="paragraph">Support Tickets</p>
                                                    <h3 class="heading">09</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="info-section">
                                                <div class="seller-info">
                                                    <h5 class="heading">Personal Information</h5>
                                                    <div class="info-list">
                                                        <div class="info-title">
                                                            <p>Name:</p>
                                                            <p>Email:</p>
                                                            <p>Phone:</p>
                                                            <p>City:</p>
                                                            <p>Zip:</p>
                                                        </div>
                                                        <div class="info-details">
                                                            <p>Sajjad</p>
                                                            <p>demoemail@gmail.com</p>
                                                            <p>023 434 54354</p>
                                                            <p>Haydarabad, Rord 34</p>
                                                            <p>3454</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="devider"></div>
                                                <div class="shop-info">
                                                    <h5 class="heading">Shop Information</h5>
                                                    <div class="info-list">
                                                        <div class="info-title">
                                                            <p>Name:</p>
                                                            <p>Email:</p>
                                                            <p>Phone:</p>
                                                            <p>City:</p>
                                                            <p>Zip:</p>
                                                        </div>
                                                        <div class="info-details">
                                                            <p>ShopUs Super-Shop</p>
                                                            <p>demoemail@gmail.com</p>
                                                            <p>023 434 54354</p>
                                                            <p>Haydarabad, Rord 34</p>
                                                            <p>3454</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                            aria-labelledby="v-pills-profile-tab" tabindex="0">
                            <div class="seller-application-section">
                                <div class="row ">
                                    <div class="col-lg-7">
                                        <div class=" account-section">
                                            <div class="review-form">
                                                <div class=" account-inner-form">
                                                    <div class="review-form-name">
                                                        <label for="firname" class="form-label">First Name*</label>
                                                        <input type="text" id="firname" class="form-control"
                                                            placeholder="First Name">
                                                    </div>
                                                    <div class="review-form-name">
                                                        <label for="latname" class="form-label">Last Name*</label>
                                                        <input type="text" id="latname" class="form-control"
                                                            placeholder="Last Name">
                                                    </div>
                                                </div>
                                                <div class=" account-inner-form">
                                                    <div class="review-form-name">
                                                        <label for="gmail" class="form-label">Email*</label>
                                                        <input type="email" id="gmail" class="form-control"
                                                            placeholder="user@gmail.com">
                                                    </div>
                                                    <div class="review-form-name">
                                                        <label for="telephone" class="form-label">Phone*</label>
                                                        <input type="tel" id="telephone" class="form-control"
                                                            placeholder="+880388**0899">
                                                    </div>
                                                </div>
                                                <div class="review-form-name">
                                                    <label for="region" class="form-label">Country*</label>
                                                    <select id="region" class="form-select">
                                                        <option>Choose...</option>
                                                        <option>Bangladesh</option>
                                                        <option>United States</option>
                                                        <option>United Kingdom</option>
                                                    </select>
                                                </div>
                                                <div class="review-form-name address-form">
                                                    <label for="addres" class="form-label">Address*</label>
                                                    <input type="text" id="addres" class="form-control"
                                                        placeholder="Enter your Address">
                                                </div>
                                                <div class=" account-inner-form city-inner-form">
                                                    <div class="review-form-name">
                                                        <label for="teritory" class="form-label">Town / City*</label>
                                                        <select id="teritory" class="form-select">
                                                            <option>Choose...</option>
                                                            <option>Newyork</option>
                                                            <option>Dhaka</option>
                                                            <option selected>London</option>
                                                        </select>
                                                    </div>
                                                    <div class="review-form-name">
                                                        <label for="post" class="form-label">Postcode / ZIP*</label>
                                                        <input type="number" id="post" class="form-control"
                                                            placeholder="0000">
                                                    </div>
                                                </div>
                                                <div class="submit-btn">
                                                    <a href="#" class="shop-btn cancel-btn">Cancel</a>
                                                    <a href="#" class="shop-btn update-btn">Update Profile</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="img-upload-section">
                                            <div class="logo-wrapper">
                                                <h5 class="comment-title">Update Logo</h5>
                                                <p class="paragraph">Size300x300. Gifs work
                                                    too.Max 5mb.</p>
                                                <div class="logo-upload">
                                                    <img src="assets/images/homepage-one/sallers-cover.png" alt="upload"
                                                        class="upload-img" id="upload-img">
                                                    <div class="upload-input">
                                                        <label for="input-file">
                                                            <span>
                                                                <svg width="32" height="32" viewBox="0 0 32 32"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M16.5147 11.5C17.7284 12.7137 18.9234 13.9087 20.1296 15.115C19.9798 15.2611 19.8187 15.4109 19.6651 15.5683C17.4699 17.7635 15.271 19.9587 13.0758 22.1539C12.9334 22.2962 12.7948 22.4386 12.6524 22.5735C12.6187 22.6034 12.5663 22.6296 12.5213 22.6296C11.3788 22.6334 10.2362 22.6297 9.09365 22.6334C9.01498 22.6334 9 22.6034 9 22.536C9 21.4009 9 20.2621 9.00375 19.1271C9.00375 19.0746 9.02997 19.0109 9.06368 18.9772C10.4123 17.6249 11.7609 16.2763 13.1095 14.9277C14.2295 13.8076 15.3459 12.6913 16.466 11.5712C16.4884 11.5487 16.4997 11.5187 16.5147 11.5Z"
                                                                        fill="white"></path>
                                                                    <path
                                                                        d="M20.9499 14.2904C19.7436 13.0842 18.5449 11.8854 17.3499 10.6904C17.5634 10.4694 17.7844 10.2446 18.0054 10.0199C18.2639 9.76139 18.5261 9.50291 18.7884 9.24443C19.118 8.91852 19.5713 8.91852 19.8972 9.24443C20.7251 10.0611 21.5492 10.8815 22.3771 11.6981C22.6993 12.0165 22.7105 12.4698 22.3996 12.792C21.9238 13.2865 21.4443 13.7772 20.9686 14.2717C20.9648 14.2792 20.9536 14.2867 20.9499 14.2904Z"
                                                                        fill="white"></path>
                                                                </svg>
                                                            </span>
                                                        </label>
                                                        <input type="file"
                                                            accept="image/jpeg, image/jpg, image/png, image/webp"
                                                            id="input-file">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="v-pills-payment" role="tabpanel"
                            aria-labelledby="v-pills-order-tab" tabindex="0">
                            <div class="payment-section">
                                <div class="wrapper">
                                    <div class="wrapper-item">
                                        <div class="wrapper-img">
                                            <img src="./assets/images/homepage-one/payment-img-1.png" alt="payment">
                                        </div>
                                        <div class="wrapper-content">
                                            <h5 class="heading">Dutch Bangl Bank Lmtd</h5>
                                            <p class="paragraph">Bank **********5535</p>
                                            <p class="verified">Verified</p>
                                        </div>
                                    </div>
                                    <a href="#" class="shop-btn">Manage</a>
                                </div>
                                <hr>
                                <div class="wrapper">
                                    <div class="wrapper-item">
                                        <div class="wrapper-img">
                                            <img src="./assets/images/homepage-one/payment-img-2.png" alt="payment">
                                        </div>
                                        <div class="wrapper-content">
                                            <h5 class="heading">Master Card</h5>
                                            <p class="paragraph">Bank **********5535</p>
                                            <p class="verified">Verified</p>
                                        </div>
                                    </div>
                                    <a href="#" class="shop-btn">Manage</a>
                                </div>
                                <hr>
                                <div class="wrapper">
                                    <div class="wrapper-item">
                                        <div class="wrapper-img">
                                            <img src="./assets/images/homepage-one/payment-img-3.png" alt="payment">
                                        </div>
                                        <div class="wrapper-content">
                                            <h5 class="heading">Paypal Account</h5>
                                            <p class="paragraph">Bank **********5535</p>
                                            <p class="verified">Verified</p>
                                        </div>
                                    </div>
                                    <a href="#" class="shop-btn">Manage</a>
                                </div>
                                <hr>
                                <div class="wrapper">
                                    <div class="wrapper-item">
                                        <div class="wrapper-img">
                                            <img src="./assets/images/homepage-one/payment-img-4.png" alt="payment">
                                        </div>
                                        <div class="wrapper-content">
                                            <h5 class="heading">Visa Card</h5>
                                            <p class="paragraph">Bank **********5535</p>
                                            <p class="verified">Verified</p>
                                        </div>
                                    </div>
                                    <a href="#" class="shop-btn">Manage</a>
                                </div>
                                <hr>
                                <div class="wrapper-btn">
                                    <a href="#" class="shop-btn" onclick="modalAction('.cart')">Add Cart</a>

                                    <!-- cart-modal -->
                                    <div class="modal-wrapper cart">
                                        <div onclick="modalAction('.cart')" class="anywhere-away"></div>

                                        <!-- change this -->
                                        <div class="login-section account-section modal-main">
                                            <div class="review-form">
                                                <div class="review-content">
                                                    <h5 class="comment-title">Add New Card</h5>
                                                    <div class="close-btn">
                                                        <img src="./assets/images/homepage-one/close-btn.png"
                                                            onclick="modalAction('.cart')" alt="close-btn">
                                                    </div>
                                                </div>
                                                <div class="review-form-name address-form">
                                                    <label for="cnumber" class="form-label">Card Number*</label>
                                                    <input type="number" id="cnumber" class="form-control"
                                                        placeholder="*** *** ***">
                                                </div>
                                                <div class="review-form-name address-form">
                                                    <label for="holdername" class="form-label">Card Holder Name*</label>
                                                    <input type="text" id="holdername" class="form-control"
                                                        placeholder="Demo Name">
                                                </div>
                                                <div class=" account-inner-form">
                                                    <div class="review-form-name">
                                                        <label for="expirydate" class="form-label">Expiry Date*</label>
                                                        <input type="date" id="expirydate" class="form-control">
                                                    </div>
                                                    <div class="review-form-name">
                                                        <label for="cvv" class="form-label">CVV*</label>
                                                        <input type="number" id="cvv" class="form-control"
                                                            placeholder="21232">
                                                    </div>
                                                </div>
                                                <div class="login-btn text-center">
                                                    <a href="#" onclick="modalAction('.cart')" class="shop-btn">Add
                                                        Card</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- change this -->

                                    </div>
                                    <a href="#" class="shop-btn bank-btn" onclick="modalAction('.bank')">Add Bank</a>

                                    <!-- bank-modal -->
                                    <div class="modal-wrapper bank">
                                        <div onclick="modalAction('.bank')" class="anywhere-away"></div>

                                        <!-- change this -->
                                        <div class="login-section account-section modal-main">
                                            <div class="review-form">
                                                <div class="review-content">
                                                    <h5 class="comment-title">Add Bank Account</h5>
                                                    <div class="close-btn">
                                                        <img src="./assets/images/homepage-one/close-btn.png"
                                                            onclick="modalAction('.bank')" alt="close-btn">
                                                    </div>
                                                </div>
                                                <div class="review-form-name address-form">
                                                    <label for="accountnumber" class="form-label">Account
                                                        Number*</label>
                                                    <input type="number" id="accountnumber" class="form-control"
                                                        placeholder="*** *** ***">
                                                </div>
                                                <div class="review-form-name address-form">
                                                    <label for="accountholdername" class="form-label">Card Holder
                                                        Name*</label>
                                                    <input type="text" id="accountholdername" class="form-control"
                                                        placeholder="Demo Name">
                                                </div>
                                                <div class=" account-inner-form">
                                                    <div class="review-form-name">
                                                        <label for="branchname" class="form-label">Branch*</label>
                                                        <input type="text" id="branchname" class="form-control"
                                                            placeholder="Demo Branch">
                                                    </div>
                                                    <div class="review-form-name">
                                                        <label for="ipscode" class="form-label">IPSC Code</label>
                                                        <input type="number" id="ipscode" class="form-control"
                                                            placeholder="21232">
                                                    </div>
                                                </div>
                                                <div class="login-btn text-center">
                                                    <a href="#" onclick="modalAction('.bank')" class="shop-btn">Add Bank
                                                        Account</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- change this -->

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="v-pills-order" role="tabpanel"
                            aria-labelledby="v-pills-order-tab" tabindex="0">
                            <div class="cart-section">
                                <table>
                                    <tbody>
                                        <tr class="table-row table-top-row">
                                            <td class="table-wrapper wrapper-product">
                                                <h5 class="table-heading">PRODUCT</h5>
                                            </td>
                                            <td class="table-wrapper">
                                                <div class="table-wrapper-center">
                                                    <h5 class="table-heading">PRICE</h5>
                                                </div>
                                            </td>
                                            <td class="table-wrapper">
                                                <div class="table-wrapper-center">
                                                    <h5 class="table-heading">QUANTITY</h5>
                                                </div>
                                            </td>
                                            <td class="table-wrapper wrapper-total">
                                                <div class="table-wrapper-center">
                                                    <h5 class="table-heading">TOTAL</h5>
                                                </div>
                                            </td>
                                            <td class="table-wrapper">
                                                <div class="table-wrapper-center">
                                                    <h5 class="table-heading">ACTION</h5>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="table-row ticket-row">
                                            <td class="table-wrapper wrapper-product">
                                                <div class="wrapper">
                                                    <div class="wrapper-img">
                                                        <img src="./assets/images/homepage-one/product-img/product-img-1.webp"
                                                            alt="img">
                                                    </div>
                                                    <div class="wrapper-content">
                                                        <h5 class="heading">Classic Design Skart</h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="table-wrapper">
                                                <div class="table-wrapper-center">
                                                    <h5 class="heading">$20.00</h5>
                                                </div>
                                            </td>
                                            <td class="table-wrapper">
                                                <div class="table-wrapper-center">
                                                    <div class="quantity">
                                                        <span class="minus">
                                                            -
                                                        </span>
                                                        <span class="number">1</span>
                                                        <span class="plus">
                                                            +
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="table-wrapper wrapper-total">
                                                <div class="table-wrapper-center">
                                                    <h5 class="heading">$40.00</h5>
                                                </div>
                                            </td>
                                            <td class="table-wrapper">
                                                <div class="table-wrapper-center">
                                                    <span>
                                                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.7 0.3C9.3 -0.1 8.7 -0.1 8.3 0.3L5 3.6L1.7 0.3C1.3 -0.1 0.7 -0.1 0.3 0.3C-0.1 0.7 -0.1 1.3 0.3 1.7L3.6 5L0.3 8.3C-0.1 8.7 -0.1 9.3 0.3 9.7C0.7 10.1 1.3 10.1 1.7 9.7L5 6.4L8.3 9.7C8.7 10.1 9.3 10.1 9.7 9.7C10.1 9.3 10.1 8.7 9.7 8.3L6.4 5L9.7 1.7C10.1 1.3 10.1 0.7 9.7 0.3Z"
                                                                fill="#AAAAAA"></path>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="table-row ticket-row">
                                            <td class="table-wrapper wrapper-product">
                                                <div class="wrapper">
                                                    <div class="wrapper-img">
                                                        <img src="./assets/images/homepage-one/product-img/product-img-2.webp"
                                                            alt="img">
                                                    </div>
                                                    <div class="wrapper-content">
                                                        <h5 class="heading">Classic Black Suit</h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="table-wrapper">
                                                <div class="table-wrapper-center">
                                                    <h5 class="heading">$20.00</h5>
                                                </div>
                                            </td>
                                            <td class="table-wrapper">
                                                <div class="table-wrapper-center">
                                                    <div class="quantity">
                                                        <span class="minus">
                                                            -
                                                        </span>
                                                        <span class="number">1</span>
                                                        <span class="plus">
                                                            +
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="table-wrapper wrapper-total">
                                                <div class="table-wrapper-center">
                                                    <h5 class="heading">$40.00</h5>
                                                </div>
                                            </td>
                                            <td class="table-wrapper ">
                                                <div class="table-wrapper-center">
                                                    <span>
                                                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.7 0.3C9.3 -0.1 8.7 -0.1 8.3 0.3L5 3.6L1.7 0.3C1.3 -0.1 0.7 -0.1 0.3 0.3C-0.1 0.7 -0.1 1.3 0.3 1.7L3.6 5L0.3 8.3C-0.1 8.7 -0.1 9.3 0.3 9.7C0.7 10.1 1.3 10.1 1.7 9.7L5 6.4L8.3 9.7C8.7 10.1 9.3 10.1 9.7 9.7C10.1 9.3 10.1 8.7 9.7 8.3L6.4 5L9.7 1.7C10.1 1.3 10.1 0.7 9.7 0.3Z"
                                                                fill="#AAAAAA"></path>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="table-row ticket-row">
                                            <td class="table-wrapper wrapper-product">
                                                <div class="wrapper">
                                                    <div class="wrapper-img">
                                                        <img src="./assets/images/homepage-one/product-img/product-img-3.webp"
                                                            alt="img">
                                                    </div>
                                                    <div class="wrapper-content">
                                                        <h5 class="heading">Blue Party Dress</h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="table-wrapper">
                                                <div class="table-wrapper-center">
                                                    <h5 class="heading">$20.00</h5>
                                                </div>
                                            </td>
                                            <td class="table-wrapper">
                                                <div class="table-wrapper-center">
                                                    <div class="quantity">
                                                        <span class="minus">
                                                            -
                                                        </span>
                                                        <span class="number">1</span>
                                                        <span class="plus">
                                                            +
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="table-wrapper wrapper-total">
                                                <div class="table-wrapper-center">
                                                    <h5 class="heading">$40.00</h5>
                                                </div>
                                            </td>
                                            <td class="table-wrapper">
                                                <div class="table-wrapper-center">
                                                    <span>
                                                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.7 0.3C9.3 -0.1 8.7 -0.1 8.3 0.3L5 3.6L1.7 0.3C1.3 -0.1 0.7 -0.1 0.3 0.3C-0.1 0.7 -0.1 1.3 0.3 1.7L3.6 5L0.3 8.3C-0.1 8.7 -0.1 9.3 0.3 9.7C0.7 10.1 1.3 10.1 1.7 9.7L5 6.4L8.3 9.7C8.7 10.1 9.3 10.1 9.7 9.7C10.1 9.3 10.1 8.7 9.7 8.3L6.4 5L9.7 1.7C10.1 1.3 10.1 0.7 9.7 0.3Z"
                                                                fill="#AAAAAA"></path>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="table-row ticket-row">
                                            <td class="table-wrapper wrapper-product">
                                                <div class="wrapper">
                                                    <div class="wrapper-img">
                                                        <img src="./assets/images/homepage-one/product-img/product-img-4.webp"
                                                            alt="img">
                                                    </div>
                                                    <div class="wrapper-content">
                                                        <h5 class="heading">Classic Party Dress</h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="table-wrapper">
                                                <div class="table-wrapper-center">
                                                    <h5 class="heading">$20.00</h5>
                                                </div>
                                            </td>
                                            <td class="table-wrapper">
                                                <div class="table-wrapper-center">
                                                    <div class="quantity">
                                                        <span class="minus">
                                                            -
                                                        </span>
                                                        <span class="number">1</span>
                                                        <span class="plus">
                                                            +
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="table-wrapper wrapper-total">
                                                <div class="table-wrapper-center">
                                                    <h5 class="heading">$40.00</h5>
                                                </div>
                                            </td>
                                            <td class="table-wrapper">
                                                <div class="table-wrapper-center">
                                                    <span>
                                                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.7 0.3C9.3 -0.1 8.7 -0.1 8.3 0.3L5 3.6L1.7 0.3C1.3 -0.1 0.7 -0.1 0.3 0.3C-0.1 0.7 -0.1 1.3 0.3 1.7L3.6 5L0.3 8.3C-0.1 8.7 -0.1 9.3 0.3 9.7C0.7 10.1 1.3 10.1 1.7 9.7L5 6.4L8.3 9.7C8.7 10.1 9.3 10.1 9.7 9.7C10.1 9.3 10.1 8.7 9.7 8.3L6.4 5L9.7 1.7C10.1 1.3 10.1 0.7 9.7 0.3Z"
                                                                fill="#AAAAAA"></path>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="v-pills-wishlist" role="tabpanel"
                            aria-labelledby="v-pills-wishlist-tab" tabindex="0">

                            <div class="wishlist">
                                <div class="cart-content">
                                    <h5 class="cart-heading">SpaceRace</h5>
                                    <p>Order ID: <span class="inner-text">#4345</span></p>
                                </div>
                                <div class="cart-section wishlist-section">
                                    <table>
                                        <tbody>
                                            <tr class="table-row table-top-row">
                                                <td class="table-wrapper wrapper-product">
                                                    <h5 class="table-heading">PRODUCT</h5>
                                                </td>
                                                <td class="table-wrapper">
                                                    <div class="table-wrapper-center">
                                                        <h5 class="table-heading">PRICE</h5>
                                                    </div>
                                                </td>
                                                <td class="table-wrapper">
                                                    <div class="table-wrapper-center">
                                                        <h5 class="table-heading">ACTION</h5>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="table-row ticket-row">
                                                <td class="table-wrapper wrapper-product">
                                                    <div class="wrapper">
                                                        <div class="wrapper-img">
                                                            <img src="./assets/images/homepage-one/product-img/product-img-1.webp"
                                                                alt="img">
                                                        </div>
                                                        <div class="wrapper-content">
                                                            <h5 class="heading">Classic Design Skart</h5>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="table-wrapper">
                                                    <div class="table-wrapper-center">
                                                        <h5 class="heading">$20.00</h5>
                                                    </div>
                                                </td>
                                                <td class="table-wrapper">
                                                    <div class="table-wrapper-center">
                                                        <span>
                                                            <svg width="10" height="10" viewBox="0 0 10 10" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M9.7 0.3C9.3 -0.1 8.7 -0.1 8.3 0.3L5 3.6L1.7 0.3C1.3 -0.1 0.7 -0.1 0.3 0.3C-0.1 0.7 -0.1 1.3 0.3 1.7L3.6 5L0.3 8.3C-0.1 8.7 -0.1 9.3 0.3 9.7C0.7 10.1 1.3 10.1 1.7 9.7L5 6.4L8.3 9.7C8.7 10.1 9.3 10.1 9.7 9.7C10.1 9.3 10.1 8.7 9.7 8.3L6.4 5L9.7 1.7C10.1 1.3 10.1 0.7 9.7 0.3Z"
                                                                    fill="#AAAAAA"></path>
                                                            </svg>
                                                        </span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="table-row ticket-row">
                                                <td class="table-wrapper wrapper-product">
                                                    <div class="wrapper">
                                                        <div class="wrapper-img">
                                                            <img src="./assets/images/homepage-one/product-img/product-img-2.webp"
                                                                alt="img">
                                                        </div>
                                                        <div class="wrapper-content">
                                                            <h5 class="heading">Classic Black Suit</h5>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="table-wrapper">
                                                    <div class="table-wrapper-center">
                                                        <h5 class="heading">$20.00</h5>
                                                    </div>
                                                </td>
                                                <td class="table-wrapper ">
                                                    <div class="table-wrapper-center">
                                                        <span>
                                                            <svg width="10" height="10" viewBox="0 0 10 10" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M9.7 0.3C9.3 -0.1 8.7 -0.1 8.3 0.3L5 3.6L1.7 0.3C1.3 -0.1 0.7 -0.1 0.3 0.3C-0.1 0.7 -0.1 1.3 0.3 1.7L3.6 5L0.3 8.3C-0.1 8.7 -0.1 9.3 0.3 9.7C0.7 10.1 1.3 10.1 1.7 9.7L5 6.4L8.3 9.7C8.7 10.1 9.3 10.1 9.7 9.7C10.1 9.3 10.1 8.7 9.7 8.3L6.4 5L9.7 1.7C10.1 1.3 10.1 0.7 9.7 0.3Z"
                                                                    fill="#AAAAAA"></path>
                                                            </svg>
                                                        </span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="table-row ticket-row">
                                                <td class="table-wrapper wrapper-product">
                                                    <div class="wrapper">
                                                        <div class="wrapper-img">
                                                            <img src="./assets/images/homepage-one/product-img/product-img-3.webp"
                                                                alt="img">
                                                        </div>
                                                        <div class="wrapper-content">
                                                            <h5 class="heading">Blue Party Dress</h5>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="table-wrapper">
                                                    <div class="table-wrapper-center">
                                                        <h5 class="heading">$20.00</h5>
                                                    </div>
                                                </td>
                                                <td class="table-wrapper">
                                                    <div class="table-wrapper-center">
                                                        <span>
                                                            <svg width="10" height="10" viewBox="0 0 10 10" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M9.7 0.3C9.3 -0.1 8.7 -0.1 8.3 0.3L5 3.6L1.7 0.3C1.3 -0.1 0.7 -0.1 0.3 0.3C-0.1 0.7 -0.1 1.3 0.3 1.7L3.6 5L0.3 8.3C-0.1 8.7 -0.1 9.3 0.3 9.7C0.7 10.1 1.3 10.1 1.7 9.7L5 6.4L8.3 9.7C8.7 10.1 9.3 10.1 9.7 9.7C10.1 9.3 10.1 8.7 9.7 8.3L6.4 5L9.7 1.7C10.1 1.3 10.1 0.7 9.7 0.3Z"
                                                                    fill="#AAAAAA"></path>
                                                            </svg>
                                                        </span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="table-row ticket-row">
                                                <td class="table-wrapper wrapper-product">
                                                    <div class="wrapper">
                                                        <div class="wrapper-img">
                                                            <img src="./assets/images/homepage-one/product-img/product-img-4.webp"
                                                                alt="img">
                                                        </div>
                                                        <div class="wrapper-content">
                                                            <h5 class="heading">Classic Party Dress</h5>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="table-wrapper">
                                                    <div class="table-wrapper-center">
                                                        <h5 class="heading">$20.00</h5>
                                                    </div>
                                                </td>
                                                <td class="table-wrapper">
                                                    <div class="table-wrapper-center">
                                                        <span>
                                                            <svg width="10" height="10" viewBox="0 0 10 10" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M9.7 0.3C9.3 -0.1 8.7 -0.1 8.3 0.3L5 3.6L1.7 0.3C1.3 -0.1 0.7 -0.1 0.3 0.3C-0.1 0.7 -0.1 1.3 0.3 1.7L3.6 5L0.3 8.3C-0.1 8.7 -0.1 9.3 0.3 9.7C0.7 10.1 1.3 10.1 1.7 9.7L5 6.4L8.3 9.7C8.7 10.1 9.3 10.1 9.7 9.7C10.1 9.3 10.1 8.7 9.7 8.3L6.4 5L9.7 1.7C10.1 1.3 10.1 0.7 9.7 0.3Z"
                                                                    fill="#AAAAAA"></path>
                                                            </svg>
                                                        </span>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="wishlist-btn">
                                    <a href="#" class="clean-btn">Clean Wishlist</a>
                                    <a href="#" class="shop-btn">View Cards</a>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="v-pills-address" role="tabpanel"
                            aria-labelledby="v-pills-address-tab" tabindex="0">
                            <div class="profile-section address-section addresses ">
                                <div class="row gy-md-0 g-5">
                                    <div class="col-md-6">
                                        <div class="seller-info">
                                            <h5 class="heading">Address-01</h5>
                                            <div class="info-list">
                                                <div class="info-title">
                                                    <p>Name:</p>
                                                    <p>Email:</p>
                                                    <p>Phone:</p>
                                                    <p>City:</p>
                                                    <p>Zip:</p>
                                                </div>
                                                <div class="info-details">
                                                    <p>Sajjad</p>
                                                    <p>demoemail@gmail.com</p>
                                                    <p>023 434 54354</p>
                                                    <p>Haydarabad, Rord 34</p>
                                                    <p>3454</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="seller-info">
                                            <h5 class="heading">Address-02</h5>
                                            <div class="info-list">
                                                <div class="info-title">
                                                    <p>Name:</p>
                                                    <p>Email:</p>
                                                    <p>Phone:</p>
                                                    <p>City:</p>
                                                    <p>Zip:</p>
                                                </div>
                                                <div class="info-details">
                                                    <p>Sajjad</p>
                                                    <p>demoemail@gmail.com</p>
                                                    <p>023 434 54354</p>
                                                    <p>Haydarabad, Rord 34</p>
                                                    <p>3454</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <a href="#" class="shop-btn" onclick="modalAction('.submit')">Add New
                                            Address</a>
                                        <!-- modal -->
                                        <div class="modal-wrapper submit">
                                            <div onclick="modalAction('.submit')" class="anywhere-away"></div>

                                            <!-- change this -->
                                            <div class="login-section account-section modal-main">
                                                <div class="review-form">
                                                    <div class="review-content">
                                                        <h5 class="comment-title">Add Your Address</h5>
                                                        <div class="close-btn">
                                                            <img src="./assets/images/homepage-one/close-btn.png"
                                                                onclick="modalAction('.submit')" alt="close-btn">
                                                        </div>
                                                    </div>
                                                    <div class=" account-inner-form">
                                                        <div class="review-form-name">
                                                            <label for="firstname" class="form-label">First
                                                                Name*</label>
                                                            <input type="text" id="firstname" class="form-control"
                                                                placeholder="First Name">
                                                        </div>
                                                        <div class="review-form-name">
                                                            <label for="lastname" class="form-label">Last Name*</label>
                                                            <input type="text" id="lastname" class="form-control"
                                                                placeholder="Last Name">
                                                        </div>
                                                    </div>
                                                    <div class=" account-inner-form">
                                                        <div class="review-form-name">
                                                            <label for="useremail" class="form-label">Email*</label>
                                                            <input type="email" id="useremail" class="form-control"
                                                                placeholder="user@gmail.com">
                                                        </div>
                                                        <div class="review-form-name">
                                                            <label for="userphone" class="form-label">Phone*</label>
                                                            <input type="tel" id="userphone" class="form-control"
                                                                placeholder="+880388**0899">
                                                        </div>
                                                    </div>
                                                    <div class="review-form-name address-form">
                                                        <label for="useraddress" class="form-label">Address*</label>
                                                        <input type="text" id="useraddress" class="form-control"
                                                            placeholder="Enter your Address">
                                                    </div>
                                                    <div class=" account-inner-form city-inner-form">
                                                        <div class="review-form-name">
                                                            <label for="usercity" class="form-label">Town /
                                                                City*</label>
                                                            <select id="usercity" class="form-select">
                                                                <option>Choose...</option>
                                                                <option>Newyork</option>
                                                                <option>Dhaka</option>
                                                                <option selected>London</option>
                                                            </select>
                                                        </div>
                                                        <div class="review-form-name">
                                                            <label for="usernumber" class="form-label">Postcode /
                                                                ZIP*</label>
                                                            <input type="number" id="usernumber" class="form-control"
                                                                placeholder="0000">
                                                        </div>
                                                    </div>
                                                    <div class="login-btn text-center">
                                                        <a href="#" onclick="modalAction('.submit')"
                                                            class="shop-btn">Add Address</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- change this -->

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="v-pills-review" role="tabpanel"
                            aria-labelledby="v-pills-review-tab" tabindex="0">

                            <div class="top-selling-section">
                                <div class="row g-5">
                                    <div class="col-md-6">
                                        <div class="product-wrapper">
                                            <div class="product-img">
                                                <img src="./assets/images/homepage-one/product-img/product-img-5.webp"
                                                    alt="product-img">
                                            </div>
                                            <div class="product-info">
                                                <div class="review-date">
                                                    <p>July 22, 2022</p>
                                                </div>
                                                <div class="ratings">
                                                    <span>
                                                        <svg width="75" height="15" viewBox="0 0 75 15" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M7.5 0L9.18386 5.18237H14.6329L10.2245 8.38525L11.9084 13.5676L7.5 10.3647L3.09161 13.5676L4.77547 8.38525L0.367076 5.18237H5.81614L7.5 0Z"
                                                                fill="#FFA800" />
                                                            <path
                                                                d="M22.5 0L24.1839 5.18237H29.6329L25.2245 8.38525L26.9084 13.5676L22.5 10.3647L18.0916 13.5676L19.7755 8.38525L15.3671 5.18237H20.8161L22.5 0Z"
                                                                fill="#FFA800" />
                                                            <path
                                                                d="M37.5 0L39.1839 5.18237H44.6329L40.2245 8.38525L41.9084 13.5676L37.5 10.3647L33.0916 13.5676L34.7755 8.38525L30.3671 5.18237H35.8161L37.5 0Z"
                                                                fill="#FFA800" />
                                                            <path
                                                                d="M52.5 0L54.1839 5.18237H59.6329L55.2245 8.38525L56.9084 13.5676L52.5 10.3647L48.0916 13.5676L49.7755 8.38525L45.3671 5.18237H50.8161L52.5 0Z"
                                                                fill="#FFA800" />
                                                            <path
                                                                d="M67.5 0L69.1839 5.18237H74.6329L70.2245 8.38525L71.9084 13.5676L67.5 10.3647L63.0916 13.5676L64.7755 8.38525L60.3671 5.18237H65.8161L67.5 0Z"
                                                                fill="#FFA800" />
                                                        </svg>
                                                    </span>
                                                </div>
                                                <div class="product-description">
                                                    <a href="product-sidebar.html" class="product-details">Rainbow
                                                        Sequin Dress
                                                    </a>
                                                    <p>Didn't I tell you not put your phone on charge because weekend?
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="product-cart-btn">
                                                <a href="cart.html" class="product-btn">Edit Review</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="product-wrapper">
                                            <div class="product-img">
                                                <img src="./assets/images/homepage-one/product-img/product-img-6.webp"
                                                    alt="product-img">
                                            </div>
                                            <div class="product-info">
                                                <div class="review-date">
                                                    <p>July 22, 2022</p>
                                                </div>
                                                <div class="ratings">
                                                    <span>
                                                        <svg width="75" height="15" viewBox="0 0 75 15" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M7.5 0L9.18386 5.18237H14.6329L10.2245 8.38525L11.9084 13.5676L7.5 10.3647L3.09161 13.5676L4.77547 8.38525L0.367076 5.18237H5.81614L7.5 0Z"
                                                                fill="#FFA800" />
                                                            <path
                                                                d="M22.5 0L24.1839 5.18237H29.6329L25.2245 8.38525L26.9084 13.5676L22.5 10.3647L18.0916 13.5676L19.7755 8.38525L15.3671 5.18237H20.8161L22.5 0Z"
                                                                fill="#FFA800" />
                                                            <path
                                                                d="M37.5 0L39.1839 5.18237H44.6329L40.2245 8.38525L41.9084 13.5676L37.5 10.3647L33.0916 13.5676L34.7755 8.38525L30.3671 5.18237H35.8161L37.5 0Z"
                                                                fill="#FFA800" />
                                                            <path
                                                                d="M52.5 0L54.1839 5.18237H59.6329L55.2245 8.38525L56.9084 13.5676L52.5 10.3647L48.0916 13.5676L49.7755 8.38525L45.3671 5.18237H50.8161L52.5 0Z"
                                                                fill="#FFA800" />
                                                            <path
                                                                d="M67.5 0L69.1839 5.18237H74.6329L70.2245 8.38525L71.9084 13.5676L67.5 10.3647L63.0916 13.5676L64.7755 8.38525L60.3671 5.18237H65.8161L67.5 0Z"
                                                                fill="#FFA800" />
                                                        </svg>
                                                    </span>
                                                </div>
                                                <div class="product-description">
                                                    <a href="product-sidebar.html" class="product-details">Rainbow
                                                        Sequin Dress
                                                    </a>
                                                    <p>Didn't I tell you not put your phone on charge because weekend?
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="product-cart-btn">
                                                <a href="cart.html" class="product-btn">Edit Review</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="product-wrapper">
                                            <div class="product-img">
                                                <img src="./assets/images/homepage-one/product-img/product-img-7.webp"
                                                    alt="product-img">
                                            </div>
                                            <div class="product-info">
                                                <div class="review-date">
                                                    <p>July 22, 2022</p>
                                                </div>
                                                <div class="ratings">
                                                    <span>
                                                        <svg width="75" height="15" viewBox="0 0 75 15" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M7.5 0L9.18386 5.18237H14.6329L10.2245 8.38525L11.9084 13.5676L7.5 10.3647L3.09161 13.5676L4.77547 8.38525L0.367076 5.18237H5.81614L7.5 0Z"
                                                                fill="#FFA800" />
                                                            <path
                                                                d="M22.5 0L24.1839 5.18237H29.6329L25.2245 8.38525L26.9084 13.5676L22.5 10.3647L18.0916 13.5676L19.7755 8.38525L15.3671 5.18237H20.8161L22.5 0Z"
                                                                fill="#FFA800" />
                                                            <path
                                                                d="M37.5 0L39.1839 5.18237H44.6329L40.2245 8.38525L41.9084 13.5676L37.5 10.3647L33.0916 13.5676L34.7755 8.38525L30.3671 5.18237H35.8161L37.5 0Z"
                                                                fill="#FFA800" />
                                                            <path
                                                                d="M52.5 0L54.1839 5.18237H59.6329L55.2245 8.38525L56.9084 13.5676L52.5 10.3647L48.0916 13.5676L49.7755 8.38525L45.3671 5.18237H50.8161L52.5 0Z"
                                                                fill="#FFA800" />
                                                            <path
                                                                d="M67.5 0L69.1839 5.18237H74.6329L70.2245 8.38525L71.9084 13.5676L67.5 10.3647L63.0916 13.5676L64.7755 8.38525L60.3671 5.18237H65.8161L67.5 0Z"
                                                                fill="#FFA800" />
                                                        </svg>
                                                    </span>
                                                </div>
                                                <div class="product-description">
                                                    <a href="product-sidebar.html" class="product-details">Rainbow
                                                        Sequin Dress
                                                    </a>
                                                    <p>Didn't I tell you not put your phone on charge because weekend?
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="product-cart-btn">
                                                <a href="cart.html" class="product-btn">Edit Review</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="product-wrapper">
                                            <div class="product-img">
                                                <img src="./assets/images/homepage-one/product-img/product-img-8.webp"
                                                    alt="product-img">
                                            </div>
                                            <div class="product-info">
                                                <div class="review-date">
                                                    <p>July 22, 2022</p>
                                                </div>
                                                <div class="ratings">
                                                    <span>
                                                        <svg width="75" height="15" viewBox="0 0 75 15" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M7.5 0L9.18386 5.18237H14.6329L10.2245 8.38525L11.9084 13.5676L7.5 10.3647L3.09161 13.5676L4.77547 8.38525L0.367076 5.18237H5.81614L7.5 0Z"
                                                                fill="#FFA800" />
                                                            <path
                                                                d="M22.5 0L24.1839 5.18237H29.6329L25.2245 8.38525L26.9084 13.5676L22.5 10.3647L18.0916 13.5676L19.7755 8.38525L15.3671 5.18237H20.8161L22.5 0Z"
                                                                fill="#FFA800" />
                                                            <path
                                                                d="M37.5 0L39.1839 5.18237H44.6329L40.2245 8.38525L41.9084 13.5676L37.5 10.3647L33.0916 13.5676L34.7755 8.38525L30.3671 5.18237H35.8161L37.5 0Z"
                                                                fill="#FFA800" />
                                                            <path
                                                                d="M52.5 0L54.1839 5.18237H59.6329L55.2245 8.38525L56.9084 13.5676L52.5 10.3647L48.0916 13.5676L49.7755 8.38525L45.3671 5.18237H50.8161L52.5 0Z"
                                                                fill="#FFA800" />
                                                            <path
                                                                d="M67.5 0L69.1839 5.18237H74.6329L70.2245 8.38525L71.9084 13.5676L67.5 10.3647L63.0916 13.5676L64.7755 8.38525L60.3671 5.18237H65.8161L67.5 0Z"
                                                                fill="#FFA800" />
                                                        </svg>
                                                    </span>
                                                </div>
                                                <div class="product-description">
                                                    <a href="product-sidebar.html" class="product-details">Rainbow
                                                        Sequin Dress
                                                    </a>
                                                    <p>Didn't I tell you not put your phone on charge because weekend?
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="product-cart-btn">
                                                <a href="cart.html" class="product-btn">Edit Review</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="v-pills-password" role="tabpanel"
                            aria-labelledby="v-pills-password-tab" tabindex="0">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="form-section">
                                        <form action="#">
                                            <div class="currentpass form-item">
                                                <label for="currentpass" class="form-label">Current Password*</label>
                                                <input type="password" class="form-control" id="currentpass"
                                                    placeholder="******">
                                            </div>
                                            <div class="password form-item">
                                                <label for="pass" class="form-label">Password*</label>
                                                <input type="password" class="form-control" id="pass"
                                                    placeholder="******">
                                            </div>
                                            <div class="re-password form-item">
                                                <label for="repass" class="form-label">Re-enter Password*</label>
                                                <input type="password" class="form-control" id="repass"
                                                    placeholder="******">
                                            </div>
                                        </form>
                                        <div class="form-btn">
                                            <a href="#" class="shop-btn">Upldate Password</a>
                                            <a href="#" class="shop-btn cancel-btn">Cancel</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="reset-img text-end">
                                        <img src="./assets/images/homepage-one/reset.webp" alt="reset">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="v-pills-ticket" role="tabpanel"
                            aria-labelledby="v-pills-ticket-tab" tabindex="0">
                            <div class="support-ticket">
                                <a href="#" class="shop-btn" onclick="modalAction('.ticket')">Add New Support</a>

                                <!-- ticket-modal -->
                                <div class="modal-wrapper ticket">
                                    <div onclick="modalAction('.ticket')" class="anywhere-away"></div>

                                    <!-- change this -->
                                    <div class="login-section account-section modal-main">
                                        <div class="review-form">
                                            <div class="review-content">
                                                <h5 class="comment-title">Add New Ticket</h5>
                                                <div class="close-btn">
                                                    <img src="./assets/images/homepage-one/close-btn.png"
                                                        onclick="modalAction('.ticket')" alt="close-btn">
                                                </div>
                                            </div>
                                            <div class="review-form-name address-form">
                                                <label for="ticket" class="form-label">First Name*</label>
                                                <input type="text" id="ticket" class="form-control" placeholder="Name">
                                            </div>
                                            <div class=" account-inner-form">
                                                <div class="review-form-name">
                                                    <label for="ticketaddress" class="form-label">Email Address*</label>
                                                    <input type="email" id="ticketaddress" class="form-control"
                                                        placeholder="email@gmail.com">
                                                </div>
                                                <div class="review-form-name">
                                                    <label for="ticketphone" class="form-label">Phone Number*</label>
                                                    <input type="tel" id="ticketphone" class="form-control"
                                                        placeholder="******">
                                                </div>
                                            </div>
                                            <div class="review-form-name address-form">
                                                <label for="ticketmassage" class="form-label">Description*</label>
                                                <textarea name="ticketmassage" id="ticketmassage" cols="10" rows="3"
                                                    class="form-control"
                                                    placeholder="Write Here your Description"></textarea>
                                            </div>
                                            <div class="login-btn text-center">
                                                <a href="#" onclick="modalAction('.ticket')" class="shop-btn">Add Ticekt
                                                    Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- change this -->

                                </div>
                                <div class="ticket-section">
                                    <table>
                                        <tbody>
                                            <tr class="table-row table-top-row">
                                                <td class="table-wrapper">
                                                    <h5 class="table-heading">NO</h5>
                                                </td>
                                                <td class="table-wrapper">
                                                    <div class="table-wrapper-center">
                                                        <h5 class="table-heading">TIME</h5>
                                                    </div>
                                                </td>
                                                <td class="table-wrapper">
                                                    <div class="table-wrapper-center">
                                                        <h5 class="table-heading">REPORT</h5>
                                                    </div>
                                                </td>
                                                <td class="table-wrapper">
                                                    <div class="table-wrapper-center">
                                                        <h5 class="table-heading">ACTION</h5>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="table-row ticket-row">
                                                <td class="table-wrapper">
                                                    <p class="ticker-number">#354</p>
                                                </td>
                                                <td class="table-wrapper">
                                                    <div class="table-wrapper-center">
                                                        <p class="ticket-date">11th Oct, 2023</p>
                                                    </div>
                                                </td>
                                                <td class="table-wrapper">
                                                    <div class="table-wrapper-center">
                                                        <p class="ticket-info">Printing and typesetting industry
                                                            standard <span class="inner-text">dummy text ever
                                                                since</span></p>
                                                    </div>
                                                </td>
                                                <td class="table-wrapper">
                                                    <div class="table-wrapper-center table-wrapper-img">
                                                        <div class="comment-img">
                                                            <span>
                                                                <svg width="18" height="17" viewBox="0 0 18 17"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.34526 0.0234375C12.2264 0.133021 14.9269 1.30005 16.7549 4.04172C18.878 7.22662 18.2288 11.3601 15.1868 13.87C12.3535 16.2076 9.12958 16.6592 5.65976 15.5326C5.41809 15.4537 5.23754 15.4516 5.0071 15.5696C3.56972 16.3032 2.03046 16.7262 0.439223 16.9705C0.315577 16.9893 0.142753 16.923 0.0528284 16.8351C0.000840854 16.7841 0.0268346 16.5747 0.0914679 16.4986C0.912029 15.5403 1.12209 14.3635 1.33847 13.1811C1.42909 12.6855 1.33144 12.2891 1.06799 11.8466C-1.05226 8.27848 0.068284 3.93424 3.68564 1.57994C5.29725 0.530871 7.07607 0.043679 9.34526 0.0234375ZM7.79406 8.08444C7.80179 8.72589 8.33993 9.25705 8.98556 9.25845C9.64384 9.25984 10.189 8.71053 10.1813 8.05373C10.1735 7.40461 9.64665 6.88949 8.98978 6.8881C8.31886 6.8874 7.78633 7.42066 7.79406 8.08444ZM4.80618 6.8874C4.14018 6.87972 3.59009 7.41647 3.5915 8.07118C3.5929 8.70844 4.12894 9.24588 4.77457 9.25845C5.41809 9.27031 5.96326 8.74613 5.97731 8.10259C5.99206 7.42834 5.4778 6.89508 4.80618 6.8874ZM11.9966 8.08235C12.0022 8.72868 12.532 9.25635 13.1797 9.25984C13.8316 9.26333 14.3923 8.70355 14.3838 8.05722C14.3747 7.41298 13.8415 6.89089 13.1895 6.8888C12.5151 6.886 11.991 7.41089 11.9966 8.08235Z" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="delete-img">
                                                            <span>
                                                                <svg width="16" height="19" viewBox="0 0 16 19"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M14.7879 5.95508C14.7102 6.91333 14.6353 7.84896 14.5582 8.7853C14.3801 10.9315 14.2028 13.0776 14.0219 15.2238C13.9604 15.9503 13.9208 16.6802 13.8176 17.4018C13.7074 18.1756 13.0827 18.719 12.3039 18.7225C9.39528 18.7352 6.48733 18.7367 3.57867 18.7218C2.71582 18.7176 2.09748 18.0823 2.01904 17.158C1.79291 14.4959 1.58161 11.8332 1.36254 9.17114C1.28269 8.19735 1.19859 7.22426 1.11733 6.25117C1.10955 6.15931 1.10673 6.06744 1.10107 5.95578C5.66688 5.95508 10.2171 5.95508 14.7879 5.95508ZM4.26485 8.06096C4.26343 8.06096 4.26272 8.06096 4.26131 8.06096C4.28675 8.46023 4.31219 8.8595 4.33692 9.25877C4.47826 11.5258 4.61818 13.7921 4.76234 16.0591C4.78354 16.3926 5.0019 16.6067 5.29305 16.6053C5.59834 16.6039 5.81175 16.3665 5.8167 16.0188C5.81811 15.9368 5.81246 15.8541 5.8068 15.7722C5.66476 13.4818 5.52413 11.1915 5.37997 8.90119C5.34959 8.41995 5.32273 7.938 5.27256 7.45817C5.24076 7.15783 5.04289 7.00025 4.74185 7.00095C4.45635 7.00166 4.25142 7.22143 4.24153 7.53166C4.23729 7.70833 4.25707 7.885 4.26485 8.06096ZM11.6213 8.05813C11.6199 8.05813 11.6185 8.05813 11.6171 8.05813C11.6262 7.89348 11.6432 7.72883 11.6418 7.56488C11.6397 7.24758 11.451 7.0271 11.1733 7.00166C10.8991 6.97622 10.6595 7.16561 10.6072 7.46736C10.5775 7.64049 10.5726 7.81787 10.5613 7.99383C10.4737 9.39092 10.386 10.788 10.2998 12.1851C10.2214 13.4529 10.1387 14.7213 10.0687 15.9898C10.049 16.346 10.2574 16.5848 10.5606 16.6032C10.8673 16.6223 11.0991 16.4046 11.121 16.0534C11.2899 13.3886 11.4552 10.7237 11.6213 8.05813ZM8.47025 11.8169C8.47025 10.4757 8.47096 9.1344 8.47025 7.79384C8.47025 7.25394 8.29712 6.99742 7.93954 6.99954C7.57914 7.00095 7.41307 7.25111 7.41307 7.79879C7.41236 10.4693 7.41236 13.1398 7.41378 15.8103C7.41378 15.951 7.38197 16.1319 7.45405 16.2223C7.58055 16.3792 7.77701 16.5778 7.94307 16.5771C8.10914 16.5764 8.30418 16.3757 8.42856 16.2181C8.50064 16.1269 8.46813 15.946 8.46813 15.8061C8.47166 14.4754 8.47025 13.1462 8.47025 11.8169Z" />
                                                                    <path
                                                                        d="M4.21259 2.75226C4.22602 2.49644 4.22955 2.29646 4.24863 2.09788C4.32848 1.26118 4.94611 0.650617 5.78564 0.63931C7.22231 0.62023 8.66039 0.62023 10.0971 0.63931C10.9366 0.650617 11.5549 1.26048 11.6348 2.09718C11.6539 2.29575 11.6574 2.49574 11.6694 2.7353C11.7966 2.74095 11.9196 2.75085 12.0425 2.75155C12.9379 2.75297 13.8332 2.74873 14.7286 2.75367C15.4197 2.75721 15.8868 3.18969 15.8861 3.81439C15.8854 4.43838 15.419 4.87298 14.7272 4.87369C10.2038 4.87581 5.67964 4.87581 1.15623 4.87369C0.464398 4.87298 -0.0027105 4.43909 -0.00341717 3.8151C-0.00412384 3.1911 0.462987 2.75721 1.15411 2.75438C2.16536 2.74873 3.17661 2.75226 4.21259 2.75226ZM10.591 2.7353C10.591 2.59821 10.5917 2.49291 10.591 2.38832C10.5861 1.86821 10.4129 1.69508 9.88717 1.69437C8.56993 1.69296 7.2534 1.69155 5.93616 1.69508C5.49661 1.69649 5.31147 1.8774 5.2938 2.30706C5.28815 2.44415 5.29309 2.58195 5.29309 2.7353C7.06967 2.7353 8.80525 2.7353 10.591 2.7353Z"
                                                                        fill="#EB5757" />
                                                                </svg>

                                                            </span>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="table-row ticket-row">
                                                <td class="table-wrapper">
                                                    <p class="ticker-number">#355</p>
                                                </td>
                                                <td class="table-wrapper">
                                                    <div class="table-wrapper-center">
                                                        <p class="ticket-date">11th Oct, 2023</p>
                                                    </div>
                                                </td>
                                                <td class="table-wrapper">
                                                    <div class="table-wrapper-center">
                                                        <p class="ticket-info">Printing and typesetting industry
                                                            standard <span class="inner-text">dummy text ever
                                                                since</span></p>
                                                    </div>
                                                </td>
                                                <td class="table-wrapper">
                                                    <div class="table-wrapper-center table-wrapper-img">
                                                        <div class="comment-img">
                                                            <span>
                                                                <svg width="18" height="17" viewBox="0 0 18 17"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.34526 0.0234375C12.2264 0.133021 14.9269 1.30005 16.7549 4.04172C18.878 7.22662 18.2288 11.3601 15.1868 13.87C12.3535 16.2076 9.12958 16.6592 5.65976 15.5326C5.41809 15.4537 5.23754 15.4516 5.0071 15.5696C3.56972 16.3032 2.03046 16.7262 0.439223 16.9705C0.315577 16.9893 0.142753 16.923 0.0528284 16.8351C0.000840854 16.7841 0.0268346 16.5747 0.0914679 16.4986C0.912029 15.5403 1.12209 14.3635 1.33847 13.1811C1.42909 12.6855 1.33144 12.2891 1.06799 11.8466C-1.05226 8.27848 0.068284 3.93424 3.68564 1.57994C5.29725 0.530871 7.07607 0.043679 9.34526 0.0234375ZM7.79406 8.08444C7.80179 8.72589 8.33993 9.25705 8.98556 9.25845C9.64384 9.25984 10.189 8.71053 10.1813 8.05373C10.1735 7.40461 9.64665 6.88949 8.98978 6.8881C8.31886 6.8874 7.78633 7.42066 7.79406 8.08444ZM4.80618 6.8874C4.14018 6.87972 3.59009 7.41647 3.5915 8.07118C3.5929 8.70844 4.12894 9.24588 4.77457 9.25845C5.41809 9.27031 5.96326 8.74613 5.97731 8.10259C5.99206 7.42834 5.4778 6.89508 4.80618 6.8874ZM11.9966 8.08235C12.0022 8.72868 12.532 9.25635 13.1797 9.25984C13.8316 9.26333 14.3923 8.70355 14.3838 8.05722C14.3747 7.41298 13.8415 6.89089 13.1895 6.8888C12.5151 6.886 11.991 7.41089 11.9966 8.08235Z"
                                                                        fill="#27AE60" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="delete-img">
                                                            <span>
                                                                <svg width="16" height="19" viewBox="0 0 16 19"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M14.7879 5.95508C14.7102 6.91333 14.6353 7.84896 14.5582 8.7853C14.3801 10.9315 14.2028 13.0776 14.0219 15.2238C13.9604 15.9503 13.9208 16.6802 13.8176 17.4018C13.7074 18.1756 13.0827 18.719 12.3039 18.7225C9.39528 18.7352 6.48733 18.7367 3.57867 18.7218C2.71582 18.7176 2.09748 18.0823 2.01904 17.158C1.79291 14.4959 1.58161 11.8332 1.36254 9.17114C1.28269 8.19735 1.19859 7.22426 1.11733 6.25117C1.10955 6.15931 1.10673 6.06744 1.10107 5.95578C5.66688 5.95508 10.2171 5.95508 14.7879 5.95508ZM4.26485 8.06096C4.26343 8.06096 4.26272 8.06096 4.26131 8.06096C4.28675 8.46023 4.31219 8.8595 4.33692 9.25877C4.47826 11.5258 4.61818 13.7921 4.76234 16.0591C4.78354 16.3926 5.0019 16.6067 5.29305 16.6053C5.59834 16.6039 5.81175 16.3665 5.8167 16.0188C5.81811 15.9368 5.81246 15.8541 5.8068 15.7722C5.66476 13.4818 5.52413 11.1915 5.37997 8.90119C5.34959 8.41995 5.32273 7.938 5.27256 7.45817C5.24076 7.15783 5.04289 7.00025 4.74185 7.00095C4.45635 7.00166 4.25142 7.22143 4.24153 7.53166C4.23729 7.70833 4.25707 7.885 4.26485 8.06096ZM11.6213 8.05813C11.6199 8.05813 11.6185 8.05813 11.6171 8.05813C11.6262 7.89348 11.6432 7.72883 11.6418 7.56488C11.6397 7.24758 11.451 7.0271 11.1733 7.00166C10.8991 6.97622 10.6595 7.16561 10.6072 7.46736C10.5775 7.64049 10.5726 7.81787 10.5613 7.99383C10.4737 9.39092 10.386 10.788 10.2998 12.1851C10.2214 13.4529 10.1387 14.7213 10.0687 15.9898C10.049 16.346 10.2574 16.5848 10.5606 16.6032C10.8673 16.6223 11.0991 16.4046 11.121 16.0534C11.2899 13.3886 11.4552 10.7237 11.6213 8.05813ZM8.47025 11.8169C8.47025 10.4757 8.47096 9.1344 8.47025 7.79384C8.47025 7.25394 8.29712 6.99742 7.93954 6.99954C7.57914 7.00095 7.41307 7.25111 7.41307 7.79879C7.41236 10.4693 7.41236 13.1398 7.41378 15.8103C7.41378 15.951 7.38197 16.1319 7.45405 16.2223C7.58055 16.3792 7.77701 16.5778 7.94307 16.5771C8.10914 16.5764 8.30418 16.3757 8.42856 16.2181C8.50064 16.1269 8.46813 15.946 8.46813 15.8061C8.47166 14.4754 8.47025 13.1462 8.47025 11.8169Z"
                                                                        fill="#EB5757" />
                                                                    <path
                                                                        d="M4.21259 2.75226C4.22602 2.49644 4.22955 2.29646 4.24863 2.09788C4.32848 1.26118 4.94611 0.650617 5.78564 0.63931C7.22231 0.62023 8.66039 0.62023 10.0971 0.63931C10.9366 0.650617 11.5549 1.26048 11.6348 2.09718C11.6539 2.29575 11.6574 2.49574 11.6694 2.7353C11.7966 2.74095 11.9196 2.75085 12.0425 2.75155C12.9379 2.75297 13.8332 2.74873 14.7286 2.75367C15.4197 2.75721 15.8868 3.18969 15.8861 3.81439C15.8854 4.43838 15.419 4.87298 14.7272 4.87369C10.2038 4.87581 5.67964 4.87581 1.15623 4.87369C0.464398 4.87298 -0.0027105 4.43909 -0.00341717 3.8151C-0.00412384 3.1911 0.462987 2.75721 1.15411 2.75438C2.16536 2.74873 3.17661 2.75226 4.21259 2.75226ZM10.591 2.7353C10.591 2.59821 10.5917 2.49291 10.591 2.38832C10.5861 1.86821 10.4129 1.69508 9.88717 1.69437C8.56993 1.69296 7.2534 1.69155 5.93616 1.69508C5.49661 1.69649 5.31147 1.8774 5.2938 2.30706C5.28815 2.44415 5.29309 2.58195 5.29309 2.7353C7.06967 2.7353 8.80525 2.7353 10.591 2.7353Z"
                                                                        fill="#EB5757" />
                                                                </svg>

                                                            </span>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="table-row ticket-row">
                                                <td class="table-wrapper">
                                                    <p class="ticker-number">#356</p>
                                                </td>
                                                <td class="table-wrapper">
                                                    <div class="table-wrapper-center">
                                                        <p class="ticket-date">11th Oct, 2023</p>
                                                    </div>
                                                </td>
                                                <td class="table-wrapper">
                                                    <div class="table-wrapper-center">
                                                        <p class="ticket-info">Printing and typesetting industry
                                                            standard <span class="inner-text">dummy text ever
                                                                since</span></p>
                                                    </div>
                                                </td>
                                                <td class="table-wrapper">
                                                    <div class="table-wrapper-center table-wrapper-img">
                                                        <div class="comment-img">
                                                            <span>
                                                                <svg width="18" height="17" viewBox="0 0 18 17"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.34526 0.0234375C12.2264 0.133021 14.9269 1.30005 16.7549 4.04172C18.878 7.22662 18.2288 11.3601 15.1868 13.87C12.3535 16.2076 9.12958 16.6592 5.65976 15.5326C5.41809 15.4537 5.23754 15.4516 5.0071 15.5696C3.56972 16.3032 2.03046 16.7262 0.439223 16.9705C0.315577 16.9893 0.142753 16.923 0.0528284 16.8351C0.000840854 16.7841 0.0268346 16.5747 0.0914679 16.4986C0.912029 15.5403 1.12209 14.3635 1.33847 13.1811C1.42909 12.6855 1.33144 12.2891 1.06799 11.8466C-1.05226 8.27848 0.068284 3.93424 3.68564 1.57994C5.29725 0.530871 7.07607 0.043679 9.34526 0.0234375ZM7.79406 8.08444C7.80179 8.72589 8.33993 9.25705 8.98556 9.25845C9.64384 9.25984 10.189 8.71053 10.1813 8.05373C10.1735 7.40461 9.64665 6.88949 8.98978 6.8881C8.31886 6.8874 7.78633 7.42066 7.79406 8.08444ZM4.80618 6.8874C4.14018 6.87972 3.59009 7.41647 3.5915 8.07118C3.5929 8.70844 4.12894 9.24588 4.77457 9.25845C5.41809 9.27031 5.96326 8.74613 5.97731 8.10259C5.99206 7.42834 5.4778 6.89508 4.80618 6.8874ZM11.9966 8.08235C12.0022 8.72868 12.532 9.25635 13.1797 9.25984C13.8316 9.26333 14.3923 8.70355 14.3838 8.05722C14.3747 7.41298 13.8415 6.89089 13.1895 6.8888C12.5151 6.886 11.991 7.41089 11.9966 8.08235Z"
                                                                        fill="#27AE60" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="delete-img">
                                                            <span>
                                                                <svg width="16" height="19" viewBox="0 0 16 19"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M14.7879 5.95508C14.7102 6.91333 14.6353 7.84896 14.5582 8.7853C14.3801 10.9315 14.2028 13.0776 14.0219 15.2238C13.9604 15.9503 13.9208 16.6802 13.8176 17.4018C13.7074 18.1756 13.0827 18.719 12.3039 18.7225C9.39528 18.7352 6.48733 18.7367 3.57867 18.7218C2.71582 18.7176 2.09748 18.0823 2.01904 17.158C1.79291 14.4959 1.58161 11.8332 1.36254 9.17114C1.28269 8.19735 1.19859 7.22426 1.11733 6.25117C1.10955 6.15931 1.10673 6.06744 1.10107 5.95578C5.66688 5.95508 10.2171 5.95508 14.7879 5.95508ZM4.26485 8.06096C4.26343 8.06096 4.26272 8.06096 4.26131 8.06096C4.28675 8.46023 4.31219 8.8595 4.33692 9.25877C4.47826 11.5258 4.61818 13.7921 4.76234 16.0591C4.78354 16.3926 5.0019 16.6067 5.29305 16.6053C5.59834 16.6039 5.81175 16.3665 5.8167 16.0188C5.81811 15.9368 5.81246 15.8541 5.8068 15.7722C5.66476 13.4818 5.52413 11.1915 5.37997 8.90119C5.34959 8.41995 5.32273 7.938 5.27256 7.45817C5.24076 7.15783 5.04289 7.00025 4.74185 7.00095C4.45635 7.00166 4.25142 7.22143 4.24153 7.53166C4.23729 7.70833 4.25707 7.885 4.26485 8.06096ZM11.6213 8.05813C11.6199 8.05813 11.6185 8.05813 11.6171 8.05813C11.6262 7.89348 11.6432 7.72883 11.6418 7.56488C11.6397 7.24758 11.451 7.0271 11.1733 7.00166C10.8991 6.97622 10.6595 7.16561 10.6072 7.46736C10.5775 7.64049 10.5726 7.81787 10.5613 7.99383C10.4737 9.39092 10.386 10.788 10.2998 12.1851C10.2214 13.4529 10.1387 14.7213 10.0687 15.9898C10.049 16.346 10.2574 16.5848 10.5606 16.6032C10.8673 16.6223 11.0991 16.4046 11.121 16.0534C11.2899 13.3886 11.4552 10.7237 11.6213 8.05813ZM8.47025 11.8169C8.47025 10.4757 8.47096 9.1344 8.47025 7.79384C8.47025 7.25394 8.29712 6.99742 7.93954 6.99954C7.57914 7.00095 7.41307 7.25111 7.41307 7.79879C7.41236 10.4693 7.41236 13.1398 7.41378 15.8103C7.41378 15.951 7.38197 16.1319 7.45405 16.2223C7.58055 16.3792 7.77701 16.5778 7.94307 16.5771C8.10914 16.5764 8.30418 16.3757 8.42856 16.2181C8.50064 16.1269 8.46813 15.946 8.46813 15.8061C8.47166 14.4754 8.47025 13.1462 8.47025 11.8169Z"
                                                                        fill="#EB5757" />
                                                                    <path
                                                                        d="M4.21259 2.75226C4.22602 2.49644 4.22955 2.29646 4.24863 2.09788C4.32848 1.26118 4.94611 0.650617 5.78564 0.63931C7.22231 0.62023 8.66039 0.62023 10.0971 0.63931C10.9366 0.650617 11.5549 1.26048 11.6348 2.09718C11.6539 2.29575 11.6574 2.49574 11.6694 2.7353C11.7966 2.74095 11.9196 2.75085 12.0425 2.75155C12.9379 2.75297 13.8332 2.74873 14.7286 2.75367C15.4197 2.75721 15.8868 3.18969 15.8861 3.81439C15.8854 4.43838 15.419 4.87298 14.7272 4.87369C10.2038 4.87581 5.67964 4.87581 1.15623 4.87369C0.464398 4.87298 -0.0027105 4.43909 -0.00341717 3.8151C-0.00412384 3.1911 0.462987 2.75721 1.15411 2.75438C2.16536 2.74873 3.17661 2.75226 4.21259 2.75226ZM10.591 2.7353C10.591 2.59821 10.5917 2.49291 10.591 2.38832C10.5861 1.86821 10.4129 1.69508 9.88717 1.69437C8.56993 1.69296 7.2534 1.69155 5.93616 1.69508C5.49661 1.69649 5.31147 1.8774 5.2938 2.30706C5.28815 2.44415 5.29309 2.58195 5.29309 2.7353C7.06967 2.7353 8.80525 2.7353 10.591 2.7353Z"
                                                                        fill="#EB5757" />
                                                                </svg>

                                                            </span>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="table-row ticket-row">
                                                <td class="table-wrapper">
                                                    <p class="ticker-number">#357</p>
                                                </td>
                                                <td class="table-wrapper">
                                                    <div class="table-wrapper-center">
                                                        <p class="ticket-date">11th Oct, 2023</p>
                                                    </div>
                                                </td>
                                                <td class="table-wrapper">
                                                    <div class="table-wrapper-center">
                                                        <p class="ticket-info">Printing and typesetting industry
                                                            standard <span class="inner-text">dummy text ever
                                                                since</span></p>
                                                    </div>
                                                </td>
                                                <td class="table-wrapper">
                                                    <div class="table-wrapper-center table-wrapper-img">
                                                        <div class="comment-img">
                                                            <span>
                                                                <svg width="18" height="17" viewBox="0 0 18 17"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.34526 0.0234375C12.2264 0.133021 14.9269 1.30005 16.7549 4.04172C18.878 7.22662 18.2288 11.3601 15.1868 13.87C12.3535 16.2076 9.12958 16.6592 5.65976 15.5326C5.41809 15.4537 5.23754 15.4516 5.0071 15.5696C3.56972 16.3032 2.03046 16.7262 0.439223 16.9705C0.315577 16.9893 0.142753 16.923 0.0528284 16.8351C0.000840854 16.7841 0.0268346 16.5747 0.0914679 16.4986C0.912029 15.5403 1.12209 14.3635 1.33847 13.1811C1.42909 12.6855 1.33144 12.2891 1.06799 11.8466C-1.05226 8.27848 0.068284 3.93424 3.68564 1.57994C5.29725 0.530871 7.07607 0.043679 9.34526 0.0234375ZM7.79406 8.08444C7.80179 8.72589 8.33993 9.25705 8.98556 9.25845C9.64384 9.25984 10.189 8.71053 10.1813 8.05373C10.1735 7.40461 9.64665 6.88949 8.98978 6.8881C8.31886 6.8874 7.78633 7.42066 7.79406 8.08444ZM4.80618 6.8874C4.14018 6.87972 3.59009 7.41647 3.5915 8.07118C3.5929 8.70844 4.12894 9.24588 4.77457 9.25845C5.41809 9.27031 5.96326 8.74613 5.97731 8.10259C5.99206 7.42834 5.4778 6.89508 4.80618 6.8874ZM11.9966 8.08235C12.0022 8.72868 12.532 9.25635 13.1797 9.25984C13.8316 9.26333 14.3923 8.70355 14.3838 8.05722C14.3747 7.41298 13.8415 6.89089 13.1895 6.8888C12.5151 6.886 11.991 7.41089 11.9966 8.08235Z"
                                                                        fill="#27AE60" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="delete-img">
                                                            <span>
                                                                <svg width="16" height="19" viewBox="0 0 16 19"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M14.7879 5.95508C14.7102 6.91333 14.6353 7.84896 14.5582 8.7853C14.3801 10.9315 14.2028 13.0776 14.0219 15.2238C13.9604 15.9503 13.9208 16.6802 13.8176 17.4018C13.7074 18.1756 13.0827 18.719 12.3039 18.7225C9.39528 18.7352 6.48733 18.7367 3.57867 18.7218C2.71582 18.7176 2.09748 18.0823 2.01904 17.158C1.79291 14.4959 1.58161 11.8332 1.36254 9.17114C1.28269 8.19735 1.19859 7.22426 1.11733 6.25117C1.10955 6.15931 1.10673 6.06744 1.10107 5.95578C5.66688 5.95508 10.2171 5.95508 14.7879 5.95508ZM4.26485 8.06096C4.26343 8.06096 4.26272 8.06096 4.26131 8.06096C4.28675 8.46023 4.31219 8.8595 4.33692 9.25877C4.47826 11.5258 4.61818 13.7921 4.76234 16.0591C4.78354 16.3926 5.0019 16.6067 5.29305 16.6053C5.59834 16.6039 5.81175 16.3665 5.8167 16.0188C5.81811 15.9368 5.81246 15.8541 5.8068 15.7722C5.66476 13.4818 5.52413 11.1915 5.37997 8.90119C5.34959 8.41995 5.32273 7.938 5.27256 7.45817C5.24076 7.15783 5.04289 7.00025 4.74185 7.00095C4.45635 7.00166 4.25142 7.22143 4.24153 7.53166C4.23729 7.70833 4.25707 7.885 4.26485 8.06096ZM11.6213 8.05813C11.6199 8.05813 11.6185 8.05813 11.6171 8.05813C11.6262 7.89348 11.6432 7.72883 11.6418 7.56488C11.6397 7.24758 11.451 7.0271 11.1733 7.00166C10.8991 6.97622 10.6595 7.16561 10.6072 7.46736C10.5775 7.64049 10.5726 7.81787 10.5613 7.99383C10.4737 9.39092 10.386 10.788 10.2998 12.1851C10.2214 13.4529 10.1387 14.7213 10.0687 15.9898C10.049 16.346 10.2574 16.5848 10.5606 16.6032C10.8673 16.6223 11.0991 16.4046 11.121 16.0534C11.2899 13.3886 11.4552 10.7237 11.6213 8.05813ZM8.47025 11.8169C8.47025 10.4757 8.47096 9.1344 8.47025 7.79384C8.47025 7.25394 8.29712 6.99742 7.93954 6.99954C7.57914 7.00095 7.41307 7.25111 7.41307 7.79879C7.41236 10.4693 7.41236 13.1398 7.41378 15.8103C7.41378 15.951 7.38197 16.1319 7.45405 16.2223C7.58055 16.3792 7.77701 16.5778 7.94307 16.5771C8.10914 16.5764 8.30418 16.3757 8.42856 16.2181C8.50064 16.1269 8.46813 15.946 8.46813 15.8061C8.47166 14.4754 8.47025 13.1462 8.47025 11.8169Z"
                                                                        fill="#EB5757" />
                                                                    <path
                                                                        d="M4.21259 2.75226C4.22602 2.49644 4.22955 2.29646 4.24863 2.09788C4.32848 1.26118 4.94611 0.650617 5.78564 0.63931C7.22231 0.62023 8.66039 0.62023 10.0971 0.63931C10.9366 0.650617 11.5549 1.26048 11.6348 2.09718C11.6539 2.29575 11.6574 2.49574 11.6694 2.7353C11.7966 2.74095 11.9196 2.75085 12.0425 2.75155C12.9379 2.75297 13.8332 2.74873 14.7286 2.75367C15.4197 2.75721 15.8868 3.18969 15.8861 3.81439C15.8854 4.43838 15.419 4.87298 14.7272 4.87369C10.2038 4.87581 5.67964 4.87581 1.15623 4.87369C0.464398 4.87298 -0.0027105 4.43909 -0.00341717 3.8151C-0.00412384 3.1911 0.462987 2.75721 1.15411 2.75438C2.16536 2.74873 3.17661 2.75226 4.21259 2.75226ZM10.591 2.7353C10.591 2.59821 10.5917 2.49291 10.591 2.38832C10.5861 1.86821 10.4129 1.69508 9.88717 1.69437C8.56993 1.69296 7.2534 1.69155 5.93616 1.69508C5.49661 1.69649 5.31147 1.8774 5.2938 2.30706C5.28815 2.44415 5.29309 2.58195 5.29309 2.7353C7.06967 2.7353 8.80525 2.7353 10.591 2.7353Z"
                                                                        fill="#EB5757" />
                                                                </svg>

                                                            </span>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="table-row ticket-row">
                                                <td class="table-wrapper">
                                                    <p class="ticker-number">#358</p>
                                                </td>
                                                <td class="table-wrapper">
                                                    <div class="table-wrapper-center">
                                                        <p class="ticket-date">11th Oct, 2023</p>
                                                    </div>
                                                </td>
                                                <td class="table-wrapper">
                                                    <div class="table-wrapper-center">
                                                        <p class="ticket-info">Printing and typesetting industry
                                                            standard <span class="inner-text">dummy text ever
                                                                since</span></p>
                                                    </div>
                                                </td>
                                                <td class="table-wrapper">
                                                    <div class="table-wrapper-center table-wrapper-img">
                                                        <div class="comment-img">
                                                            <span>
                                                                <svg width="18" height="17" viewBox="0 0 18 17"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.34526 0.0234375C12.2264 0.133021 14.9269 1.30005 16.7549 4.04172C18.878 7.22662 18.2288 11.3601 15.1868 13.87C12.3535 16.2076 9.12958 16.6592 5.65976 15.5326C5.41809 15.4537 5.23754 15.4516 5.0071 15.5696C3.56972 16.3032 2.03046 16.7262 0.439223 16.9705C0.315577 16.9893 0.142753 16.923 0.0528284 16.8351C0.000840854 16.7841 0.0268346 16.5747 0.0914679 16.4986C0.912029 15.5403 1.12209 14.3635 1.33847 13.1811C1.42909 12.6855 1.33144 12.2891 1.06799 11.8466C-1.05226 8.27848 0.068284 3.93424 3.68564 1.57994C5.29725 0.530871 7.07607 0.043679 9.34526 0.0234375ZM7.79406 8.08444C7.80179 8.72589 8.33993 9.25705 8.98556 9.25845C9.64384 9.25984 10.189 8.71053 10.1813 8.05373C10.1735 7.40461 9.64665 6.88949 8.98978 6.8881C8.31886 6.8874 7.78633 7.42066 7.79406 8.08444ZM4.80618 6.8874C4.14018 6.87972 3.59009 7.41647 3.5915 8.07118C3.5929 8.70844 4.12894 9.24588 4.77457 9.25845C5.41809 9.27031 5.96326 8.74613 5.97731 8.10259C5.99206 7.42834 5.4778 6.89508 4.80618 6.8874ZM11.9966 8.08235C12.0022 8.72868 12.532 9.25635 13.1797 9.25984C13.8316 9.26333 14.3923 8.70355 14.3838 8.05722C14.3747 7.41298 13.8415 6.89089 13.1895 6.8888C12.5151 6.886 11.991 7.41089 11.9966 8.08235Z"
                                                                        fill="#27AE60" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="delete-img">
                                                            <span>
                                                                <svg width="16" height="19" viewBox="0 0 16 19"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M14.7879 5.95508C14.7102 6.91333 14.6353 7.84896 14.5582 8.7853C14.3801 10.9315 14.2028 13.0776 14.0219 15.2238C13.9604 15.9503 13.9208 16.6802 13.8176 17.4018C13.7074 18.1756 13.0827 18.719 12.3039 18.7225C9.39528 18.7352 6.48733 18.7367 3.57867 18.7218C2.71582 18.7176 2.09748 18.0823 2.01904 17.158C1.79291 14.4959 1.58161 11.8332 1.36254 9.17114C1.28269 8.19735 1.19859 7.22426 1.11733 6.25117C1.10955 6.15931 1.10673 6.06744 1.10107 5.95578C5.66688 5.95508 10.2171 5.95508 14.7879 5.95508ZM4.26485 8.06096C4.26343 8.06096 4.26272 8.06096 4.26131 8.06096C4.28675 8.46023 4.31219 8.8595 4.33692 9.25877C4.47826 11.5258 4.61818 13.7921 4.76234 16.0591C4.78354 16.3926 5.0019 16.6067 5.29305 16.6053C5.59834 16.6039 5.81175 16.3665 5.8167 16.0188C5.81811 15.9368 5.81246 15.8541 5.8068 15.7722C5.66476 13.4818 5.52413 11.1915 5.37997 8.90119C5.34959 8.41995 5.32273 7.938 5.27256 7.45817C5.24076 7.15783 5.04289 7.00025 4.74185 7.00095C4.45635 7.00166 4.25142 7.22143 4.24153 7.53166C4.23729 7.70833 4.25707 7.885 4.26485 8.06096ZM11.6213 8.05813C11.6199 8.05813 11.6185 8.05813 11.6171 8.05813C11.6262 7.89348 11.6432 7.72883 11.6418 7.56488C11.6397 7.24758 11.451 7.0271 11.1733 7.00166C10.8991 6.97622 10.6595 7.16561 10.6072 7.46736C10.5775 7.64049 10.5726 7.81787 10.5613 7.99383C10.4737 9.39092 10.386 10.788 10.2998 12.1851C10.2214 13.4529 10.1387 14.7213 10.0687 15.9898C10.049 16.346 10.2574 16.5848 10.5606 16.6032C10.8673 16.6223 11.0991 16.4046 11.121 16.0534C11.2899 13.3886 11.4552 10.7237 11.6213 8.05813ZM8.47025 11.8169C8.47025 10.4757 8.47096 9.1344 8.47025 7.79384C8.47025 7.25394 8.29712 6.99742 7.93954 6.99954C7.57914 7.00095 7.41307 7.25111 7.41307 7.79879C7.41236 10.4693 7.41236 13.1398 7.41378 15.8103C7.41378 15.951 7.38197 16.1319 7.45405 16.2223C7.58055 16.3792 7.77701 16.5778 7.94307 16.5771C8.10914 16.5764 8.30418 16.3757 8.42856 16.2181C8.50064 16.1269 8.46813 15.946 8.46813 15.8061C8.47166 14.4754 8.47025 13.1462 8.47025 11.8169Z"
                                                                        fill="#EB5757" />
                                                                    <path
                                                                        d="M4.21259 2.75226C4.22602 2.49644 4.22955 2.29646 4.24863 2.09788C4.32848 1.26118 4.94611 0.650617 5.78564 0.63931C7.22231 0.62023 8.66039 0.62023 10.0971 0.63931C10.9366 0.650617 11.5549 1.26048 11.6348 2.09718C11.6539 2.29575 11.6574 2.49574 11.6694 2.7353C11.7966 2.74095 11.9196 2.75085 12.0425 2.75155C12.9379 2.75297 13.8332 2.74873 14.7286 2.75367C15.4197 2.75721 15.8868 3.18969 15.8861 3.81439C15.8854 4.43838 15.419 4.87298 14.7272 4.87369C10.2038 4.87581 5.67964 4.87581 1.15623 4.87369C0.464398 4.87298 -0.0027105 4.43909 -0.00341717 3.8151C-0.00412384 3.1911 0.462987 2.75721 1.15411 2.75438C2.16536 2.74873 3.17661 2.75226 4.21259 2.75226ZM10.591 2.7353C10.591 2.59821 10.5917 2.49291 10.591 2.38832C10.5861 1.86821 10.4129 1.69508 9.88717 1.69437C8.56993 1.69296 7.2534 1.69155 5.93616 1.69508C5.49661 1.69649 5.31147 1.8774 5.2938 2.30706C5.28815 2.44415 5.29309 2.58195 5.29309 2.7353C7.06967 2.7353 8.80525 2.7353 10.591 2.7353Z"
                                                                        fill="#EB5757" />
                                                                </svg>

                                                            </span>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="table-row ticket-row">
                                                <td class="table-wrapper">
                                                    <p class="ticker-number">#359</p>
                                                </td>
                                                <td class="table-wrapper">
                                                    <div class="table-wrapper-center">
                                                        <p class="ticket-date">11th Oct, 2023</p>
                                                    </div>
                                                </td>
                                                <td class="table-wrapper">
                                                    <div class="table-wrapper-center">
                                                        <p class="ticket-info">Printing and typesetting industry
                                                            standard <span class="inner-text">dummy text ever
                                                                since</span></p>
                                                    </div>
                                                </td>
                                                <td class="table-wrapper">
                                                    <div class="table-wrapper-center table-wrapper-img">
                                                        <div class="comment-img">
                                                            <span>
                                                                <svg width="18" height="17" viewBox="0 0 18 17"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.34526 0.0234375C12.2264 0.133021 14.9269 1.30005 16.7549 4.04172C18.878 7.22662 18.2288 11.3601 15.1868 13.87C12.3535 16.2076 9.12958 16.6592 5.65976 15.5326C5.41809 15.4537 5.23754 15.4516 5.0071 15.5696C3.56972 16.3032 2.03046 16.7262 0.439223 16.9705C0.315577 16.9893 0.142753 16.923 0.0528284 16.8351C0.000840854 16.7841 0.0268346 16.5747 0.0914679 16.4986C0.912029 15.5403 1.12209 14.3635 1.33847 13.1811C1.42909 12.6855 1.33144 12.2891 1.06799 11.8466C-1.05226 8.27848 0.068284 3.93424 3.68564 1.57994C5.29725 0.530871 7.07607 0.043679 9.34526 0.0234375ZM7.79406 8.08444C7.80179 8.72589 8.33993 9.25705 8.98556 9.25845C9.64384 9.25984 10.189 8.71053 10.1813 8.05373C10.1735 7.40461 9.64665 6.88949 8.98978 6.8881C8.31886 6.8874 7.78633 7.42066 7.79406 8.08444ZM4.80618 6.8874C4.14018 6.87972 3.59009 7.41647 3.5915 8.07118C3.5929 8.70844 4.12894 9.24588 4.77457 9.25845C5.41809 9.27031 5.96326 8.74613 5.97731 8.10259C5.99206 7.42834 5.4778 6.89508 4.80618 6.8874ZM11.9966 8.08235C12.0022 8.72868 12.532 9.25635 13.1797 9.25984C13.8316 9.26333 14.3923 8.70355 14.3838 8.05722C14.3747 7.41298 13.8415 6.89089 13.1895 6.8888C12.5151 6.886 11.991 7.41089 11.9966 8.08235Z"
                                                                        fill="#27AE60" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="delete-img">
                                                            <span>
                                                                <svg width="16" height="19" viewBox="0 0 16 19"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M14.7879 5.95508C14.7102 6.91333 14.6353 7.84896 14.5582 8.7853C14.3801 10.9315 14.2028 13.0776 14.0219 15.2238C13.9604 15.9503 13.9208 16.6802 13.8176 17.4018C13.7074 18.1756 13.0827 18.719 12.3039 18.7225C9.39528 18.7352 6.48733 18.7367 3.57867 18.7218C2.71582 18.7176 2.09748 18.0823 2.01904 17.158C1.79291 14.4959 1.58161 11.8332 1.36254 9.17114C1.28269 8.19735 1.19859 7.22426 1.11733 6.25117C1.10955 6.15931 1.10673 6.06744 1.10107 5.95578C5.66688 5.95508 10.2171 5.95508 14.7879 5.95508ZM4.26485 8.06096C4.26343 8.06096 4.26272 8.06096 4.26131 8.06096C4.28675 8.46023 4.31219 8.8595 4.33692 9.25877C4.47826 11.5258 4.61818 13.7921 4.76234 16.0591C4.78354 16.3926 5.0019 16.6067 5.29305 16.6053C5.59834 16.6039 5.81175 16.3665 5.8167 16.0188C5.81811 15.9368 5.81246 15.8541 5.8068 15.7722C5.66476 13.4818 5.52413 11.1915 5.37997 8.90119C5.34959 8.41995 5.32273 7.938 5.27256 7.45817C5.24076 7.15783 5.04289 7.00025 4.74185 7.00095C4.45635 7.00166 4.25142 7.22143 4.24153 7.53166C4.23729 7.70833 4.25707 7.885 4.26485 8.06096ZM11.6213 8.05813C11.6199 8.05813 11.6185 8.05813 11.6171 8.05813C11.6262 7.89348 11.6432 7.72883 11.6418 7.56488C11.6397 7.24758 11.451 7.0271 11.1733 7.00166C10.8991 6.97622 10.6595 7.16561 10.6072 7.46736C10.5775 7.64049 10.5726 7.81787 10.5613 7.99383C10.4737 9.39092 10.386 10.788 10.2998 12.1851C10.2214 13.4529 10.1387 14.7213 10.0687 15.9898C10.049 16.346 10.2574 16.5848 10.5606 16.6032C10.8673 16.6223 11.0991 16.4046 11.121 16.0534C11.2899 13.3886 11.4552 10.7237 11.6213 8.05813ZM8.47025 11.8169C8.47025 10.4757 8.47096 9.1344 8.47025 7.79384C8.47025 7.25394 8.29712 6.99742 7.93954 6.99954C7.57914 7.00095 7.41307 7.25111 7.41307 7.79879C7.41236 10.4693 7.41236 13.1398 7.41378 15.8103C7.41378 15.951 7.38197 16.1319 7.45405 16.2223C7.58055 16.3792 7.77701 16.5778 7.94307 16.5771C8.10914 16.5764 8.30418 16.3757 8.42856 16.2181C8.50064 16.1269 8.46813 15.946 8.46813 15.8061C8.47166 14.4754 8.47025 13.1462 8.47025 11.8169Z"
                                                                        fill="#EB5757" />
                                                                    <path
                                                                        d="M4.21259 2.75226C4.22602 2.49644 4.22955 2.29646 4.24863 2.09788C4.32848 1.26118 4.94611 0.650617 5.78564 0.63931C7.22231 0.62023 8.66039 0.62023 10.0971 0.63931C10.9366 0.650617 11.5549 1.26048 11.6348 2.09718C11.6539 2.29575 11.6574 2.49574 11.6694 2.7353C11.7966 2.74095 11.9196 2.75085 12.0425 2.75155C12.9379 2.75297 13.8332 2.74873 14.7286 2.75367C15.4197 2.75721 15.8868 3.18969 15.8861 3.81439C15.8854 4.43838 15.419 4.87298 14.7272 4.87369C10.2038 4.87581 5.67964 4.87581 1.15623 4.87369C0.464398 4.87298 -0.0027105 4.43909 -0.00341717 3.8151C-0.00412384 3.1911 0.462987 2.75721 1.15411 2.75438C2.16536 2.74873 3.17661 2.75226 4.21259 2.75226ZM10.591 2.7353C10.591 2.59821 10.5917 2.49291 10.591 2.38832C10.5861 1.86821 10.4129 1.69508 9.88717 1.69437C8.56993 1.69296 7.2534 1.69155 5.93616 1.69508C5.49661 1.69649 5.31147 1.8774 5.2938 2.30706C5.28815 2.44415 5.29309 2.58195 5.29309 2.7353C7.06967 2.7353 8.80525 2.7353 10.591 2.7353Z"
                                                                        fill="#EB5757" />
                                                                </svg>

                                                            </span>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="table-row ticket-row">
                                                <td class="table-wrapper">
                                                    <p class="ticker-number">#360</p>
                                                </td>
                                                <td class="table-wrapper">
                                                    <div class="table-wrapper-center">
                                                        <p class="ticket-date">11th Oct, 2023</p>
                                                    </div>
                                                </td>
                                                <td class="table-wrapper">
                                                    <div class="table-wrapper-center">
                                                        <p class="ticket-info">Printing and typesetting industry
                                                            standard <span class="inner-text">dummy text ever
                                                                since</span></p>
                                                    </div>
                                                </td>
                                                <td class="table-wrapper">
                                                    <div class="table-wrapper-center table-wrapper-img">
                                                        <div class="comment-img">
                                                            <span>
                                                                <svg width="18" height="17" viewBox="0 0 18 17"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.34526 0.0234375C12.2264 0.133021 14.9269 1.30005 16.7549 4.04172C18.878 7.22662 18.2288 11.3601 15.1868 13.87C12.3535 16.2076 9.12958 16.6592 5.65976 15.5326C5.41809 15.4537 5.23754 15.4516 5.0071 15.5696C3.56972 16.3032 2.03046 16.7262 0.439223 16.9705C0.315577 16.9893 0.142753 16.923 0.0528284 16.8351C0.000840854 16.7841 0.0268346 16.5747 0.0914679 16.4986C0.912029 15.5403 1.12209 14.3635 1.33847 13.1811C1.42909 12.6855 1.33144 12.2891 1.06799 11.8466C-1.05226 8.27848 0.068284 3.93424 3.68564 1.57994C5.29725 0.530871 7.07607 0.043679 9.34526 0.0234375ZM7.79406 8.08444C7.80179 8.72589 8.33993 9.25705 8.98556 9.25845C9.64384 9.25984 10.189 8.71053 10.1813 8.05373C10.1735 7.40461 9.64665 6.88949 8.98978 6.8881C8.31886 6.8874 7.78633 7.42066 7.79406 8.08444ZM4.80618 6.8874C4.14018 6.87972 3.59009 7.41647 3.5915 8.07118C3.5929 8.70844 4.12894 9.24588 4.77457 9.25845C5.41809 9.27031 5.96326 8.74613 5.97731 8.10259C5.99206 7.42834 5.4778 6.89508 4.80618 6.8874ZM11.9966 8.08235C12.0022 8.72868 12.532 9.25635 13.1797 9.25984C13.8316 9.26333 14.3923 8.70355 14.3838 8.05722C14.3747 7.41298 13.8415 6.89089 13.1895 6.8888C12.5151 6.886 11.991 7.41089 11.9966 8.08235Z"
                                                                        fill="#27AE60" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="delete-img">
                                                            <span>
                                                                <svg width="16" height="19" viewBox="0 0 16 19"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M14.7879 5.95508C14.7102 6.91333 14.6353 7.84896 14.5582 8.7853C14.3801 10.9315 14.2028 13.0776 14.0219 15.2238C13.9604 15.9503 13.9208 16.6802 13.8176 17.4018C13.7074 18.1756 13.0827 18.719 12.3039 18.7225C9.39528 18.7352 6.48733 18.7367 3.57867 18.7218C2.71582 18.7176 2.09748 18.0823 2.01904 17.158C1.79291 14.4959 1.58161 11.8332 1.36254 9.17114C1.28269 8.19735 1.19859 7.22426 1.11733 6.25117C1.10955 6.15931 1.10673 6.06744 1.10107 5.95578C5.66688 5.95508 10.2171 5.95508 14.7879 5.95508ZM4.26485 8.06096C4.26343 8.06096 4.26272 8.06096 4.26131 8.06096C4.28675 8.46023 4.31219 8.8595 4.33692 9.25877C4.47826 11.5258 4.61818 13.7921 4.76234 16.0591C4.78354 16.3926 5.0019 16.6067 5.29305 16.6053C5.59834 16.6039 5.81175 16.3665 5.8167 16.0188C5.81811 15.9368 5.81246 15.8541 5.8068 15.7722C5.66476 13.4818 5.52413 11.1915 5.37997 8.90119C5.34959 8.41995 5.32273 7.938 5.27256 7.45817C5.24076 7.15783 5.04289 7.00025 4.74185 7.00095C4.45635 7.00166 4.25142 7.22143 4.24153 7.53166C4.23729 7.70833 4.25707 7.885 4.26485 8.06096ZM11.6213 8.05813C11.6199 8.05813 11.6185 8.05813 11.6171 8.05813C11.6262 7.89348 11.6432 7.72883 11.6418 7.56488C11.6397 7.24758 11.451 7.0271 11.1733 7.00166C10.8991 6.97622 10.6595 7.16561 10.6072 7.46736C10.5775 7.64049 10.5726 7.81787 10.5613 7.99383C10.4737 9.39092 10.386 10.788 10.2998 12.1851C10.2214 13.4529 10.1387 14.7213 10.0687 15.9898C10.049 16.346 10.2574 16.5848 10.5606 16.6032C10.8673 16.6223 11.0991 16.4046 11.121 16.0534C11.2899 13.3886 11.4552 10.7237 11.6213 8.05813ZM8.47025 11.8169C8.47025 10.4757 8.47096 9.1344 8.47025 7.79384C8.47025 7.25394 8.29712 6.99742 7.93954 6.99954C7.57914 7.00095 7.41307 7.25111 7.41307 7.79879C7.41236 10.4693 7.41236 13.1398 7.41378 15.8103C7.41378 15.951 7.38197 16.1319 7.45405 16.2223C7.58055 16.3792 7.77701 16.5778 7.94307 16.5771C8.10914 16.5764 8.30418 16.3757 8.42856 16.2181C8.50064 16.1269 8.46813 15.946 8.46813 15.8061C8.47166 14.4754 8.47025 13.1462 8.47025 11.8169Z"
                                                                        fill="#EB5757" />
                                                                    <path
                                                                        d="M4.21259 2.75226C4.22602 2.49644 4.22955 2.29646 4.24863 2.09788C4.32848 1.26118 4.94611 0.650617 5.78564 0.63931C7.22231 0.62023 8.66039 0.62023 10.0971 0.63931C10.9366 0.650617 11.5549 1.26048 11.6348 2.09718C11.6539 2.29575 11.6574 2.49574 11.6694 2.7353C11.7966 2.74095 11.9196 2.75085 12.0425 2.75155C12.9379 2.75297 13.8332 2.74873 14.7286 2.75367C15.4197 2.75721 15.8868 3.18969 15.8861 3.81439C15.8854 4.43838 15.419 4.87298 14.7272 4.87369C10.2038 4.87581 5.67964 4.87581 1.15623 4.87369C0.464398 4.87298 -0.0027105 4.43909 -0.00341717 3.8151C-0.00412384 3.1911 0.462987 2.75721 1.15411 2.75438C2.16536 2.74873 3.17661 2.75226 4.21259 2.75226ZM10.591 2.7353C10.591 2.59821 10.5917 2.49291 10.591 2.38832C10.5861 1.86821 10.4129 1.69508 9.88717 1.69437C8.56993 1.69296 7.2534 1.69155 5.93616 1.69508C5.49661 1.69649 5.31147 1.8774 5.2938 2.30706C5.28815 2.44415 5.29309 2.58195 5.29309 2.7353C7.06967 2.7353 8.80525 2.7353 10.591 2.7353Z"
                                                                        fill="#EB5757" />
                                                                </svg>

                                                            </span>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--------------- user-profile-section-end --------------->

    <!--------------- footer-section--------------->
    @include('include.backend.footer')
    <!--------------- footer-section-end--------------->







    <!--------------- jQuery ---------------->
    <script src="{{asset ('frontend/assets/js/jquery_3.7.1.min.js') }}"></script>

    <!--------------- bootstrap-js ---------------->
    <script src="{{asset ('frontend/assets/js/bootstrap_5.3.2.bundle.min.js') }}"></script>

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