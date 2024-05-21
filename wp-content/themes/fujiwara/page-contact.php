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
                        <a href="<?php echo get_template_directory_uri(); ?>/" class="c-breadcrumbs__link">TOP</a>
                    </li>
                    <li class="c-breadcrumbs__item">
                        <a href="<?php echo get_template_directory_uri(); ?>/contact" class="c-breadcrumbs__link"
                            aria-current="page">お問い合わせ</a>
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
                        <li class="p-contact__progressItem -current">入力</li>
                        <li class="p-contact__progressItem">確認</li>
                        <li class="p-contact__progressItem">完了</li>
                    </ul>
                    <!-- <form class="l-form"> -->
                    <!-- <div class="l-form__list">
                            <dl class="l-form__item">
                                <dt class="l-form__dt">お問い合わせの種別</dt>
                                <dd class="l-form__dd -select">
                                    <span class="l-form__select">
                                        <select name="type" id="" class="select">
                                            <option value selected="selected">選択してください</option>
                                            <option value="お問い合わせ">お問い合わせ</option>
                                            <option value="資料請求">資料請求</option>
                                        </select>
                                    </span>
                                </dd>
                            </dl>
                            <dl class="l-form__item">
                                <dt class="l-form__dt">会社名</dt>
                                <dd class="l-form__dd">
                                    <span>
                                        <input type="text" name="" placeholder="" required="" class="" />
                                    </span>
                                </dd>
                            </dl>
                            <dl class="l-form__item">
                                <dt class="l-form__dt">お名前</dt>
                                <dd class="l-form__dd">
                                    <span>
                                        <input type="text" name="" placeholder="" required="" class="" />
                                    </span>
                                </dd>
                            </dl>
                            <dl class="l-form__item">
                                <dt class="l-form__dt">フリガナ</dt>
                                <dd class="l-form__dd">
                                    <span>
                                        <input type="text" name="" placeholder="" required="" class="" />
                                    </span>
                                </dd>
                            </dl>
                            <dl class="l-form__item">
                                <dt class="l-form__dt">メールアドレス</dt>
                                <dd class="l-form__dd">
                                    <span>
                                        <input type="text" name="" placeholder="" required="" class="" />
                                    </span>
                                </dd>
                            </dl>
                            <dl class="l-form__item">
                                <dt class="l-form__dt">電話番号</dt>
                                <dd class="l-form__dd">
                                    <span>
                                        <input type="text" name="" placeholder="" required="" class="" />
                                    </span>
                                </dd>
                            </dl>
                            <dl class="l-form__item">
                                <dt class="l-form__dt">郵便番号</dt>
                                <dd class="l-form__dd -zip">
                                    <span>
                                        <input type="text" name="郵便番号" placeholder="" required=""
                                            class="zip-button p-postal-code"
                                            onKeyUp="AjaxZip3.zip2addr( this, '', '都道府県', '市区町村', 'town' );" />
                                    </span>
                                </dd>
                            </dl>
                            <dl class="l-form__item">
                                <dt class="l-form__dt">都道府県</dt>
                                <dd class="l-form__dd -zip">
                                    <span>
                                        <input type="text" name="都道府県" placeholder="" required="" class="p-region" />
                                    </span>
                                </dd>
                            </dl>
                            <dl class="l-form__item">
                                <dt class="l-form__dt">市区町村</dt>
                                <dd class="l-form__dd">
                                    <span>
                                        <input type="text" name="市区町村" placeholder="" required=""
                                            class="p-street-address" />
                                    </span>
                                </dd>
                            </dl>
                            <dl class="l-form__item">
                                <dt class="l-form__dt">番地・建物名</dt>
                                <dd class="l-form__dd">
                                    <span>
                                        <input type="text" name="番地・建物名" placeholder="" required="" class="" />
                                    </span>
                                </dd>
                            </dl>
                            <dl class="l-form__item -radio">
                                <dt class="l-form__dt">弊社を知ったきっかけ</dt>
                                <dd class="l-form__dd -radio">
                                    <span class="-flex">
                                        <input type="radio" name="chance" id="flyers" value="チラシ" />
                                        <label for="flyers" class="l-form__label mwform-radio-field-text">チラシ</label>
                                    </span>
                                    <span class="-flex">
                                        <input type="radio" name="chance" id="sns" value="SNS" />
                                        <label for="sns" class="l-form__label mwform-radio-field-text">SNS</label>
                                    </span>
                                    <span class="-flex">
                                        <input type="radio" name="chance" id="search" value="ネット検索" />
                                        <label for="search" class="l-form__label mwform-radio-field-text">ネット検索</label>
                                    </span>
                                </dd>
                            </dl>
                            <dl class="l-form__item -message">
                                <dt class="l-form__dt">お問い合わせ内容</dt>
                                <dd class="l-form__dd">
                                    <textarea name="" placeholder="" required="" class=""></textarea>
                                </dd>
                            </dl>
                        </div>

                        <span class="l-form__privacy">
                            <label>
                                <input type="checkbox" name="" value="1" />
                                <span class="l-form__privacyText"><a
                                        href="<?php echo get_template_directory_uri(); ?>/privacy">プライバシーポリシー</a>に同意する</span>
                            </label>
                        </span>
                        <div class="l-form__submit -submit">
                            <input type="submit" value="内容の確認" class="l-form__btn" />
                        </div>
                        <input type="hidden" class="p-country-name" value="Japan"> -->
                    <?php echo do_shortcode('[mwform_formkey key="91"]'); ?>
                    <!-- </form> -->
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
<!-- jquery -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-3.6.0.min.js"></script>
<script src="https://ajaxzip3.github.io/ajaxzip3.js"></script>
</div>
</body>

</html>