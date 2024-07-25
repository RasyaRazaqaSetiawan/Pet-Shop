<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="ShopUS, bootstrap-5, bootstrap, sass, css, HTML Template, HTML,html, bootstrap template, free template, figma, web design, web development,front end, bootstrap datepicker, bootstrap timepicker, javascript, ecommerce template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="{{ asset('frontend/assets/images/homepage-one/icon.png') }}">

    <!--title  -->
    <title>Rara Pet Shop | Login</title>

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

    <!-- Custom CSS for login page -->
    <style>
        .form-check {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .forgot-password {
            color: red;
            text-decoration: none;
            font-size: 11px;
        }
        .forgot-password:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <!--------------- login-section --------------->
    <section class="login footer-padding">
        <div class="container">
            <div class="login-section">
                <div class="review-form">
                    <h5 class="comment-title">Log In</h5>
                    <div class="review-inner-form">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="review-form-name">
                                <label for="email" class="form-label">Email Address</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="review-form-name">
                                <label for="password" class="form-label">Password*</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-check">
                                <div class="checkbox-item">
                                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <span class="address">Remember Me</span>
                                </div>
                                @if (Route::has('password.request'))
                                    <a class="forgot-password" href="{{ route('password.request') }}">Forgot Your Password?</a>
                                @endif
                            </div>
                            <div class="login-btn text-center">
                                <button type="submit" class="shop-btn btn-danger">Log In</button>
                                <span class="shop-account">Don't have an account? <a href="{{ route('register') }}">Sign Up Free</a></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--------------- login-section-end --------------->

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
