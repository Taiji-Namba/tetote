<?php

/**
 * func-enqueue-assets
 * CSSとJavaScriptの読み込み
 * スライダーを使用しない場合
 *
 * @codex https://wpdocs.osdn.jp/%E3%83%8A%E3%83%93%E3%82%B2%E3%83%BC%E3%82%B7%E3%83%A7%E3%83%B3%E3%83%A1%E3%83%8B%E3%83%A5%E3%83%BC
 */
function my_script_init()
{
  // フォントの設定
  wp_enqueue_style('NotoSansJP', '//fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap', array(), null);

  // WordPressがデフォルトで提供するjQueryは使用しない
  // wp_deregister_script('jquery');
  // wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.6.1.min.js', array(), '3.6.1');

  // 基本JavaScript
  wp_enqueue_script('my-script', get_template_directory_uri() . '/assets/js/script.js', array(), filemtime(get_theme_file_path('assets/js/script.js')), true);
  // リセットCSS
  wp_enqueue_style('reset-css', 'https://unpkg.com/destyle.css@4.0.1/destyle.min.css');
  // 基本CSS
  wp_enqueue_style('my-style', get_template_directory_uri() . '/assets/css/style.css', array(), filemtime(get_theme_file_path('assets/css/style.css')), 'all');

  // トップページのみ追加適用
  if (is_front_page()) {
    wp_enqueue_style('front-page-font', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&family=Viga&display=swap', array('global-font'));
    wp_enqueue_style('front-page-css', get_template_directory_uri() . '/assets/css/front-page.css', array('style-css'));
    wp_enqueue_script('front-page-js', get_template_directory_uri() . '/assets/js/front-page.js', array('jquery'), true);
  }
}
add_action('wp_enqueue_scripts', 'my_script_init');
