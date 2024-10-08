<?php

/**
 * Functions
 */

// 基本設定
get_template_part('parts/functions-lib/func-base');

// セキュリティー対応
get_template_part('parts/functions-lib/func-security');

// ショートコードの設定
get_template_part('parts/functions-lib/func-shortcode');

// URLのショートカット設定
get_template_part('parts/functions-lib/func-url');

// URLのショートカット設定
get_template_part('parts/functions-lib/func-utility');

// メインクエリのSP表示件数設定
// get_template_part('parts/functions-lib/func-posts-edit');

// スクリプト、スタイルシートの設定
get_template_part('parts/functions-lib/func-enqueue-assets');
// get_template_part('parts/functions-lib/func-enqueue-assets_noslider'); //スライダーを使用しない場合

// （ギャラリー用）カスタムフィールドの設定
get_template_part('parts/functions-lib/func-add-posttype-gallery');

// （Staff用）カスタムフィールドの設定
get_template_part('parts/functions-lib/func-add-posttype-staff');

// ブログ投稿一覧URLの設定
get_template_part('parts/functions-lib/func-register-post-archive');

// 投稿タイトルが長い際に省略表示できるように
get_template_part('parts/functions-lib/func-omit-post-title');

// SEO Simple Packページタイトル上書き
get_template_part('parts/functions-lib/func-overwrite-ssp-title');

// デフォルトの投稿のパンくずリストをarchive.phpやsingle.phpで表示
get_template_part('parts/functions-lib/func-add-breadcrumb-about-post');

// 投稿タイプ「staff」アーカイブページのパンくずリスト表示名の設定
get_template_part('parts/functions-lib/func-change-breadcrumb-staff');

// ページ分割投稿におけるページネーションに、number表記とnext表記を両立
get_template_part('parts/functions-lib/func-add-new-mode-to-wp-link-pages');

// サイドバーをウィジェットに登録
get_template_part('parts/functions-lib/func-register-sidebar');

// Contact Form 7 送信完了時にサンクスページへリダイレクト
get_template_part('parts/functions-lib/func-add-contactform7-thanks-page');
