<!-- header呼び出し -->
<?php get_header(); ?>
<?php
/*
Template Name: Entry page
*/
?>
<!-- main -->
<main id="top" class="l-main">
    <article class="l-section">
        <div id="js-top" class="p-hero -noimg">
            <h2 class="l-section__title js-title load">
                <span class="l-section__titleTextWrap">
                    <span class="l-section__titleText">E</span><span class="l-section__titleText">n</span><span
                        class="l-section__titleText">t</span><span class="l-section__titleText">r</span><span
                        class="l-section__titleText">y</span><span class="l-section__titleText">&nbsp;</span><span
                        class="l-section__titleText">F</span><span class="l-section__titleText">o</span><span
                        class="l-section__titleText">r</span><span class="l-section__titleText">m</span></span><span
                    class="-jp">エントリーフォーム</span>
            </h2>
        </div>
        <nav class="c-breadcrumbs" aria-label="breadcrumb">
            <div class="l-container">
                <ul class="c-breadcrumbs__list">
                    <li class="c-breadcrumbs__item">
                        <a href="<?php echo esc_url(home_url('')); ?>" class="c-breadcrumbs__link">TOP</a>
                    </li>
                    <li class="c-breadcrumbs__item">
                        <a href="<?php echo esc_url(home_url('entry')); ?>" class="c-breadcrumbs__link"
                            aria-current="page">エントリー</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- sec-contact -->
        <section class="p-contact">
            <div class="l-container">
                <div class="p-contact__inner">
                    <div class="p-contact__head">
                        <p class="l-section__text">
                            弊社に興味を持って下さりありがとうございます。<br />こちらは採用エントリーフォームのページになります。<br />藤原建設工業へのお問い合わせは、<br
                                class="u-only-sp" /><a href="../contact">こちらのフォーム</a>からお願い致します。</p>
                    </div>
                    <div class="p-contact__lead">
                        <h2 class="l-section__subTitle">Form<span>エントリーフォーム</span></h2>
                        <p class="l-section__text">※全て必須項目となっております。<br />※最後まで入力した後、送信ボタンを押してください。</p>
                    </div>
                    <ul class="p-contact__progress">
                        <li class="p-contact__progressItem -current">入力</li>
                        <li class="p-contact__progressItem">確認</li>
                        <li class="p-contact__progressItem">完了</li>
                    </ul>
                    <!-- 入力フォーム -->
                    <?php echo do_shortcode('[mwform_formkey key="185"]'); ?>
                    <!-- /入力フォーム -->
                </div>
            </div>
        </section>
        <!-- /sec-contact -->
    </article>
</main>
<!-- /main -->
<!-- footer呼び出し -->
<?php get_footer(); ?>