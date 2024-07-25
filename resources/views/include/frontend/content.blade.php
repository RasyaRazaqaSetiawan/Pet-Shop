<!--------------- hero-section --------------->
<section id="hero" class="hero">
    <div class="swiper hero-swiper">
        <div class="swiper-wrapper hero-wrapper">
            <div class="swiper-slide hero-slider-one">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="wrapper-section" data-aos="fade-up">
                                <div class="wrapper-info">
                                    <h1 class="wrapper-details">Selamat Datang Di Rara PetShop</h1>
                                    <a href="{{ url('shop') }}" class="shop-btn">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--------------- hero-section-end --------------->

<!--------------- category-section--------------->
<section class="product-category mb-5">
    <div class="container">
        <div class="section-title">
            <h5>Kategori</h5>
        </div>
        <div class="category-section d-flex flex-wrap">
            @foreach ($kategori as $data)
                <div class="product-wrapper me-3" data-aos="fade-right" data-aos-duration="100">
                    <div class="wrapper-img">
                        <img src="{{ asset('/images/kategori/' . $data->gambar) }}" width="100">
                    </div>
                    <div class="wrapper-info">
                        <a class="wrapper-details">{{ $data->nama_kategori }}</a>
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
            <h5>PRODUK TERBARU</h5>
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
                                <form action="{{ route('keranjang.add') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="id_product" value="{{ $data->id }}">
                                    <input type="hidden" name="jumlah" value="1">
                                    <button type="submit" class="product-btn">Tambahkan Ke Keranjang</button>
                                </form>
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
                            <h4 class="wrapper-details">Berikan Makanan
                                <span class="wrapper-inner-title">Terbaik</span>Untuk Dia
                            </h4>
                            <a href="{{ url('shop') }}" class="shop-btn">Shop Now
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
                            <h4 class="wrapper-details">
                                Ingin
                                <span class="wrapper-inner-title">Lebih Tau</span>
                                Tentang Kami??
                            </h4>
                            <a href="{{ url('about') }}" class="shop-btn">Tentang Kami
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
            <h5>Rekomendasi Untuk Kamu</h5>
        </div>
        <div class="best-product-section">
            <div class="row g-4">
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
                                <form action="{{ route('keranjang.add') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="id_product" value="{{ $data->id }}">
                                    <input type="hidden" name="jumlah" value="1">
                                    <!-- Jumlah produk bisa disesuaikan -->
                                    <button type="submit" class="product-btn">Tambahkan Ke keranjang</button>
                                </form>
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
