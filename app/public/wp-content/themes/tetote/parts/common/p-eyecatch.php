<section class="p-eyecatch">
  <div class="p-eyecatch__inner p-eyecatch__inner--<?php if (is_page('about-us')) : ?>about-us<?php elseif (is_post_type_archive('staff')) : ?>staff<?php elseif (is_post_type_archive('post')) : ?>blog<?php elseif (is_page('benefits')) : ?>benefits<?php elseif (is_page('career')) : ?>career<?php elseif (is_page('details')) : ?>details<?php elseif (is_page('faq')) : ?>faq<?php endif; ?>">
    <div class="p-eyecatch__headings">
      <div class="p-eyecatch__heading">
        <h1 class="p-eyecatch__title">
          <?php if (is_page('about-us')) : ?>
            ABOUT US
          <?php elseif (is_post_type_archive('staff')) : ?>
            STAFF
          <?php elseif (is_post_type_archive('post')) : ?>
            BLOG
          <?php elseif (is_page('benefits')) : ?>
            BENEFITS
          <?php elseif (is_page('career')) : ?>
            CAREER
          <?php elseif (is_page('details')) : ?>
            DETAILS
          <?php elseif (is_page('faq')) : ?>
            FAQ
          <?php endif; ?>
        </h1>
      </div>
      <div class="p-eyecatch__heading">
        <h2 class="p-eyecatch__subtitle">
          <?php if (is_page('about-us')) : ?>
            TETOTEについて
          <?php elseif (is_post_type_archive('staff')) : ?>
            社員について
          <?php elseif (is_post_type_archive('post')) : ?>
            採用ブログ
          <?php elseif (is_page('benefits')) : ?>
            福利厚生について
          <?php elseif (is_page('career')) : ?>
            研修制度とキャリアパス
          <?php elseif (is_page('details')) : ?>
            募集要項
          <?php elseif (is_page('faq')) : ?>
            よくある質問
          <?php endif; ?>
        </h2>
      </div>
      <div class="p-eyecatch__heading">
        <h3 class="p-eyecatch__text">
          <?php if (is_page('about-us')) : ?>
            私たちの理念を紹介をします。
          <?php elseif (is_post_type_archive('staff')) : ?>
            弊社社員のリアルな声を紹介しています。
          <?php elseif (is_post_type_archive('post')) : ?>
            採用情報やイベント情報などをご紹介します。
          <?php elseif (is_page('benefits')) : ?>
            充実した福利厚生制度を設けています。
          <?php elseif (is_page('career')) : ?>
            キャリアパスを支える充実した、研修制度
          <?php elseif (is_page('details')) : ?>
            TETOTEは幅広く仲間を募集しています。
          <?php elseif (is_page('faq')) : ?>
            皆様からよく頂くご質問にお答えします。
          <?php endif; ?>
        </h3>
      </div>
    </div>
  </div>
</section>