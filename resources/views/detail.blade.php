<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="keywords"
        content="ShopUS, bootstrap-5, bootstrap, sass, css, HTML Template, HTML,html, bootstrap template, free template, figma, web design, web development,front end, bootstrap datepicker, bootstrap timepicker, javascript, ecommerce template">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="./assets/images/homepage-one/icon.png">

    <!--title  -->
    <title>Rara PetShop | Detail Product</title>

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

    <!-- SweetAlert -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        .quantity-wrapper {
            display: flex;
            align-items: center;
        }

        .quantity span {
            cursor: pointer;
            padding: 10px;
            font-size: 18px;
        }

        .quantity .number {
            width: 40px;
            text-align: center;
        }
    </style>

</head>

<body>

    <!--------------- header-section --------------->
    @include('include.frontend.header')
    <!--------------- header-section-end --------------->

    <!--------------- products-info-section--------------->
    <section class="product product-info">
        <div class="container">
            <div class="blog-bradcrum">
                <span><a href="index.html">Home</a></span>
                <span class="devider">/</span>
                <span><a href="product-sidebar.html">Shop</a></span>
                <span class="devider">/</span>
                <span><a href="#">Product Details</a></span>
            </div>
            <div class="product-info-section">
                <div class="row ">
                    <div class="col-md-6">
                        <div class="product-info-img" data-aos="fade-right">
                            <div class="swiper product-top">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide slider-top-img">
                                        <img src="{{ asset('/images/product/' . $product->gambar) }}" width="100">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product-info-content" data-aos="fade-left">
                            <h5>{{ $product->nama_product }}</h5>
                            <div class="price">
                                <span class="new-price">@currency($product->harga)</span>
                            </div>
                            <hr>
                            <div class="product-availability">
                                <span>Stok : </span>
                                <span id="stok" class="inner-text">{{ $product->stok }}</span>
                            </div>
                            <div class="product-quantity">
                                <div class="quantity-wrapper">
                                    <div class="quantity">
                                        <span class="minus" onclick="updateQuantity(false)">-</span>
                                        <span id="quantity-number" class="number">1</span>
                                        <span class="plus" onclick="updateQuantity(true)">+</span>
                                    </div>
                                </div>
                                <form id="cartForm" action="{{ route('keranjang.add') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="id_product" value="{{ $product->id }}">
                                    <input type="hidden" id="jumlah" name="jumlah" value="1">
                                    <!-- Jumlah produk bisa disesuaikan -->
                                    <button type="submit" class="shop-btn" onclick="return checkStock()">
                                        <span>
                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M8.25357 3.32575C8.25357 4.00929 8.25193 4.69283 8.25467 5.37583C8.25576 5.68424 8.31536 5.74439 8.62431 5.74439C9.964 5.74603 11.3031 5.74275 12.6428 5.74603C13.2728 5.74767 13.7397 6.05663 13.9246 6.58104C14.2209 7.42098 13.614 8.24232 12.6762 8.25052C11.5919 8.25982 10.5075 8.25271 9.4232 8.25271C9.17714 8.25271 8.93107 8.25216 8.68501 8.25271C8.2913 8.2538 8.25412 8.29154 8.25412 8.69838C8.25357 10.0195 8.25686 11.3412 8.25248 12.6624C8.25029 13.2836 7.92603 13.7544 7.39891 13.9305C6.56448 14.2088 5.75848 13.6062 5.74863 12.6821C5.73824 11.7251 5.74645 10.7687 5.7459 9.81173C5.7459 9.41965 5.74754 9.02812 5.74535 8.63604C5.74371 8.30849 5.69012 8.2538 5.36204 8.25326C4.02235 8.25162 2.68321 8.25545 1.34352 8.25107C0.719613 8.24943 0.249902 7.93008 0.0710952 7.40348C-0.212153 6.57065 0.388245 5.75916 1.31017 5.74658C2.14843 5.73564 2.98669 5.74384 3.82495 5.74384C4.30779 5.74384 4.79062 5.74384 5.274 5.74384C5.72184 5.7433 5.7459 5.71869 5.7459 5.25716C5.7459 3.95406 5.74317 2.65096 5.74699 1.34786C5.74863 0.720643 6.0625 0.253102 6.58799 0.0704598C7.40875 -0.213893 8.21803 0.370671 8.25248 1.27349C8.25303 1.29154 8.25303 1.31013 8.25303 1.32817C8.25357 1.99531 8.25357 2.66026 8.25357 3.32575Z"
                                                    fill="white" />
                                            </svg>
                                        </span>
                                        <span>Tambahkan Ke Keranjang</span>
                                    </button>
                                </form>
                            </div>
                            <hr>
                            <div class="product-details">
                                <p class="category">Kategori :
                                    <span class="inner-text clickable-span"
                                        onclick="window.location.href='{{ url('kategori/' . $product->kategori->id) }}'">
                                        {{ $product->kategori->nama_kategori }}
                                    </span>
                                </p>
                            </div>
                            <hr>
                            <p class="content-paragraph"><span class="inner-text">{{ $product->deskripsi }}</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--------------- products-info-end--------------->

    <!--------------- footer-section--------------->
    @include('include.frontend.footer')
    <!--------------- footer-section-end--------------->

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
    @include('sweetalert::alert')

    <script>
        function updateQuantity(increment) {
            var quantityElement = document.getElementById('quantity-number');
            var jumlahInput = document.getElementById('jumlah');
            var currentQuantity = parseInt(quantityElement.textContent);
            var stock = parseInt(document.getElementById('stok').textContent);

            if (increment) {
                if (currentQuantity < stock) {
                    currentQuantity++;
                } else {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Oops...',
                        text: 'Jumlah produk yang anda pilih melebihi stok!',
                    });
                }
            } else {
                if (currentQuantity > 1) {
                    currentQuantity--;
                }
            }
            quantityElement.textContent = currentQuantity;
            jumlahInput.value = currentQuantity;
        }

        function checkStock() {
            var currentQuantity = parseInt(document.getElementById('quantity-number').textContent);
            var stock = parseInt(document.getElementById('stok').textContent);
            if (currentQuantity > stock) {
                Swal.fire({
                    icon: 'warning',
                    title: 'Oops...',
                    text: 'Jumlah produk yang anda pilih melebihi stok!',
                });
                return false; // prevent form submission
            }
            return true;
        }
    </script>
</body>

</html>
