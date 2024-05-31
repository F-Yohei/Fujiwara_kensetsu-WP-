<!-- header呼び出し -->
<?php get_header(); ?>
<?php
/*
Template Name: Contact page
*/
?>
<!-- main -->
<main id="top" class="l-main">
    <article class="l-section">
        <div id="js-top" class="p-hero -noimg">
            <h2 class="l-section__title js-title load">
                <span class="l-section__titleTextWrap"><span class="l-section__titleText">C</span><span
                        class="l-section__titleText">o</span><span class="l-section__titleText">n</span><span
                        class="l-section__titleText">t</span><span class="l-section__titleText">a</span><span
                        class="l-section__titleText">c</span><span class="l-section__titleText">t</span></span><span
                    class="-jp">お問い合わせ</span>
            </h2>
        </div>
        <nav class="c-breadcrumbs" aria-label="breadcrumb">
            <div class="l-container">
                <ul class="c-breadcrumbs__list">
                    <li class="c-breadcrumbs__item">
                        <a href="<?php echo esc_url(home_url('')); ?>" class="c-breadcrumbs__link">TOP</a>
                    </li>
                    <li class="c-breadcrumbs__item">
                        <a href="<?php echo esc_url(home_url('contact')); ?>" class="c-breadcrumbs__link"
                            aria-current="page">お問い合わせ</a>
                    </li>
                    <li class="c-breadcrumbs__item">
                        <a href="<?php echo esc_url(home_url('confirm')); ?>" class="c-breadcrumbs__link"
                            aria-current="page">お問い合わせ（確認）</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- sec-contact -->
        <section class="p-contact">
            <div class="l-container">
                <div class="p-contact__inner">
                    <div class="p-contact__head">
                        <p class="l-section__text">弊社に興味を持って下さりありがとうございます。<br />藤原建設工業へのお問い合わせは、以下のフォームかお電話にて承っております。
                        </p>
                        <div class="p-contact__headTel">
                            <h2 class="p-contact__headTitle">TEL<span>お電話でのお問い合わせ</span></h2>
                            <div class="p-contact__headTelNumber"><span>受付時間：平日9:00〜17:00</span>00-0000-0000</div>
                        </div>
                    </div>
                    <div class="p-contact__lead">
                        <h2 class="l-section__subTitle">Form<span>お問い合わせフォーム</span></h2>
                        <p class="l-section__text">※全て必須項目となっております。<br />※最後まで入力した後、送信ボタンを押してください。</p>
                    </div>
                    <ul class="p-contact__progress">
                        <li class="p-contact__progressItem">入力</li>
                        <li class="p-contact__progressItem -current">確認</li>
                        <li class="p-contact__progressItem">完了</li>
                    </ul>
                    <?php echo do_shortcode('[mwform_formkey key="91"]'); ?>
                </div>
            </div>
        </section>
        <!-- /sec-contact -->
    </article>
</main>
<!-- /main -->
<!-- footer呼び出し -->
<?php get_footer(); ?>