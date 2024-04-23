<!-- header呼び出し -->
<?php get_header(); ?>
<?php
/*
Template Name: Contact Thanks page
*/
?>
<!-- main -->
<main id="top" class="l-main">
    <article>
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
                <ol class="c-breadcrumbs__list">
                    <li class="c-breadcrumbs__item">
                        <a href="<?php echo esc_url(home_url('')); ?>" class="c-breadcrumbs__link">TOP</a>
                    </li>
                    <li class="c-breadcrumbs__item">
                        <a href="<?php echo esc_url(home_url('contact/contact-thx')); ?>contact/thx"
                            class="c-breadcrumbs__link" aria-current="page">お問い合わせありがとうございました</a>
                    </li>
                </ol>
            </div>
        </nav>
        <!-- sec-contact -->
        <section class="p-contact">
            <div class="l-container">
                <div class="p-contact__inner">
                    <div class="p-contact__head">
                        <h2 class="p-contact__headText">お問合せありがとうございました。</h2>
                        <p class="l-section__text">
                            この度は、藤原建設工業へお問い合わせいただきありがとうございます。<br />お送り頂いた内容を確認の上、2営業日以内に折り返しご連絡させていただきます。<br />※ご記入頂いたメールアドレスへ、自動返信の確認メールをお送りしております。<br /><br />しばらく経ってもメールが届かない場合は、ご入力頂いたメールアドレスが間違っているか、<br
                                class="u-only-pc" />迷惑メールフォルダに振り分けられている場合がございます。<br />以上の内容をご確認頂き、お手数ですが再度フォームよりお問合せ頂きますようお願い申し上げます。<br /><br />なお、お急ぎの場合は電話でも受け付けておりますので、下記までご遠慮なくご相談ください。
                        </p>
                        <div class="p-contact__headTel">
                            <h2 class="p-contact__headTitle">TEL<span>お電話でのお問い合わせ</span></h2>
                            <div class="p-contact__headTelNumber"><span>受付時間：平日9:00〜17:00</span>00-0000-0000</div>
                        </div>
                    </div>
                    <div class="p-contact__button">
                        <a href="<?php echo esc_url(home_url('')); ?>">トップへ戻る</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- /sec-contact -->
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
</div>
</body>

</html>