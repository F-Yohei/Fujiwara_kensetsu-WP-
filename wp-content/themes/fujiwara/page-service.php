<!-- header呼び出し -->
<?php get_header(); ?>
<?php
/*
Template Name: Service page
*/
?>
<!-- /header -->
<!-- main -->
<main id="top" class="l-main">
    <article>
        <div id="js-top" class="p-hero">
            <h2 class="l-section__title js-title load">
                <span class="l-section__titleTextWrap"><span class="l-section__titleText">S</span><span
                        class="l-section__titleText">e</span><span class="l-section__titleText">r</span><span
                        class="l-section__titleText">v</span><span class="l-section__titleText">i</span><span
                        class="l-section__titleText">c</span><span class="l-section__titleText">e</span></span><span
                    class="-jp">事業内容</span>
            </h2>
            <figure class="js-parallax-hero">
                <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/service/hero_img_pc.jpg"
                        media="(min-width: 769px)" type="image/jpg" />
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/hero_img_sp.jpg"
                        alt="" />
                </picture>
            </figure>
        </div>
        <nav class="c-breadcrumbs" aria-label="breadcrumb">
            <div class="l-container">
                <ol class="c-breadcrumbs__list">
                    <li class="c-breadcrumbs__item">
                        <a href="<?php echo esc_url(home_url('')); ?>" class="c-breadcrumbs__link">TOP</a>
                    </li>
                    <li class="c-breadcrumbs__item">
                        <a href="<?php echo esc_url(home_url('service')); ?>" class="c-breadcrumbs__link"
                            aria-current="page">事業内容</a>
                    </li>
                </ol>
            </div>
        </nav>
        <!-- sec-service -->
        <section class="p-service p-fixed-bg">
            <div class="p-fixed-bg__wrap">
                <div class="p-fixed-bg__area">
                    <figure class="p-fixed-bg__img">
                        <picture>
                            <source
                                srcset="<?php echo get_template_directory_uri(); ?>/assets/images/service/service_img01_pc.jpg"
                                media="(min-width: 769px)" type="image/jpg" />
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/service_img01_sp.jpg"
                                alt="" />
                        </picture>
                    </figure>
                    <div class="p-service__inner">
                        <div class="l-container">
                            <h2 class="l-section__subTitle">Architecture<span>建築事業</span></h2>
                            <div class="p-service__desc">
                                <h3 class="p-service__message">安心して集える場を</h3>
                                <p class="l-section__text">
                                    私たちはこれまでお客様の安全を第一に考えて参りました。<br />建築事業では、そんな「安全」が「人」に伝えられるよう技術力を日々高めています。<br />自慢の技術を是非ご覧ください。
                                </p>
                                <div class="c-link__wrap">
                                    <a href="<?php echo esc_url(home_url('construction/archi')); ?>"
                                        class="c-link -white">
                                        View more
                                        <span class="circle">
                                            <span class="arrow"></span>
                                            <span class="arrow"></span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-fixed-bg__area">
                    <figure class="p-fixed-bg__img">
                        <picture>
                            <source
                                srcset="<?php echo get_template_directory_uri(); ?>/assets/images/service/service_img02_pc.jpg"
                                media="(min-width: 769px)" type="image/jpg" />
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/service_img02_sp.jpg"
                                alt="" />
                        </picture>
                    </figure>
                    <div class="p-service__inner">
                        <div class="l-container">
                            <h2 class="l-section__subTitle">Civil engineering<span>土木事業</span></h2>
                            <div class="p-service__desc">
                                <h3 class="p-service__message">自然と生活の橋渡しに</h3>
                                <p class="l-section__text">
                                    土木事業では、道路工事をはじめ、トンネル・高速道路の舗装工事や河川・ダムなどの工事など、私たちの生活の基盤の保護に努めております。<br />これからも、人々の社会をずっと支えてくれるように、守り続けて参ります。
                                </p>
                                <div class="c-link__wrap">
                                    <a href="<?php echo esc_url(home_url('construction/civil')); ?>"
                                        class="c-link -white">
                                        View more
                                        <span class="circle">
                                            <span class="arrow"></span>
                                            <span class="arrow"></span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-fixed-bg__area">
                    <figure class="p-fixed-bg__img">
                        <picture>
                            <source
                                srcset="<?php echo get_template_directory_uri(); ?>/assets/images/service/service_img03_pc.jpg"
                                media="(min-width: 769px)" type="image/jpg" />
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/service_img03_sp.jpg"
                                alt="" />
                        </picture>
                    </figure>
                    <div class="p-service__inner">
                        <div class="l-container">
                            <h2 class="l-section__subTitle">Housing<span>住宅事業</span></h2>
                            <div class="p-service__desc">
                                <h3 class="p-service__message">「安心」を提供します</h3>
                                <p class="l-section__text">
                                    心地よい生活を続けていくためには、安心感のある家づくりが必要になってきます。<br />藤原建設工業では、どんなに小さなことでも、何年先でもお客様の「安心」が続くよう技術力を提供させていただきます。
                                </p>
                                <div class="c-link__wrap">
                                    <a href="<?php echo esc_url(home_url('construction/housing')); ?>"
                                        class="c-link -white">
                                        View more
                                        <span class="circle">
                                            <span class="arrow"></span>
                                            <span class="arrow"></span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /sec-service -->
    </article>
</main>
<!-- /main -->
<!-- footer呼び出し -->
<?php get_footer(); ?>
<!-- gsap.min.js -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/gsap.min.js"></script>
<!-- ScrollTrigger.min.js -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/ScrollTrigger.min.js"></script>
<!-- common.bundle.js -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/common.bundle.js"></script>
<!-- service.bundle.js -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/service.bundle.js"></script>
<!-- IE object-fit -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/object-fit-images/3.2.4/ofi.js"></script>
<script>
objectFitImages();
</script>
<!-- polyfill(picture IE) -->
<script src="https://polyfill.io/v3/polyfill.min.js?features=HTMLPictureElement"></script>