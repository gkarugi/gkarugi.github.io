<!-- footer start-->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-3">
                <div class="footer-logo">
                    <a class="footer-logo__link" href="/">
                        <img class="footer-logo__img" src="/assets/images/logo.png" alt="logo"/>
                    </a>
                </div>
                <!-- footer socials start-->
                <ul class="footer-socials">
                    <li class="footer-socials__item">
                        <a class="footer-socials__link" href="#">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="footer-socials__item">
                        <a class="footer-socials__link" href="#">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="footer-socials__item">
                        <a class="footer-socials__link" href="#">
                            <i class="fa fa-google-plus" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="footer-socials__item">
                        <a class="footer-socials__link" href="#">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>
                <!-- footer socials end-->
            </div>
            <div class="col-sm-6 col-lg-3">
                <h4 class="footer__title">Contacts</h4>
                <div class="footer-contacts">
                    <p class="footer-contacts__address">Karen Village, Ngong Rd, Nairobi, Kenya</p>
                    <p class="footer-contacts__phone">Phone: <a href="tel:+254703388130">+254 703 388 130</a></p>
                    <p class="footer-contacts__mail">Email: <a href="mailto:support@csricentre.org">support@csricentre.org</a></p>
                    <p class="footer-contacts__mail">Postal Address: P.O Box 15518-00509 Nairobi. Kenya</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <h4 class="footer__title">Important Links</h4>
                <!-- footer nav start-->
                <nav>
                    <ul class="footer-menu">
                        <li class="footer-menu__item"><a class="footer-menu__link" href="/">Home</a></li>
                        <li class="footer-menu__item footer-menu__item--active"><a class="footer-menu__link" href="about.html">About</a></li>
                    </ul>
                </nav>
                <!-- footer nav end-->
            </div>
            <div class="col-sm-6 col-lg-3">
                <h4 class="footer__title">Donate</h4>
                <p>Help us transform the experiences of those affected by suicide. Your support will go a long way.</p>
                <a class="button footer__button button--filled" href="#">Donate</a>
            </div>
        </div>
        <div class="row align-items-baseline">
            <div class="col-md-6">
                <p class="footer-copyright">© {{ date('Y') }} {{ $page->siteName }}</p>
            </div>
            <div class="col-md-6">
                <div class="footer-privacy">
                    <a class="footer-privacy__link" href="#">Privacy Policy</a>
                    <span class="footer-privacy__divider">|</span>
                    <a class="footer-privacy__link" href="#">Terms & Conditions</a>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer end-->