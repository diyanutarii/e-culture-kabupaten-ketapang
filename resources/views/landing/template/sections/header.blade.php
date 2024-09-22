<nav class="main-nav-one stricky">
    <div class="container">
        <div class="inner-container">
            <div class="logo-box">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('logo.jpg') }}" width="120">
                </a>
                <a href="javascript:void(0)" class="side-menu__toggler">
                    <i class="muzex-icon-menu"></i>
                </a>
            </div>

            <div class="main-nav__main-navigation">
                <ul class="main-nav__navigation-box">
                    <li>
                        <a href="{{ url('/') }}">
                            Beranda
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('situs-cagar-budaya') }}">
                            Situs Cagar Budaya
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('warisan-budaya-tak-benda') }}">
                            Warisan Budaya Tak Benda
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('acara') }}">
                            Acara
                        </a>
                    </li>

                    {{-- <li>
                        <a href="{{ url('pustaka') }}">
                            Pustaka
                        </a>
                    </li> --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown" data-toggle="dropdown" href="#" role="button"
                            aria-expanded="false">Pustaka</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ url('kuliner') }}">Kuliner</a>
                            <a class="dropdown-item" href="{{ url('legenda') }}">Legenda</a>

                        </div>
                    </li>
                </ul>
            </div>
            <div class="main-nav__right">
                <a class="sidemenu-icon side-content__toggler" href="javascript:void(0)">
                    <i class="muzex-icon-menu"></i>
                </a>
            </div>
        </div>
    </div>
</nav>
