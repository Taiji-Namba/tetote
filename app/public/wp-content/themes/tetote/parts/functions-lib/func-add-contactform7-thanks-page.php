<?php

/**
 * Contact Form 7 送信完了時にサンクスページへリダイレクト
 */

add_action('wp_footer', 'add_original_thanks_page');
function add_original_thanks_page()
{
  $thanks_page_url = esc_url(site_url('/entry-thanks/'));
  echo <<<EOC
    <script>
      document.addEventListener( 'wpcf7mailsent', function( event ) {
        location = '{$thanks_page_url}';
      }, false );
    </script>
  EOC;
}
