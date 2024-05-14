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
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/no-image.png"
                                alt="アイキャッチ画像がありません" />
                            <?php
                            endif; ?>
                        </figure>
                        <div class="p-news-detail__entry">
                            <h2>新着情報です</h2>
                            <h3>新着情報です</h3>
                            <p>これまでの実績を築き上げてきた挑戦と経験を、未来のお客さまへ繋いでいくことをテーマにして日々のお仕事に励んでいます。</p>
                            <p>私たちはこれまでお客様の安全を第一に考えて参りました。<br />建築事業では、そんな「安全」が「人」に伝えられるよう技術力を日々高めています。<br />自慢の技術を是非ご覧ください。
                            </p>
                            <h3>新着情報です</h3>
                            <p>これまでの実績を築き上げてきた挑戦と経験を、未来のお客さまへ繋いでいくことをテーマにして日々のお仕事に励んでいます。</p>
                            <p>私たちはこれまでお客様の安全を第一に考えて参りました。<br />建築事業では、そんな「安全」が「人」に伝えられるよう技術力を日々高めています。<br />自慢の技術を是非ご覧ください。
                            </p>
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
                                        data-clipboard-text="<?php echo get_template_directory_uri(); ?>/"><span
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
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/no-image.png"
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