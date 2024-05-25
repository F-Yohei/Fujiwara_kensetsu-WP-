<!-- header呼び出し -->
<?php get_header(); ?>
<?php
/*
Template Name: Company page
*/
?>
<!-- /header -->
<!-- main -->
<main id="top" class="l-main">
    <article class="l-section">
        <div id="js-top" class="p-hero">
            <h2 class="l-section__title js-title load">
                <span class="l-section__titleTextWrap"><span class="l-section__titleText">C</span><span
                        class="l-section__titleText">o</span><span class="l-section__titleText">m</span><span
                        class="l-section__titleText">p</span><span class="l-section__titleText">a</span><span
                        class="l-section__titleText">n</span><span class="l-section__titleText">y</span></span><span
                    class="-jp">会社情報</span>
            </h2>
            <figure class="js-parallax-hero">
                <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/company/hero_img_pc.jpg"
                        media="(min-width: 769px)" type="image/jpg" />
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/company/hero_img_sp.jpg"
                        alt="" />
                </picture>
            </figure>
        </div>
        <nav class="c-breadcrumbs" aria-label="breadcrumb">
            <div class="l-container">
                <ul class="c-breadcrumbs__list">
                    <li class="c-breadcrumbs__item">
                        <a href="<?php echo esc_url(home_url('')); ?>" class="c-breadcrumbs__link">TOP</a>
                    </li>
                    <li class="c-breadcrumbs__item">
                        <a href="<?php echo esc_url(home_url('company')); ?>" class="c-breadcrumbs__link"
                            aria-current="page">会社情報</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- sec-company-message -->
        <section class="p-company-message">
            <div class="l-container">
                <h2 class="l-section__subTitle">Message<span>メッセージ</span></h2>
                <div class="p-company-message__inner">
                    <span class="message">MESSAGE</span>
                    <figure>
                        <picture>
                            <source
                                srcset="<?php echo get_template_directory_uri(); ?>/assets/images/company/message_img_pc.jpg"
                                media="(min-width: 769px)" type="image/jpg" />
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/company/message_img_sp.jpg"
                                alt="" />
                        </picture>
                    </figure>
                    <div class="p-company-message__desc">
                        <h3 class="p-company-message__catch">過去と未来を繋ぎ続ける</h3>
                        <p class="l-section__text">
                            これまでの実績を築き上げてきた挑戦と経験を、未来のお客さまへ繋いでいくことをテーマにして日々のお仕事に励んでいます。<br />「過去と未来を繋ぎ続ける」そんな建設会社を目指す技術集団が、藤原建設工業株式会社です。<br /><br />藤原建設工業株式会社　代表取締役社長<br />藤原
                            圭</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- /sec-company-message -->
        <!-- sec-company-info -->
        <section class="p-company-info">
            <div class="l-container">
                <div class="p-company-info__inner">
                    <h2 class="l-section__subTitle">Information<span>会社概要</span></h2>
                    <dl class="l-section-list">
                        <div class="l-section-list__row">
                            <dt class="l-section-list__item">会社名</dt>
                            <dd class="l-section-list__desc">藤原建設工業株式会社</dd>
                        </div>
                        <div class="l-section-list__row">
                            <dt class="l-section-list__item">設立</dt>
                            <dd class="l-section-list__desc">昭和54年（1979年）4月12日</dd>
                        </div>
                        <div class="l-section-list__row">
                            <dt class="l-section-list__item">資本金</dt>
                            <dd class="l-section-list__desc">2110万円</dd>
                        </div>
                        <div class="l-section-list__row">
                            <dt class="l-section-list__item">代表取締役</dt>
                            <dd class="l-section-list__desc">藤原 ◯◯</dd>
                        </div>
                        <div class="l-section-list__row">
                            <dt class="l-section-list__item">本社</dt>
                            <dd class="l-section-list__desc">千葉県</dd>
                        </div>
                        <div class="l-section-list__row">
                            <dt class="l-section-list__item">支店</dt>
                            <dd class="l-section-list__desc">福島県</dd>
                        </div>
                        <div class="l-section-list__row">
                            <dt class="l-section-list__item">売上高</dt>
                            <dd class="l-section-list__desc">21億1千万円</dd>
                        </div>
                        <div class="l-section-list__row">
                            <dt class="l-section-list__item">事業内容</dt>
                            <dd class="l-section-list__desc">土木工事業、建築工事業、住宅事業</dd>
                        </div>
                    </dl>
                </div>
            </div>
        </section>
        <!-- /sec-company-info -->
        <!-- sec-company-access -->
        <section class="p-company-access">
            <div class="l-container">
                <div class="p-company-access__inner">
                    <h2 class="l-section__subTitle">Access<span>アクセス</span></h2>
                    <div class="p-company-access__desc">
                        <figure id="maps" class="p-company-access__map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6484.343539408955!2d140.0289929!3d35.6481394!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6022821fd52ebfdf%3A0xcec0c09c4bed45e0!2z5bmV5by144Oh44OD44K7!5e0!3m2!1sja!2sjp!4v1708678876657!5m2!1sja!2sjp"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </figure>
                        <dl class="l-section-list">
                            <div class="l-section-list__row">
                                <dt class="l-section-list__item">住所</dt>
                                <dd class="l-section-list__desc">〒000-0000<br />千葉県◯◯市◯◯丁目◯◯番</dd>
                            </div>
                            <div class="l-section-list__row">
                                <dt class="l-section-list__item">売上高</dt>
                                <dd class="l-section-list__desc"><a href="tel:00-0000-0000">00-0000-0000</a></dd>
                            </div>
                            <div class="l-section-list__row">
                                <dt class="l-section-list__item">アクセス</dt>
                                <dd class="l-section-list__desc">幕張メッセから徒歩1分</dd>
                            </div>
                        </dl>
                    </div>
                </div>
            </div>
        </section>
        <!-- /sec-company-access -->
    </article>
</main>
<!-- /main -->
<!-- footer呼び出し -->
<?php get_footer(); ?>

<!-- gsap.min.js -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/gsap.min.js"></script>
<!-- common.bundle.js -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/common.bundle.js"></script>
<!-- IE object-fit -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/object-fit-images/3.2.4/ofi.js"></script>
<script>
objectFitImages();
</script>
<!-- polyfill(picture IE) -->
<script src="https://polyfill.io/v3/polyfill.min.js?features=HTMLPictureElement"></script>