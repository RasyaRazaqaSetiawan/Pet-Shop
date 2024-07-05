<aside class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div class="logo-name flex-grow-1">
            <h5 class="text-center">Halaman Admin</h5>
        </div>
        <div class="sidebar-close">
            <span class="material-icons-outlined">close</span>
        </div>
    </div>
    <div class="sidebar-nav">
        <!--navigation-->
        <ul class="metismenu" id="sidenav">
            <li>
                <a href="{{ route('home') }}">
                    <div class="parent-icon"><i class="material-icons-outlined">home</i></div>
                    <div class="menu-title">Dashboard</div>
                </a>
            </li>
            <li class="menu-label">Tabel Data</li>
            <li>
                <a href="{{ route('kategori.index') }}">
                    <div class="parent-icon"><i class="material-icons-outlined">widgets</i></div>
                    <div class="menu-title">Kategori</div>
                </a>
            </li>
            <li>
                <a href="{{ route('product.index') }}">
                    <div class="parent-icon"><i class="material-icons-outlined">inventory_2</i></div>
                    <div class="menu-title">Produk</div>
                </a>
            </li>
            <li>
                <a href="{{route('pesanan.index')}}">
                    <div class="parent-icon"><i class="material-icons-outlined">shopping_bag</i>
                    </div>
                    <div class="menu-title">Pesanan</div>
                </a>
            </li>
            <li class="menu-label">Pengaturan</li>
            <li>
                <a href="{{ route('user.index') }}">
                    <div class="parent-icon"><i class="material-icons-outlined">person</i>
                    </div>
                    <div class="menu-title">Data User</div>
                </a>
            </li>
            <li>
                <a href="#">
                    <div class="parent-icon"><i class="material-icons-outlined">description</i>
                    </div>
                    <div class="menu-title">Ulasan</div>
                </a>
            </li>
        </ul>
        <!--end navigation-->
    </div>
</aside>
