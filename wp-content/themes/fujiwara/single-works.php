<!-- header呼び出し -->
<?php get_header(); ?>
<?php
/*
Template Name: Works Detail page
*/
?>
<!-- main -->
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
                            aria-current="page"><?php the_title(); ?></a>
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
                        <h1 class="p-works-detail__title">高等学校改修工事</h1>
                        <div class="p-works-detail__info">
                            <time><?php the_time('Y.m.d') ?></time>
                            <span class="p-works-detail__tag">
                                <?php $terms = wp_get_object_terms($post->ID, 'construction');
                                foreach ($terms as $term) {
                                    echo  $term->name;
                                }
                                ?>
                            </span>
                        </div>
                        <figure class="p-works-detail__eyecatch">
                            <?php if (has_post_thumbnail()) :
                                the_post_thumbnail('large'); ?>
                            <?php
                            else :
                            ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/no-image.png"
                                alt="アイキャッチ画像がありません" />
                            <?php
                            endif; ?>
                        </figure>
                        <div id="item01" class="p-works-detail__block js-block01">
                            <h2 class="p-works-detail__blockTitle">概要</h2>
                            <p class="l-section__text">
                                <?php echo CFS()->get('worksOutline'); ?>
                            </p>
                        </div>
                        <div id="item02" class="p-works-detail__block js-block02">
                            <h2 class="p-works-detail__blockTitle">ギャラリー</h2>
                            <ul class="p-works-detail__gallery">
                                <?php
                                $fields = CFS()->get('worksGallery');
                                foreach ($fields as $field) :
                                ?>
                                <li class="p-works-detail__galleryItem">
                                    <a href="<?php echo $field['worksGalleryImg']; ?>"
                                        class="p-works-detail__galleryLink glightbox" data-lightbox="myGallery">
                                        <figure><img src="<?php echo $field['worksGalleryImg']; ?>" alt="" /></figure>
                                    </a>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div id="item03" class="p-works-detail__block js-block03">
                            <h2 class="p-works-detail__blockTitle">工事内容</h2>
                            <dl class="l-section-list">
                                <?php
                                $fields = CFS()->get('Workscontents');
                                foreach ($fields as $field) :
                                ?>
                                <div class="l-section-list__row">
                                    <dt class="l-section-list__item"><?php echo $field['WorkscontentsName']; ?></dt>
                                    <dd class="l-section-list__desc"><?php echo $field['WorkscontentsDesc']; ?></dd>
                                </div>
                                <?php endforeach; ?>
                            </dl>
                        </div>
                    </div>
                </article>
                <div class="p-works-detail__otherLinkInner">
                    <ul class="p-works-detail__otherLinkList">
                        <li class="p-works-detail__otherLinkItem">
                            <a href="<?php echo get_template_directory_uri(); ?>/works/archi"
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
                            <a href="<?php echo get_template_directory_uri(); ?>/works/civil"
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
                            <a href="<?php echo get_template_directory_uri(); ?>/works/housing"
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
                    <a href="<?php echo get_template_directory_uri(); ?>/works" class="c-list-button">施工実績一覧へ</a>
                </div>
            </div>
        </section>
        <!-- /sec-works-detail -->
    </article>
</main>
<!-- /main -->
<!-- footer呼び出し -->
<?php get_footer(); ?>
<!-- TweenMax.min.js -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/TweenMax.min.js"></script>
<!-- worksCursor.js -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/worksCursor.js"></script>
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
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-3.6.0.min.js"></script>
<!-- glightbox.min.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/js/lightbox.min.js" type="text/javascript"></script>
</div>
</body>

</html>