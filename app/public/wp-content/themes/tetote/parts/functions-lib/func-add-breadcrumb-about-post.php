<?php

/**
 * デフォルトの投稿のパンくずリストをarchive.phpやsingle.phpで表示
 */

function my_static_breadcrumb_adder($breadcrumb_trail)
{

  if (is_post_type_archive('post')) { // デフォルトの投稿一覧ページの場合

    $item = new bcn_breadcrumb('BLOG', null, array('post'));
    $stuck = array_pop($breadcrumb_trail->breadcrumbs); // HOME 一時退避
    $breadcrumb_trail->breadcrumbs[] = $item; // BLOG 追加
    $breadcrumb_trail->breadcrumbs[] = $stuck; // HOME 戻す
  } elseif (get_post_type() === 'post') { // デフォルトの投稿個別ページの場合

    $item = new bcn_breadcrumb('BLOG', null, array('post'), home_url('blog/'), null, true);
    $stuck = array_pop($breadcrumb_trail->breadcrumbs); // HOME 一時退避
    $breadcrumb_trail->breadcrumbs[] = $item; // BLOG 追加
    $breadcrumb_trail->breadcrumbs[] = $stuck; // HOME 戻す
  }
}
add_action('bcn_after_fill', 'my_static_breadcrumb_adder');
