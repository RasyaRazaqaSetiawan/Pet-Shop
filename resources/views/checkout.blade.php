<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="keywords"
        content="ShopUS, bootstrap-5, bootstrap, sass, css, HTML Template, HTML,html, bootstrap template, free template, figma, web design, web development,front end, bootstrap datepicker, bootstrap timepicker, javascript, ecommerce template">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="./assets/images/homepage-one/icon.png">

    <!--title  -->
    <title>Shopus | About Us</title>

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
                <span><a href="#">Checkout</a></span>
            </div>
            <div class="blog-heading about-heading">
                <h1 class="heading">Checkout</h1>
            </div>
        </div>
    </section>
    <!--------------- blog-tittle-section-end---------------->

    <!--------------- checkout-section---------------->
    <section class="checkout product footer-padding">
        <div class="container">
            <div class="checkout-section">
                <div class="row gy-5">
                    <div class="col">
                        <div class="checkout-wrapper">
                            <div class="account-section billing-section">
                                <h5 class="wrapper-heading">Order Summary</h5>
                                <div class="order-summery">
                                    <div class="subtotal product-total">
                                        <h5 class="wrapper-heading">PRODUCT</h5>
                                        <h5 class="wrapper-heading">TOTAL</h5>
                                    </div>
                                    <hr>
                                    <div class="subtotal product-total">
                                        <ul class="product-list">
                                            <li>
                                                <div class="product-info">
                                                    <h5 class="wrapper-heading">Whiskas Kucing</h5>
                                                    <p class="paragraph">Whiskas Kucing Rasa Ayam</p>
                                                </div>
                                                <div class="price">
                                                    <h5 class="wrapper-heading">Rp. 15.000</h5>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <hr>
                                    <div class="subtotal product-total">
                                        <h5 class="wrapper-heading">SUBTOTAL</h5>
                                        <h5 class="wrapper-heading">Rp. 15.000</h5>
                                    </div>
                                    <div class="subtotal product-total">
                                        <ul class="product-list">
                                            <li>
                                                <div class="product-info">
                                                    <p class="paragraph">SHIPPING</p>
                                                    <h5 class="wrapper-heading">Free Shipping</h5>

                                                </div>
                                                <div class="price">
                                                    <h5 class="wrapper-heading">Rp.0</h5>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <hr>
                                    <div class="subtotal total">
                                        <h5 class="wrapper-heading">TOTAL</h5>
                                        <h5 class="wrapper-heading price">Rp. 15.000</h5>
                                    </div>
                                    <div class="subtotal payment-type">
                                        <div class="checkbox-item">
                                            <input type="radio" id="cash" name="bank" selected>
                                            <div class="cash">
                                                <h5 class="wrapper-heading">Cash on Delivery</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#" class="shop-btn">Place Order Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--------------- checkout-section-end---------------->

    <!--------------- footer-section--------------->
    @include('include.frontend.footer')
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
