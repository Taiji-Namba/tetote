<?php

/***************************
 * 投稿のタイトルが長い時に省略する。
 * 半角ベースの文字数
 **************************/
function omitPostTitle($post, $max_length)
{
  $title = $post->post_title;

  // 全角文字を2文字分とカウントする
  $char_count = 0;
  $truncated = false;
  for ($i = 0; $i < mb_strlen($title, 'UTF-8'); $i++) {
    $char = mb_substr($title, $i, 1, 'UTF-8');
    $char_count += (mb_strwidth($char, 'UTF-8') === 1) ? 1 : 2;
    if ($char_count > $max_length) {
      $truncated = true;
      break;
    }
  }

  $output = mb_substr($title, 0, $i, 'UTF-8');
  if ($truncated) {
    $output .= '...';
  }
  echo $output;
}
