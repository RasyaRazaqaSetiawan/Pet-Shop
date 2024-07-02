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
                <a href="{{route('home')}}">
                    <div class="parent-icon"><i class="material-icons-outlined">home</i>
                    </div>
                    <div class="menu-title">Dashboard</div>
                </a>
            <li class="menu-label">Data Table</li>
            <li>
                <a href="{{route('kategori.index')}}">
                    <div class="parent-icon"><i class="material-icons-outlined">widgets</i>
                    </div>
                    <div class="menu-title">Kategori</div>
                </a>
            </li>
        </ul>
        <!--end navigation-->
    </div>
</aside>
