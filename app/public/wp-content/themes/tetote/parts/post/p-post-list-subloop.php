<?php $the_query = new WP_Query($args); ?>
<div class="p-post-list p-top-post__items">
  <div class="p-post-list__wrapper p-post-list__wrapper--mt61">
    <ul class="p-post-list__cards">
      <?php if ($the_query->have_posts()) : ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
          <?php get_template_part('parts/post/p-post-card'); ?>
        <?php endwhile; ?>
      <?php else : ?>
        <li class="p-post-list__not-found">該当の記事はありません。</li>
      <?php endif; ?>
    </ul>
  </div>
</div>
<?php wp_reset_postdata(); ?>