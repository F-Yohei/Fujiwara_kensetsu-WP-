<!-- header呼び出し -->
<?php get_header(); ?>
<?php
/*
Template Name: Recruit page
*/
?>
<!-- main -->
<main id="top" class="l-main">
    <article class="l-section">
        <div id="js-top" class="p-hero">
            <h2 class="l-section__title js-title load">
                <span class="l-section__titleTextWrap"><span class="l-section__titleText">R</span><span
                        class="l-section__titleText">e</span><span class="l-section__titleText">c</span><span
                        class="l-section__titleText">r</span><span class="l-section__titleText">u</span><span
                        class="l-section__titleText">i</span><span class="l-section__titleText">t</span><span
                        class="-jp">採用情報</span>
            </h2>
            <figure class="js-parallax-hero">
                <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/hero_img_pc.jpg"
                        media="(min-width: 769px)" type="image/jpg" />
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/hero_img_sp.jpg"
                        alt="" />
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
                            aria-current="page">採用情報</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- sec-recruit-message -->
        <section class="p-recruit-message">
            <div class="p-loop-textWrap">
                <div class="p-loop-text">
                    <span>FUJIWARA</span>
                    <span>RECRUIT</span>
                </div>
            </div>
            <div class="l-container">
                <h2 class="p-recruit-message__title">過去と未来を繋ぎ続ける</h2>
                <div class="p-recruit-message__head">
                    <figure class="p-recruit-message__headImg js-parallax-img">
                        <picture>
                            <source
                                srcset="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/head_img01_pc.jpg"
                                media="(min-width: 769px)" type="image/jpg" />
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/head_img01_sp.jpg"
                                alt="" />
                        </picture>
                    </figure>
                    <figure class="p-recruit-message__headImg js-parallax-img">
                        <picture>
                            <source
                                srcset="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/head_img02_pc.jpg"
                                media="(min-width: 769px)" type="image/jpg" />
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/head_img02_sp.jpg"
                                alt="" />
                        </picture>
                    </figure>
                </div>
                <div class="p-recruit-message__inner">
                    <span class="bg"></span>
                    <figure>
                        <picture>
                            <source
                                srcset="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/message_img_pc.jpg"
                                media="(min-width: 769px)" type="image/jpg" />
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/message_img_sp.jpg"
                                alt="" />
                        </picture>
                    </figure>
                    <div class="p-recruit-message__desc">
                        <h2 class="l-section__subTitle">Message<span>メッセージ</span></h2>
                        <h3 class="p-company-message__catch">地域の皆様へ恩返しを</h3>
                        <p class="l-section__text">
                            私たちは、これまでたくさんの実績を残してきました。自慢の技術力も企業全体で向上してきており、私たちの誇りの一つです。<br />そんな誇りに思えるモノたちですが、地域の皆様のご協力や声援がなければ、積み上げることが出来なかったのは間違いありません。<br /><br />私たちは、これからも「地域の皆様へ恩返しを」を第一に、社会へ貢献していきます。<br />藤原建設工業では、地域へ貢献したいと強く思っている方を求めています。
                        </p>
                    </div>
                </div>
            </div>
            <figure class="p-recruit-message__parallax js-parallax-img">
                <picture>
                    <source
                        srcset="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/parallax_img_pc.jpg"
                        media="(min-width: 769px)" type="image/jpg" />
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/parallax_img_sp.jpg"
                        alt="" />
                </picture>
            </figure>
        </section>
        <!-- /sec-recruit-message -->
        <!-- sec-recruit-faq -->
        <section class="p-recruit-faq">
            <div class="l-container">
                <h2 class="l-section__subTitle">FAQ<span>よくある質問</span></h2>
                <ul class="p-recruit-faq__list">
                    <li class="p-recruit-faq__item">
                        <h2 class="p-recruit-faq__title close">高校卒業後でもエントリーは可能ですか？<span class="toggle"></span></h2>
                        <p class="p-recruit-faq__text">はい、可能です。<br />ただし、エントリーできる職種に制限がある場合がございますので、下記の募集要項をご覧ください。</p>
                    </li>
                    <li class="p-recruit-faq__item">
                        <h2 class="p-recruit-faq__title">エントリー方法について教えてください。<span class="toggle"></span></h2>
                        <p class="p-recruit-faq__text">募集要項の下部にエントリーフォームへのリンクがありますので、そちらからエントリーください。</p>
                    </li>
                    <li class="p-recruit-faq__item">
                        <h2 class="p-recruit-faq__title">資格取得支援制度のようなものはありますか？<span class="toggle"></span></h2>
                        <p class="p-recruit-faq__text">はい、ございます。詳細はお問い合わせフォームよりご連絡ください。</p>
                    </li>
                    <li class="p-recruit-faq__item">
                        <h2 class="p-recruit-faq__title">必要な資格が知りたいです。<span class="toggle"></span></h2>
                        <p class="p-recruit-faq__text">募集要項の「応募資格」の欄をご覧ください。資格の必要のない職種もございますので、募集要項を参照ください。</p>
                    </li>
                </ul>
            </div>
        </section>
        <!-- /sec-recruit-faq -->
        <!-- sec-recruit-desc -->
        <section class="p-recruit-desc">
            <div class="l-container">
                <h2 class="l-section__subTitle">Job description<span>募集要項</span></h2>
                <div class="p-recruit-desc__tab">
                    <ul class="p-recruit-desc__menu">
                        <li class="p-recruit-desc__item">
                            <a href="" data-id="menuId01" class="p-recruit-desc__link is-select">建設業務</a>
                        </li>
                        <li class="p-recruit-desc__item">
                            <a href="" data-id="menuId02" class="p-recruit-desc__link">事務業務</a>
                        </li>
                        <li class="p-recruit-desc__item">
                            <a href="" data-id="menuId03" class="p-recruit-desc__link">営業業務</a>
                        </li>
                    </ul>
                    <div id="menuId01" class="p-recruit-desc__content is-select">
                        <h2 class="p-recruit-desc__title">建設業務</h2>
                        <dl class="l-section-list">
                            <div class="l-section-list__row">
                                <dt class="l-section-list__item">職種</dt>
                                <dd class="l-section-list__desc">現場での建設業務</dd>
                            </div>
                            <div class="l-section-list__row">
                                <dt class="l-section-list__item">給与</dt>
                                <dd class="l-section-list__desc">月給300,000円〜</dd>
                            </div>
                            <div class="l-section-list__row">
                                <dt class="l-section-list__item">雇用形態</dt>
                                <dd class="l-section-list__desc">正社員（試用期間3ヶ月）</dd>
                            </div>
                            <div class="l-section-list__row">
                                <dt class="l-section-list__item">交通費</dt>
                                <dd class="l-section-list__desc">10,000円まで支給</dd>
                            </div>
                            <div class="l-section-list__row">
                                <dt class="l-section-list__item">勤務場所</dt>
                                <dd class="l-section-list__desc">〒000-0000<br />千葉県◯◯市◯◯丁目◯◯番</dd>
                            </div>
                            <div class="l-section-list__row">
                                <dt class="l-section-list__item">福利厚生</dt>
                                <dd class="l-section-list__desc">雇用・労災・健康・厚生年金保険、資格取得支援、住宅手当</dd>
                            </div>
                            <div class="l-section-list__row">
                                <dt class="l-section-list__item">勤務時間</dt>
                                <dd class="l-section-list__desc">8:30〜17:30</dd>
                            </div>
                            <div class="l-section-list__row">
                                <dt class="l-section-list__item">休日</dt>
                                <dd class="l-section-list__desc">土・日・祝日、夏季、年末年始、有給休暇</dd>
                            </div>
                            <div class="l-section-list__row">
                                <dt class="l-section-list__item">応募資格</dt>
                                <dd class="l-section-list__desc">未経験可　手に職を身につけたい方大歓迎</dd>
                            </div>
                        </dl>
                        <div class="c-list-button__block">
                            <a href="<?php echo get_template_directory_uri(); ?>/entry" class="c-list-button">エントリー</a>
                        </div>
                    </div>
                    <div id="menuId02" class="p-recruit-desc__content">
                        <h2 class="p-recruit-desc__title">事務業務</h2>
                        <dl class="l-section-list">
                            <div class="l-section-list__row">
                                <dt class="l-section-list__item">職種</dt>
                                <dd class="l-section-list__desc">本社での事務業務</dd>
                            </div>
                            <div class="l-section-list__row">
                                <dt class="l-section-list__item">給与</dt>
                                <dd class="l-section-list__desc">月給180,000円〜</dd>
                            </div>
                            <div class="l-section-list__row">
                                <dt class="l-section-list__item">雇用形態</dt>
                                <dd class="l-section-list__desc">正社員（試用期間3ヶ月）</dd>
                            </div>
                            <div class="l-section-list__row">
                                <dt class="l-section-list__item">交通費</dt>
                                <dd class="l-section-list__desc">10,000円まで支給</dd>
                            </div>
                            <div class="l-section-list__row">
                                <dt class="l-section-list__item">勤務場所</dt>
                                <dd class="l-section-list__desc">〒000-0000<br />千葉県◯◯市◯◯丁目◯◯番</dd>
                            </div>
                            <div class="l-section-list__row">
                                <dt class="l-section-list__item">福利厚生</dt>
                                <dd class="l-section-list__desc">雇用・労災・健康・厚生年金保険、資格取得支援、住宅手当</dd>
                            </div>
                            <div class="l-section-list__row">
                                <dt class="l-section-list__item">勤務時間</dt>
                                <dd class="l-section-list__desc">8:30〜17:30</dd>
                            </div>
                            <div class="l-section-list__row">
                                <dt class="l-section-list__item">休日</dt>
                                <dd class="l-section-list__desc">土・日・祝日、夏季、年末年始、有給休暇</dd>
                            </div>
                            <div class="l-section-list__row">
                                <dt class="l-section-list__item">応募資格</dt>
                                <dd class="l-section-list__desc">日商簿記2級　パートでも可（要相談）</dd>
                            </div>
                        </dl>
                        <div class="c-list-button__block">
                            <a href="<?php echo get_template_directory_uri(); ?>/entry" class="c-list-button">エントリー</a>
                        </div>
                    </div>
                    <div id="menuId03" class="p-recruit-desc__content">
                        <h2 class="p-recruit-desc__title">営業業務</h2>
                        <dl class="l-section-list">
                            <div class="l-section-list__row">
                                <dt class="l-section-list__item">職種</dt>
                                <dd class="l-section-list__desc">本社を拠点とした営業業務</dd>
                            </div>
                            <div class="l-section-list__row">
                                <dt class="l-section-list__item">給与</dt>
                                <dd class="l-section-list__desc">月給350,000円〜</dd>
                            </div>
                            <div class="l-section-list__row">
                                <dt class="l-section-list__item">雇用形態</dt>
                                <dd class="l-section-list__desc">正社員（試用期間3ヶ月）</dd>
                            </div>
                            <div class="l-section-list__row">
                                <dt class="l-section-list__item">交通費</dt>
                                <dd class="l-section-list__desc">10,000円まで支給</dd>
                            </div>
                            <div class="l-section-list__row">
                                <dt class="l-section-list__item">勤務場所</dt>
                                <dd class="l-section-list__desc">〒000-0000<br />千葉県◯◯市◯◯丁目◯◯番</dd>
                            </div>
                            <div class="l-section-list__row">
                                <dt class="l-section-list__item">福利厚生</dt>
                                <dd class="l-section-list__desc">雇用・労災・健康・厚生年金保険、資格取得支援、住宅手当</dd>
                            </div>
                            <div class="l-section-list__row">
                                <dt class="l-section-list__item">勤務時間</dt>
                                <dd class="l-section-list__desc">8:30〜17:30</dd>
                            </div>
                            <div class="l-section-list__row">
                                <dt class="l-section-list__item">休日</dt>
                                <dd class="l-section-list__desc">土・日・祝日、夏季、年末年始、有給休暇</dd>
                            </div>
                            <div class="l-section-list__row">
                                <dt class="l-section-list__item">応募資格</dt>
                                <dd class="l-section-list__desc">営業経験3年以上</dd>
                            </div>
                        </dl>
                        <div class="c-list-button__block">
                            <a href="<?php echo get_template_directory_uri(); ?>/entry" class="c-list-button">エントリー</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /sec-recruit-desc -->
        <!-- sec-recruit-form -->
        <section class="p-recruit-form">
            <div class="l-container">
                <div class="p-recruit-form__inner">
                    <a href="<?php echo get_template_directory_uri(); ?>/entry" class="p-recruit-form__link">
                        <h2 class="l-section__subTitle">Entry Form<span>エントリーフォーム</span></h2>
                        <div class="c-link__wrap">
                            <div class="c-link -white">
                                View more
                                <span class="circle">
                                    <span class="arrow"></span>
                                    <span class="arrow"></span>
                                </span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="p-recruit-form__bg">
                    <figure>
                        <picture>
                            <source
                                srcset="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/form_bg_pc.jpg"
                                media="(min-width: 769px)" type="image/jpg" />
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/form_bg_sp.jpg"
                                width="390" height="182" loading="lazy" alt="" />
                        </picture>
                    </figure>
                </div>
            </div>
        </section>
        <!-- /sec-recruit-form -->
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
<!-- recruit.bundle.js -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/recruit.bundle.js"></script>
</div>
</body>

</html>