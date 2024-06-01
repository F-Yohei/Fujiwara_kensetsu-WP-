<!-- header呼び出し -->
<?php get_header(); ?>
<?php
/*
Template Name: 404 page
*/
?>
<!-- main -->
<main id="top" class="l-main">
    <article>
        <div id="js-top" class="p-hero">
            <h2 class="l-section__title js-title load">
                <span class="l-section__titleTextWrap"><span class="l-section__titleText">4</span><span
                        class="l-section__titleText">0</span><span class="l-section__titleText">4</span><span
                        class="l-section__titleText">&nbsp;</span><span class="l-section__titleText">N</span><span
                        class="l-section__titleText">o</span><span class="l-section__titleText">t</span><span
                        class="l-section__titleText">&nbsp;</span><span class="l-section__titleText">F</span><span
                        class="l-section__titleText">o</span><span class="l-section__titleText">u</span><span
                        class="l-section__titleText">n</span><span class="l-section__titleText">d</span></span><span
                    class="-jp">ページが見つかりませんでした</span>
            </h2>
            <figure class="js-parallax-hero">
                <picture>
                    <source srcset="<?php echo do_shortcode('[theme_url]'); ?>/assets/images/404/hero_img_pc.jpg"
                        media="(min-width: 769px)" type="image/jpg" />
                    <img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/images/404/hero_img_sp.jpg" alt="" />
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
                        <a href="<?php echo do_shortcode('[theme_url]'); ?>/404" class="c-breadcrumbs__link"
                            aria-current="page">ページが見つかりませんでした</a>
                    </li>
                </ol>
            </div>
        </nav>
        <div class="p-contact__head -notfound">
            <div class="l-container">
                <h2 class="p-contact__headText">お探しのページが<br class="u-only-sp" />見つかりませんでした。</h2>
                <p class="l-section__text">誠に申し訳ございません。<br />お探しのページはURLが変更になったか、<br
                        class="u-only-sp" />削除された可能性がございます。<br />大変お手数ですが、もう一度ナビゲーション<br
                        class="u-only-sp" />よりご希望のページをお探しください。</p>
                <div class="p-contact__button">
                    <a href="<?php echo esc_url(home_url('')); ?>">トップへ戻る</a>
                </div>
            </div>
        </div>
    </article>
</main>
<!-- /main -->
<!-- footer呼び出し -->
<?php get_footer(); ?>