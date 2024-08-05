<?php if (function_exists('bcn_display')) : ?>
  <div class="c-breadcrumb p-breadcrumb" typeof="BreadcrumbList" vocab="http://schema.org/">
    <div class="c-breadcrumb__inner p-breadcrumb__inner">
      <?php bcn_display(); ?>
    </div>
  </div>
<?php endif; ?>