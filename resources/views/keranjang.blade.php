<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="keywords"
        content="ShopUS, bootstrap-5, bootstrap, sass, css, HTML Template, HTML,html, bootstrap template, free template, figma, web design, web development,front end, bootstrap datepicker, bootstrap timepicker, javascript, ecommerce template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="./assets/images/homepage-one/icon.png">
    <title>Rara PetShop | Carts</title>

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

        .quantity button {
            cursor: pointer;
            padding: 10px;
            font-size: 18px;
            border: none;
            background: none;
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

    <!--------------- blog-title-section---------------->
    <section class="blog about-blog">
        <div class="container">
            <div class="blog-bradcrum">
                <span><a href="{{ url('/') }}">Home</a></span>
                <span class="divider">/</span>
                <span><a href="{{ url('cart') }}">Keranjang</a></span>
            </div>
            <div class="blog-heading about-heading">
                <h1 class="heading">Keranjang</h1>
            </div>
        </div>
    </section>
    <!--------------- blog-title-section-end---------------->

    <!--------------- cart-section---------------->
    <section class="product-cart product footer-padding">
        <div class="container">
            <div class="cart-section">
                <table>
                    <tbody>
                        <tr class="table-row table-top-row">
                            <td class="table-wrapper wrapper-product">
                                <h5 class="table-heading">PRODUCT</h5>
                            </td>
                            <td class="table-wrapper">
                                <div class="table-wrapper-center">
                                    <h5 class="table-heading">HARGA</h5>
                                </div>
                            </td>
                            <td class="table-wrapper">
                                <div class="table-wrapper-center">
                                    <h5 class="table-heading">JUMLAH</h5>
                                </div>
                            </td>
                            <td class="table-wrapper">
                                <div class="table-wrapper-center">
                                    <h5 class="table-heading">ACTION</h5>
                                </div>
                            </td>
                        </tr>
                        @foreach ($keranjang as $item)
                            <tr class="table-row ticket-row">
                                <td class="table-wrapper wrapper-product">
                                    <div class="wrapper">
                                        <div class="wrapper-img">
                                            <img src="{{ asset('/images/product/' . $item->gambar) }}" alt="img">
                                        </div>
                                        <div class="table-wrapper-center">
                                            <h5 class="heading">{{ $item->product_name }}</h5>
                                        </div>
                                    </div>
                                </td>
                                <td class="table-wrapper">
                                    <div class="table-wrapper-center">
                                        <h5 class="heading">@currency($item->harga)</h5>
                                    </div>
                                </td>
                                <td class="table-wrapper">
                                    <div class="table-wrapper-center">
                                        <div class="quantity">
                                            <span id="quantity-number-{{ $item->id }}"
                                                class="number">{{ $item->jumlah }}</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="table-wrapper">
                                    <div class="table-wrapper-center">
                                        <form action="{{ route('keranjang.destroy', $item->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">
                                                <svg width="10" height="10" viewBox="0 0 10 10" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M7.95118 0.186666C8.08067 0.0565518 8.27123 0 8.46913 0C8.66703 0 8.8576 0.0565518 8.98709 0.186666L9.81333 1.01291C9.94345 1.1424 10 1.33297 10 1.53087C10 1.72877 9.94345 1.91933 9.81333 2.04882L6.86146 5.00071L9.81333 7.95159C9.94345 8.08108 10 8.27163 10 8.46954C10 8.66744 9.94345 8.858 9.81333 8.98749L8.98709 9.81373C8.8576 9.94385 8.66703 10.0004 8.46913 10.0004C8.27123 10.0004 8.08067 9.94385 7.95118 9.81373L5.00018 6.86186L2.04882 9.81373C1.91933 9.94385 1.72877 10.0004 1.53087 10.0004C1.33297 10.0004 1.1424 9.94385 1.01291 9.81373L0.186666 8.98749C0.0565518 8.858 0 8.66744 0 8.46954C0 8.27163 0.0565518 8.08108 0.186666 7.95159L3.13804 5.00071L0.186666 2.04882C0.0565518 1.91933 0 1.72877 0 1.53087C0 1.33297 0.0565518 1.1424 0.186666 1.01291L1.01291 0.186666C1.1424 0.0565518 1.33297 0 1.53087 0C1.72877 0 1.91933 0.0565518 2.04882 0.186666L5.00018 3.13804L7.95118 0.186666Z"
                                                        fill="#F84B4B" />
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        <tr class="table-row ticket-row">
                            <td colspan="5" class="table-wrapper wrapper-total">
                                <div class="table-wrapper-center">
                                    <h5 class="heading">Total: @currency($harga->total)</h5>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="wishlist-btn cart-btn">
            <form action="{{ route('keranjang.clear') }}" method="POST">
                @csrf
                <button type="submit" class="clean-btn">Clear Cart</button>
            </form>
            <a href="{{ route('transaksi.checkout') }}" class="shop-btn">Proceed to Checkout</a>
        </div>
        </div>
    </section>
    <!--------------- cart-section-end---------------->

    <!--------------- footer-section --------------->
    @include('include.frontend.footer')
    <!--------------- footer-section-end --------------->

    <!--------------- script-section --------------->

    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/js/aos.js') }}"></script>
    <script src="{{ asset('frontend/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/js/magnific-popup.js') }}"></script>
    <script src="{{ asset('frontend/js/custom.js') }}"></script>
    @include('sweetalert::alert')
    <script>
    </script>
    
    <!--------------- script-section-end --------------->

</body>

</html>
