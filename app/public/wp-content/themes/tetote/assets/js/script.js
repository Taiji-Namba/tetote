"use strict";
jQuery(function ($) {

    // ページ読み込み時
  $(document).ready(function () {
    switchHeaderColor();
    setFooterInnerHeight();
    setFooterListWidth();
    setFooterHeight();
    setBurgerMenuTextItemWrapper();
  });

  // ウィンドウリサイズ時の処理
  $(window).resize(function () {
    setFooterInnerHeight();
    setFooterListWidth();
    setFooterHeight();
    setBurgerMenuTextItemWrapper();
  });

  // トップページと下層ページでヘッダー要素の色を分ける
  function switchHeaderColor(){
    const topPage = document.querySelector("body.top-page");
    if (topPage !== null) {
      $(".burger-button__line").addClass("burger-button__line--white");
      $(".burger-button__label").addClass("burger-button__label--white");
    } else {
      $(".burger-button__line").addClass("burger-button__line--black");
      $(".burger-button__label").addClass("burger-button__label--black");
      $(".logo__img--white").addClass("none");
      $(".logo__img--black").addClass("block");
    }
  };

  // 白のヘッダーを表示する
  function displayWhiteHeader(){
    $(".logo__img--white").addClass("block").removeClass("none");
    $(".logo__img--black").addClass("none").removeClass("block");
    $(".burger-button__line")
      .addClass("burger-button__line--white")
      .removeClass("burger-button__line--black");
    $(".burger-button__label")
      .addClass("burger-button__label--white")
      .removeClass("burger-button__label--black");
  };


  // 黒のヘッダーを表示する
  function displayBlackHeader(){
    $(".logo__img--white").addClass("none").removeClass("block");
    $(".logo__img--black").addClass("block").removeClass("none");
    $(".burger-button__line")
      .removeClass("burger-button__line--white")
      .addClass("burger-button__line--black");
    $(".burger-button__label")
      .removeClass("burger-button__label--white")
      .addClass("burger-button__label--black");
  };

  // ヘッダーをスクロールに合わせてにゅっと追従&色変更
  window.addEventListener("scroll", function () {
    const header = document.querySelector(".header");
    const headerHeight = header.offsetHeight; // ヘッダーの高さを取得
    const scrollY = window.scrollY;
    const subPage = document.querySelector("body.sub-page"); // sub-pageクラスを持つbodyを取得

    // スクロール位置がヘッダーを超えたとき
    if (scrollY >= headerHeight) {
      $(header).addClass("header--sticky");

      if (subPage !== null) {
        //下層ページのとき
        subPage.style.marginTop = headerHeight + "px"; // コンテンツにヘッダーの高さ分の余白を設定 (トップページのヘッダーはページ表示時にabsoluteで、下層ページのヘッダーはページ表示時にstaticなことに由来する余白調整)
      } else {
        // トップページのとき
        displayBlackHeader();
      }
    } else {
      // スクロール位置がヘッダー未満のとき
      $(header).removeClass("header--sticky");
      if (subPage !== null) {
        subPage.style.marginTop = "0"; // コンテンツの余白をリセット
      } else {
        displayWhiteHeader();
      }
    }
  });

  //ハンバーガーメニューの実装
  // バーガーメニューを開く
  function openBurgerMenu(){
    $(".burger-button").addClass("is-burger-open");
    $(".burger-menu").addClass("is-burger-open");
    $(".burger-menu a").addClass("burger-menu__anchor");
    $(".burger-button").attr("aria-expanded", "true");
    $(".burger-button").attr("aria-label", "メニューを開く");
    $("#burger-button-label").textContent = "MENU";
    $(".header__inner").addClass("is-burger-open");
  };
  // バーガーメニューを閉じる
  function closeBurgerMenu(){
    $(".burger-button").removeClass("is-burger-open");
    $(".burger-menu").removeClass("is-burger-open");
    $(".burger-button").attr("aria-expanded", "false");
    $(".burger-button").attr("aria-label", "メニューを開く");
    $("#burger-button-label").textContent = "MENU";
    $(".header__inner").removeClass("is-burger-open");
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

  // バーガーメニューを閉じたときのヘッダー色の設定
  function setHeaderColor() {
    const headerHeight = $(".header").outerHeight(); // ヘッダーの高さを取得
    const topPage = document.querySelector("body.top-page");
    if (parseInt($("body").css("top")) >= -headerHeight && topPage !== null){
      displayWhiteHeader();
    } else {
      displayBlackHeader();
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
  $(".burger-button").on("click", function () {
    controlScrolling();
    if (!$(this).hasClass("is-burger-open")) { // バーガーメニューを開く時
      openBurgerMenu();
      displayBlackHeader();
      holdScrollPosition();
    } else { // バーガーメニューを閉じる時
      closeBurgerMenu();
      setHeaderColor();
      setHoldenScrollPosition();
    }
  });

  // ハンバーガーメニュー表示時にメニュー以外をクリックしたらスクロール位置を保持したまま閉じる
  $(".burger-menu").on("click", function (event) {
    if (!$(event.target).is("a, button")) {
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
        $(".burger-button").hasClass("is-burger-open") &&
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
    $(".burger-button").focus();
  });

  // スムーススクロール(ハンバーガメニューを押したときも動作)
  $('a[href^="#"]').click(function () {
    if ($(this).hasClass("burger-menu__anchor")) {
      closeBurgerMenu();
      controlScrolling();
      setHeaderColor();
      setHoldenScrollPosition();
    }

    let adjust = $(".gnav").outerHeight(true);
    if ($(window).width() <= 1439) {
      adjust = 0;
    }
    let speed = 300;
    let href = $(this).attr("href");
    let target = $(href == "#" || href == "" ? "html" : href);

    let position = target.position().top - adjust;

    if (
      navigator.userAgent.indexOf("Safari") != -1 &&
      navigator.userAgent.indexOf("Chrome") == -1
    ) {
      speed = 500;
      // Safariのスクロールアニメーションの速度を調整
    }

    $("body,html").animate({ scrollTop: position }, speed, "linear");

    return false;
  });

  // モーダルウインドウ(MicroModal使用)
  MicroModal.init({
    openClass: "modal-open",
    disableScroll: true,
    awaitCloseAnimation: true, // モーダルを閉じる際にアニメーション完了を待つ。(本来なくてもいいが、バーガーメニュー内でのバグ対応のため記述)
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
      let halfHeight = $(".burger-menu__text-item").eq(0).outerHeight(true) + $(".burger-menu__text-item").eq(1).outerHeight(true) + $(".burger-menu__text-item").eq(2).outerHeight(true) + 1; // 最後の1はborderの分
      $(".burger-menu__text-item-wrapper").height(halfHeight);
    } else {
      $(".burger-menu__text-item-wrapper").height("unset");
    }
  };

  // フッターインナーの高さ設定(フッターの要素を重ね合わせを実現するため)
  function setFooterInnerHeight() {
    let footerImageHeight = $(".footer__image").height();
    $(".footer__inner").height(footerImageHeight);
  };

  //フッターの高さ設定(フッター下の余白をつけるため)
  function setFooterHeight(){
    let footerWrapperHeight = $(".footer__image").outerHeight() + $(".footer__menu-wrapper").outerHeight();
    let footerHeight = footerWrapperHeight + $(".footer__wrapper").css("padding-bottom");
    $(".footer__wrapper").height(footerHeight);
    $(".footer").height(footerHeight);
  }

  // フッターのメインメニューの横幅設定
  function setFooterListWidth() {
    var itemsWidth, additionalWidth;
    var windowWidth = $(window).width();

    if (windowWidth >= 1440) { // PCの場合
      itemsWidth = $(".footer__item").eq(0).outerWidth() + $(".footer__item").eq(1).outerWidth() + $(".footer__item").eq(2).outerWidth() + $(".footer__item").eq(3).outerWidth() + $(".footer__item").eq(4).outerWidth();
    } else if (windowWidth >= 768 && windowWidth <= 1439) { // タブレットの場合
      itemsWidth = $(".footer__item").eq(2).outerWidth() + $(".footer__item").eq(3).outerWidth() + $(".footer__item").eq(4).outerWidth() + $(".footer__item").eq(6).outerWidth();
    } else {
      $(".footer__list").width("100%");
    }
    additionalWidth = 2.2 * 4 * 10; // 8.8remをピクセルに変換 (1rem = 10px)

    var listWidth = itemsWidth + additionalWidth;
    $(".footer__list").width(listWidth);
  };
});
