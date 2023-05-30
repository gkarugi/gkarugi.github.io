<!-- aside dropdown start-->
<div class="aside-dropdown">
    <div class="aside-dropdown__inner">
        <span class="aside-dropdown__close">
            <a href="#close"><i class="fa fa-close"></i></a>
        </span>
        <div class="aside-dropdown__item d-lg-none d-block">
            <ul class="aside-menu">
                <li class="aside-menu__item aside-menu__item--has-child">
                    <a class="aside-menu__link" href="javascript:void(0);"><span>Home</span></a>
                    <!-- sub menu start-->
                    <ul class="aside-menu__sub-list">
                        <li><a href="index.html"><span>Home</span></a></li>
                    </ul>
                    <!-- sub menu end-->
                </li>
                <li class="aside-menu__item"><a class="aside-menu__link" href="contacts.html"><span>Contacts</span></a></li>
            </ul>
        </div>
        <div class="aside-dropdown__item">
            <!-- aside menu start-->
            <ul class="aside-menu">
                <li class="aside-menu__item"><a class="aside-menu__link" href="#">Documents</a></li>
                <li class="aside-menu__item"><a class="aside-menu__link" href="#">Information</a></li>
                <li class="aside-menu__item"><a class="aside-menu__link" href="#">Additional Pages</a></li>
                <li class="aside-menu__item"><a class="aside-menu__link" href="#">Elements</a></li>
                <li class="aside-menu__item"><a class="aside-menu__link" href="#">Contacts</a></li>
            </ul>
            <!-- aside menu end-->
            <div class="aside-inner"><span class="aside-inner__title">Email</span><a class="aside-inner__link" href="mailto:support@helpo.org">support@helpo.org</a></div>
            <div class="aside-inner"><span class="aside-inner__title">Phone numbers</span><a class="aside-inner__link" href="tel:+180012345678">+ 1800 - 123 456 78</a><a class="aside-inner__link" href="tel:+18009756511">+ 1800 - 975 65 11</a></div>
            <ul class="aside-socials">
                <li class="aside-socials__item"><a class="aside-socials__link" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li class="aside-socials__item"><a class="aside-socials__link" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                <li class="aside-socials__item"><a class="aside-socials__link aside-socials__link--active" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li class="aside-socials__item"><a class="aside-socials__link" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            </ul>
        </div>
        <div class="aside-dropdown__item"><a class="button button--squared" href="#"><span>Donate</span></a></div>
    </div>
</div>
<!-- aside dropdown end-->

<!-- top bar start-->
<div class="top-bar d-none d-lg-block">
    <div class="container-fluid">
        <div class="row align-items-end">
            <div class="col-lg-9"><a class="top-bar__link" href="tel:+180012345678">+ 1800 - 123 456 78</a><a class="top-bar__link" href="tel:+18009756511">+ 1800 - 975 65 11</a><a class="top-bar__link" href="mailto:support@helpo.org">support@helpo.org</a></div>
            <div class="col-lg-3 text-right">
                <ul class="socials">
                    <li class="socials__item"><a class="socials__link" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li class="socials__item"><a class="socials__link" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li class="socials__item"><a class="socials__link" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                    <li class="socials__item"><a class="socials__link" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- top bar end-->

<!-- header start-->
<header class="header header--front_3">
    <div class="container-fluid">
        <div class="row no-gutters justify-content-between">
            <div class="col-auto d-flex align-items-center">
                <div class="dropdown-trigger d-none d-sm-block">
                    <div class="dropdown-trigger__item"></div>
                </div>
                <div class="header-logo">
                    <a class="header-logo__link" href="/">
                        <img class="header-logo__img" src="/assets/images/logo.png" alt="logo"/>
                    </a>
                </div>
            </div>
            <div class="col-auto">
                <!-- main menu start-->
                <nav>
                    <ul class="main-menu">
                        @foreach ($items as $label => $item)
{{--                            main-menu__item--has-child--}}
{{--                            main-menu__item--active--}}
                            <li class="main-menu__item {{ $page->isParent($item) ? 'main-menu__item--has-child' : '' }} {{ $page->isActiveParent($item) ? 'main-menu__item--active' : '' }}">
                                @if ($url = is_string($item) ? $item : $item->url)
                                    <a class="main-menu__link" href="{{ $page->url($url) }}"><span>{{ $label }}</span></a>
                                    @if (! is_string($item) && $item->children)
                                        <!-- sub menu start-->
                                        <ul class="main-menu__sub-list">
                                            @foreach( $item->children as $childLabel => $child)
                                                <li>
                                                    @if ($childUrl = is_string($child) ? $child : $child->url)
                                                        <a href="{{ $page->url($childUrl) }}"><span>{{ $childLabel }}</span></a>
                                                    @else
                                                        <a href="javascript:void(0);"><span>{{ $childLabel }}</span></a>
                                                    @endif
                                                </li>
                                            @endforeach
                                        </ul>
                                        <!-- sub menu end-->
                                    @endif
                                @else
                                    <a class="main-menu__link" href="javascript:void(0);"><span>{{ $label }}</span></a>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </nav>
                <!-- main menu end-->
            </div>
            <div class="col-auto d-flex align-items-center">
                <!-- lang select start-->
{{--                <ul class="lang-select">--}}
{{--                    <li class="lang-select__item lang-select__item--active"><span>En</span></li>--}}
{{--                </ul>--}}
                <!-- lang select end--><a class="button button--squared" href="#"><span>Donate</span></a>
                <div class="dropdown-trigger d-block d-sm-none">
                    <div class="dropdown-trigger__item"></div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header end-->
