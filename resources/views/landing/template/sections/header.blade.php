<nav class="main-nav-one stricky">
    <div class="container">
        <div class="inner-container">
            <div class="logo-box">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('logo.jpg') }}" width="120">
                </a>
                <a href="javascript:void(0)" class="side-menu__toggler"><i class="muzex-icon-menu"></i></a>
            </div><!-- /.logo-box -->

            <div class="main-nav__main-navigation">
                <ul class="main-nav__navigation-box">
                    <li>
                        <a href="{{ url('/') }}">
                            @lang('admin/template.sidebar.dashboard')
                        </a>
                    </li>

                    <li><a href="{{ url('situs-cagar-budaya') }}">@lang('admin/template.sidebar.tangible-cultural-heritage')</a></li>

                    <li><a href="{{ url('warisan-budaya') }}">@lang('admin/template.sidebar.intangible-cultural-heritage')</a></li>

                    <li class="dropdown">
                        <a href="javascript:void(0)">@lang('admin/template.sidebar.reference')</a>
                        <ul>
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="donate.html">Donate</a></li>
                        </ul>
                    </li>

                    <li><a href="{{ url('acara') }}">@lang('admin/template.sidebar.event')</a></li>
                </ul>
            </div>
            <div class="main-nav__right">
                <a class="sidemenu-icon side-content__toggler" href="#"><i class="muzex-icon-menu"></i></a>
            </div><!-- /.main-nav__right -->
        </div><!-- /.inner-container -->
    </div><!-- /.container -->
</nav><!-- /.main-nav-one -->
