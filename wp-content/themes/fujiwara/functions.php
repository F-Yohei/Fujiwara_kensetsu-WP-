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
} elseif (is_page('news')) {
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
} elseif (is_page('works')) {
$classes[] = 'subpage';
} elseif (is_singular('works')) {
$classes[] = 'subpage';
$classes[] = 'js-body';
}
return $classes;
}
?>