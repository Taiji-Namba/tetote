<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head prefix="og: https://ogp.me/ns#">
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <meta property="og:url" content="https://the-connect-web.com/tetote/" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="採用特設サイト | 株式会社TETOTE" />
  <meta property="og:description" content="テクノロジーで社会課題を解決する。AIやビッグデータ分析などの技術を活用した社会課題解決サービスを提供するTETOTEの採用サイト。" />
  <meta property="og:site_name" content="採用特設サイト | 株式会社TETOTE" />
  <meta property="og:image" content="https://the-connect-web.com/tetote/img/ogp-image.jpg" />

  <meta property="twitter:card" content="summary_large_image" />
  <meta property="twitter:url" content="https://the-connect-web.com/tetote/" />
  <meta property="twitter:title" content="採用特設サイト | 株式会社TETOTE" />
  <meta property="twitter:description" content="テクノロジーで社会課題を解決する。AIやビッグデータ分析などの技術を活用した社会課題解決サービスを提供するTETOTEの採用サイト。" />
  <meta property="twitter:image" content="https://the-connect-web.com/tetote/img/ogp-image.jpg" />


  <meta name="robots" content="noindex" />
  <?php wp_head(); ?>
</head>

<body <?php if (is_front_page()) : ?> class="top-page" <?php else : ?> class="sub-page" <?php endif; ?>>
  <?php wp_body_open(); ?>
  <header <?php if (is_front_page()) : ?> class="header top-page-header" <?php else : ?> class="header sub-page-header" ; <?php endif; ?>>
    <div class="header__inner">
      <a href="<?php echo esc_url(home_url() . '/#'); ?>" class="logo header__logo">
        <img class="logo__img logo__img--black" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/logo-black.svg'); ?>" alt="「TETOTE」のロゴ">
        <?php if (is_front_page()) : ?>
          <img class="logo__img logo__img--white" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/logo-white.svg'); ?>" alt="「TETOTE」のロゴ">
        <?php else : ?>
        <?php endif; ?>
      </a>

      <nav class="gnav">
        <div class="gnav__inner">
          <ul class="gnav__list">
            <li class="gnav__item">
              <a href="<?php echo esc_url(home_url()) . '/details/'; ?>" class="gnav__anchor button button--black gnav__button">募集要項</a>
            </li>
            <li class="gnav__item">
              <a href="<?php echo esc_url(home_url()) . '/entry/'; ?>" class="gnav__anchor button button--gold gnav__button">ENTRY</a>
            </li>
            <li class="gnav__item">
              <button type="button" class="burger-button" id="burger-button" aria-controls="burger-nav" aria-expanded="false" aria-label="メニューを開く">
                <span class="burger-button__icon">
                  <span class="burger-button__line"></span>
                  <span class="burger-button__line"></span>
                  <span class="burger-button__line"></span>
                </span>
                <span class="burger-button__label" id="burger-button-label" aria-hidden="true">MENU</span>
              </button>

              <nav class="burger-menu" id="burger-nav">
                <ul class="burger-menu__inner">
                  <li class="burger-menu__logo-list">
                    <a class="burger-menu__anchor" href="<?php echo esc_url(home_url() . '/'); ?>"><img class="burger-menu__logo logo__img logo__img--black" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/logo-black.svg'); ?>" alt="「TETOTE」のロゴ"></a>
                  </li>
                  <li class="burger-menu__item-list">
                    <ul class="burger-menu__text-item-wrapper">
                      <li class="burger-menu__text-item">
                        <a class="burger-menu__anchor" href="<?php echo esc_url(home_url() . '/about-us/'); ?>">
                          <p class="burger-menu__title">ABOUT US</p>
                          <p class="burger-menu__sub-title">TETOTEについて</p>
                        </a>
                      </li>
                      <li class="burger-menu__text-item">
                        <a class="burger-menu__anchor" href="<?php echo esc_url(home_url() . '/staff/'); ?>">
                          <p class="burger-menu__title">STAFF</p>
                          <p class="burger-menu__sub-title">社員について</p>
                        </a>
                      </li>
                      <li class="burger-menu__text-item">
                        <a class="burger-menu__anchor" href="<?php echo esc_url(home_url() . '/staff/'); ?>">
                          <p class="burger-menu__title">BLOG</p>
                          <p class="burger-menu__sub-title">採用ブログ</p>
                        </a>
                      </li>
                      <li class="burger-menu__text-item">
                        <a class="burger-menu__anchor" href="<?php echo esc_url(home_url() . '/benefits/'); ?>">
                          <p class="burger-menu__title">BENEFITS</p>
                          <p class="burger-menu__sub-title">福利厚生について</p>
                        </a>
                      </li>
                      <li class="burger-menu__text-item">
                        <a class="burger-menu__anchor" href="<?php echo esc_url(home_url() . '/career/'); ?>">
                          <p class="burger-menu__title">CAREER</p>
                          <p class="burger-menu__sub-title">研修制度とキャリアパス</p>
                        </a>
                      </li>
                      <li class="burger-menu__text-item">
                        <a class="burger-menu__anchor" href="<?php echo esc_url(home_url() . '/faq/'); ?>">
                          <p class="burger-menu__title">FAQ</p>
                          <p class="burger-menu__sub-title">よくある質問</p>
                        </a>
                      </li>
                    </ul>
                    <ul class="burger-menu__button-item-wrapper">
                      <li class="burger-menu__button-item">
                        <a href="<?php echo esc_url(home_url()) . '/details/'; ?>" class="button button--black burger-menu__button">募集要項</a>
                      </li>
                      <li class="burger-menu__button-item">
                        <a class="button button--gold burger-menu__button" href="<?php echo esc_url(home_url() . '/entry/'); ?>">ENTRY</a>
                      </li>
                    </ul>
                  </li>

                  <div id="js-focus-trap" tabindex="0"></div>
              </nav>

            </li>
          </ul>
        </div>
      </nav>

    </div>
  </header>