<!-- header呼び出し -->
<?php get_header(); ?>
<?php
/*
Template Name: News page
*/
?>
<!-- main -->
<main id="top" class="l-main">
    <article class="l-section">
        <div id="js-top" class="p-hero">
            <h2 class="l-section__title js-title load">
                <span class="l-section__titleTextWrap"><span class="l-section__titleText">N</span><span
                        class="l-section__titleText">e</span><span class="l-section__titleText">w</span><span
                        class="l-section__titleText">s</span><span class="-jp">新着情報</span>
            </h2>
            <figure class="js-parallax-hero">
                <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/news/hero_img_pc.jpg"
                        media="(min-width: 769px)" type="image/jpg" />
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/news/hero_img_sp.jpg" alt="" />
                </picture>
            </figure>
        </div>
        <nav class="c-breadcrumbs" aria-label="breadcrumb">
            <div class="l-container">
                <ul class="c-breadcrumbs__list">
                    <li class="c-breadcrumbs__item">
                        <a href="<?php echo get_template_directory_uri(); ?>/" class="c-breadcrumbs__link">TOP</a>
                    </li>
                    <li class="c-breadcrumbs__item">
                        <a href="<?php echo get_template_directory_uri(); ?>/company" class="c-breadcrumbs__link"
                            aria-current="page">新着情報</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- sec-news-archive -->
        <section class="p-news-archive">
            <div class="l-container">
                <nav class="c-archive-nav">
                    <h2 class="c-archive-nav__title">Category</h2>
                    <ul class="c-archive-nav__list">
                        <li class="c-archive-nav__item">
                            <a href="<?php echo get_template_directory_uri(); ?>/news"
                                class="c-archive-nav__link -current">全て</a>
                        </li>
                        <li class="c-archive-nav__item">
                            <a href="<?php echo get_template_directory_uri(); ?>/news/information"
                                class="c-archive-nav__link">お知らせ</a>
                        </li>
                        <li class="c-archive-nav__item">
                            <a href="<?php echo get_template_directory_uri(); ?>/news/blog"
                                class="c-archive-nav__link">ブログ</a>
                        </li>
                    </ul>
                </nav>
                <div class="p-news-archive__inner">
                    <div class="p-news-archive__content">
                        <ul class="p-news-archive__list">
                            <li class="p-news-archive__item">
                                <a href="<?php echo get_template_directory_uri(); ?>/news/detail"
                                    class="p-news-archive__link">
                                    <figure>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/news/archive_img01.jpg"
                                            alt="" />
                                    </figure>
                                    <div class="p-news-archive__desc">
                                        <div class="p-news-archive__info">
                                            <time>2022.02.24</time>
                                            <span class="p-news-archive__tag">お知らせ</span>
                                        </div>
                                        <h2 class="p-news-archive__title">ホームページをリニューアルしました。</h2>
                                    </div>
                                </a>
                            </li>
                            <li class="p-news-archive__item">
                                <a href="<?php echo get_template_directory_uri(); ?>/news/detail"
                                    class="p-news-archive__link">
                                    <figure>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/news/archive_img02.jpg"
                                            alt="" />
                                    </figure>
                                    <div class="p-news-archive__desc">
                                        <div class="p-news-archive__info">
                                            <time>2022.02.24</time>
                                            <span class="p-news-archive__tag">お知らせ</span>
                                        </div>
                                        <h2 class="p-news-archive__title">採用情報を更新しました。</h2>
                                    </div>
                                </a>
                            </li>
                            <li class="p-news-archive__item">
                                <a href="<?php echo get_template_directory_uri(); ?>/news/detail"
                                    class="p-news-archive__link">
                                    <figure>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/news/archive_img03.jpg"
                                            alt="" />
                                    </figure>
                                    <div class="p-news-archive__desc">
                                        <div class="p-news-archive__info">
                                            <time>2022.02.24</time>
                                            <span class="p-news-archive__tag">ブログ</span>
                                        </div>
                                        <h2 class="p-news-archive__title">◯◯にて弊社代表のスピーチが実施されました。</h2>
                                    </div>
                                </a>
                            </li>
                            <li class="p-news-archive__item">
                                <a href="<?php echo get_template_directory_uri(); ?>/news/detail"
                                    class="p-news-archive__link">
                                    <figure>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/news/archive_img04.jpg"
                                            alt="" />
                                    </figure>
                                    <div class="p-news-archive__desc">
                                        <div class="p-news-archive__info">
                                            <time>2022.02.24</time>
                                            <span class="p-news-archive__tag">お知らせ</span>
                                        </div>
                                        <h2 class="p-news-archive__title">ダミーテキストです。ダミーテキストです。ダミーテキストです。ダミーテキストです。</h2>
                                    </div>
                                </a>
                            </li>
                            <li class="p-news-archive__item">
                                <a href="<?php echo get_template_directory_uri(); ?>/news/detail"
                                    class="p-news-archive__link">
                                    <figure>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/news/archive_img05.jpg"
                                            alt="" />
                                    </figure>
                                    <div class="p-news-archive__desc">
                                        <div class="p-news-archive__info">
                                            <time>2022.02.24</time>
                                            <span class="p-news-archive__tag">お知らせ</span>
                                        </div>
                                        <h2 class="p-news-archive__title">
                                            ダミーテキストです。ダミーテキストです。ダミーテキストです。ダミーテキストです。ダミーテキストです。</h2>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <!-- pagination -->
                        <div class="c-pagination">
                            <div class="c-pagination__inner">
                                <a href="" class="c-pagination__arrow -prev"><span class="arrow"></span></a>
                                <a href="" class="c-pagination__numbers">1</a>
                                <a href="" class="c-pagination__numbers -current">2</a>
                                <a href="" class="c-pagination__numbers">3</a>
                                <a href="" class="c-pagination__numbers -ellipsis">…</a>
                                <a href="" class="c-pagination__numbers">10</a>
                                <a href="" class="c-pagination__arrow -next"><span class="arrow"></span></a>
                            </div>
                        </div>
                        <!-- /pagination -->
                    </div>
                    <aside class="p-news-archive__nav">
                        <h2 class="p-news-archive__navTitle">Archive</h2>
                        <ul class="p-news-archive__navList">
                            <li class="p-news-archive__navItem">
                                <a href="" class="p-news-archive__navLink">2022年8月</a>
                            </li>
                            <li class="p-news-archive__navItem">
                                <a href="" class="p-news-archive__navLink">2022年7月</a>
                            </li>
                            <li class="p-news-archive__navItem">
                                <a href="" class="p-news-archive__navLink">2022年6月</a>
                            </li>
                            <li class="p-news-archive__navItem">
                                <a href="" class="p-news-archive__navLink">2022年5月</a>
                            </li>
                        </ul>
                    </aside>
                </div>
            </div>
        </section>
        <!-- /sec-news-archive -->
    </article>
</main>
<!-- /main -->
<!-- footer呼び出し -->
<?php get_footer(); ?>
<!-- gsap.min.js -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/gsap.min.js"></script>
<!-- ScrollTrigger.min.js -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/ScrollTrigger.min.js"></script>
<!-- glightbox.min.js -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/glightbox.min.js"></script>
<!-- common.bundle.js -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/common.bundle.js"></script>
<!-- IE object-fit -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/object-fit-images/3.2.4/ofi.js"></script>
<script>
objectFitImages();
</script>
<!-- polyfill(picture IE) -->
<script src="https://polyfill.io/v3/polyfill.min.js?features=HTMLPictureElement"></script>
<!-- clipboard.min.js -->
<script src="https://cdn.jsdelivr.net/npm/clipboard@2/dist/clipboard.min.js"></script>
<!-- news.bundle.js -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/news.bundle.js"></script>