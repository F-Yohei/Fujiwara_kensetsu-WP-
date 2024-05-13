<!-- header呼び出し -->
<?php get_header(); ?>
<?php
/*
Template Name: News Category page
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
                            <time>2022.02.24</time>
                            <span class="p-news-detail__tag">お知らせ</span>
                        </div>
                        <figure class="p-news-detail__eyecatch">
                            <img src="../../assets/images/news/eyecatch_img.jpg" alt="" />
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
                                        href="javascript:void(0);" data-clipboard-text="../../"><span
                                            class="icon"></span></a>
                                    <span class="url-copied">
                                        <span>URLをコピーしました！</span>
                                    </span>
                                </li>
                            </ul>
                            <div class="c-list-button__block">
                                <a href="../../news" class="c-list-button -eng">Back to List</a>
                            </div>
                        </div>
                    </div>
                    <div class="p-news-detail__related">
                        <h2 class="p-news-detail__relatedTitle">Related News</h2>
                        <ul class="p-news-archive__list">
                            <li class="p-news-archive__item">
                                <a href="../../news/detail" class="p-news-archive__link">
                                    <figure>
                                        <img src="../../assets/images/news/archive_img01.jpg" alt="" />
                                    </figure>
                                    <div class="p-news-archive__desc">
                                        <div class="p-news-archive__info">
                                            <time>2022.02.24</time>
                                            <span class="p-news-archive__tag">お知らせ</span>
                                        </div>
                                        <h2 class="p-news-archive__title">ホームページをリニューアルしました。</h2>
                                    </div>
                                </a>
                            </li>
                            <li class="p-news-archive__item">
                                <a href="../../news/detail" class="p-news-archive__link">
                                    <figure>
                                        <img src="../../assets/images/news/archive_img02.jpg" alt="" />
                                    </figure>
                                    <div class="p-news-archive__desc">
                                        <div class="p-news-archive__info">
                                            <time>2022.02.24</time>
                                            <span class="p-news-archive__tag">お知らせ</span>
                                        </div>
                                        <h2 class="p-news-archive__title">採用情報を更新しました。</h2>
                                    </div>
                                </a>
                            </li>
                            <li class="p-news-archive__item">
                                <a href="../../news/detail" class="p-news-archive__link">
                                    <figure>
                                        <img src="../../assets/images/news/archive_img03.jpg" alt="" />
                                    </figure>
                                    <div class="p-news-archive__desc">
                                        <div class="p-news-archive__info">
                                            <time>2022.02.24</time>
                                            <span class="p-news-archive__tag">ブログ</span>
                                        </div>
                                        <h2 class="p-news-archive__title">◯◯にて弊社代表のスピーチが実施されました。</h2>
                                    </div>
                                </a>
                            </li>
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