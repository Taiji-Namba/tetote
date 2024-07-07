<?php get_header(); ?>

<?php
$args = ['class' => 'blog', 'title' => 'BLOG', 'subtitle' => '採用ブログ', 'text' => '採用情報やイベント情報などをご紹介します。'];
get_template_part('parts/common/p-eyecatch', null, $args); ?>

<?php get_template_part('parts/common/p-breadcrumb'); ?>

<?php get_template_part('parts/post/p-post-list-mainloop'); ?>

<?php get_footer(); ?>
