<?php

/***********************
 * サイドバーをウィジェットに登録
 ***********************/

function sidebar_widgets()
{
  register_sidebar(array(
    'name' => 'メインサイドバー',
    'description' => 'サイドバーウィジェット',
    'id' => 'sidebar',
    'before_widget' => '<div class="p-sidebar">', // ウィジェットを囲う開始タグ
    'after_widget' => '</div>', // ウィジェットを囲う閉じタグ
    'before_title' => '<h3>', // ウィジェットのタイトルを囲う開始タグ
    'after_title' => '</h3>' // ウィジェットのタイトルを囲う閉じタグ
  ));
}
add_action('widgets_init', 'sidebar_widgets');
