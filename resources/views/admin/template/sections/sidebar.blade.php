<div class="vertical-menu">
    <div data-simplebar class="h-100">
        <div class="navbar-brand-box">
            <a href="{{ url('/') }}" class="logo">
                <x-admin-logo width="50"></x-admin-logo>
            </a>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="{{ url('/') }}" class="waves-effect">
                        <i class="mdi mdi-home"></i>
                        <span>Beranda</span>
                    </a>
                </li>

                <li class="menu-title">Master Data</li>

                <li>
                    <a href="{{ url('admin') }}" class="waves-effect">
                        <i class="mdi mdi-account-details"></i>
                        <span>Administrator</span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('situs-cagar-budaya') }}" class="waves-effect">
                        <i class="mdi mdi-bank-outline"></i>
                        <span>Situs Cagar Budaya</span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('warisan-budaya-tak-benda') }}" class="waves-effect">
                        <i class="mdi mdi-shopping-music"></i>
                        <span>Warisan Budaya Tak Benda</span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('acara') }}" class="waves-effect">
                        <i class="mdi mdi-auto-fix"></i>
                        <span>Acara</span>
                    </a>
                </li>
                <li class="menu-title">Pustaka</li>
                <li>
                    <a href="{{ url('kuliner') }}" class="waves-effect">
                        <i class="mdi mdi-library-shelves"></i>
                        <span>Kuliner</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('legenda') }}" class="waves-effect">
                        <i class="mdi mdi-library-shelves"></i>
                        <span>Legenda</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
