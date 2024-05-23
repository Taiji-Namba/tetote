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

  <link rel="apple-touch-icon" sizes="180x180" href="/tetote/icons/apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="/tetote/icons/favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="/tetote/icons/favicon-16x16.png" />
  <link rel="mask-icon" href="/tetote/icons/safari-pinned-tab.svg" color="#5bbad5" />
  <link rel="shortcut icon" href="/tetote/icons/favicon.ico" />
  <meta name="msapplication-TileColor" content="#da532c" />
  <meta name="msapplication-config" content="/icons/browserconfig.xml" />
  <meta name="theme-color" content="#ffffff" />

  <meta name="robots" content="noindex" />
  <?php wp_head(); ?>
</head>

<body
  <?php if (is_front_page()) : ?>
    class ="top-page" <?php else :?> class="sub-page"
  <?php endif; ?>
>
  <?php wp_body_open(); ?>
  <header 
  <?php if (is_front_page()) : ?>
    class="header top-page-header" <?php else :?> class="header sub-page-header";
  <?php endif; ?>>
    <div class="header__inner">
      <a href="#" class="logo header__logo">
        <img class="logo__img logo__img--black" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/logo-black.svg'); ?>" alt="「TETOTE」のロゴ">
        <?php if (is_front_page()) : ?>
          <img class="logo__img logo__img--white" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/logo-white.svg'); ?>" alt="「TETOTE」のロゴ">
          <?php else: ?>
          <?php endif; ?>
        </a>

      <nav class="gnav">
        <div class="gnav__inner">
          <ul class="gnav__list">
            <li class="gnav__item">
              <a href="./details/" class="gnav__anchor button button--black gnav__button">募集要項</a>
            </li>
            <li class="gnav__item">
              <a hrew="./entry/" class="gnav__anchor button button--gold gnav__button">ENTRY</a>
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
            </li>
          </ul>
        </div>
      </nav>

    </div>
  </header>