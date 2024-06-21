<?php
$previous_post = get_previous_post();
$next_post = get_next_post();
?>

<nav class="p-post-nav">
  <ul class="p-post-nav__inner">
    <?php if ($previous_post) : ?>
      <li class="p-post-nav__previous">
        <?php
        $previous_post_date = get_the_date('Y.m.d', $previous_post);
        previous_post_link(
          '%link',
          '<img class="p-post-nav__img" src="' . get_template_directory_uri() .
            '/assets/images/common/arrow02-left.svg" alt="1つ古い投稿へ"/><div class="p-post-nav__info p-post-nav__info--mr"><p class="p-post-nav__title">%title</p><time class="p-post-nav__date" datetime="' . get_the_date('Y-m-d', $previous_post) . '">' . $previous_post_date . '</time></div>'
        );
        ?>
      </li>
    <?php endif; ?>
    <?php if ($next_post) : ?>
      <li class="p-post-nav__next">
        <?php
        $next_post_date = get_the_date('Y.m.d', $next_post);
        next_post_link(
          '%link',
          '<div class="p-post-nav__info p-post-nav__info--ml"><p class="p-post-nav__title">%title</p><time class="p-post-nav__date" datetime="' . get_the_date('Y-m-d', $next_post) . '">' . $next_post_date . '</time></div><img class="p-post-nav__img" src="' . get_template_directory_uri() . '/assets/images/common/arrow02-right.svg" alt="1つ新しい投稿へ"/>'
        );
        ?>
      </li>
    <?php endif; ?>
  </ul>
</nav>