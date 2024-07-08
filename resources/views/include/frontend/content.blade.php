<!--------------- hero-section --------------->
<section id="hero" class="hero">
    <div class="swiper hero-swiper">
        <div class="swiper-wrapper hero-wrapper">
            <div class="swiper-slide hero-slider-one">
                <div class="container">
                    <div class="col-lg-6">
                        <div class="wrapper-section" data-aos="fade-up">
                            <div class="wrapper-info">
                                <h5 class="wrapper-subtitle">UP TO <span class="wrapper-inner-title">70%</span> OFF
                                </h5>
                                <h1 class="wrapper-details">Fashion Collection
                                    Summer Sale</h1>
                                <a href="product-sidebar.html" class="shop-btn">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide hero-slider-two">
                <div class="container">
                    <div class="col-lg-6">
                        <div class="wrapper-section">
                            <div class="wrapper-info">
                                <h5 class="wrapper-subtitle">UP TO <span class="wrapper-inner-title">70%</span> OFF
                                </h5>
                                <h1 class="wrapper-details">Fashion Collection
                                    Summer Sale</h1>
                                <a href="#" class="shop-btn">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide hero-slider-three">
                <div class="container">
                    <div class="col-lg-6">
                        <div class="wrapper-section">
                            <div class="wrapper-info">
                                <h5 class="wrapper-subtitle">UP TO <span class="wrapper-inner-title">70%</span> OFF
                                </h5>
                                <h1 class="wrapper-details">Fashion Collection
                                    Summer Sale</h1>
                                <a href="#" class="shop-btn">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>
<!--------------- hero-section-end --------------->

<!--------------- category-section--------------->

<section class="product-category mb-5">
    <div class="container">
        <div class="section-title">
            <h5>Our Categories</h5>
        </div>

        <div class="category-section d-flex flex-wrap">
            @foreach ($kategori as $data)
            <div class="product-wrapper me-3" data-aos="fade-right" data-aos-duration="100">
                <div class="wrapper-img">
                    <img src="{{ asset('/images/kategori/' . $data->gambar) }}" width="100">
                </div>
                <div class="wrapper-info">
                    <a href="" class="wrapper-details">{{ $data->nama_kategori }}</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!--------------- category-section-end--------------->

<!--------------- Arrival-section--------------->
<section class="product arrival">
    <div class="container">
        <div class="section-title">
            <h5>BEST SELLER</h5>
            <a href="product-sidebar.html" class="view">View All</a>
        </div>
        <div class="arrival-section">
            <div class="row g-5">
                @foreach ($product as $data)
                    <div class="col-lg-3 col-sm-6">
                        <div class="product-wrapper" data-aos="fade-up">
                            <div class="product-img">
                                <img src="{{ asset('/images/product/' . $data->gambar) }}" width="100">
                            </div>
                            <div class="product-info">
                                <div class="product-description">
                                    <a href="{{ route('detail', ['id' => $data->id]) }}"
                                        class="product-details">{{ $data->nama_product }}</a>
                                    <div class="price">
                                        <span class="new-price">@currency($data->harga)</span>
                                        <span>|</span>
                                        <span style="color: green;">Stok: {{ $data->stok }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="product-cart-btn">
                                <a href="cart.html" class="product-btn">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!--------------- arrival-section-end--------------->

<!--------------- weekly-section--------------->
<section class="product weekly-sale">
    <div class="container">
        <div class="style-section">
            <div class="row gy-4 gx-5 gy-lg-0">
                <div class="col-lg-6">
                    <div class="product-wrapper wrapper-one" data-aos="fade-right">
                        <div class="wrapper-info">
                            <span class="wrapper-subtitle">NEW STYLE</span>
                            <h4 class="wrapper-details">Get 65% Offer
                                <span class="wrapper-inner-title">& Make New</span> Fusion.
                            </h4>
                            <a href="product-sidebar.html" class="shop-btn">Shop Now
                                <span>
                                    <svg width="8" height="14" viewBox="0 0 8 14" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect x="1.45312" y="0.914062" width="9.25346" height="2.05632"
                                            transform="rotate(45 1.45312 0.914062)" />
                                        <rect x="8" y="7.45703" width="9.25346" height="2.05632"
                                            transform="rotate(135 8 7.45703)" />
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product-wrapper wrapper-two" data-aos="fade-up">
                        <div class="wrapper-info">
                            <span class="wrapper-subtitle">Mega OFFER</span>
                            <h4 class="wrapper-details">
                                Make your New
                                <span class="wrapper-inner-title">Styles with Our</span>
                                Products
                            </h4>
                            <a href="product-sidebar.html" class="shop-btn">Shop Now
                                <span>
                                    <svg width="8" height="14" viewBox="0 0 8 14" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect x="1.45312" y="0.914062" width="9.25346" height="2.05632"
                                            transform="rotate(45 1.45312 0.914062)" />
                                        <rect x="8" y="7.45703" width="9.25346" height="2.05632"
                                            transform="rotate(135 8 7.45703)" />
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--------------- weekly-section-end--------------->

<!--------------- flash-section--------------->
<section class="product best-product">
    <div class="container">
        <div class="section-title">
            <h5>Reccomendation For You</h5>
            <a href="flash-sale.html" class="view">View All</a>
        </div>
        <div class="best-product-section">
            <div class="row g-4">
                @foreach ($product as $data)
                    <div class="col-xl-2 col-md-4">
                        <div class="product-wrapper" data-aos="fade-up">
                            <div class="product-img">
                                <img src="{{ asset('/images/product/' . $data->gambar) }}" width="100">
                            </div>
                            <div class="product-info">
                                <div class="product-description">
                                    <a href="{{ route('detail', ['id' => $data->id]) }}"
                                        class="product-details">{{ $data->nama_product }}</a>
                                    <div class="price">
                                        <span class="new-price">@currency($data->harga)</span>
                                        <span>|</span>
                                        <span style="color: green;">Stok: {{ $data->stok }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="product-cart-btn">
                                <a href="cart.html" class="product-btn">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!--------------- flash-section-end--------------->
</body>

</html>
