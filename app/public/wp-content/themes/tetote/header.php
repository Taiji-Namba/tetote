<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name=”format-detection” content=”email=no,telephone=no,address=no”>

  <?php wp_head(); ?>
</head>

<body <?php body_class(is_front_page() ? 'top-page' : 'sub-page'); ?>>
  <?php wp_body_open(); ?>
  <div id="page" class="l-site">
    <header class="c-header l-header p-header <?php echo is_front_page() ? 'p-header--top-page' : 'p-header--sub-page'; ?>">
      <div class="p-header__inner">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="p-logo p-header__logo">
          <?php if (is_front_page()) : ?>
            <h1 class="p-header--top-page__h1">TETOTE.co.ltd RECRUITING</h1>
          <?php else : ?>
            <img class="p-logo__img p-logo__img--black" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/common/logo-black.svg'); ?>" alt="「TETOTE」のロゴ">
          <?php endif; ?>
        </a>

        <nav class="c-gnav p-gnav">
          <div class="c-gnav__inner">
            <ul class="c-gnav__list">
              <li class="c-gnav__item p-gnav__item">
                <a href="<?php echo esc_url(home_url('/details/')); ?>" class="c-gnav__anchor c-button p-button p-button--black c-gnav__button p-gnav__button">募集要項</a>
              </li>
              <li class="c-gnav__item p-gnav__item">
                <a href="<?php echo esc_url(home_url('/entry/')); ?>" class="c-gnav__anchor c-button p-button p-button--gold c-gnav__button p-gnav__button">ENTRY</a>
              </li>
              <li class="c-gnav__item p-gnav__item">
                <button type="button" class="c-burger-button p-burger-button" id="burger-button" aria-controls="burger-nav" aria-expanded="false" aria-label="メニューを開く">
                  <span class="c-burger-button__icon p-burger-button__icon">
                    <span class="c-burger-button__line p-burger-button__line"></span>
                    <span class="c-burger-button__line p-burger-button__line"></span>
                    <span class="c-burger-button__line p-burger-button__line"></span>
                  </span>
                  <span class="c-burger-button__label p-burger-button__label" id="burger-button-label" aria-hidden="true">MENU</span>
                </button>
              </li>
            </ul>
          </div>
        </nav>
      </div>


      <nav class="c-burger-menu p-burger-menu" id="burger-nav">
        <ul class="p-burger-menu__inner">
          <li class="p-burger-menu__logo-list">
            <a class="p-burger-menu__anchor" href="<?php echo esc_url(home_url('/')); ?>"><img class="p-burger-menu__logo p-logo__img p-logo__img--black" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/common/logo-black.svg'); ?>" alt="「TETOTE」のロゴ"></a>
          </li>
          <li class="p-burger-menu__item-list">
            <ul class="p-burger-menu__text-item-wrapper">
              <li class="p-burger-menu__text-item">
                <a class="p-burger-menu__anchor" href="<?php echo esc_url(home_url('/about-us/')); ?>">
                  <p class="p-burger-menu__title">ABOUT US</p>
                  <p class="p-burger-menu__sub-title">TETOTEについて</p>
                </a>
              </li>
              <li class="p-burger-menu__text-item">
                <a class="p-burger-menu__anchor" href="<?php echo esc_url(home_url('/staff/')); ?>">
                  <p class="p-burger-menu__title">STAFF</p>
                  <p class="p-burger-menu__sub-title">社員について</p>
                </a>
              </li>
              <li class="p-burger-menu__text-item">
                <a class="p-burger-menu__anchor" href="<?php echo esc_url(home_url('/blog/')); ?>">
                  <p class="p-burger-menu__title">BLOG</p>
                  <p class="p-burger-menu__sub-title">採用ブログ</p>
                </a>
              </li>
              <li class="p-burger-menu__text-item">
                <a class="p-burger-menu__anchor" href="<?php echo esc_url(home_url('/benefits/')); ?>">
                  <p class="p-burger-menu__title">BENEFITS</p>
                  <p class="p-burger-menu__sub-title">福利厚生について</p>
                </a>
              </li>
              <li class="p-burger-menu__text-item">
                <a class="p-burger-menu__anchor" href="<?php echo esc_url(home_url('/career/')); ?>">
                  <p class="p-burger-menu__title">CAREER</p>
                  <p class="p-burger-menu__sub-title">研修制度とキャリアパス</p>
                </a>
              </li>
              <li class="p-burger-menu__text-item">
                <a class="p-burger-menu__anchor" href="<?php echo esc_url(home_url('/faq/')); ?>">
                  <p class="p-burger-menu__title">FAQ</p>
                  <p class="p-burger-menu__sub-title">よくある質問</p>
                </a>
              </li>
            </ul>
            <ul class="p-burger-menu__button-item-wrapper">
              <li class="p-burger-menu__button-item">
                <a href="<?php echo esc_url(home_url('/details/')); ?>" class="c-button p-button p-button--black c-burger-menu__button p-burger-menu__button">募集要項</a>
              </li>
              <li class="p-burger-menu__button-item">
                <a class="c-button p-button p-button--gold c-burger-menu__button p-burger-menu__button" href="<?php echo esc_url(home_url('/entry/')); ?>">ENTRY</a>
              </li>
            </ul>
          </li>

          <div id="js-focus-trap" tabindex="0"></div>
      </nav>
    </header>