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
} elseif (is_page('contact-confirm')) {
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
function pagination( $pages, $paged, $range = 2 ) {
  $pages = ( int ) $pages;
  $paged = $paged ?: 1;
  $text_before  = "‹";
  $text_next    = "›";
  if ( 1 !== $pages ) {
    //２ページ以上の時
    echo '<div class="Pagination">';
    if ( $paged > 1 ) {
      // 「‹」１ページ前へ戻るリンクを表示
      echo '<a href="', get_pagenum_link( $paged - 1 ) ,'" class="Pagination-Item">', $text_before ,'</a>';
    }
    for ( $i = 1; $i <= $pages; $i++ ) {
      if ( $i <= $paged + $range && $i >= $paged - $range ) {
        if ( $paged === $i ) {
          echo '<span class="Pagination-Item isActive">', $i ,'</span>'; // 現在のページの数字
        } else {
          echo '<a href="', get_pagenum_link( $i ) ,'" class="Pagination-Item">', $i ,'</a>';
        }
      }
    }
    if ( $paged < $pages ) {
      // 「›」１ページ後へ進むリンクを表示
      echo '<a href="', get_pagenum_link( $paged + 1 ) ,'" class="Pagination-Item">' ,$text_next ,'</a>';
    }
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