<!-- header呼び出し -->
<?php get_header(); ?>
<?php
/*
Template Name: TOP page
*/
?>
<video id="js-video" class="p-home-mv__video"
    src="<?php echo get_template_directory_uri(); ?>/assets/video/fujiwara_movie.mp4"
    poster="<?php echo get_template_directory_uri(); ?>/assets/images/home/video_bg.jpg" width="100%" height="auto" loop
    autoplay muted playsinline>
</video>
<!-- mouse cursor -->
<div id="js-cursor" class="p-cursor"></div>
<div id="js-chaser" class="p-chaser">
    <p class="text">DRAG</p>
</div>
<!-- /mouse cursor -->
<!-- main -->
<main id="top" class="l-main">
    <!-- loading -->
    <div id="js-loading" class="p-loading">
        <div id="js-loading-bg" class="js-loading__bg p-loading__bg">
            <figure id="js-logo" class="p-loading__logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/loading_logo.svg"
                    alt="藤原建設工業" />
            </figure>
        </div>
    </div>
    <!-- /loading -->
    <div class="p-fixed-button">
        <ul class="p-fixed-button__list">
            <li class="p-fixed-button__item">
                <a href="<?php echo esc_url(home_url('entry')); ?>" class="p-fixed-button__link -entry">ENTRY</a>
            </li>
            <li class="p-fixed-button__item">
                <a href="<?php echo esc_url(home_url('recruit')); ?>" class="p-fixed-button__link -recruit">RECRUIT</a>
            </li>
            <li class="p-fixed-button__item">
                <a href="<?php echo esc_url(home_url('contact')); ?>" class="p-fixed-button__link -contact">CONTACT</a>
            </li>
        </ul>
    </div>
    <article>
        <!-- main visual -->
        <div id="js-top" class="p-home-mv">
            <div class="p-overlay"></div>
            <div id="js-scroll" class="p-scroll">
                <div class="p-scroll__inner">
                    <div class="p-scroll__arrow"></div>
                </div>
            </div>
            <div class="p-home-slider">
                <!-- catch -->
                <div class="p-home-catch">
                    <div class="p-home-sliderText__container swiper-container-text">
                        <div class="p-home-sliderText__wrapper swiper-wrapper">
                            <div class="p-home-sliderText__slide swiper-slide">
                                <div class="p-home-slider__text slide-img">
                                    <div class="p-home-slider__eng js-slider-text">
                                        <div class="p-home-slider__engWrap -archi">
                                            <span class="p-home-slider__engText">A</span>
                                            <span class="p-home-slider__engText">r</span>
                                            <span class="p-home-slider__engText">c</span>
                                            <span class="p-home-slider__engText">h</span>
                                            <span class="p-home-slider__engText">i</span>
                                            <span class="p-home-slider__engText">t</span>
                                            <span class="p-home-slider__engText">e</span>
                                            <span class="p-home-slider__engText">c</span>
                                            <span class="p-home-slider__engText">t</span>
                                            <span class="p-home-slider__engText">u</span>
                                            <span class="p-home-slider__engText">r</span>
                                            <span class="p-home-slider__engText">e</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-home-sliderText__slide swiper-slide">
                                <div class="p-home-slider__text slide-img">
                                    <div class="p-home-slider__eng js-slider-text">
                                        <div class="p-home-slider__engWrap -civil">
                                            <span class="p-home-slider__engText">C</span>
                                            <span class="p-home-slider__engText">i</span>
                                            <span class="p-home-slider__engText">v</span>
                                            <span class="p-home-slider__engText">i</span>
                                            <span class="p-home-slider__engText">l</span>
                                            <span class="p-home-slider__engText">&nbsp;</span>
                                            <span class="p-home-slider__engText">E</span>
                                            <span class="p-home-slider__engText">n</span>
                                            <span class="p-home-slider__engText">g</span>
                                            <span class="p-home-slider__engText">i</span>
                                            <span class="p-home-slider__engText">n</span>
                                            <span class="p-home-slider__engText">e</span>
                                            <span class="p-home-slider__engText">e</span>
                                            <span class="p-home-slider__engText">r</span>
                                            <span class="p-home-slider__engText">i</span>
                                            <span class="p-home-slider__engText">n</span>
                                            <span class="p-home-slider__engText">g</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-home-sliderText__slide swiper-slide">
                                <div class="p-home-slider__text slide-img">
                                    <div class="p-home-slider__eng js-slider-text">
                                        <div class="p-home-slider__engWrap -housing">
                                            <span class="p-home-slider__engText">H</span>
                                            <span class="p-home-slider__engText">o</span>
                                            <span class="p-home-slider__engText">u</span>
                                            <span class="p-home-slider__engText">s</span>
                                            <span class="p-home-slider__engText">i</span>
                                            <span class="p-home-slider__engText">n</span>
                                            <span class="p-home-slider__engText">g</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h2 id="js-catch" class="p-home-catch__eng js-catch">
                        <div class="p-home-catch__engWrap">
                            <span class="p-home-catch__engText">H</span>
                            <span class="p-home-catch__engText">o</span>
                            <span class="p-home-catch__engText">w</span>
                            <span class="p-home-catch__engText">&nbsp;</span>
                            <span class="p-home-catch__engText">F</span>
                            <span class="p-home-catch__engText">a</span>
                            <span class="p-home-catch__engText">r</span>
                        </div>
                        <div class="p-home-catch__engBlock">
                            <div class="p-home-catch__engWrap">
                                <span class="p-home-catch__engText">C</span>
                                <span class="p-home-catch__engText">a</span>
                                <span class="p-home-catch__engText">n</span>
                            </div>
                            <div class="p-home-catch__engWrap">
                                <span class="p-home-catch__engText u-only-pc">&nbsp;</span>
                                <span class="p-home-catch__engText">W</span>
                                <span class="p-home-catch__engText">e</span>
                                <span class="p-home-catch__engText">&nbsp;</span>
                                <span class="p-home-catch__engText">G</span>
                                <span class="p-home-catch__engText">o</span>
                                <span class="p-home-catch__engText">?</span>
                            </div>
                        </div>
                    </h2>
                    <p id="js-catch-text" class="p-home-catch__text">「どこまでいけるか」<br />お客さまと挑戦し続ける未来を<br
                            class="u-only-sp" />築いていきます。</p>
                </div>
                <!-- /catch -->
                <div class="p-home-slider__container swiper-container-home">
                    <div class="p-home-slider__wrapper swiper-wrapper">
                        <div class="p-home-slider__slide swiper-slide">
                            <div class="p-home-slider__img slide-img">
                                <figure>
                                    <picture>
                                        <source
                                            srcset="<?php echo get_template_directory_uri(); ?>/assets/images/home/home_slider_img01_pc.jpg"
                                            media="(min-width: 769px)" type="image/jpg" />
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/home_slider_img01_sp.jpg"
                                            alt="" />
                                    </picture>
                                </figure>
                            </div>
                        </div>
                        <div class="p-home-slider__slide swiper-slide">
                            <div class="p-home-slider__img slide-img">
                                <figure>
                                    <picture>
                                        <source
                                            srcset="<?php echo get_template_directory_uri(); ?>/assets/images/home/home_slider_img02_pc.jpg"
                                            media="(min-width: 769px)" type="image/jpg" />
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/home_slider_img02_sp.jpg"
                                            alt="" />
                                    </picture>
                                </figure>
                            </div>
                        </div>
                        <div class="p-home-slider__slide swiper-slide">
                            <div class="p-home-slider__img slide-img">
                                <figure>
                                    <picture>
                                        <source
                                            srcset="<?php echo get_template_directory_uri(); ?>/assets/images/home/home_slider_img03_pc.jpg"
                                            media="(min-width: 769px)" type="image/jpg" />
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/home_slider_img03_sp.jpg"
                                            alt="" />
                                    </picture>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /main visual -->
        <div class="p-parallax__bg js-trigger-section">
            <!-- p-home-about -->
            <section class="p-home-about l-section">
                <div class="p-home-about__inner">
                    <div class="p-home-about__desc">
                        <div class="p-home-about__img">
                            <figure class="js-parallax-img">
                                <picture>
                                    <source
                                        srcset="<?php echo get_template_directory_uri(); ?>/assets/images/home/about_img_pc.jpg"
                                        media="(min-width: 769px)" type="image/jpg" />
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/about_img_sp.jpg"
                                        alt="" />
                                </picture>
                            </figure>
                        </div>
                        <div class="p-home-about__container">
                            <div class="p-home-about__title">
                                <h2 class="l-section__title js-title inview">
                                    <span class="l-section__titleTextWrap">
                                        <span class="l-section__titleText">A</span>
                                        <span class="l-section__titleText">b</span>
                                        <span class="l-section__titleText">o</span>
                                        <span class="l-section__titleText">u</span>
                                        <span class="l-section__titleText">t</span>
                                    </span>
                                    <span class="-jp">会社情報</span>
                                </h2>
                            </div>
                            <div class="p-home-about__descWrapper">
                                <p class="p-home-about__descText">
                                    これまでの実績を築き上げてきた挑戦と経験を、未来のお客さまへ繋いでいくことをテーマにして日々のお仕事に励んでいます。<br>
                                    「過去と未来を繋ぎ続ける」そんな会社を目指す技術集団が、藤原建設工業です。
                                </p>
                            </div>
                            <div class="c-link__wrap">
                                <a href="<?php echo esc_url(home_url('company')); ?>" class="c-link">
                                    View more
                                    <span class="circle">
                                        <span class="arrow"></span>
                                        <span class="arrow"></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- sec-home-video -->
            <secetion class="p-home-video l-section"> </secetion>
            <!-- /sec-home-video -->
            <!-- p-home-service -->
            <section class="p-home-service l-section">
                <div class="p-home-service__inner">
                    <div class="p-home-service__desc">
                        <div class="p-home-service__title">
                            <h2 class="l-section__title js-title inview">
                                <span class="l-section__titleTextWrap">
                                    <span class="l-section__titleText">S</span>
                                    <span class="l-section__titleText">e</span>
                                    <span class="l-section__titleText">r</span>
                                    <span class="l-section__titleText">v</span>
                                    <span class="l-section__titleText">i</span>
                                    <span class="l-section__titleText">c</span>
                                    <span class="l-section__titleText">e</span>
                                </span>
                                <span class="-jp">事業内容</span>
                            </h2>
                        </div>
                        <div class="p-home-service__descWrapper">
                            <p class="p-home-service__descText">
                                藤原建設工業では「建築事業」「土木事業」「住宅事業」の3つの事業を通してお客さまのお手伝いをさせていただいております。<br>
                                事業内容ページでは、3つの柱をより具体的にご紹介します。
                            </p>
                        </div>
                        <div class="c-link__wrap">
                            <a href="<?php echo esc_url(home_url('service')); ?>" class="c-link">
                                View more
                                <span class="circle">
                                    <span class="arrow"></span>
                                    <span class="arrow"></span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <ul class="p-home-service__list">
                        <li class="p-home-service__item -arch">
                            <div class="p-home-service__itemTitle">
                                <h2 class="p-home-service__itemTitle--en">Architecture</h2>
                                <p class="p-home-service__itemTitle--ja">建築事業</p>
                            </div>
                            <div class="p-home-service__link">
                                <a href="<?php echo esc_url(home_url('construction/archi')); ?>" class="c-link -white">
                                    View more
                                    <span class="circle">
                                        <span class="arrow"></span>
                                        <span class="arrow"></span>
                                    </span>
                                </a>
                            </div>
                            <figure>
                                <picture>
                                    <source
                                        srcset="<?php echo get_template_directory_uri(); ?>/assets/images/home/service_img01_pc.jpg"
                                        media="(min-width: 769px)" type="image/jpg" />
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/service_img01_sp.jpg"
                                        width="350" height="280" loading="lazy" alt="" />
                                </picture>
                            </figure>
                        </li>
                        <li class="p-home-service__item -civil">
                            <div class="p-home-service__itemTitle">
                                <h2 class="p-home-service__itemTitle--en">Civil Engineering</h2>
                                <p class="p-home-service__itemTitle--ja">土木事業</p>
                            </div>
                            <div class="p-home-service__link">
                                <a href="<?php echo esc_url(home_url('construction/civil')); ?>" class="c-link -white">
                                    View more
                                    <span class="circle">
                                        <span class="arrow"></span>
                                        <span class="arrow"></span>
                                    </span>
                                </a>
                            </div>
                            <figure>
                                <picture>
                                    <source
                                        srcset="<?php echo get_template_directory_uri(); ?>/assets/images/home/service_img02_pc.jpg"
                                        media="(min-width: 769px)" type="image/jpg" />
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/service_img02_sp.jpg"
                                        width="350" height="280" loading="lazy" alt="" />
                                </picture>
                            </figure>
                        </li>
                        <li class="p-home-service__item -housing">
                            <div class="p-home-service__itemTitle">
                                <h2 class="p-home-service__itemTitle--en">Housing</h2>
                                <p class="p-home-service__itemTitle--ja">住宅事業</p>
                            </div>
                            <div class="p-home-service__link">
                                <a href="<?php echo esc_url(home_url('construction/housing')); ?>"
                                    class="c-link -white">
                                    View more
                                    <span class="circle ">
                                        <span class="arrow"></span>
                                        <span class="arrow"></span>
                                    </span>
                                </a>
                            </div>
                            <figure>
                                <picture>
                                    <source
                                        srcset="<?php echo get_template_directory_uri(); ?>/assets/images/home/service_img03_pc.jpg"
                                        media="(min-width: 769px)" type="image/jpg" />
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/service_img03_sp.jpg"
                                        width="350" height="280" loading="lazy" alt="" />
                                </picture>
                            </figure>
                        </li>
                    </ul>
                </div>
            </section>
            <!-- /p-home-service -->
            <!-- p-home-loop -->
            <section class="p-home-loop l-section">
                <div class="p-home-loop__list">
                    <!-- グループ１ -->
                    <ul class="p-home-loop__itemWrap">
                        <li class="p-home-loop__item">
                            <figure>
                                <picture>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/loop_img01.jpg"
                                        width="140" height="140" loading="lazy" alt="" />
                                </picture>
                            </figure>
                        </li>
                        <li class="p-home-loop__item">
                            <figure>
                                <picture>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/loop_img02.jpg"
                                        width="140" height="140" loading="lazy" alt="" />
                                </picture>
                            </figure>
                        </li>
                        <li class="p-home-loop__item">
                            <figure>
                                <picture>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/loop_img03.jpg"
                                        width="140" height="140" loading="lazy" alt="" />
                                </picture>
                            </figure>
                        </li>
                        <li class="p-home-loop__item">
                            <figure>
                                <picture>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/loop_img04.jpg"
                                        width="140" height="140" loading="lazy" alt="" />
                                </picture>
                            </figure>
                        </li>
                        <li class="p-home-loop__item">
                            <figure>
                                <picture>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/loop_img05.jpg"
                                        width="140" height="140" loading="lazy" alt="" />
                                </picture>
                            </figure>
                        </li>
                    </ul>
                    <!-- グループ１ -->
                    <!-- グループ2 -->
                    <ul class="p-home-loop__itemWrap">
                        <li class="p-home-loop__item">
                            <figure>
                                <picture>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/loop_img01.jpg"
                                        width="140" height="140" loading="lazy" alt="" />
                                </picture>
                            </figure>
                        </li>
                        <li class="p-home-loop__item">
                            <figure>
                                <picture>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/loop_img02.jpg"
                                        width="140" height="140" loading="lazy" alt="" />
                                </picture>
                            </figure>
                        </li>
                        <li class="p-home-loop__item">
                            <figure>
                                <picture>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/loop_img03.jpg"
                                        width="140" height="140" loading="lazy" alt="" />
                                </picture>
                            </figure>
                        </li>
                        <li class="p-home-loop__item">
                            <figure>
                                <picture>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/loop_img04.jpg"
                                        width="140" height="140" loading="lazy" alt="" />
                                </picture>
                            </figure>
                        </li>
                        <li class="p-home-loop__item">
                            <figure>
                                <picture>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/loop_img05.jpg"
                                        width="140" height="140" loading="lazy" alt="" />
                                </picture>
                            </figure>
                        </li>
                    </ul>
                    <!-- グループ2 -->
                </div>
            </section>
            <!-- /p-home-loop -->
            <!-- p-home-works -->
            <section class="p-home-works l-section">
                <div class="p-home-works__inner">
                    <div class="p-home-works__title">
                        <h2 class="l-section__title js-title inview">
                            <span class="l-section__titleTextWrap">
                                <span class="l-section__titleText">W</span>
                                <span class="l-section__titleText">o</span>
                                <span class="l-section__titleText">r</span>
                                <span class="l-section__titleText">k</span>
                                <span class="l-section__titleText">s</span>
                            </span>
                            <span class="-jp">施工実績</span>
                        </h2>
                    </div>
                    <div class="p-loop-textWrap">
                        <div class="p-loop-text">
                            <span>OUR</span>
                            <span>WORKS</span>
                        </div>
                    </div>
                    <div id="js-slider-works" class="p-home-works__slideContainer splide">
                        <div class="p-home-works__slideContainerInner  p-home-works__sliderTrack splide__track">
                            <ul class="p-home-works__slideList splide__list">
                                <?php
                                $args = array(
                                    'post_type' => 'works', // 投稿タイプを指定
                                    'posts_per_page' => 6, // 表示する記事数
                                );
                                $news_query = new WP_Query($args);
                                if ($news_query->have_posts()) :
                                    while ($news_query->have_posts()) :
                                        $news_query->the_post();
                                ?>
                                <!-- ここにhtml -->
                                <li class="p-home-works__slideItem splide__slide">
                                    <a href="<?php the_permalink(); ?>" class="p-home-works__slideLink">
                                        <div class="p-home-works__itemBlock">
                                            <figure>
                                                <?php if (has_post_thumbnail()) :
                                                            the_post_thumbnail('large'); ?>
                                                <?php else : ?>
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/no-image.png"
                                                    alt="アイキャッチ画像がありません" />
                                                <?php endif; ?>
                                                <span class="p-home-works__itemTag
                                                <?php $terms = wp_get_object_terms($post->ID, 'construction');
                                                foreach ($terms as $term) {
                                                    echo '-' . $term->slug . ' ';
                                                }
                                                ?>">
                                                    <?php
                                                            $terms = wp_get_object_terms($post->ID, 'construction');
                                                            foreach ($terms as $term) {
                                                                echo  $term->name;
                                                            }
                                                            ?>
                                                </span>
                                            </figure>
                                            <div class="p-home-works__info">
                                                <h3 class="p-home-works__subTitle"><?php the_title(); ?></h3>
                                                <time><?php the_time('Y.m.d') ?></time>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <?php endwhile;
                                endif;
                                wp_reset_postdata(); ?>
                            </ul>
                            <div class="c-link__wrap">
                                <a href="<?php echo esc_url(home_url('works')); ?>" class="c-link">
                                    View more
                                    <span class="circle">
                                        <span class="arrow"></span>
                                        <span class="arrow"></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /p-home-works -->
            <!-- p-home-news -->
            <section class="p-home-news l-section">
                <div class="p-home-news__inner">
                    <div class="p-home-news__title">
                        <h2 class="l-section__title js-title inview">
                            <span class="l-section__titleTextWrap">
                                <span class="l-section__titleText">N</span>
                                <span class="l-section__titleText">e</span>
                                <span class="l-section__titleText">w</span>
                                <span class="l-section__titleText">s</span>
                            </span>
                            <span class="-jp">新着情報</span>
                        </h2>
                    </div>
                    <ul class="p-home-news__list">
                        <?php
                        $args = array(
                            'post_type' => 'news', // 投稿タイプを指定
                            'posts_per_page' => 4, // 表示する記事数
                        );
                        $news_query = new WP_Query($args);
                        if ($news_query->have_posts()) :
                            while ($news_query->have_posts()) :
                                $news_query->the_post();
                        ?>
                        <!-- ここにhtml -->
                        <li class="p-home-news__item">
                            <div class="p-home-news__itemBlock">
                                <a href="<?php the_permalink(); ?>" class="p-home-news__itemLink">
                                    <figure>
                                        <?php if (has_post_thumbnail()) :
                                                    the_post_thumbnail('large'); ?>
                                        <?php else : ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/no-image.png"
                                            alt="アイキャッチ画像がありません" />
                                        <?php endif; ?>
                                    </figure>
                                    <div class="p-home-news__info">
                                        <div class="p-home-news__date">
                                            <time><?php the_time('Y.m.d') ?></time>
                                            <span class="p-home-news__tag"> <?php $terms = wp_get_object_terms($post->ID, 'news_category');
                                                    foreach ($terms as $term) {
                                                        echo  $term->name;
                                                    } ?>
                                            </span>
                                        </div>
                                        <h3 class="p-home-news__subTitle"><?php the_title(); ?></h3>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <?php endwhile;
                        endif;
                        wp_reset_postdata(); ?>
                    </ul>
                    <div class="c-link__wrap">
                        <a href="<?php echo esc_url(home_url('news')); ?>" class="c-link">
                            View more
                            <span class="circle">
                                <span class="arrow"></span>
                                <span class="arrow"></span>
                            </span>
                        </a>
                    </div>
                </div>
            </section>
            <!-- p-home-news -->
            <!-- p-home-recruit -->
            <section class="p-home-recruit l-section">
                <div class="p-home-recruit__inner">
                    <div class="p-loop-textWrap">
                        <div class="p-loop-text">
                            <span>GET</span>
                            <span>IN</span>
                            <span>TOUCH</span>
                        </div>
                    </div>
                    <figure class="js-parallax-img">
                        <picture>
                            <source
                                srcset="<?php echo get_template_directory_uri(); ?>/assets/images/home/recruit_img_pc.jpg"
                                media="(min-width: 769px)" type="image/jpg" />
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/recruit_img_sp.jpg"
                                width="390" height="245" loading="lazy" alt="" />
                        </picture>
                    </figure>
                    <div class="p-home-recruit__container">
                        <div class="p-home-recruit__title">
                            <h2 class="l-section__title js-title inview">
                                <span class="l-section__titleTextWrap">
                                    <span class="l-section__titleText">R</span>
                                    <span class="l-section__titleText">e</span>
                                    <span class="l-section__titleText">c</span>
                                    <span class="l-section__titleText">r</span>
                                    <span class="l-section__titleText">u</span>
                                    <span class="l-section__titleText">i</span>
                                    <span class="l-section__titleText">t</span>
                                </span>
                                <span class="-jp">採用情報</span>
                            </h2>
                        </div>
                        <div class="p-home-recruit__descWrapper">
                            <p class="p-home-recruit__descText">
                                藤原建設工業では、各職種にて新卒採用と中途採用を通年行っています。<br>
                                これまで「過去と未来を繋ぎ続ける」に共感していただける仲間たちと歩んできました。<br>
                                一緒に未来を築いていける方とお会いできるのを楽しみにしています。
                            </p>
                            <div class="c-link__wrap">
                                <a href="<?php echo esc_url(home_url('recruit')); ?>" class="c-link">
                                    View more
                                    <span class="circle">
                                        <span class="arrow"></span>
                                        <span class="arrow"></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- p-home-recruit -->
        </div>
</main>
<!-- /main -->
</div>

<!-- footer呼び出し -->
<?php get_footer(); ?>
<!-- TweenMax.min.js -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/TweenMax.min.js"></script>
<!-- sliderCursor.js -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/sliderCursor.js"></script>
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
<!-- swiper.min.js -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/swiper.min.js"></script>
<!-- splide.min.js -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/splide.min.js"></script>
<!-- top.bundle.js -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/top.bundle.js"></script>