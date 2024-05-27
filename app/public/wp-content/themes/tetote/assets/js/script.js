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
        $(".logo__img--white").addClass("none").removeClass("block");
        $(".logo__img--black").addClass("block").removeClass("none");
        $(".burger-button__line")
          .removeClass("burger-button__line--white")
          .addClass("burger-button__line--black");
        $(".burger-button__label")
          .removeClass("burger-button__label--white")
          .addClass("burger-button__label--black");
      }
    } else {
      // スクロール位置がヘッダー未満のとき
      $(header).removeClass("header--sticky");
      if (subPage !== null) {
        subPage.style.marginTop = "0"; // コンテンツの余白をリセット
      } else {
        $(".logo__img--white").addClass("block").removeClass("none");
        $(".logo__img--black").addClass("none").removeClass("block");
        $(".burger-button__line")
          .addClass("burger-button__line--white")
          .removeClass("burger-button__line--black");
        $(".burger-button__label")
          .addClass("burger-button__label--white")
          .removeClass("burger-button__label--black");
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
    console.log("hidden解除");
  } else {
    // そうでなければ、bodyにheight: 100%とoverflow: hiddenを設定し、スクロールを無効にする
    $("body").css({ height: "100%", overflow: "hidden" });
    console.log("hidden実行");
  }
};
  let scrollpos;
  //バーガーボタンを押したとき
  $(".burger-button").on("click", function () {
    controlScrolling();
    if (!$(this).hasClass("is-burger-open")) {
      openBurgerMenu();
      // スクロール位置を保持
      scrollpos = $(window).scrollTop();
      $("body").addClass("fixed").css({ top: -scrollpos });
    } else {
      closeBurgerMenu();
      // メニューを閉じる時はfixを解除して元のスクロール位置に戻る
      $("body").removeClass("fixed").css({ top: 0 });
      window.scroll({
        top: scrollpos,
        left: 0,
        behavior: "instant",
      });
      // Y位置と右端からのX位置の固定を解除
      $(this).css({
        top: "",
        right: "",
      });
    }
  });

  // ハンバーガーメニュー表示時にメニュー以外をクリックしたらスクロール位置を保持したまま閉じる
  $(".burger-menu").on("click", function (event) {
    controlScrolling();
    if (!$(event.target).is("a, button")) {
      closeBurgerMenu();
      $("body").removeClass("fixed").css({ top: 0 });
      window.scroll({
        top: scrollpos,
        left: 0,
        behavior: "instant",
      });
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
        // スクロール位置を保持しながら解除
        $("body").removeClass("fixed").css({ top: 0 });
        window.scroll({
          top: scrollpos,
          left: 0,
          behavior: "instant",
        });
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
      $("body").removeClass("fixed").css({ top: 0 });
      window.scroll({
        top: scrollpos,
        left: 0,
        behavior: "instant",
      });
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
    if (windowWidth >= 1440) { // PCの場合
      let halfHeight = $(".burger-menu__text-item").eq(0).outerHeight(true) + $(".burger-menu__text-item").eq(1).outerHeight(true) + $(".burger-menu__text-item").eq(2).outerHeight(true) + 1; // 最後の1はborderの分
      $(".burger-menu__text-item-wrapper").height(halfHeight);
    } else {
      $(".burger-menu__text-item-wrapper").height("unset");
    }
    console.log("バーガーアイテム" + halfHeight);
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
    console.log("フッターラッパーハイト: " + footerWrapperHeight);
    console.log("フッターハイト: " + footerHeight);
    console.log("padding-bottom: " + $(".footer__wrapper").css("padding-bottom"));
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
    console.log("幅:" + listWidth);
    console.log("ウインドウ幅:" + windowWidth);
  };
});
