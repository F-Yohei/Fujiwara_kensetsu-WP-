<?php
/*==============================================================
Add class name
・bodyタグにクラス名を追加
==============================================================*/
add_filter('body_class', 'my_class_names');
function my_class_names($classes)
{
if (is_front_page()) {
$classes[] = 'home';
$classes[] = 'js-body';
} elseif (is_page('404')) {
$classes[] = 'subpage';
} elseif (is_page('company')) {
$classes[] = 'subpage';
} elseif (is_page('contact')) {
$classes[] = 'subpage';
} elseif (is_page('confirm')) {
$classes[] = 'subpage';
$classes[] = 'confirm';
} elseif (is_page('contact-thx')) {
$classes[] = 'subpage';
} elseif (is_page('entry')) {
$classes[] = 'subpage';
} elseif (is_page('entry-confirm')) {
$classes[] = 'subpage';
$classes[] = 'confirm';
} elseif (is_page('entry-thx')) {
$classes[] = 'subpage';
} elseif (is_archive('news')) {
$classes[] = 'subpage';
$classes[] = 'news';
} elseif (is_singular('news')) {
$classes[] = 'subpage';
$classes[] = 'news';
} elseif (is_page('privacy')) {
$classes[] = 'subpage';
} elseif (is_page('recruit')) {
$classes[] = 'subpage';
$classes[] = 'recruit';
} elseif (is_page('service')) {
$classes[] = 'subpage';
$classes[] = 'service';
} elseif (is_404()) {
$classes[] = 'subpage';
$classes[] = '404';
} elseif (is_archive('works')) {
$classes[] = 'subpage';
} elseif (is_singular('works')) {
$classes[] = 'subpage';
$classes[] = 'js-body';
}
return $classes;
}
?>

<?php
/*==============================================================
ページネーション
==============================================================*/
/**
* ページネーション出力関数
* $paged : 現在のページ
* $pages : 全ページ数
* $range : 左右に何ページ表示するか
* $show_only : 1ページしかない時に表示するかどうか
*/
function pagination( $pages, $paged, $range = 3,$show_only = false ) {
  $pages = ( int ) $pages;
  $paged = $paged ?: 1;
  $text_before  = "‹";
  $text_next    = "›";
  if ( 1 !== $pages ) {
    //２ページ以上の時
    echo '<div class="Pagination c-pagination">';
    echo '<div class="c-pagination__inner">';
    if ( $paged > 1 ) {
      // 「‹」１ページ前へ戻るリンクを表示
      echo '<a href="', get_pagenum_link( $paged - 1 ) ,'" class="c-pagination__arrow -prev">','</a>';
    }
    for ( $i = 1; $i <= $pages; $i++ ) {
      if ( $i <= $paged + $range && $i >= $paged - $range ) {
        if ( $paged === $i ) {
          echo '<span class="Pagination-Item isActive c-pagination__numbers -current">', $i ,'</span>'; // 現在のページの数字
        } else {
          echo '<a href="', get_pagenum_link( $i ) ,'" class="c-pagination__numbers">', $i ,'</a>';
        }
      }
    }
    if ( $paged < $pages ) {
      // 「›」１ページ後へ進むリンクを表示
      echo '<a href="', get_pagenum_link( $paged + 1 ) ,'" class="c-pagination__arrow -next">' ,'</a>';
    }
    echo '</div>';
    echo '</div>';
  }
}
?>


<?php
/*==============================================================
archive-news.phpの月別アーカイブのliタグにクラス指定
==============================================================*/
function my_archives_link($link_html){
$link_html = preg_replace('@<li>@i', '<li class="p-news-archive__navItem">', $link_html);
return $link_html;
}
add_filter('get_archives_link', 'my_archives_link');
?>


<?php
/*==============================================================
MW WP Formのbrタグとpタグの自動入力を削除
==============================================================*/
function mvwpform_autop_filter() {
  if (class_exists('MW_WP_Form_Admin')) {
    $mw_wp_form_admin = new MW_WP_Form_Admin();
    $forms = $mw_wp_form_admin->get_forms();
    foreach ($forms as $form) {
      add_filter('mwform_content_wpautop_mw-wp-form-' . $form->ID, '__return_false');
    }
  }
}
mvwpform_autop_filter();
?>


<?php
/*==============================================================
カスタム投稿（News）のパーマリンクをpaegIDに変更
==============================================================*/
add_filter('post_type_link', 'custom_post_link', 1, 2);
function custom_post_link($link, $post) {
  if($post -> post_type === 'news') {
    // カスタム投稿名が"news"の投稿のパーマリンクを「/news/投稿ID/」の形に書き換え
    return home_url('/news/'.$post->ID);
  } else {
    return $link;
  }
}

//書き換えたパーマリンクに対応したリライトルールを追加
add_filter('rewrite_rules_array', 'custom_post_link_rewrite');
function custom_post_link_rewrite($rules) {
  $rewrite_rules = array(
    'news/([0-9]+)/?$' => 'index.php?post_type=news&p=$matches[1]',
  );
  return $rewrite_rules + $rules;
}
?>

<?php
/*==============================================================
カスタム投稿（News）のパーマリンクをpaegIDに変更
==============================================================*/
add_filter('post_type_link', 'custom_works_link', 1, 2);
function custom_works_link($link, $post) {
  if($post -> post_type === 'works') {
    // カスタム投稿名が"works"の投稿のパーマリンクを「/works/投稿ID/」の形に書き換え
    return home_url('/works/'.$post->ID);
  } else {
    return $link;
  }
}

//書き換えたパーマリンクに対応したリライトルールを追加
add_filter('rewrite_rules_array', 'custom_works_link_rewrite');
function custom_works_link_rewrite($rules) {
  $rewrite_rules = array(
    'works/([0-9]+)/?$' => 'index.php?post_type=works&p=$matches[1]',
  );
  return $rewrite_rules + $rules;
}
?>