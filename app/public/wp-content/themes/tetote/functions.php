<?php
  function my_setup(){
    add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
  }
  add_action('after_setup_theme', 'my_setup');

  /* CSSとJavaScriptの読み込み */
  function my_link_loading()
    {
      wp_enqueue_style( 'reset-css', 'https://unpkg.com/destyle.css@4.0.1/destyle.min.css');
      wp_enqueue_style( 'global-font', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&family=Viga&display=swap');
      wp_enqueue_style( 'style-css', get_template_directory_uri() . '/css/style.css', array('reset-css'));
      wp_enqueue_script( 'script-js', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), true );
      if(is_front_page()){
        wp_enqueue_style( 'front-page-font', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&family=Viga&display=swap', array('global-font'));
        wp_enqueue_style( 'front-page-css', get_template_directory_uri() . '/css/front-page.css', array('style-css'));
        wp_enqueue_script( 'front-page-js', get_template_directory_uri() . '/js/front-page.js', array( 'jquery' ), true );
      }
    }
  add_action('wp_enqueue_scripts', 'my_link_loading');