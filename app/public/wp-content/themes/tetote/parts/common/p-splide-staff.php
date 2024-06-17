<!-- スライダーのコンテナを作成 -->
<div id="<?php echo esc_attr($args['post_type']); ?>" class="splide p-staff">
  <div class="splide__track">
    <ul class="splide__list">
      <?php get_template_part('parts/project/p-staff-card', null, $args); ?>
    </ul>
  </div>
</div>