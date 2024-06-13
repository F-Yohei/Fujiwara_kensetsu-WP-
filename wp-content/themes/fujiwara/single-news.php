<!-- header呼び出し -->
<?php get_header(); ?>
<?php
/*
Template Name: News detail page
*/
?>
<!-- main -->
<!-- /header -->
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
                            aria-current="page"><?php the_title() ?></a>
                    </li>
                </ol>
            </div>
        </nav>
        <!-- sec-news-detail -->
        <section class="p-news-detail">
            <div class="l-container">
                <article class="p-news-detail__article">
                    <div class="p-news-detail__content">
                        <h1 class="p-news-detail__title"><?php the_title() ?></h1>
                        <div class="p-news-detail__info">
                            <time><?php the_time('Y.m.d') ?></time>
                            <span class="p-news-detail__tag">
                                <?php
                                $terms = wp_get_object_terms($post->ID, 'news_category');
                                foreach ($terms as $term) {
                                    echo  $term->name;
                                }
                                ?>
                            </span>
                        </div>
                        <figure class="p-news-detail__eyecatch">
                            <?php if (has_post_thumbnail()) :
                                the_post_thumbnail('large'); ?>
                            <?php
                            else :
                            ?>
                            <img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/images/common/no-image.png"
                                alt="アイキャッチ画像がありません" />
                            <?php
                            endif; ?>
                        </figure>
                        <div class="p-news-detail__entry">
                            <h2><?php echo CFS()->get('title'); ?></h2>
                            <?php
                            $fields = $cfs->get('content');
                            foreach ($fields as $field) :
                            ?>
                            <h3><?php echo $field['subTitle']; ?></h3>
                            <p><?php echo $field['detail']; ?></p>
                            <?php endforeach; ?>
                            <ul class="p-news-detail__socialList">
                                <li class="p-news-detail__socialItem">
                                    <a href="https://twitter.com/share?url=" class="p-news-detail__socialLink -twitter"
                                        target="_blank" rel="noreferrer noopener">
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
                                        href="javascript:void(0);"
                                        data-clipboard-text="<?php the_title(); ?>｜藤原建設工業 <?php the_permalink(); ?>"><span
                                            class="icon"></span></a>
                                    <span class="url-copied">
                                        <span>URLをコピーしました！</span>
                                    </span>
                                </li>
                            </ul>
                            <div class="c-list-button__block">
                                <a href="<?php echo esc_url(home_url('news')); ?>" class="c-list-button -eng">Back to
                                    List</a>
                            </div>
                        </div>
                    </div>
                    <div class="p-news-detail__related">
                        <h2 class="p-news-detail__relatedTitle">Related News</h2>
                        <ul class="p-news-archive__list">
                            <?php
                            global $post;
                            $term = array_shift(get_the_terms($post->ID, 'news_category')); //←ここが追加
                            $args = array(
                                'numberposts' => 3, //８件表示(デフォルトは５件)
                                'post_type' => 'news', //カスタム投稿タイプ名
                                'taxonomy' => 'news_category', //タクソノミー名 ←ここが追加
                                'term' => $term->slug,
                                'orderby' => 'rand', //ランダム表示
                                'post__not_in' => array($post->ID) //表示中の記事を除外
                            );
                            ?>
                            <?php $myPosts = get_posts($args);
                            if ($myPosts) : ?>
                            <?php foreach ($myPosts as $post) : setup_postdata($post); ?>
                            <li class="p-news-archive__item">
                                <a href="<?php the_permalink(); ?>" class="p-news-archive__link">
                                    <figure>
                                        <?php if (has_post_thumbnail()) :
                                                    the_post_thumbnail('large'); ?>
                                        <?php
                                                else :
                                                ?>
                                        <img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/images/common/no-image.png"
                                            alt="アイキャッチ画像がありません" />
                                        <?php
                                                endif; ?>
                                    </figure>
                                    <div class="p-news-archive__desc">
                                        <div class="p-news-archive__info">
                                            <time><?php the_time('Y.m.d') ?></time>
                                            <span class="p-news-archive__tag">
                                                <?php
                                                        $terms = wp_get_object_terms($post->ID, 'news_category');
                                                        foreach ($terms as $term) {
                                                            echo  $term->name;
                                                        }
                                                        ?>
                                            </span>
                                        </div>
                                        <h2 class="p-news-archive__title"><?php the_title() ?></h2>
                                    </div>
                                </a>
                            </li>
                            <?php endforeach; ?>
                            <?php else : ?>
                            <?php endif;
                            wp_reset_postdata(); ?>

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