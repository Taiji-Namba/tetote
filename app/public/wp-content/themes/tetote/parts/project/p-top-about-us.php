<section class="c-section p-section p-top-about-us">
  <div class="p-top-about-us__inner">
    <?php get_template_part('parts/project/p-top-gallery-splide'); ?>
    <div class="p-top-about-us__text-wrapper">
      <p class="p-top-about-us__text">
        <?php
        // 「人手不足」が文字化けするのでUnicodeで記述
        $text = "\u300c\u4eba\u624b\u4e0d\u8db3\u300d<br>今の日本が抱えるこの社会課題に挑み、<br>企業と個人の可能性を最大限に引き出す。<br>それが私達の役目。";
        echo json_decode('"' . $text . '"');
        ?>
      </p>
      <p class="p-top-about-us__text">単につなぐだけじゃない。<br>「手と手」を取り合っていけるような、<br>持続可能な社会を、一緒に作りませんか？</p>
    </div>
    <a class="c-button p-button p-button__view-more p-top-about-us__button p-hover-action--slide" href="<?php echo esc_url(home_url() . '/about-us/'); ?>">VIEW MORE</a>
  </div>
</section>