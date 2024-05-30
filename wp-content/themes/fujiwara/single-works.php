<!-- header呼び出し -->
<?php get_header(); ?>
<?php
/*
Template Name: Works detail page
*/
?>
<!-- main -->
<!-- /header -->
<!-- cusor-pointer -->
<div id="js-cursor-img" class="p-cursor-img"></div>
<div id="js-chaser-img" class="p-chaser-img">
    <figure class="js-cursor-img01"><img
            src="<?php echo get_template_directory_uri(); ?>/assets/images/works/pointer_img01.jpg" width="240"
            height="280" loading="lazy" alt="リンク：建築事業" /></figure>
    <figure class="js-cursor-img02"><img
            src="<?php echo get_template_directory_uri(); ?>/assets/images/works/pointer_img02.jpg" width="240"
            height="280" loading="lazy" alt="リンク：土木事業" /></figure>
    <figure class="js-cursor-img03"><img
            src="<?php echo get_template_directory_uri(); ?>/assets/images/works/pointer_img03.jpg" width="240"
            height="280" loading="lazy" alt="リンク：住宅事業" /></figure>
</div>
<!-- /cusor-pointer -->
<!-- main -->
<main id="top" class="l-main">
    <article>
        <div id="js-top" class="p-hero -noimg">
            <h2 class="l-section__title js-title load">
                <span class="l-section__titleTextWrap"><span class="l-section__titleText">W</span><span
                        class="l-section__titleText">o</span><span class="l-section__titleText">r</span><span
                        class="l-section__titleText">k</span><span class="l-section__titleText">s</span></span><span
                    class="-jp">施工実績</span>
            </h2>
        </div>
        <nav class="c-breadcrumbs" aria-label="breadcrumb">
            <div class="l-container">
                <ol class="c-breadcrumbs__list">
                    <li class="c-breadcrumbs__item">
                        <a href="<?php echo esc_url(home_url('')); ?>" class="c-breadcrumbs__link">TOP</a>
                    </li>
                    <li class="c-breadcrumbs__item">
                        <a href="<?php echo esc_url(home_url('works')); ?>" class="c-breadcrumbs__link">施工実績</a>
                    </li>
                    <li class="c-breadcrumbs__item">
                        <a href="<?php the_permalink(); ?>" class="c-breadcrumbs__link"
                            aria-current="page"><?php the_title() ?></a>
                    </li>
                </ol>
            </div>
        </nav>
        <!-- sec-works-detail -->
        <section class="p-works-detail">
            <div class="l-container">
                <article class="p-works-detail__article">
                    <nav class="p-works-detail__nav">
                        <ul class="p-works-detail__list">
                            <li class="p-works-detail__item">
                                <a href="#item01" class="p-works-detail__link js-link01 is-active">概要</a>
                            </li>
                            <li class="p-works-detail__item">
                                <a href="#item02" class="p-works-detail__link js-link02">ギャラリー</a>
                            </li>
                            <li class="p-works-detail__item">
                                <a href="#item03" class="p-works-detail__link js-link03">工事内容</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="p-works-detail__content">
                        <h1 class="p-works-detail__title"><?php the_title() ?></h1>
                        <div class="p-works-detail__info">
                            <time>2022.02.24</time>
                            <span class="p-works-detail__tag">
                                <?php
                                $terms = wp_get_object_terms($post->ID, 'construction');
                                foreach ($terms as $term) {
                                    echo  $term->name;
                                }
                                ?>
                            </span>
                        </div>
                        <figure class="p-works-detail__eyecatch">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/works/eyecatch_img.jpg"
                                alt="" />
                        </figure>
                        <div id="item01" class="p-works-detail__block js-block01">
                            <h2 class="p-works-detail__blockTitle">概要</h2>
                            <p class="l-section__text">
                                県内の高等学校の改修工事を行いました。<br />歴史ある高等学校ということで、これまでの歴史を振り返られる部分は残しつつ、今後も長く存在し続けられるよう、地盤強化を施させていただきました。<br />“安全に過ごせる”を当たり前に、そんな当たり前を自信持って提供し続けられるよう技術を高め続けて参ります。
                            </p>
                        </div>
                        <div id="item02" class="p-works-detail__block js-block02">
                            <h2 class="p-works-detail__blockTitle">ギャラリー</h2>
                            <ul class="p-works-detail__gallery">
                                <li class="p-works-detail__galleryItem">
                                    <a href="<?php echo get_template_directory_uri(); ?>/assets/images/works/detail_img01.jpg"
                                        class="p-works-detail__galleryLink glightbox" data-lightbox="myGallery">
                                        <figure><img
                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/works/detail_img01_small.jpg"
                                                alt="" />
                                        </figure>
                                    </a>
                                </li>
                                <li class="p-works-detail__galleryItem">
                                    <a href="<?php echo get_template_directory_uri(); ?>/assets/images/works/detail_img02.jpg"
                                        class="p-works-detail__galleryLink glightbox" data-lightbox="myGallery">
                                        <figure><img
                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/works/detail_img02_small.jpg"
                                                alt="" />
                                        </figure>
                                    </a>
                                </li>
                                <li class="p-works-detail__galleryItem">
                                    <a href="<?php echo get_template_directory_uri(); ?>/assets/images/works/detail_img03.jpg"
                                        class="p-works-detail__galleryLink glightbox" data-lightbox="myGallery">
                                        <figure><img
                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/works/detail_img03_small.jpg"
                                                alt="" />
                                        </figure>
                                    </a>
                                </li>
                                <li class="p-works-detail__galleryItem">
                                    <a href="<?php echo get_template_directory_uri(); ?>/assets/images/works/detail_img04.jpg"
                                        class="p-works-detail__galleryLink glightbox" data-lightbox="myGallery">
                                        <figure><img
                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/works/detail_img04_small.jpg"
                                                alt="" />
                                        </figure>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div id="item03" class="p-works-detail__block js-block03">
                            <h2 class="p-works-detail__blockTitle">工事内容</h2>
                            <dl class="l-section-list">
                                <div class="l-section-list__row">
                                    <dt class="l-section-list__item">竣工</dt>
                                    <dd class="l-section-list__desc">2022年2月11日</dd>
                                </div>
                                <div class="l-section-list__row">
                                    <dt class="l-section-list__item">工事名</dt>
                                    <dd class="l-section-list__desc">千葉県立◯◯高等学校改修工事</dd>
                                </div>
                                <div class="l-section-list__row">
                                    <dt class="l-section-list__item">発注者</dt>
                                    <dd class="l-section-list__desc">千葉県◯◯市　◯◯部</dd>
                                </div>
                                <div class="l-section-list__row">
                                    <dt class="l-section-list__item">設計</dt>
                                    <dd class="l-section-list__desc">（株）◯◯設計事務所</dd>
                                </div>
                                <div class="l-section-list__row">
                                    <dt class="l-section-list__item">担当</dt>
                                    <dd class="l-section-list__desc">藤原建設工業</dd>
                                </div>
                                <div class="l-section-list__row">
                                    <dt class="l-section-list__item">詳細</dt>
                                    <dd class="l-section-list__desc">校舎・屋上　一式改修工事<br />外壁・内部改修、塗装など</dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                </article>
                <div class="p-works-detail__otherLinkInner">
                    <ul class="p-works-detail__otherLinkList">
                        <li class="p-works-detail__otherLinkItem">
                            <a href="<?php echo esc_url(home_url('construction/archi')); ?>"
                                class="p-works-detail__otherLink js-works-cursor01 -cursorNone -archi">
                                <span class="l-section__subTitle">Architecture<span>建築事業</span></span>
                                <div class="c-link">
                                    <span class="circle">
                                        <span class="arrow"></span>
                                        <span class="arrow"></span>
                                    </span>
                                </div>
                            </a>
                        </li>
                        <li class="p-works-detail__otherLinkItem">
                            <a href="<?php echo esc_url(home_url('construction/civil')); ?>"
                                class="p-works-detail__otherLink js-works-cursor02 -cursorNone -civil">
                                <span class="l-section__subTitle">Civil engineering<span>土木事業</span></span>
                                <div class="c-link">
                                    <span class="circle">
                                        <span class="arrow"></span>
                                        <span class="arrow"></span>
                                    </span>
                                </div>
                            </a>
                        </li>
                        <li class="p-works-detail__otherLinkItem">
                            <a href="<?php echo esc_url(home_url('construction/housing')); ?>"
                                class="p-works-detail__otherLink js-works-cursor03 -cursorNone -housing">
                                <span class="l-section__subTitle">Housing<span>住宅事業</span></span>
                                <div class="c-link">
                                    <span class="circle">
                                        <span class="arrow"></span>
                                        <span class="arrow"></span>
                                    </span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="c-list-button__block">
                    <a href="<?php echo esc_url(home_url('works')); ?>" class="c-list-button">施工実績一覧へ</a>
                </div>
            </div>
        </section>
        <!-- /sec-works-detail -->
    </article>
</main>
<!-- /main -->
<!-- footer呼び出し -->
<?php get_footer(); ?>