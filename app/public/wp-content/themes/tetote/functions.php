<?php
  function my_setup(){
    add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
  }
  add_action('after_setup_theme', 'my_setup');