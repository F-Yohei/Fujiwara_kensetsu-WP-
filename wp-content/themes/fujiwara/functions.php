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
  CSS/JS
  ・css/javascriptファイルの読み込み
==============================================================*/
function add_files()
{

  /* WordPress提供のjquery.jsを読み込まない */
  wp_deregister_script('jquery');

  /* jQueryの読み込み */
  wp_enqueue_script(
    'jquery',
    '//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js',
    '',
    '',
    false
  );

  /* gsap.min.js */
  wp_enqueue_script(
    'gsap',
    get_stylesheet_directory_uri() . '/assets/js/gsap.min.js',
    ['jquery'],
    '1.0.0',
    true
  );

  /* ScrollTrigger.min.js */
  wp_enqueue_script(
    'scrollTrigger',
    get_stylesheet_directory_uri() . '/assets/js/ScrollTrigger.min.js',
    ['jquery'],
    '1.0.0',
    true
  );

  /* 共通のJSファイル */
  wp_enqueue_script(
    'main',
    get_stylesheet_directory_uri() . '/assets/js/common.bundle.js',
    ['jquery'],
    '1.0.0',
    true
  );

  /* IEでobject-fitプロパティを機能させる */
  wp_enqueue_script(
    'ofi',
    'https://cdnjs.cloudflare.com/ajax/libs/object-fit-images/3.2.4/ofi.min.js',
    ['jquery'],
    '1.0.0',
    true
  );

  /* IEでpictureタグを機能させる */
  wp_enqueue_script(
    'polyfill',
    'https://polyfill.io/v3/polyfill.min.js?features=HTMLPictureElement',
    ['jquery'],
    '1.0.0',
    true
  );

  /* トップページで読み込ませるJSファイル */
  if (is_home() || is_front_page()) {
    wp_enqueue_script(
      'swiper',
      get_stylesheet_directory_uri() . '/assets/js/swiper.min.js',
      ['jquery'],
      '1.0.0',
      true
    );
    wp_enqueue_script(
      'splide',
      get_stylesheet_directory_uri() . '/assets/js/splide.min.js',
      ['jquery'],
      '1.0.0',
      true
    );
    wp_enqueue_script(
      'home',
      get_stylesheet_directory_uri() . '/assets/js/top.bundle.js',
      ['jquery'],
      '1.0.0',
      true
    );
    /* News詳細ページで読み込むJSファイル */
  } elseif (is_singular('news')) {
    wp_enqueue_script(
      'clipboard',
      'https://cdn.jsdelivr.net/npm/clipboard@2/dist/clipboard.min.js',
      ['jquery'],
      '1.0.0',
      true
    );
    wp_enqueue_script(
      'news',
      get_stylesheet_directory_uri() . '/assets/js/news.bundle.js',
      ['jquery'],
      '1.0.0',
      true
    );
    /* Recruitページで読み込むJSファイル */
  } elseif (is_page('recruit')) {
    wp_enqueue_script(
      'recruit',
      get_stylesheet_directory_uri() . '/assets/js/recruit.bundle.js',
      ['jquery'],
      '1.0.0',
      true
    );
    /* Serviceページで読み込むJSファイル */
  } elseif (is_page('service')) {
    wp_enqueue_script(
      'service',
      get_stylesheet_directory_uri() . '/assets/js/service.bundle.js',
      ['jquery'],
      '1.0.0',
      true
    );
    /* Worksページで読み込むJSファイル */
  } elseif (is_archive('works')) {
    wp_enqueue_script(
      'works',
      get_stylesheet_directory_uri() . '/assets/js/works.bundle.js',
      ['jquery'],
      '1.0.0',
      true
    );
    /* Works詳細ページで読み込むJSファイル */
  } elseif (is_singular('works')) {
    wp_enqueue_script(
      'glightbox',
      get_stylesheet_directory_uri() . '/assets/js/glightbox.min.js',
      ['jquery'],
      '1.0.0',
      true
    );
    wp_enqueue_script(
      'works-detail',
      get_stylesheet_directory_uri() . '/assets/js/worksdetail.bundle.js',
      ['jquery'],
      '1.0.0',
      true
    );
  }

  /* 共通のCSSファイル */
  wp_enqueue_style(
    'home',
    get_template_directory_uri() . '/assets/css/style.css',
    [],
    '1.0.0',
    'all'
  );
}
add_action('wp_enqueue_scripts', 'add_files');
?>

<?php
/*==============================================================
  Theme URL
  ・テーマ直下のURLショートコード
  ・<?php echo do_shortcode('[theme_url]'); ?>
==============================================================*/
function my_theme_shortcode()
{
return esc_url(get_template_directory_uri());
}
add_shortcode('theme_url', 'my_theme_shortcode');
?>

<?php
/*==============================================================
通常投稿
・通常投稿タブの非表示
==============================================================*/
function remove_menus()
{
  global $menu;
  remove_menu_page('edit.php'); // 投稿を非表示
}
add_action('admin_menu', 'remove_menus');
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
function pagination($pages, $paged, $range = 3, $show_only = false)
{
  $pages = (int) $pages;
  $paged = $paged ?: 1;
  $text_before  = "‹";
  $text_next    = "›";
  if (1 !== $pages) {
    //２ページ以上の時
    echo '<div class="Pagination c-pagination">';
    echo '<div class="c-pagination__inner">';
    if ($paged > 1) {
      // 「‹」１ページ前へ戻るリンクを表示
      echo '<a href="', get_pagenum_link($paged - 1), '" class="c-pagination__arrow -prev">', '</a>';
    }
    for ($i = 1; $i <= $pages; $i++) {
      if ($i <= $paged + $range && $i >= $paged - $range) {
        if ($paged === $i) {
          echo '<span class="Pagination-Item isActive c-pagination__numbers -current">', $i, '</span>'; // 現在のページの数字
        } else {
          echo '<a href="', get_pagenum_link($i), '" class="c-pagination__numbers">', $i, '</a>';
        }
      }
    }
    if ($paged < $pages) {
      // 「›」１ページ後へ進むリンクを表示
      echo '<a href="', get_pagenum_link($paged + 1), '" class="c-pagination__arrow -next">', '</a>';
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
function my_archives_link($link_html)
{
  $link_html = preg_replace('@<li>@i', '<li class="p-news-archive__navItem">', $link_html);
  return $link_html;
}
add_filter('get_archives_link', 'my_archives_link');
?>


<?php
/*==============================================================
MW WP Formのbrタグとpタグの自動入力を削除
==============================================================*/
function mvwpform_autop_filter()
{
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
カスタム投稿タイプのパーマリンクをIDに
・新着情報
==============================================================*/
add_filter('post_type_link', 'news_post_link', 1, 2);
function news_post_link($link, $post)
{
  if ($post->post_type === 'news') {
    // カスタム投稿名が"news"の投稿のパーマリンクを「/news/投稿ID/」の形に書き換え
    return home_url('/news/' . $post->ID);
  } else {
    return $link;
  }
}

//書き換えたパーマリンクに対応したリライトルールを追加
add_filter('rewrite_rules_array', 'news_post_link_rewrite');
function news_post_link_rewrite($rules)
{
  $rewrite_rules = array(
    'news/([0-9]+)/?$' => 'index.php?post_type=news&p=$matches[1]',
  );
  return $rewrite_rules + $rules;
}
?>

<?php
/*==============================================================
カスタム投稿タイプのパーマリンクをIDに
・施工実績
==============================================================*/
add_filter('post_type_link', 'works_post_link', 1, 2);
function works_post_link($link, $post)
{
  if ($post->post_type === 'works') {
    // カスタム投稿名が"works"の投稿のパーマリンクを「/works/投稿ID/」の形に書き換え
    return home_url('/works/' . $post->ID);
  } else {
    return $link;
  }
}

//書き換えたパーマリンクに対応したリライトルールを追加
add_filter('rewrite_rules_array', 'works_post_link_rewrite');
function works_post_link_rewrite($rules)
{
  $rewrite_rules = array(
    'works/([0-9]+)/?$' => 'index.php?post_type=works&p=$matches[1]',
  );
  return $rewrite_rules + $rules;
}
?>


<?php
/*==============================================================
MW WP FORM validation
・お問い合わせフォームのエラー文カスタム
==============================================================*/
function validation_rule($validation, $data, $Data)
{
  $validation->set_rule('company', 'noempty', array('message' => '必須項目です'));
  $validation->set_rule('name', 'noempty', array('message' => '必須項目です'));
  $validation->set_rule('subname', 'noempty', array('message' => '必須項目です'));
  $validation->set_rule('subname', 'subname', array('message' => 'カタカナで入力してください'));
  $validation->set_rule('mail', 'noempty', array('message' => '必須項目です'));
  $validation->set_rule('mail', 'mail', array('message' => '正しい形式で入力してください'));
  $validation->set_rule('postcode', 'noempty', array('message' => '必須項目です'));
  $validation->set_rule('region', 'noempty', array('message' => '必須項目です'));
  $validation->set_rule('address', 'noempty', array('message' => '必須項目です'));
  $validation->set_rule('streetaddress', 'noempty', array('message' => '必須項目です'));
  $validation->set_rule('radio', 'radio', array('message' => '選択してください'));
  $validation->set_rule('textarea', 'noempty', array('message' => '必須項目です'));
  $validation->set_rule('privacy-check', 'privacy-check', array('message' => 'チェックを入れてください'));
  return $Validation;
}
add_filter('mwform_validation_mw-wp-form-91', 'validation_rule', 10, 3);
?>

<?php
/*==============================================================
MW WP FORM validation
・エントリーフォームのエラー文カスタム
==============================================================*/
function entry_validation_rule($validation, $data, $Data)
{
  $validation->set_rule('name', 'noempty', array('message' => '必須項目です'));
  $validation->set_rule('subname', 'noempty', array('message' => '必須項目です'));
  $validation->set_rule('subname', 'subname', array('message' => 'カタカナで入力してください'));
  $validation->set_rule('mail', 'noempty', array('message' => '必須項目です'));
  $validation->set_rule('mail', 'mail', array('message' => '正しい形式で入力してください'));
  $validation->set_rule('postcode', 'noempty', array('message' => '必須項目です'));
  $validation->set_rule('region', 'noempty', array('message' => '必須項目です'));
  $validation->set_rule('address', 'noempty', array('message' => '必須項目です'));
  $validation->set_rule('streetaddress', 'noempty', array('message' => '必須項目です'));
  $validation->set_rule('file', 'noempty', array('message' => 'ファイルが添付されていません'));
  $validation->set_rule('textarea', 'noempty', array('message' => '必須項目です'));
  return $Validation;
}
add_filter('mwform_validation_mw-wp-form-185', 'entry_validation_rule', 10, 3);
?>

<?php
/*==============================================================
ajaxzip3の設定
・【MW WP Form】郵便番号を入力して即座に住所が反映
==============================================================*/
function enq_ajaxzip3()
{
  wp_enqueue_script('ajaxzip3-script', 'https://ajaxzip3.github.io/ajaxzip3.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'enq_ajaxzip3');
?>


<?php
/*==============================================================
インラインscriptの設置
・Companyページ
==============================================================*/
function add_enqueue_scripts()
{
  // WordPressのバージョン
  global $wp_version;
  // JavaScriptファイルを読み込む
  wp_enqueue_script('lazyload', get_theme_file_uri(''), array('jquery'), $wp_version, true);
  // インラインで記述したいJavaScript
  if (is_page('contact')) {
    $js_str =
      "
jQuery(function($) {
$('.zip-button').keyup(function() {
AjaxZip3.zip2addr('postcode', '', 'region', 'streetaddress', 'address');
});
});
";
  } elseif (is_page('entry')) {
    $js_str =
      "
jQuery(function($) {
$('.zip-button').keyup(function() {
AjaxZip3.zip2addr('postcode', '', 'region', 'streetaddress', 'address');
});
});
";
  }

  // ハンドル 'lazyload' の 後（ 'after'で指定 ） に $js_str で定義したインラインコードを読み込む
  wp_add_inline_script("lazyload", $js_str, 'after');
}

add_action('wp_enqueue_scripts', 'add_enqueue_scripts');

?>