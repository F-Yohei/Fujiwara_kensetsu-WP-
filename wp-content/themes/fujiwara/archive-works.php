<!-- header呼び出し -->
<?php get_header(); ?>
<?php
/*
Template Name: Works Category page
*/
?>
<!-- /header -->
<!-- main -->
<main id="top" class="l-main">
    <article class="l-section">
        <div id="js-top" class="p-hero">
            <h2 class="l-section__title js-title load">
                <span class="l-section__titleTextWrap"><span class="l-section__titleText">W</span><span
                        class="l-section__titleText">o</span><span class="l-section__titleText">r</span><span
                        class="l-section__titleText">k</span><span class="l-section__titleText">s</span><span
                        class="-jp">施工実績</span>
            </h2>
            <figure class="js-parallax-hero">
                <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/works/hero_img_pc.jpg"
                        media="(min-width: 769px)" type="image/jpg" />
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/works/hero_img_sp.jpg" alt="" />
                </picture>
            </figure>
        </div>
        <nav class="c-breadcrumbs" aria-label="breadcrumb">
            <div class="l-container">
                <ul class="c-breadcrumbs__list">
                    <li class="c-breadcrumbs__item">
                        <a href="<?php echo esc_url(home_url('')); ?>" class="c-breadcrumbs__link">TOP</a>
                    </li>
                    <li class="c-breadcrumbs__item">
                        <a href="<?php the_permalink(); ?>" class="c-breadcrumbs__link" aria-current="page">事業内容</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- sec-works-archive -->
        <section class="p-works-archive">
            <div class="l-container">
                <nav class="c-archive-nav">
                    <h2 class="c-archive-nav__title">Category</h2>
                    <ul class="c-archive-nav__list">
                        <li class="c-archive-nav__item">
                            <a href="<?php echo esc_url(home_url('works')); ?>"
                                class="c-archive-nav__link -current">全て</a>
                        </li>
                        <?php
                        $taxonomies = array(
                            'construction'
                        );
                        $args = array(
                            'order' => 'DESC'
                        );
                        $taxonomy_terms = get_terms($taxonomies, $args);
                        if (!empty($taxonomy_terms) && !is_wp_error($taxonomy_terms)) {

                            foreach ($taxonomy_terms as $taxonomy_term) :
                        ?>
                        <li class="c-archive-nav__item">
                            <a href="<?php echo get_term_link($taxonomy_term); ?>" class="c-archive-nav__link
                            <?php if ($taxonomy_term->slug === $term) {
                                    echo '-current';
                                } ?>">
                                <?php echo $taxonomy_term->name; ?>
                            </a>
                        </li>
                        <?php
                            endforeach;
                        }
                        ?>
                    </ul>
                </nav>
                <div class="p-works-archive__inner">
                    <ul class="p-works-archive__list">
                        <?php
                        $count = 1;
                        $args = [
                            'post_type' =>
                            array('works'),
                            'posts_per_page' => 15,
                            'paged' => get_query_var('paged'),
                        ];

                        $my_query = new WP_Query($args);
                        if ($my_query->have_posts()) :
                            while ($my_query->have_posts()) :
                                $my_query->the_post(); ?>
                        <!-- ここにhtml -->
                        <li class="p-works-archive__item">
                            <a href="<?php the_permalink(); ?>" class="p-works-archive__link">
                                <figure>
                                    <?php if (has_post_thumbnail()) :
                                                the_post_thumbnail('large'); ?>
                                    <?php else : ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/no-image.png"
                                        alt="アイキャッチ画像がありません" />
                                    <?php endif; ?>
                                    <span class="p-works-archive__tag
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
                                <div class="p-works-archive__info">
                                    <h2 class="p-works-archive__title"><?php the_title(); ?></h2>
                                    <time><?php the_time('Y.m.d') ?></time>
                                </div>
                            </a>
                        </li>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                    <div class="c-list-button__block">
                        <button type="button" class="c-list-button -eng">View More</button>
                    </div>
                    <!-- pagination -->
                    <?php
                    if (function_exists('pagination')) :
                        pagination($my_query->max_num_pages, $paged);
                    endif;
                    ?>
                    <?php wp_reset_postdata(); ?>
                </div>
            </div>
        </section>
        <!-- /sec-works-archive -->
    </article>
</main>
<!-- /main -->
<!-- footer呼び出し -->
<?php get_footer(); ?>