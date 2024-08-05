<?php

/**
 * カスタム投稿「staff」のアーカイブページにおける「staff」のパンくずリスト表示名をSTAFFに設定
 */
function my_bcn_breadcrumb_title($title, $this_type, $this_id)
{
  if (is_post_type_archive('staff')) {
    $title = 'STAFF';
  }
  return $title;
};
add_filter('bcn_breadcrumb_title', 'my_bcn_breadcrumb_title', 10, 3);
