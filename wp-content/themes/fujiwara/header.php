<!DOCTYPE html>
<html lang="ja">

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/ fb# website: http://ogp.me/ns/website#">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="format-detection" content="email=no, telephone=no, address=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="robots" content="noindex,nofollow" />
    <title>藤原建設工業株式会社</title>
    <meta name="description" content="「過去と未来を繋ぎ続ける」そんな会社を目指す技術集団が、藤原建設工業です。" />
    <meta name="keywords" content="" />
    <link rel="canonical" href="./" />
    <!-- favicon -->
    <link rel="shortcut icon" href="<?php echo do_shortcode('[theme_url]'); ?>/assets/images/favicon/favicon.ico" />

    <!-- apple-touch-icon -->
    <link rel="apple-touch-icon" sizes="180x180"
        href="<?php echo do_shortcode('[theme_url]'); ?>/assets/images/favicon/apple-touch-icon.png" />
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap" rel="stylesheet" />
    <!-- style.css -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/css/lightbox.css" rel="stylesheet">
    <!-- Remove "outline" when in focus(other than keyboard operation) -->
    <script src="https://cdn.jsdelivr.net/npm/focus-visible@5.2.0/dist/focus-visible.min.js"
        integrity="sha384-xRa5B8rCDfdg0npZcxAh+RXswrbFk3g6dlHVeABeluN8EIwdyljz/LqJgc2R3KNA" crossorigin="anonymous"
        defer></script>
    <?php wp_head(); ?>
</head>

<body id="js-body" <?php body_class(); ?>>
    <div id="top" class="" ontouchstart="">
        <!-- header -->
        <header id="js-header" class="l-header">
            <div class="l-header__inner">
                <!-- header-logo -->
                <h1 class="l-header__logo">
                    <a href="<?php echo esc_url(home_url('')); ?>" class="l-header__logoLink">
                        <img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/images/common/header_logo.svg"
                            alt="ロゴ" />
                    </a>
                </h1>
                <!-- /header-logo -->
                <!-- header-nav-toggle -->
                <button id="js-hamburger-toggle" type="button" class="l-hamburger__toggle">
                    <div class="l-hamburger__toggleWrap">
                        <span class="l-hamburger__toggleLine"></span>
                        <span class="l-hamburger__toggleLine"></span>
                        <span class="l-hamburger__toggleLine"></span>
                    </div>
                </button>
                <!-- /header-nav-toggle -->
                <!-- header-menu -->
                <nav id="js-menu" class="l-menu">
                    <ul class="l-menu__list">
                        <li class="l-menu__item">
                            <a href="<?php echo esc_url(home_url('')); ?>" class="l-menu__link">TOP</a>
                        </li>
                        <li class="l-menu__item">
                            <a href="<?php echo esc_url(home_url('company')); ?>" class="l-menu__link">COMPANY</a>
                        </li>
                        <li class="l-menu__item">
                            <a href="<?php echo esc_url(home_url('service')); ?>" class="l-menu__link">SERVICE</a>
                        </li>
                        <li class="l-menu__item -pulldown js-submenu-trigger">
                            <a href="<?php echo esc_url(home_url('works')); ?>" class="l-menu__link">WORKS</a>
                            <div class="l-menu-sub is-none js-submenu">
                                <div class="l-menu__subInner">
                                    <figure>
                                        <picture>
                                            <img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/images/common/submenu_img01.jpg"
                                                alt="" />
                                        </picture>
                                    </figure>
                                    <ul class="l-menu-sub__list">
                                        <li class="l-menu-sub__item">
                                            <a href="<?php echo esc_url(home_url('construction/archi')); ?>"
                                                class="l-menu-sub__link">
                                                <div class="l-menu-sub__linkTitle">
                                                    <span class="l-menu-sub__linkTitle--en">Architecture</span>
                                                    <span class="l-menu-sub__linkTitle--ja">建築事業</span>
                                                </div>
                                                <span class="arrow"></span>
                                            </a>
                                        </li>
                                        <li class="l-menu-sub__item">
                                            <a href="<?php echo esc_url(home_url('construction/civil')); ?>"
                                                class="l-menu-sub__link">
                                                <div class="l-menu-sub__linkTitle">
                                                    <span class="l-menu-sub__linkTitle--en">Civil engineering</span>
                                                    <span class="l-menu-sub__linkTitle--ja">土木事業</span>
                                                </div>
                                                <span class="arrow"></span>
                                            </a>
                                        </li>
                                        <li class="l-menu-sub__item">
                                            <a href="<?php echo esc_url(home_url('construction/housing')); ?>"
                                                class="l-menu-sub__link">
                                                <div class="l-menu-sub__linkTitle">
                                                    <span class="l-menu-sub__linkTitle--en">Housing</span>
                                                    <span class="l-menu-sub__linkTitle--ja">住宅事業</span>
                                                </div>
                                                <span class="arrow"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="l-menu__item">
                            <a href="<?php echo esc_url(home_url('news')); ?>" class="l-menu__link">NEWS</a>
                        </li>
                    </ul>
                    <div class="l-menu-button">
                        <ul class="l-menu-button__list">
                            <li class="l-menu-button__item">
                                <a href="<?php echo esc_url(home_url('recruit')); ?>"
                                    class="l-menu-button__link -recruit">RECRUIT</a>
                            </li>
                            <li class="l-menu-button__item">
                                <a href="<?php echo esc_url(home_url('contact')); ?>"
                                    class="l-menu-button__link -contact">CONTACT</a>
                            </li>
                        </ul>
                    </div>
                    <div class="l-menu__company">
                        <div class="l-menu__access">
                            <p class="l-menu__accessTitle">Access</p>
                            <address>
                                藤原建設工業株式会社 本社<br>
                                〒000-0000 千葉県◯◯市◯◯丁目◯◯番<br>
                                <a href="#">TEL 00-0000-0000</a>
                            </address>
                        </div>
                    </div>
                    <div class="l-menu__policy">
                        <a href="./privacy" class="l-menu__policyLink">Privacy<span>&nbsp;</span>Policy</a>
                        <p class="l-menu__policyText">© 1995 Fujiwara Construction Industry. Co., Ltd.</p>
                    </div>
                </nav>
                <!-- /header-menu -->
            </div>
        </header>
        <!-- /header -->