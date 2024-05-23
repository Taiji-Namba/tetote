    <div class="cta">
      <div class="cta__image"></div>
        <div class="cta__container">
          <p class="cta__text">わたしたちと一緒に働く仲間を募集中です。<br>少数精鋭のチームで、<br>あなたも会社も一緒に成長していきましょう。</p>
          <a class="button cta__button button--gold" href="<?php echo esc_url(home_url() . '/entry/'); ?>">ENTRY<img class="arrow cta__arrow" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/news-arrow.svg'); ?>" alt=""></a>
        </div>
      </div>
    </div>

    <footer class="footer">
      <div class="footer__inner">
        <div class="footer__main-menu">
          <a href="" class="footer__logo"><img class="logo__img logo__img--black" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/logo-black.svg'); ?>" alt="「TETOTE」のロゴ"></a>
          <ul class="footer__list">
            <li class="footer__item"><a href="<?php echo esc_url(home_url() . '/#'); ?>" class="footer__anchor">ホーム</a></li>
            <li class="footer__item"><a href="<?php echo esc_url(home_url() . '/about-us/'); ?>" class="footer__anchor">TETOTEについて</a></li>
            <li class="footer__item"><a href="<?php echo esc_url(home_url() . '/staff/'); ?>" class="footer__anchor">人を知る</a></li>
            <li class="footer__item"><a href="<?php echo esc_url(home_url() . '/career/'); ?>" class="footer__anchor">研修制度とキャリアパス</a></li>
            <li class="footer__item"><a href="<?php echo esc_url(home_url() . '/benefits/'); ?>" class="footer__anchor">福利厚生</a></li>
            <li class="footer__item"><a href="<?php echo esc_url(home_url() . '/blog/'); ?>" class="footer__anchor">採用ブログ</a></li>
            <li class="footer__item"><a href="<?php echo esc_url(home_url() . '/details/'); ?>" class="footer__anchor">募集要項</a></li>
            <li class="footer__item"><a href="<?php echo esc_url(home_url() . '/faq/'); ?>" class="footer__anchor">よくある質問</a></li>
            <li class="footer__item"><a href="<?php echo esc_url(home_url() . '/#company'); ?>" class="footer__anchor">会社概要</a></li>
          </ul>
        </div>
        <div class="footer__sub-menu"></div>
        <p class="footer__copy-right">© 2024 TETOTE All Right Reserved.</p>
        <ul class="sns-icons">
          <li class="sns-icons__item"><a href="" class="sns-icons__anchor"><img class="sns-icons__img" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/facebook.svg'); ?>" alt="Facebookのリンク"></a></li>
          <li class="sns-icons__item"><a href="" class="sns-icons__anchor"><img class="sns-icons__img" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/twitter.svg'); ?>" alt="Twitterのリンク"></a></li>
          <li class="sns-icons__item"><a href="" class="sns-icons__anchor"><img class="sns-icons__img" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/youtube.svg'); ?>" alt="YouTubeのリンク"></a></li>
        </ul>
      </div>
    </footer>

    <?php wp_footer(); ?>
  </body>
</html>