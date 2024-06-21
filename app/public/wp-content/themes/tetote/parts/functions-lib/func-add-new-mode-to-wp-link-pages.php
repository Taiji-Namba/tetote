<?php
add_filter('wp_link_pages_args', 'wp_link_pages_args_prevnext_add');
/**  Add prev and next links to a numbered page link list
 */
function wp_link_pages_args_prevnext_add($args)
{
  global $page, $numpages, $more, $pagenow;

  if (!$args['next_or_number'] == 'next_and_number')
    return $args; # exit early

  $args['next_or_number'] = 'number'; # keep numbering for the main part
  if (!$more)
    return $args; # exit early

  // if ($page - 1) # 前ページがあるとき、前ページへ移動するリンクを表示
  //   $args['before'] .= '<span class="prev-page-link">' . _wp_link_page($page - 1)
  //     . $args['link_before'] . $args['previouspagelink'] . $args['link_after'] . '</a></span>';

  if ($page < $numpages) # 次ページがあるとき、次ページへ移動するリンクを表示
    $args['after'] = '<span class="next-page-link">' . _wp_link_page($page + 1)
      . $args['link_before'] . ' ' . $args['nextpagelink'] . $args['link_after'] . '</a></span>'
      . $args['after'];

  return $args;
}
