<?php
/*
Template Name: ENTRY
*/
?>

<?php get_header(); ?>

<?php get_template_part('parts/common/p-breadcrumb'); ?>

<main class="l-main l-main--top">
  <section class="p-contact">
    <div class="p-contact__wrapper">
      <div class="p-contact__inner">
        <div class="p-contact__title-group">
          <p class="p-contact__subtitle">ENTRY FORM</p>
          <div class="p-contact__title-and-lede">
            <h1 class="p-contact__title"><span class="u-letter-gold1">新卒・中途採用</span><br class="u-break--sp" />エントリーフォーム</h1>
            <p class="p-contact__lede">
              当社へ入社ご希望の方は、<br class="u-break--sp" />下記の送信フォームより<br class="u-break--xxs" />送信して下さい。<br>※は必須項目になります。
            </p>
          </div>
        </div>
        <div class="p-contact__border"></div>
        <?php the_content(); ?>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>