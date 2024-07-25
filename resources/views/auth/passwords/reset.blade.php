<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="ShopUS, bootstrap-5, bootstrap, sass, css, HTML Template, HTML,html, bootstrap template, free template, figma, web design, web development,front end, bootstrap datepicker, bootstrap timepicker, javascript, ecommerce template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="{{ asset('frontend/assets/images/homepage-one/icon.png') }}">

    <!--title  -->
    <title>Rara Pet Shop | Reset Password</title>

    <!--------------- swiper-css ---------------->
    <link rel="stylesheet" href="{{ asset('frontend/css/swiper10-bundle.min.css') }}">

    <!--------------- bootstrap-css ---------------->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap-5.3.2.min.css') }}">

    <!---------------------- Range Slider ------------------->
    <link rel="stylesheet" href="{{ asset('frontend/css/nouislider.min.css') }}">

    <!---------------------- Scroll ------------------->
    <link rel="stylesheet" href="{{ asset('frontend/css/aos-3.0.0.css') }}">

    <!--------------- additional-css ---------------->
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
</head>

<body>
    <!--------------- reset-password-section --------------->
    <section class="login footer-padding">
        <div class="container">
            <div class="login-section">
                <div class="review-form">
                    <h5 class="comment-title">Reset Password</h5>
                    <div class="review-inner-form">
                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf
                            <input type="hidden" name="token" value="{{ $token }}">

                            <div class="review-form-name">
                                <label for="email" class="form-label">Email Address</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="review-form-name">
                                <label for="password" class="form-label">Password</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="review-form-name">
                                <label for="password-confirm" class="form-label">Confirm Password</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>

                            <div class="login-btn text-center">
                                <button type="submit" class="shop-btn btn-danger">Reset Password</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--------------- reset-password-section-end --------------->

    <!--------------- jQuery ---------------->
    <script src="{{ asset('frontend/assets/js/jquery_3.7.1.min.js') }}"></script>

    <!--------------- bootstrap-js ---------------->
    <script src="{{ asset('frontend/assets/js/bootstrap_5.3.2.bundle.min.js') }}"></script>

    <!--------------- Range-Slider-js ---------------->
    <script src="{{ asset('frontend/assets/js/nouislider.min.js') }}"></script>

    <!--------------- scroll-Animation-js ---------------->
    <script src="{{ asset('frontend/assets/js/aos-3.0.0.js') }}"></script>

    <!--------------- swiper-js ---------------->
    <script src="{{ asset('frontend/assets/js/swiper10-bundle.min.js') }}"></script>

    <!--------------- additional-js ---------------->
    <script src="{{ asset('frontend/assets/js/shopus.js') }}"></script>
</body>

</html>

