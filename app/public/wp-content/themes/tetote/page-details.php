<?php
/*
Template Name: DETAILS
*/
?>

<?php get_header(); ?>

<?php
$args = ['class' => 'details', 'title' => 'DETAILS', 'subtitle' => '募集要項', 'text' => 'TETOTEは幅広く仲間を募集しています。'];
get_template_part('parts/common/p-eyecatch', null, $args); ?>

<?php get_template_part('parts/common/p-breadcrumb'); ?>

<main class="c-main p-main p-page">
  <div class="c-main__inner p-main__inner l-page--common">
    <h2 class="p-page__title">あなたが輝ける場所が、ここにはある</h2>
    <p class="p-page__lede">TETOTEでは、コンサルタントを中心に、様々な職種を募集しています。</p>
    <div class="p-scroll-button">
      <ul class="p-scroll-button__list p-scroll-button__list--mt70">
        <li class="p-scroll-button__item">
          <a href="<?php echo esc_url(home_url()) . '/details/#consultant'; ?>" class="c-button p-button p-scroll-button__anchor"><span class="p-scroll-button__anchor-text">コンサルタント<img class="p-scroll-button__img" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/common/arrow03.svg'); ?>" alt="ボタンの矢印"></span></a>
        </li>
        <li class="p-scroll-button__item">
          <a href="<?php echo esc_url(home_url()) . '/details/#solution-sales'; ?>" class="c-button p-button p-scroll-button__anchor"><span class="p-scroll-button__anchor-text">ソリューション営業<img class="p-scroll-button__img" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/common/arrow03.svg'); ?>" alt="ボタンの矢印"></span></a>
        </li>
        <li class="p-scroll-button__item">
          <a href="<?php echo esc_url(home_url()) . '/details/#system-engineer'; ?>" class="c-button p-button p-scroll-button__anchor"><span class="p-scroll-button__anchor-text">システムエンジニア<img class="p-scroll-button__img" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/common/arrow03.svg'); ?>" alt="ボタンの矢印"><span></a>
        </li>
      </ul>
    </div>
    <section class="p-page-contents" id="consultant">
      <div class="p-page-contents__wrapper--mt97">
        <h2 class="p-page-contents__category">募集要項-コンサルタント</h2>
        <table class="p-page-contents__table">
          <tbody class="p-page-contents__table-body">
            <tr class="p-page-contents__table-row">
              <th class="p-page-contents__table-heading">職種名</th>
              <td class="p-page-contents__table-data">コンサルタント</td>
            </tr>
            <tr class="p-page-contents__table-row">
              <th class="p-page-contents__table-heading">雇用形態</th>
              <td class="p-page-contents__table-data">正社員</td>
            </tr>
            <tr class="p-page-contents__table-row">
              <th class="p-page-contents__table-heading">業務内容</th>
              <td class="p-page-contents__table-data">クライアントの課題解決のためのコンサルティング業務</td>
            </tr>
            <tr class="p-page-contents__table-row">
              <th class="p-page-contents__table-heading">就業時間</th>
              <td class="p-page-contents__table-data">9:00～18:00（フレックスタイム制）</td>
            </tr>
            <tr class="p-page-contents__table-row">
              <th class="p-page-contents__table-heading">給与</th>
              <td class="p-page-contents__table-data">年収500万円～（経験・能力による）</td>
            </tr>
            <tr class="p-page-contents__table-row">
              <th class="p-page-contents__table-heading">勤務地</th>
              <td class="p-page-contents__table-data">東京、大阪、名古屋</td>
            </tr>
            <tr class="p-page-contents__table-row">
              <th class="p-page-contents__table-heading">転勤の有無</th>
              <td class="p-page-contents__table-data">あり</td>
            </tr>
            <tr class="p-page-contents__table-row">
              <th class="p-page-contents__table-heading">休日休暇</th>
              <td class="p-page-contents__table-data">土日祝日、年末年始、夏季休暇</td>
            </tr>
            <tr class="p-page-contents__table-row">
              <th class="p-page-contents__table-heading">選考について</th>
              <td class="p-page-contents__table-data">書類選考、面接</td>
            </tr>
            <tr class="p-page-contents__table-row">
              <th class="p-page-contents__table-heading">採用人数</th>
              <td class="p-page-contents__table-data">若干名</td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>
    <section class="p-page-contents" id="solution-sales">
      <div class="p-page-contents__wrapper--mt88">
        <h2 class="p-page-contents__category">募集要項-ソリューション営業</h2>
        <table class="p-page-contents__table">
          <tbody class="p-page-contents__table-body">
            <tr class="p-page-contents__table-row">
              <th class="p-page-contents__table-heading">職種名</th>
              <td class="p-page-contents__table-data">ソリューション営業</td>
            </tr>
            <tr class="p-page-contents__table-row">
              <th class="p-page-contents__table-heading">雇用形態</th>
              <td class="p-page-contents__table-data">正社員</td>
            </tr>
            <tr class="p-page-contents__table-row">
              <th class="p-page-contents__table-heading">業務内容</th>
              <td class="p-page-contents__table-data">顧客の課題解決のためのソリューション提案、販売</td>
            </tr>
            <tr class="p-page-contents__table-row">
              <th class="p-page-contents__table-heading">就業時間</th>
              <td class="p-page-contents__table-data">9:00～18:00（フレックスタイム制）</td>
            </tr>
            <tr class="p-page-contents__table-row">
              <th class="p-page-contents__table-heading">給与</th>
              <td class="p-page-contents__table-data">年収500万円～（経験・能力による）</td>
            </tr>
            <tr class="p-page-contents__table-row">
              <th class="p-page-contents__table-heading">勤務地</th>
              <td class="p-page-contents__table-data">東京、大阪、名古屋</td>
            </tr>
            <tr class="p-page-contents__table-row">
              <th class="p-page-contents__table-heading">転勤の有無</th>
              <td class="p-page-contents__table-data">あり</td>
            </tr>
            <tr class="p-page-contents__table-row">
              <th class="p-page-contents__table-heading">休日休暇</th>
              <td class="p-page-contents__table-data">土日祝日、年末年始、夏季休暇</td>
            </tr>
            <tr class="p-page-contents__table-row">
              <th class="p-page-contents__table-heading">選考について</th>
              <td class="p-page-contents__table-data">書類選考、面接</td>
            </tr>
            <tr class="p-page-contents__table-row">
              <th class="p-page-contents__table-heading">採用人数</th>
              <td class="p-page-contents__table-data">若干名</td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>
    <section class="p-page-contents" id="system-engineer">
      <div class="p-page-contents__wrapper--mt88">
        <h2 class="p-page-contents__category">募集要項-システムエンジニア</h2>
        <table class="p-page-contents__table">
          <tbody class="p-page-contents__table-body">
            <tr class="p-page-contents__table-row">
              <th class="p-page-contents__table-heading">職種名</th>
              <td class="p-page-contents__table-data">システムエンジニア</td>
            </tr>
            <tr class="p-page-contents__table-row">
              <th class="p-page-contents__table-heading">雇用形態</th>
              <td class="p-page-contents__table-data">正社員</td>
            </tr>
            <tr class="p-page-contents__table-row">
              <th class="p-page-contents__table-heading">業務内容</th>
              <td class="p-page-contents__table-data">システム開発、インフラ構築、データ分析など</td>
            </tr>
            <tr class="p-page-contents__table-row">
              <th class="p-page-contents__table-heading">就業時間</th>
              <td class="p-page-contents__table-data">9:00～18:00（フレックスタイム制）</td>
            </tr>
            <tr class="p-page-contents__table-row">
              <th class="p-page-contents__table-heading">給与</th>
              <td class="p-page-contents__table-data">年収500万円～（経験・能力による）</td>
            </tr>
            <tr class="p-page-contents__table-row">
              <th class="p-page-contents__table-heading">勤務地</th>
              <td class="p-page-contents__table-data">東京、大阪、名古屋</td>
            </tr>
            <tr class="p-page-contents__table-row">
              <th class="p-page-contents__table-heading">転勤の有無</th>
              <td class="p-page-contents__table-data">あり</td>
            </tr>
            <tr class="p-page-contents__table-row">
              <th class="p-page-contents__table-heading">休日休暇</th>
              <td class="p-page-contents__table-data">土日祝日、年末年始、夏季休暇</td>
            </tr>
            <tr class="p-page-contents__table-row">
              <th class="p-page-contents__table-heading">選考について</th>
              <td class="p-page-contents__table-data">書類選考、面接</td>
            </tr>
            <tr class="p-page-contents__table-row">
              <th class="p-page-contents__table-heading">採用人数</th>
              <td class="p-page-contents__table-data">若干名</td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>
  </div>
</main>

<?php get_footer(); ?>