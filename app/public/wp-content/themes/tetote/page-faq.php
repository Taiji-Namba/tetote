<?php
/*
Template Name: FAQ
*/
?>

<?php get_header(); ?>

<?php get_template_part('parts/common/p-eyecatch'); ?>

<?php get_template_part('parts/common/p-breadcrumb'); ?>

<main class="c-main p-main p-page">
  <div class="c-main__inner p-main__inner l-page--common">
    <div class="p-page__scroll-buttons p-scroll-button">
      <ul class="p-scroll-button__list">
        <li class="p-scroll-button__item">
          <a href="<?php echo esc_url(home_url()) . '/details/#entry-and-selection'; ?>" class="c-button p-button p-scroll-button__anchor"><span class="p-scroll-button__anchor-text">応募・選考について<img class="p-scroll-button__img" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/common/arrow03.svg'); ?>" alt="ボタンの矢印"></span></a>
        </li>
        <li class="p-scroll-button__item">
          <a href="<?php echo esc_url(home_url()) . '/details/#career'; ?>" class="c-button p-button p-scroll-button__anchor"><span class="p-scroll-button__anchor-text">キャリアについて<img class="p-scroll-button__img" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/common/arrow03.svg'); ?>" alt="ボタンの矢印"></span></a>
        </li>
        <li class="p-scroll-button__item">
          <a href="<?php echo esc_url(home_url()) . '/details/#benefits'; ?>" class="c-button p-button p-scroll-button__anchor"><span class="p-scroll-button__anchor-text">福利厚生について<img class="p-scroll-button__img" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/common/arrow03.svg'); ?>" alt="ボタンの矢印"><span></a>
        </li>
      </ul>
    </div>
    <section class="p-page-contents" id="entry-and-selection">
      <div class="p-page-contents__wrapper--mt96">
        <h2 class="p-page-contents__category">応募・選考について</h2>
        <ul class="c-accordion p-accordion l-accordion">
          <li class="c-accordion__inner p-accordion__item">
            <h3 class="c-accordion__header p-accordion__header">
              <button class="c-accordion__trigger p-accordion__trigger" aria-expanded="false" aria-controls="accordion-panel-1">
                <span class="p-accordion__letter-q">Q</span><span class="p-accordion__title">応募資格はありますか？</span><span class="p-accordion__icon"></span>
              </button>
            </h3>
            <div id="accordion-panel-1" class="c-accordion__panel p-accordion__panel">
              <p class="c-accordion__panel-text p-accordion__panel-text">
                テキストが入ります。テキストが入ります。テキストが入ります。
            </div>
          </li>
          <li class="c-accordion__inner p-accordion__item">
            <h3 class="c-accordion__header p-accordion__header">
              <button class="c-accordion__trigger p-accordion__trigger" aria-expanded="false" aria-controls="accordion-panel-2">
                <span class="p-accordion__letter-q">Q</span><span class="p-accordion__title">応募方法は？</span><span class="p-accordion__icon"></span>
              </button>
            </h3>
            <div id="accordion-panel-2" class="c-accordion__panel p-accordion__panel">
              <p class="c-accordion__panel-text p-accordion__panel-text">
                弊社採用サイトからエントリーしてください。
              </p>
            </div>
          </li>
          <li class="c-accordion__inner p-accordion__item">
            <h3 class="c-accordion__header p-accordion__header">
              <button class="c-accordion__trigger p-accordion__trigger" aria-expanded="false" aria-controls="accordion-panel-3">
                <span class="p-accordion__letter-q">Q</span><span class="p-accordion__title">選考フローは？</span><span class="p-accordion__icon"></span>
              </button>
            </h3>
            <div id="accordion-panel-3" class="c-accordion__panel p-accordion__panel">
              <p class="c-accordion__panel-text p-accordion__panel-text">
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
              </p>
            </div>
          </li>
          <li class="c-accordion__inner p-accordion__item">
            <h3 class="c-accordion__header p-accordion__header">
              <button class="c-accordion__trigger p-accordion__trigger" aria-expanded="false" aria-controls="accordion-panel-4">
                <span class="p-accordion__letter-q">Q</span><span class="p-accordion__title">選考にかかる時間は？</span><span class="p-accordion__icon"></span>
              </button>
            </h3>
            <div id="accordion-panel-4" class="c-accordion__panel p-accordion__panel">
              <p class="c-accordion__panel-text p-accordion__panel-text">
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
              </p>
            </div>
          </li>
          <li class="c-accordion__inner p-accordion__item">
            <h3 class="c-accordion__header p-accordion__header">
              <button class="c-accordion__trigger p-accordion__trigger" aria-expanded="false" aria-controls="accordion-panel-5">
                <span class="p-accordion__letter-q">Q</span><span class="p-accordion__title">面接では何を聞かれますか？</span><span class="p-accordion__icon"></span>
              </button>
            </h3>
            <div id="accordion-panel-5" class="c-accordion__panel p-accordion__panel">
              <p class="c-accordion__panel-text p-accordion__panel-text">
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
              </p>
            </div>
          </li>
          <li class="c-accordion__inner p-accordion__item">
            <h3 class="c-accordion__header p-accordion__header">
              <button class="c-accordion__trigger p-accordion__trigger" aria-expanded="false" aria-controls="accordion-panel-6">
                <span class="p-accordion__letter-q">Q</span><span class="p-accordion__title">面接官はどんな人ですか？</span><span class="p-accordion__icon"></span>
              </button>
            </h3>
            <div id="accordion-panel-6" class="c-accordion__panel p-accordion__panel">
              <p class="c-accordion__panel-text p-accordion__panel-text">
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
              </p>
            </div>
          </li>
        </ul>
      </div>
    </section>
    <section class="p-page-contents" id="career">
      <div class="p-page-contents__wrapper--mt88">
        <h2 class="p-page-contents__category">キャリアについて</h2>
        <ul class="c-accordion p-accordion l-accordion">
          <li class="c-accordion__inner p-accordion__item">
            <h3 class="c-accordion__header p-accordion__header">
              <button class="c-accordion__trigger p-accordion__trigger" aria-expanded="false" aria-controls="accordion-panel-7">
                <span class="p-accordion__letter-q">Q</span><span class="p-accordion__title">自分の希望するキャリアパスに進むことはできますか？</span><span class="p-accordion__icon"></span>
              </button>
            </h3>
            <div id="accordion-panel-7" class="c-accordion__panel p-accordion__panel">
              <p class="c-accordion__panel-text p-accordion__panel-text">
                テキストが入ります。テキストが入ります。テキストが入ります。
            </div>
          </li>
          <li class="c-accordion__inner p-accordion__item">
            <h3 class="c-accordion__header p-accordion__header">
              <button class="c-accordion__trigger p-accordion__trigger" aria-expanded="false" aria-controls="accordion-panel-8">
                <span class="p-accordion__letter-q">Q</span><span class="p-accordion__title">転勤はありますか？</span><span class="p-accordion__icon"></span>
              </button>
            </h3>
            <div id="accordion-panel-8" class="c-accordion__panel p-accordion__panel">
              <p class="c-accordion__panel-text p-accordion__panel-text">
                業務の必要に応じて、転勤が発生する場合があります。
              </p>
            </div>
          </li>
          <li class="c-accordion__inner p-accordion__item">
            <h3 class="c-accordion__header p-accordion__header">
              <button class="c-accordion__trigger p-accordion__trigger" aria-expanded="false" aria-controls="accordion-panel-9">
                <span class="p-accordion__letter-q">Q</span><span class="p-accordion__title">転勤の希望は出せますか？</span><span class="p-accordion__icon"></span>
              </button>
            </h3>
            <div id="accordion-panel-9" class="c-accordion__panel p-accordion__panel">
              <p class="c-accordion__panel-text p-accordion__panel-text">
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
              </p>
            </div>
          </li>
          <li class="c-accordion__inner p-accordion__item">
            <h3 class="c-accordion__header p-accordion__header">
              <button class="c-accordion__trigger p-accordion__trigger" aria-expanded="false" aria-controls="accordion-panel-10">
                <span class="p-accordion__letter-q">Q</span><span class="p-accordion__title">ワークライフバランスは？</span><span class="p-accordion__icon"></span>
              </button>
            </h3>
            <div id="accordion-panel-10" class="c-accordion__panel p-accordion__panel">
              <p class="c-accordion__panel-text p-accordion__panel-text">
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
              </p>
            </div>
          </li>
          <li class="c-accordion__inner p-accordion__item">
            <h3 class="c-accordion__header p-accordion__header">
              <button class="c-accordion__trigger p-accordion__trigger" aria-expanded="false" aria-controls="accordion-panel-11">
                <span class="p-accordion__letter-q">Q</span><span class="p-accordion__title">具体的にはどのような制度がありますか？</span><span class="p-accordion__icon"></span>
              </button>
            </h3>
            <div id="accordion-panel-11" class="c-accordion__panel p-accordion__panel">
              <p class="c-accordion__panel-text p-accordion__panel-text">
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
              </p>
            </div>
          </li>
          <li class="c-accordion__inner p-accordion__item">
            <h3 class="c-accordion__header p-accordion__header">
              <button class="c-accordion__trigger p-accordion__trigger" aria-expanded="false" aria-controls="accordion-panel-12">
                <span class="p-accordion__letter-q">Q</span><span class="p-accordion__title">育児休暇制度はありますか？</span><span class="p-accordion__icon"></span>
              </button>
            </h3>
            <div id="accordion-panel-12" class="c-accordion__panel p-accordion__panel">
              <p class="c-accordion__panel-text p-accordion__panel-text">
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
              </p>
            </div>
          </li>
        </ul>
      </div>
    </section>
    <section class="p-page-contents" id="benefits">
      <div class="p-page-contents__wrapper--mt88">
        <h2 class="p-page-contents__category">福利厚生について</h2>
        <ul class="c-accordion p-accordion l-accordion">
          <li class="c-accordion__inner p-accordion__item">
            <h3 class="c-accordion__header p-accordion__header">
              <button class="c-accordion__trigger p-accordion__trigger" aria-expanded="false" aria-controls="accordion-panel-13">
                <span class="p-accordion__letter-q">Q</span><span class="p-accordion__title">どのような福利厚生制度がありますか？</span><span class="p-accordion__icon"></span>
              </button>
            </h3>
            <div id="accordion-panel-13" class="c-accordion__panel p-accordion__panel">
              <p class="c-accordion__panel-text p-accordion__panel-text">
                テキストが入ります。テキストが入ります。テキストが入ります。
            </div>
          </li>
          <li class="c-accordion__inner p-accordion__item">
            <h3 class="c-accordion__header p-accordion__header">
              <button class="c-accordion__trigger p-accordion__trigger" aria-expanded="false" aria-controls="accordion-panel-14">
                <span class="p-accordion__letter-q">Q</span><span class="p-accordion__title">財形貯蓄制度の内容は？</span><span class="p-accordion__icon"></span>
              </button>
            </h3>
            <div id="accordion-panel-14" class="c-accordion__panel p-accordion__panel">
              <p class="c-accordion__panel-text p-accordion__panel-text">
                財形貯蓄を支援する制度です。
              </p>
            </div>
          </li>
          <li class="c-accordion__inner p-accordion__item">
            <h3 class="c-accordion__header p-accordion__header">
              <button class="c-accordion__trigger p-accordion__trigger" aria-expanded="false" aria-controls="accordion-panel-15">
                <span class="p-accordion__letter-q">Q</span><span class="p-accordion__title">社内イベントの内容は？</span><span class="p-accordion__icon"></span>
              </button>
            </h3>
            <div id="accordion-panel-15" class="c-accordion__panel p-accordion__panel">
              <p class="c-accordion__panel-text p-accordion__panel-text">
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
              </p>
            </div>
          </li>
          <li class="c-accordion__inner p-accordion__item">
            <h3 class="c-accordion__header p-accordion__header">
              <button class="c-accordion__trigger p-accordion__trigger" aria-expanded="false" aria-controls="accordion-panel-16">
                <span class="p-accordion__letter-q">Q</span><span class="p-accordion__title">部活動について教えてください。</span><span class="p-accordion__icon"></span>
              </button>
            </h3>
            <div id="accordion-panel-16" class="c-accordion__panel p-accordion__panel">
              <p class="c-accordion__panel-text p-accordion__panel-text">
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
              </p>
            </div>
          </li>
          <li class="c-accordion__inner p-accordion__item">
            <h3 class="c-accordion__header p-accordion__header">
              <button class="c-accordion__trigger p-accordion__trigger" aria-expanded="false" aria-controls="accordion-panel-17">
                <span class="p-accordion__letter-q">Q</span><span class="p-accordion__title">資格取得支援制度はいくら補助が出ますか？</span><span class="p-accordion__icon"></span>
              </button>
            </h3>
            <div id="accordion-panel-17" class="c-accordion__panel p-accordion__panel">
              <p class="c-accordion__panel-text p-accordion__panel-text">
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
              </p>
            </div>
          </li>
          <li class="c-accordion__inner p-accordion__item">
            <h3 class="c-accordion__header p-accordion__header">
              <button class="c-accordion__trigger p-accordion__trigger" aria-expanded="false" aria-controls="accordion-panel-18">
                <span class="p-accordion__letter-q">Q</span><span class="p-accordion__title">年次有給休暇について教えてください</span><span class="p-accordion__icon"></span>
              </button>
            </h3>
            <div id="accordion-panel-18" class="c-accordion__panel p-accordion__panel">
              <p class="c-accordion__panel-text p-accordion__panel-text">
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
              </p>
            </div>
          </li>
        </ul>
      </div>
    </section>
  </div>
</main>

<?php get_footer(); ?>