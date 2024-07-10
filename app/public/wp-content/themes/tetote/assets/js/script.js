"use strict";

document.addEventListener('DOMContentLoaded', function() {
  var library = sliderSettings.library;
  // Splideの読み込み
  if (library === "splide") {
    // Splideの読み込み
    if (document.querySelector('#mv_slider')) {
      new Splide('#mv_slider',
        {
          type: 'loop',   // slide,loop,fade から選択
          speed: 3000,    // スライダーの移動時間をミリ秒単位で指定
          autoplay: true, // 自動実行を有効にする true:有効、false:無効
          interval: 3000, // スライドが自動的に進むまでの時間をミリ秒単位で指定する
          rewind: true,    // true:スライダーの終わりまで行ったときに、先頭に巻き戻す(type:fadeの時使用)
          arrows: false,    // true:矢印ボタンを表示,false:非表示
          pagination:false, // ページネーションの有無 (デフォルトはtrue)
          updateOnMove: true, //is-activeクラスを移動前に更新するか否か
          perMove: 1,      // 1度の移動で、何枚のスライドを移動するかを指定
          focus: 'center', //これを指定すると中央にある画像にフォーカスされる
          fixedWidth : '50.6rem', // スライドの固定幅
          fixedHeight : '39.3rem', // スライドの固定幅
          gap: '3.4rem',     // 画像間の余白の設定
          breakpoints: {   // レスポンシブデザインのブレークポイントを指定（指定したpx以下の場合）
            1439: {
              fixedWidth : '35.1svw',
              fixedHeight : '27.3svw',
              gap: '2.4rem',     // 画像間の余白の設定
            },
            767: {
              fixedWidth : '72.3svw',
              fixedHeight : '56.1svw',
              gap: '1.6rem',     // 画像間の余白の設定
            }
          },
          pauseOnHover: false, // true:マウスがスライダーの上にある間は自動再生を一時停止します,false:停止しない
          pauseOnFocus: true,  // true:スライドにフォーカスしている間は自動再生を一時停止します,false:停止しない
        },
      ).mount();
    }
    if (document.querySelector('#gallery')) {
      new Splide('#gallery',
        {
          type: 'loop',   // slide,loop,fade から選択
          speed: 3000,    // スライダーの移動時間をミリ秒単位で指定
          autoplay: true, // 自動実行を有効にする
          interval: 3000, // スライドが自動的に進むまでの時間をミリ秒単位で指定する
          rewind: true,    // true:スライダーの終わりまで行ったときに、先頭に巻き戻す(type:fadeの時使用)
          arrows: true,    // true:矢印ボタンを表示
          perPage: 5,      // 1ページに何枚のスライドを表示するかを指定
          breakpoints: {   // レスポンシブデザインのブレークポイントを指定（指定したpx以下の場合）
            767: {
              perPage: 2,  // 1ページに何枚のスライドを表示するかを指定
            }
          },
          perMove: 1,      // 1度の移動で、何枚のスライドを移動するかを指定
          focus: 'center',//これを指定すると中央にある画像にフォーカスされる
          gap: '10px',     // 画像間の余白の設定
        }
      ).mount();
    }
    // event
    if (document.querySelector('#post')) {
      new Splide('#post',
        {
          type: 'loop',   // slide,loop,fade から選択
          speed: 3000,    // スライダーの移動時間をミリ秒単位で指定
          autoplay: true, // 自動実行を有効にする
          interval: 3000, // スライドが自動的に進むまでの時間をミリ秒単位で指定する
          rewind: true,    // true:スライダーの終わりまで行ったときに、先頭に巻き戻す(type:fadeの時使用)
          arrows: true,    // true:矢印ボタンを表示
          perPage: 3,      // 1ページに何枚のスライドを表示するかを指定
          breakpoints: {   // レスポンシブデザインのブレークポイントを指定（指定したpx以下の場合）
            767: {
              perPage: 2,  // 1ページに何枚のスライドを表示するかを指定
            }
          },
          perMove: 1,      // 1度の移動で、何枚のスライドを移動するかを指定
          focus: 'center',//これを指定すると中央にある画像にフォーカスされる
          gap: '10px',     // 画像間の余白の設定
        }
      ).mount();
    }
    // staff
    if (document.querySelector('#staff')) {
      new Splide('#staff',
        {
          type: 'slide',   // slide,loop,fade から選択
          speed: 3000,    // スライダーの移動時間をミリ秒単位で指定
          autoplay: false, // 自動実行を有効にする
          interval: 3000, // スライドが自動的に進むまでの時間をミリ秒単位で指定する
          rewind: true,    // true:スライダーの終わりまで行ったときに、先頭に巻き戻す(type:fadeの時使用)
          arrows: true,    // true:矢印ボタンを表示
          pagination:false, // ページネーションの有無 (デフォルトはtrue)
          classes: {
            // 矢印関連のクラスを追加
            arrow : 'splide__arrow p-arrow-button',
            prev  : 'splide__arrow--prev p-arrow-button--prev',
            next  : 'splide__arrow--next p-arrow-button--next',},
          perMove: 1,      // 1度の移動で、何枚のスライドを移動するかを指定
          fixedWidth:'30rem',
          fixedHeight:'46.9rem',
          gap: '4.3rem',     // 画像間の余白の設定
          breakpoints: {   // レスポンシブデザインのブレークポイントを指定（指定したpx以下の場合）
            1439: {
              fixedWidth:'27rem',
              fixedHeight:'42.4rem',
              gap: '3.3rem',
            },
            767: {
              fixedWidth:'24.6rem',
              fixedHeight:'38.8rem',
              gap: '2.3rem',
            }
          },
        }
      ).mount();
    }
  }
  if (library === "swiper") {
    // Swiperの読み込み
    if (document.querySelector('#mv_slider')) {
      new Swiper('#mv_slider', {
        effect: 'slide', //slide:スライド,fade:フェード,cube:立方体の面のように回転しながら表示,
        loop: true,  // スライダーの終わりまで行ったときの動き。選択肢：true：ループする, false：巻き戻す
        speed: 3000,  // スライダーの移動時間をミリ秒単位で指定
        autoplay: {  // 自動実行を有効にする
          delay: 3000,  // スライドが自動的に進むまでの時間をミリ秒単位で指定する
          disableOnInteraction: false, // ユーザーのスワイプ操作後も自動再生を続ける。選択肢：true：スワイプ操作後に自動再生を停止する, false：スワイプ操作後も自動再生を続ける
        },
        pagination: {  // ページネーション設定
          el: ".swiper-pagination",  // クラス名、idなどのセレクタを指定する
          clickable: true,  // クリックしたスライドに移動するかどうか、true:クリック可、false：クリック不可
        },
        navigation: {  // 矢印ボタンを表示。
          nextEl: '.swiper-button-next',  // "次へ"ボタンのエレメントを指定するセレクタ
          prevEl: '.swiper-button-prev',  // "前へ"ボタンのエレメントを指定するセレクタ
        },
        slidesPerView: 1,  // 1ページに表示するスライド数
        spaceBetween: 10,  // 画像間の余白の設定
        centeredSlides: true,   // これを指定すると中央にある画像にフォーカスされる。選択肢：true：中央にフォーカス, false：中央にフォーカスしない
        breakpoints: {  // レスポンシブデザインのブレークポイントを指定（指定したpx以上の場合）
          768: {
            slidesPerView: 1,  // 1ページに表示するスライド数
          },
        },
      });
    }
    if (document.querySelector('#gallery')) {
      new Swiper('#gallery', {
        effect: 'slide', //slide:スライド,fade:フェード,cube:立方体の面のように回転しながら表示,
        loop: true,  // スライダーの終わりまで行ったときに、先頭に巻き戻す。選択肢：true：巻き戻す, false：巻き戻さない
        speed: 3000,  // スライダーの移動時間をミリ秒単位で指定
        autoplay: {  // 自動実行を有効にする
          delay: 3000,  // スライドが自動的に進むまでの時間をミリ秒単位で指定する
          disableOnInteraction: false, // ユーザーのスワイプ操作後も自動再生を続ける。選択肢：true：スワイプ操作後に自動再生を停止する, false：スワイプ操作後も自動再生を続ける
        },
        pagination: {  // ページネーション設定
          el: ".swiper-pagination",  // クラス名、idなどのセレクタを指定する
          clickable: true,  // クリックしたスライドに移動するかどうか、true:クリック可、false：クリック不可
        },
        navigation: {  // 矢印ボタンを表示。
          nextEl: '.swiper-button-next',  // "次へ"ボタンのエレメントを指定するセレクタ
          prevEl: '.swiper-button-prev',  // "前へ"ボタンのエレメントを指定するセレクタ
        },
        slidesPerView: 4,  // 1ページに表示するスライド数
        spaceBetween: 10,  // 画像間の余白の設定
        centeredSlides: true,   // これを指定すると中央にある画像にフォーカスされる。選択肢：true：中央にフォーカス, false：中央にフォーカスしない
        breakpoints: {  // レスポンシブデザインのブレークポイントを指定（指定したpx以上の場合）
          768: {
            slidesPerView: 6,  // 1ページに表示するスライド数
          },
        },
      });
    }
    if (document.querySelector('#staff')) {
      new Swiper('#staff', {
        effect: 'slide', //slide:スライド,fade:フェード,cube:立方体の面のように回転しながら表示,
        loop: true,  // スライダーの終わりまで行ったときの動き。選択肢：true：ループする, false：巻き戻す
        speed: 1000,  // スライダーの移動時間をミリ秒単位で指定
        autoplay: {  // 自動実行を有効にする
          delay: 1000,  // スライドが自動的に進むまでの時間をミリ秒単位で指定する
          disableOnInteraction: false, // ユーザーのスワイプ操作後も自動再生を続ける。選択肢：true：スワイプ操作後に自動再生を停止する, false：スワイプ操作後も自動再生を続ける
        },
        pagination: {  // ページネーション設定
          el: ".swiper-pagination",  // クラス名、idなどのセレクタを指定する
          clickable: true,  // クリックしたスライドに移動するかどうか、true:クリック可、false：クリック不可
        },
        navigation: {  // 矢印ボタンを表示。
          nextEl: '.swiper-button-next',  // "次へ"ボタンのエレメントを指定するセレクタ
          prevEl: '.swiper-button-prev',  // "前へ"ボタンのエレメントを指定するセレクタ
        },
        slidesPerView: 1,  // 1ページに表示するスライド数
        spaceBetween: 10,  // 画像間の余白の設定
        centeredSlides: false,   // これを指定すると中央にある画像にフォーカスされる。選択肢：true：中央にフォーカス, false：中央にフォーカスしない
        breakpoints: {  // レスポンシブデザインのブレークポイントを指定（指定したpx以上の場合）
          768: {
            slidesPerView: 3,  // 1ページに表示するスライド数
          },
        },
      });
    }
    if (document.querySelector('#post')) {
      new Swiper('#post', {
        effect: 'slide', //slide:スライド,fade:フェード,cube:立方体の面のように回転しながら表示,
        loop: true,  // スライダーの終わりまで行ったときの動き。選択肢：true：ループする, false：巻き戻す
        speed: 1000,  // スライダーの移動時間をミリ秒単位で指定
        autoplay: {  // 自動実行を有効にする
          delay: 1000,  // スライドが自動的に進むまでの時間をミリ秒単位で指定する
          disableOnInteraction: false, // ユーザーのスワイプ操作後も自動再生を続ける。選択肢：true：スワイプ操作後に自動再生を停止する, false：スワイプ操作後も自動再生を続ける
        },
        pagination: {  // ページネーション設定
          el: ".swiper-pagination",  // クラス名、idなどのセレクタを指定する
          clickable: true,  // クリックしたスライドに移動するかどうか、true:クリック可、false：クリック不可
        },
        navigation: {  // 矢印ボタンを表示。
          nextEl: '.swiper-button-next',  // "次へ"ボタンのエレメントを指定するセレクタ
          prevEl: '.swiper-button-prev',  // "前へ"ボタンのエレメントを指定するセレクタ
        },
        slidesPerView: 1,  // 1ページに表示するスライド数
        spaceBetween: 10,  // 画像間の余白の設定
        centeredSlides: false,   // これを指定すると中央にある画像にフォーカスされる。選択肢：true：中央にフォーカス, false：中央にフォーカスしない
        breakpoints: {  // レスポンシブデザインのブレークポイントを指定（指定したpx以上の場合）
          768: {
            slidesPerView: 3,  // 1ページに表示するスライド数
          },
        },
      });
    }
  }
  if (library === "slick") {
        //slick slider
    if (document.querySelector('#mv_slider')) {
      $('#mv_slider').slick({
        // fade: true,  // true:フェード効果を使います, false:スライド効果を使います
        speed: 3000,  // スライドのアニメーション速度をミリ秒単位で設定します
        autoplaySpeed: 3000,  // 自動的にスライドする間隔をミリ秒単位で指定します
        autoplay: true,  // true:自動的にスライドさせる, false:手動でスライドさせる
        arrows: true,  // true:矢印ナビゲーションを表示します, false:矢印ナビゲーションを表示しません
        slidesToShow: 1,  // 一度に表示するスライド数を設定します
        slidesToScroll: 1,  // 一度にスクロールするスライド数を設定します
        centerMode: false,  // true:アクティブなスライドを中央に表示します, false:左から順にスライドを表示します
        pauseOnHover: true,  // true:ホバー時に自動再生を一時停止します, false:ホバー時でも自動再生を続行します
        dots: true,  // ドットの表示
        responsive: [  // レスポンシブ対応の設定
          {
            breakpoint: 768,  // 画面幅が768px未満のときに適用
            settings: {
              slidesToShow: 1,  // 一度に表示するスライド数を設定します
            }
          }
        ]
      });
    }
    if (document.querySelector('#gallery')) {
      $('#gallery').slick({
        // fade: true,  // true:フェード効果を使います, false:スライド効果を使います
        speed: 3000,  // スライドのアニメーション速度をミリ秒単位で設定します
        autoplaySpeed: 3000,  // 自動的にスライドする間隔をミリ秒単位で指定します
        autoplay: true,  // true:自動的にスライドさせる, false:手動でスライドさせる
        arrows: true,  // true:矢印ナビゲーションを表示します, false:矢印ナビゲーションを表示しません
        slidesToShow: 5,  // 一度に表示するスライド数を設定します
        slidesToScroll: 1,  // 一度にスクロールするスライド数を設定します
        centerMode: false,  // true:アクティブなスライドを中央に表示します, false:左から順にスライドを表示します
        pauseOnHover: true,  // true:ホバー時に自動再生を一時停止します, false:ホバー時でも自動再生を続行します
        dots: true,  // ドットの表示
        responsive: [  // レスポンシブ対応の設定
          {
            breakpoint: 768,  // 画面幅が768px未満のときに適用
            settings: {
              slidesToShow: 1,  // 一度に表示するスライド数を設定します
            }
          }
        ]
      });
    }
    if (document.querySelector('#staff')) {
      $('#staff').slick({
        // fade: true,  // true:フェード効果を使います, false:スライド効果を使います
        speed: 1000,  // スライドのアニメーション速度をミリ秒単位で設定します
        autoplaySpeed: 1000,  // 自動的にスライドする間隔をミリ秒単位で指定します
        autoplay: true,  // true:自動的にスライドさせる, false:手動でスライドさせる
        arrows: true,  // true:矢印ナビゲーションを表示します, false:矢印ナビゲーションを表示しません
        slidesToShow: 1,  // 一度に表示するスライド数を設定します
        slidesToScroll: 1,  // 一度にスクロールするスライド数を設定します
        centerMode: true,  // true:アクティブなスライドを中央に表示します, false:左から順にスライドを表示します
        pauseOnHover: true,  // true:ホバー時に自動再生を一時停止します, false:ホバー時でも自動再生を続行します
        dots: true,  // ドットの表示
        responsive: [  // レスポンシブ対応の設定
          {
            breakpoint: 768,  // 画面幅が768px未満のときに適用
            settings: {
              slidesToShow: 1,  // 一度に表示するスライド数を設定します
            }
          }
        ]
      });
    }
    if (document.querySelector('#post')) {
      $('#post').slick({
        // fade: true,  // true:フェード効果を使います, false:スライド効果を使います
        speed: 1000,  // スライドのアニメーション速度をミリ秒単位で設定します
        autoplaySpeed: 1000,  // 自動的にスライドする間隔をミリ秒単位で指定します
        autoplay: true,  // true:自動的にスライドさせる, false:手動でスライドさせる
        arrows: true,  // true:矢印ナビゲーションを表示します, false:矢印ナビゲーションを表示しません
        slidesToShow: 3,  // 一度に表示するスライド数を設定します
        slidesToScroll: 1,  // 一度にスクロールするスライド数を設定します
        centerMode: true,  // true:アクティブなスライドを中央に表示します, false:左から順にスライドを表示します
        pauseOnHover: true,  // true:ホバー時に自動再生を一時停止します, false:ホバー時でも自動再生を続行します
        dots: true,  // ドットの表示
        responsive: [  // レスポンシブ対応の設定
          {
            breakpoint: 768,  // 画面幅が768px未満のときに適用
            settings: {
              slidesToShow: 1,  // 一度に表示するスライド数を設定します
            }
          }
        ]
      });
    }
  }
});

// お問い合わせフォーム送信完了ページに移動させる場合使用します。
// document.addEventListener( 'wpcf7mailsent', function( event ) {
//   location = 'ここに完了ページのURLを記入';
//   // location = 'http://toolwordpressmv.local/contact-thanks/';
// }, false );

jQuery(function ($) {
  // ページ読み込み時の処理
  $(document).ready(function () {
    switchHeaderColor();
    setFooterInnerHeight();
    setFooterListWidth();
    setFooterHeight();
    setBurgerMenuTextItemWrapper();
    addLineNextToH2();
    setMarginLeftOfPanelText();
    setPositionOfCeoName();
    disableSubmit();
  });

  // ウィンドウリサイズ時の処理
  $(window).resize(function () {
    setFooterInnerHeight();
    setFooterListWidth();
    setFooterHeight();
    setBurgerMenuTextItemWrapper();
    addLineNextToH2();
    setMarginLeftOfPanelText();
    setPositionOfCeoName();
  });

  // トップページと下層ページでヘッダー要素の色を分ける
  function switchHeaderColor(){
    const topPage = document.querySelector("body.top-page");
    if (topPage !== null) {
      $(".p-header__logo").addClass("p-header__logo--white");
      $(".p-header__logo").removeClass("p-header__logo--black");
      $(".p-burger-button__line").addClass("p-burger-button__line--white");
      $(".p-burger-button__label").addClass("p-burger-button__label--white");
    } else {
      $(".p-header__logo").addClass("p-header__logo--black");
      $(".p-burger-button__line").addClass("p-burger-button__line--black");
      $(".p-burger-button__label").addClass("p-burger-button__label--black");
    }
  };

  // ヘッダーのロゴとバーガーボタンを白に切り替える
  function changeHeaderToWhite(){
    $(".p-header__logo").addClass("p-header__logo--white").removeClass("p-header__logo--black");
    $(".p-burger-button__line")
      .addClass("p-burger-button__line--white")
      .removeClass("p-burger-button__line--black");
    $(".p-burger-button__label")
      .addClass("p-burger-button__label--white")
      .removeClass("p-burger-button__label--black");
  };


  // ヘッダーのロゴとバーガーボタンを黒に切り替える
  function changeHeaderToBlack(){
    $(".p-header__logo").addClass("p-header__logo--black").removeClass("p-header__logo--white");
    $(".p-burger-button__line")
      .removeClass("p-burger-button__line--white")
      .addClass("p-burger-button__line--black");
    $(".p-burger-button__label")
      .removeClass("p-burger-button__label--white")
      .addClass("p-burger-button__label--black");
  };

  // ヘッダーをスクロールに合わせてにゅっと追従&色変更
  window.addEventListener("scroll", function () {
    const header = document.querySelector(".p-header");
    const scrollY = window.scrollY;
    const topPage = document.querySelector("body.top-page"); // トップページのbodyを取得
    const subPage = document.querySelector("body.sub-page"); // 下層ページのbodyを取得

    if (topPage !== null) { // トップページのとき
      const topFvHeight = document.querySelector(".p-fv").offsetHeight; // トップページFVの高さを取得
      if (scrollY >= topFvHeight) {
        $(header).addClass("p-header--sticky");
        changeHeaderToBlack();
      } else {
        $(header).removeClass("p-header--sticky");
        changeHeaderToWhite();
      }
    } else { // 下層ページのとき
      const headerHeight = header.offsetHeight; // ヘッダーの高さを取得
      if (scrollY >= headerHeight) {
        $(header).addClass("p-header--sticky");
        subPage.style.marginTop = headerHeight + "px"; // コンテンツにヘッダーの高さ分の余白を設定 (トップページのヘッダーはposition:absoluteで、下層ページのヘッダーはpositio:staticなため)
      } else {
        $(header).removeClass("p-header--sticky");
        subPage.style.marginTop = "0"; // コンテンツの余白をリセット
      }
    }
  });

  //ハンバーガーメニューの実装
  // バーガーメニューを開く
  function openBurgerMenu(){
    $(".c-burger-button").addClass("is-burger-open");
    $(".c-burger-menu").addClass("is-burger-open");
    $(".c-burger-menu a").addClass("c-burger-menu__anchor");
    $(".c-burger-button").attr("aria-expanded", "true");
    $(".c-burger-button").attr("aria-label", "メニューを開く");
    $("#burger-button-label").textContent = "MENU";
    $(".p-header__inner").addClass("is-burger-open");
  };
  // バーガーメニューを閉じる
  function closeBurgerMenu(){
    $(".c-burger-button").removeClass("is-burger-open");
    $(".c-burger-menu").removeClass("is-burger-open");
    $(".c-burger-button").attr("aria-expanded", "false");
    $(".c-burger-button").attr("aria-label", "メニューを開く");
    $("#burger-button-label").textContent = "MENU";
    $(".p-header__inner").removeClass("is-burger-open");
  };

  // バーガーメニュー展開時のスクロール禁止
  function controlScrolling(){
    if ($("body").css("overflow") === "hidden") {
      // もしoverflowがhiddenなら、bodyのスタイルを元に戻す
      $("body").css({ height: "", overflow: "" });
    } else {
      // そうでなければ、bodyにheight: 100%とoverflow: hiddenを設定し、スクロールを無効にする
      $("body").css({ height: "100%", overflow: "hidden" });
    }
  };

  // バーガーメニューを閉じたときにヘッダー色を戻す
  function setHeaderColor() {
    const headerHeight = $(".p-header").outerHeight(); // ヘッダーの高さを取得
    const topPage = document.querySelector("body.top-page");
    if (parseInt($("body").css("top")) >= -headerHeight && topPage !== null){
      changeHeaderToWhite();
    } else {
      changeHeaderToBlack();
    }
  };

  // バーガーメニューを開く時に、スクロール位置を保持
  let scrollpos;
  function holdScrollPosition(){
    scrollpos = $(window).scrollTop();
    $("body").addClass("fixed").css({ top: -scrollpos });
  };

  // バーガーメニューを閉じる時に、fixedを解除して元のスクロール位置に戻る
  function setHoldenScrollPosition(){
    $("body").removeClass("fixed").css({ top: 0 });
    window.scroll({
      top: scrollpos,
      left: 0,
      behavior: "instant",
    });
  };

  //バーガーボタンを押したとき
  $(".c-burger-button").on("click", function () {
    controlScrolling();
    if (!$(this).hasClass("is-burger-open")) { // バーガーメニューを開く時
      openBurgerMenu();
      changeHeaderToBlack();
      holdScrollPosition();
    } else { // バーガーメニューを閉じる時
      closeBurgerMenu();
      setHeaderColor();
      setHoldenScrollPosition();
    }
  });

  // ハンバーガーメニュー展開時のクリック挙動(今回はヘッダーをバーガーメニューから分離させているため、.c-headerも対象に)
  $(".c-burger-menu, .c-header").on("click", function (event) {
    const $clickedElement = $(event.target);

    // aタグまたはbuttonをクリックした場合
    if ($clickedElement.is("a, button") || $clickedElement.closest("a, button").length > 0) {
      // aやbuttonのデフォルトの動作を許可
    } else {
      // それ以外の要素をクリックした場合
      event.preventDefault(); // デフォルトの動作を防止
      event.stopPropagation(); // イベントの伝播を停止

      // スクロール位置を保持したままバーガーメニューを閉じる&ヘッダー色設定
      controlScrolling();
      closeBurgerMenu();
      setHeaderColor();
      setHoldenScrollPosition();
    }
  });

  // escキーを押したときにハンバーガーメニューやモーダルを閉じる
  $(window).on("keyup", function (event) {
    if (event.key === "Escape" || event.keyCode === 27) {
      // バーガーメニューが開いていて、かつモーダルが開いていない場合
      if (
        $(".c-burger-button").hasClass("is-burger-open") &&
        $("#login-modal-burger.modal-open").length === 0
      ) {
        closeBurgerMenu();
        controlScrolling();
        setHeaderColor();
        setHoldenScrollPosition();
        // バーガー展開時にモーダルを閉じる際、バーガーは閉じない
      } else if ($(".modal.modal-open").length > 0) {
        {
          const openedModals = document.querySelectorAll(".modal.modal-open");
          openedModals.forEach(function (modal) {
            const closeButton = modal.querySelector("[data-micromodal-close]");
            if (closeButton) {
              closeButton.click();
            }
          });
        }
      }
    }
  });

  // フォーカストラップ制御
  let focusTrap = document.getElementById("js-focus-trap");
  focusTrap.addEventListener("focus", (e) => {
    $(".c-burger-button").focus();
  });


  // スムーススクロール(「#」がついていなくても動くように)
  $(document).on('click', 'a[href^="//"]', function (e) {
    e.preventDefault();

    const href = $(this).attr("href");
    const currentProtocol = window.location.protocol;
    const fullLinkUrl = currentProtocol + href;

    // 先に#付きリンクを踏んでいる場合でも、スムーススクロールを作動させるため処理
    let strippedFullLinkUrl = fullLinkUrl.split('#')[0]; // 'fullLinkUrl'から'#以降の文字列'を削除する
    let strippedLocationHref = location.href.split('#')[0]; // 'location.href'から'#以降の文字列'を削除する

    // ページ遷移しないリンクの時
    if (strippedFullLinkUrl === strippedLocationHref){
    let target;
    let adjust;

      // #のないリンクの時
      if (fullLinkUrl === strippedLocationHref) {
        target = $("html");
        adjust = 0;
      }

      // #から始まるリンクの時
      else if (fullLinkUrl.startsWith(strippedLocationHref + '#')){
        const id = href.split('#')[1]; // #以降を切り取り、const idに代入
        target = $('#' + id); // そのidを持つ要素をtargetに設定
        const headerHeight = $("header").outerHeight();
        adjust = headerHeight + 30;
      }

      let position = target.position().top - adjust;
      let speed = 300;

      // Safariのスクロールアニメーションの速度を調整
      if (navigator.userAgent.indexOf("Safari") !== -1 && navigator.userAgent.indexOf("Chrome") === -1) {
        speed = 500;
      }

      // ヘッダーあるいはバーガーメニューのリンクの時
      if ($(this).closest('.c-header').length > 0) { // 親要素のどこかに.c-headerを持つ場合
        controlScrolling();
        closeBurgerMenu();
        setHeaderColor();
        setHoldenScrollPosition();
      }

      $("body,html").animate({ scrollTop: position }, speed, "linear");
      } else {// ページ遷移するリンクの時
      window.location.href = fullLinkUrl;
    }
  });

  // バグ対応(.modal__containerの中では閉じるボタンを押したときのみモーダルを閉じるようにする)
  document.querySelectorAll(".modal").forEach(function (container) {
    container.addEventListener("click", function (event) {
      const modalTarget = event.target;
      if (modalTarget.hasAttribute("data-micromodal-close")) {
        modalTarget.closest(".modal").classList.remove("modal-open");
      } else {
        event.stopPropagation();
      }
    });
  });

  // バーガーメニューレイアウト設定
  function setBurgerMenuTextItemWrapper() {
    var windowWidth = $(window).width();
    if (windowWidth >= 768) { // PCの場合
      let halfHeight = $(".p-burger-menu__text-item").eq(0).outerHeight(true) + $(".p-burger-menu__text-item").eq(1).outerHeight(true) + $(".p-burger-menu__text-item").eq(2).outerHeight(true) + 1; // 最後の1はborderの分
      $(".p-burger-menu__text-item-wrapper").height(halfHeight);
    } else {
      $(".p-burger-menu__text-item-wrapper").height("unset");
    }
  };

  // フッターインナーの高さ設定(フッターの要素を重ね合わせを実現するため)
  function setFooterInnerHeight() {
    let footerImageHeight = $(".p-footer__image").height();
    $(".p-footer__inner").height(footerImageHeight);
  };

  //フッターの高さ設定(フッター下の余白をつけるため)
  function setFooterHeight(){
    let footerWrapperHeight = $(".p-footer__image").outerHeight() + $(".p-footer__menu-wrapper").outerHeight();
    let footerHeight = footerWrapperHeight + $(".p-footer__wrapper").css("padding-bottom");
    $(".p-footer__wrapper").height(footerHeight);
    $(".p-footer").height(footerHeight);
  }

  // フッターのメインメニューの横幅設定
  function setFooterListWidth() {
    var itemsWidth, additionalWidth;
    var windowWidth = $(window).width();

    if (windowWidth >= 1440) { // PCの場合
      itemsWidth = $(".p-footer__item").eq(0).outerWidth() + $(".p-footer__item").eq(1).outerWidth() + $(".p-footer__item").eq(2).outerWidth() + $(".p-footer__item").eq(3).outerWidth() + $(".p-footer__item").eq(4).outerWidth();
    } else if (windowWidth >= 768 && windowWidth <= 1439) { // タブレットの場合
      itemsWidth = $(".p-footer__item").eq(2).outerWidth() + $(".p-footer__item").eq(3).outerWidth() + $(".p-footer__item").eq(4).outerWidth() + $(".p-footer__item").eq(6).outerWidth();
    } else {
      $(".p-footer__list").width("100%");
    }
    additionalWidth = 2.2 * 4 * 10; // 8.8remをピクセルに変換 (1rem = 10px)

    var listWidth = itemsWidth + additionalWidth;
    $(".p-footer__list").width(listWidth);
  };


  // トップページのBENEFITSセクションのホバーアクション
  function addBenefitsHover(element){
    $(element).find(".p-top-benefits__image").addClass("p-top-benefits__image--hover");
    $(element).find(".p-top-benefits__button").addClass("p-top-benefits__button--hover");
  }

  function removeBenefitsHover(element){
    $(element).find(".p-top-benefits__image").removeClass("p-top-benefits__image--hover");
    $(element).find(".p-top-benefits__button").removeClass("p-top-benefits__button--hover");
  }

  $(".p-top-benefits__content").mouseover(function (){
    addBenefitsHover(this);
  });

  $(".p-top-benefits__content").mouseleave(function (){
    removeBenefitsHover(this);
  });

  // スタッフ詳細ページのh2の横の黒線
  function addLineNextToH2() {
  var $h2 = $(".p-staff-article__contents h2");
  if ($h2.length === 0) return;
    var offsetLeft = $h2.offset().left;
    var widthOfLine = offsetLeft - 16
    $h2.css('--line-width', widthOfLine + "px");
  }

  // アコーディオンメニュー: 機能
  $('.p-accordion__trigger').on('click', function() {
    var $trigger = $(this);
    var $panel = $('#' + $trigger.attr('aria-controls'));
    var isOpen = $trigger.attr('aria-expanded') === 'true';

    // クラスの切り替えとaria属性の変更
    $trigger.attr('aria-expanded', !isOpen);
    $trigger.toggleClass('is-accordion-open', !isOpen);
    $panel.toggleClass('is-accordion-open', !isOpen);

    // パネルの高さの自動調整
    function adjustPanelHeight() {
      if (!isOpen) {
        $panel.css('height', 'auto');
        var height = $panel.height();
        $panel.css('height', '0');
        $panel.stop().animate({ height: height }, 300, 'swing', function() {
          $panel.css('height', 'auto');
        });
      } else {
        $panel.stop().animate({ height: '0' }, 300, 'swing');
      }
    }

    // コンテンツの表示/非表示をスライドでトグル
    $panel.stop().slideToggle({
      duration: 300,
      easing: 'swing',
      start: function() {
        if (!isOpen) {
          $panel.show();
        }
      },
      complete: function() {
        if (isOpen) {
          $panel.hide();
        }
      }
    });

    adjustPanelHeight();
  });

  // アコーディオンメニュー: パネルテキストの位置をヘッダータイトルに合わせる
  function setMarginLeftOfPanelText() {
    var $panel = $(".p-accordion__panel");
    var $q = $(".p-accordion__letter-q");

    // $panelが存在無しないときは何もしない
    if ($panel.length === 0) return;

    var qWidth = $q.innerWidth();
    var marginLeft = qWidth + 20;
    $panel.css('--margin-left', marginLeft + "px");
  };

  // 代表メッセージの名前の位置設定
  function setPositionOfCeoName() {
    var imgHeight = $(".p-ceo-message__img").outerWidth() * 629 / 484;
    var namePosition = imgHeight + 20
    console.log("imgHeight" + imgHeight);
    console.log("namePosition" + namePosition);
    $(".p-ceo-message__ceo-name").css('--name-position', namePosition + "px");
  }

  //エントリーフォームにて、送信ボタンを押した時のみバリデーションメッセージ表示
  $(".p-contact__button-submit").click(function () {
    $(".wpcf7-form-control-wrap").addClass("is-validation-show");
  });

  // フォームの必須項目を全て入力するまで非活性
  function disableSubmit() {
    const $formWrapper = $('#wpcf7-f7-o1');
    const $form = $formWrapper.find('form');
    const $submitBtn = $form.find('input[type="submit"]');

    function checkAllFields() {
        const requiredFields = [
            { selector: 'input[name="your-name"]', condition: el => el.value.trim() !== "" },
            { selector: 'input[name="your-name-kana"]', condition: el => el.value.trim() !== "" },
            { selector: 'input[name="your-email"]', condition: el => el.value.trim() !== "" },
            { selector: 'input[name="your-tel"]', condition: el => el.value.trim() !== "" },
            { selector: 'input[name="bday-year"]', condition: el => el.value.trim() !== "" },
            { selector: 'select[name="bday-month"]', condition: el => el.value !== "選択してください" },
            { selector: 'select[name="bday-day"]', condition: el => el.value !== "選択してください" },
            { selector: 'input[name="objective"]', condition: el => $form.find('input[name="objective"]:checked').length > 0 },
            { selector: 'textarea[name="about-yourself"]', condition: el => el.value.trim() !== "" },
            { selector: 'input[name="acceptance-505"]', condition: el => el.checked }
        ];

        const allFilled = requiredFields.every(field => 
            $form.find(field.selector).toArray().every(field.condition)
        );

        $submitBtn.prop('disabled', !allFilled);
    }

    $form.on('change keyup', 'input, textarea, select', checkAllFields);
    $formWrapper.on('wpcf7mailsent wpcf7invalid', checkAllFields);

    // 初期状態でもチェック
    checkAllFields();
  }

});