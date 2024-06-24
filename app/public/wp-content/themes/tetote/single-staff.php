<?php get_header(); ?>
<main>
  <article class="<?php post_class('p-article p-staff-article'); ?>">
    <?php while (have_posts()) : the_post(); ?>

      <?php get_template_part('parts/project/p-staff-fv'); ?>

      <?php get_template_part('parts/common/p-breadcrumb'); ?>

      <section class="p-article__contents p-staff-article__contents l-staff">
        <div class="p-staff-article__contents-inner">
          <div class="p-staff-article__main-contents">
            <?php the_content(); ?>
          </div>
          <div class="p-staff-article__index">
            <?php if (is_active_sidebar('sidebar')) : ?>
              <?php dynamic_sidebar('sidebar'); ?>
            <?php endif; ?>
          </div>
        </div>
      </section>
    <?php endwhile; ?>
  </article>
</main>
<?php get_footer(); ?>