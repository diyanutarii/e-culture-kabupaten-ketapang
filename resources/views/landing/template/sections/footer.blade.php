<footer class="site-footer">
    <div class="site-footer__upper">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="footer-widget footer-widget__about">
                        <p>
                            Ketapang Berbudaye merupakan portal informasi kebudayaan di Kabupaten Ketapang yang didukung
                            oleh Dinas Pariwisata dan Kebudayaan. Portal ini bertujuan memperkenalkan dan memberikan
                            kekayaan kebudayaan yang dimiliki Kabupaten Ketapang.
                        </p>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="footer-widget footer-widget__links">
                        <h3 class="footer-widget__title">Aksi Cepat</h3>
                        <ul class="footer-widget__links-list list-unstyled">
                            <li>
                                <a href="{{ url('warisan-budaya-tak-benda') }}">Warisan Budaya Tak Benda</a>
                            </li>
                            <li>
                                <a href="{{ url('situs-cagar-budaya') }}">Situs Cagar Budaya</a>
                            </li>
                            <li>
                                <a href="{{ url('acara') }}">Acara</a>
                            </li>
                            <li>
                                <a href="{{ url('pustaka') }}">Pustaka</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="footer-widget footer-widget__contact">
                        <h3 class="footer-widget__title">Kontak</h3>
                        <p>Jl. Jenderal Sudirman No. 61 Kelurahan Tengah</p>
                        <p><a href="mailto:ketapangberbudaye@gmail.com">ketapangberbudaye@gmail.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="site-footer__bottom">
        <div class="container">
            <div class="inner-container">
                <p>2024 &copy; Ketapang Berbudaye</p>
                <a href="{{ url('/') }}" class="site-footer__bottom-logo">
                    <img src="{{ asset('logo.jpg') }}" height="100">
                </a>
            </div>
        </div>
    </div>
</footer>