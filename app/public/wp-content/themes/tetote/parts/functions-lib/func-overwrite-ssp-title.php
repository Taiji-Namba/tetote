<?php

/**
 * SEO Simple Packページタイトル上書き
 */

function overwrite_ssp_title($ssp_title)
{
  $my_site_title = get_bloginfo('name');
  if (is_post_type_archive('post')) {
    return "BLOG｜" . $my_site_title;
  } else if (is_post_type_archive('staff')) {
    return "STAFF｜" . $my_site_title;
  }
  return $ssp_title;
}
add_filter('ssp_output_title', 'overwrite_ssp_title');
