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
                        <a href="../company" class="c-breadcrumbs__link" aria-current="page">新着情報</a>
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
                    <?php echo do_shortcode('[mwform_formkey key="185"]'); ?>
                    <div class="l-form">
                        <div class="l-form__list">
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
                                <dt class="l-form__dt">生年月日</dt>
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
                                <dd class="l-form__dd">
                                    <span>
                                        <input type="text" name="郵便番号" placeholder="" required="" class="zip-button"
                                            onKeyUp="AjaxZip3.zip2addr( this, '', '都道府県', '市区町村', 'town' );" />
                                    </span>
                                </dd>
                            </dl>
                            <dl class="l-form__item">
                                <dt class="l-form__dt">都道府県</dt>
                                <dd class="l-form__dd">
                                    <span>
                                        <input type="text" name="都道府県" placeholder="" required="" class="" />
                                    </span>
                                </dd>
                            </dl>
                            <dl class="l-form__item">
                                <dt class="l-form__dt">市区町村</dt>
                                <dd class="l-form__dd">
                                    <span>
                                        <input type="text" name="市区町村" placeholder="" required="" class="" />
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
                            <div class="l-form__item -radio">
                                <dt class="l-form__dt">希望職種</dt>
                                <dd class="l-form__dd -radio">
                                    <span class="-flex">
                                        <input type="radio" name="occupation" id="architecture" value="建設" />
                                        <label for="architecture"
                                            class="l-form__label mwform-radio-field-text">建設</label>
                                    </span>
                                    <span class="-flex">
                                        <input type="radio" name="occupation" id="office" value="事務" />
                                        <label for="office" class="l-form__label mwform-radio-field-text">事務</label>
                                    </span>
                                    <span class="-flex">
                                        <input type="radio" name="occupation" id="sales" value="営業" />
                                        <label for="sales" class="l-form__label mwform-radio-field-text">営業</label>
                                    </span>
                                </dd>
                            </div>
                            <dl class="l-form__item">
                                <dt class="l-form__dt">職務履歴書</dt>
                                <dd class="l-form__dd -file">
                                    <span>
                                        <input type="file" name="" required="" class="" />
                                    </span>
                                </dd>
                            </dl>
                            <div class="l-form__item -message">
                                <dt class="l-form__dt">その他ご質問</dt>
                                <dd class="l-form__dd">
                                    <textarea name="" placeholder="" required="" class=""></textarea>
                                </dd>
                            </div>
                        </div>
                        <span class="l-form__privacy">
                            <label>
                                <input type="checkbox" name="" value="1" />
                                <span class="l-form__privacyText"><a href="../privacy">プライバシーポリシー</a>に同意する</span>
                            </label>
                        </span>
                        <div class="l-form__submit -submit">
                            <input type="submit" value="内容の確認" class="l-form__btn" />
                        </div>
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
<!-- jquery -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-3.6.0.min.js"></script>
<script src="https://ajaxzip3.github.io/ajaxzip3.js"></script>
</div>
</body>

</html>