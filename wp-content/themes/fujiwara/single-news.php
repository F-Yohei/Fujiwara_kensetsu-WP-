<!-- header呼び出し -->
<?php get_header(); ?>
<?php
/*
Template Name: News Detail page
*/
?>
<!-- main -->
<main id="top" class="l-main">
    <article>
        <div id="js-top" class="p-hero -noimg">
            <h2 class="l-section__title js-title load">
                <span class="l-section__titleTextWrap"><span class="l-section__titleText">N</span><span
                        class="l-section__titleText">e</span><span class="l-section__titleText">w</span><span
                        class="l-section__titleText">s</span></span><span class="-jp">新着情報</span>
            </h2>
        </div>
        <nav class="c-breadcrumbs" aria-label="breadcrumb">
            <div class="l-container">
                <ol class="c-breadcrumbs__list">
                    <li class="c-breadcrumbs__item">
                        <a href="<?php echo esc_url(home_url('')); ?>" class="c-breadcrumbs__link">TOP</a>
                    </li>
                    <li class="c-breadcrumbs__item">
                        <a href="<?php echo esc_url(home_url('news')); ?>" class="c-breadcrumbs__link">新着情報</a>
                    </li>
                    <li class="c-breadcrumbs__item">
                        <a href="<?php the_permalink(); ?>" class="c-breadcrumbs__link"
                            aria-current="page"><?php the_title(); ?></a>
                    </li>
                </ol>
            </div>
        </nav>
        <!-- sec-news-detail -->
        <section class="p-news-detail">
            <div class="l-container">
                <article class="p-news-detail__article">
                    <div class="p-news-detail__content">
                        <h1 class="p-news-detail__title">ホームページをリニューアルしました。</h1>
                        <div class="p-news-detail__info">
                            <time><?php the_time('Y.m.d') ?></time>
                            <span class="p-news-detail__tag">
                                <?php $terms = wp_get_object_terms($post->ID, 'news_category');
                                foreach ($terms as $term) {
                                    echo  $term->name;
                                }
                                ?>
                            </span>
                        </div>
                        <figure class="p-news-detail__eyecatch">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/news/eyecatch_img.jpg"
                                alt="" />
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
                        <div class="p-news-detail__entry">
                            <h2><?php echo CFS()->get('title'); ?></h2>
                            <?php
                            $fields = CFS()->get('content');
                            foreach ($fields as $field) :
                            ?>
                            <div>
                                <h3><?php echo $field['subTitle']; ?></h3>
                                <p><?php echo $field['detail']; ?></p>
                                <?php endforeach; ?>
                                <ul class="p-news-detail__socialList">
                                    <li class="p-news-detail__socialItem">
                                        <a href="https://twitter.com/share?url="
                                            class="p-news-detail__socialLink -twitter" target="_blank"
                                            rel="noreferrer noopener">
                                            <span class="icon"></span>
                                        </a>
                                    </li>
                                    <li class="p-news-detail__socialItem">
                                        <a href="http://www.facebook.com/share.php?u="
                                            class="p-news-detail__socialLink -facebook" target="_blank"
                                            rel="noreferrer noopener">
                                            <span class="icon"></span>
                                        </a>
                                    </li>
                                    <li class="p-news-detail__socialItem">
                                        <a title="クリップボードにURLをコピー" class="share-url p-news-detail__socialLink -copy"
                                            href="javascript:void(0);" data-clipboard-text="<?php the_permalink(); ?>">
                                            <span class="icon"></span>
                                        </a>
                                        <span class="url-copied">
                                            <span>URLをコピーしました！</span>
                                        </span>
                                    </li>
                                </ul>
                                <div class="c-list-button__block">
                                    <a href="<?php echo esc_url(home_url('news')); ?>" class="c-list-button -eng">Back
                                        to List</a>
                                </div>
                            </div>
                        </div>
                        <div class="p-news-detail__related">
                            <h2 class="p-news-detail__relatedTitle">Related News</h2>
                            <ul class="p-news-archive__list">
                                <?php
                                $args = array(
                                    'post_type' => 'news', // 投稿タイプを指定
                                    'posts_per_page' => 3, // 表示する記事数
                                );
                                $news_query = new WP_Query($args);
                                if ($news_query->have_posts()) :
                                    while ($news_query->have_posts()) :
                                        $news_query->the_post();
                                ?>
                                <!-- ここにhtml -->
                                <li class="p-news-archive__item">
                                    <a href="<?php echo get_template_directory_uri(); ?>/news/detail"
                                        class="p-news-archive__link">
                                        <figure>
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
                                        <div class="p-news-archive__desc">
                                            <div class="p-news-archive__info">
                                                <time>2022.02.24</time>
                                                <span class="p-news-archive__tag">
                                                    <?php $terms = wp_get_object_terms($post->ID, 'news_category');
                                                        foreach ($terms as $term) {
                                                            echo  $term->name;
                                                        }
                                                        ?>
                                                </span>
                                            </div>
                                            <h2 class="p-news-archive__title"><?php the_title(); ?></h2>
                                        </div>
                                    </a>
                                </li>
                                <?php endwhile;
                                endif; wp_reset_postdata(); ?>
                            </ul>
                        </div>
                </article>
            </div>
        </section>
        <!-- /sec-news-detail -->
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
<!-- clipboard.min.js -->
<script src="https://cdn.jsdelivr.net/npm/clipboard@2/dist/clipboard.min.js"></script>
<!-- news.bundle.js -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/news.bundle.js"></script>
</div>
</body>

</html>