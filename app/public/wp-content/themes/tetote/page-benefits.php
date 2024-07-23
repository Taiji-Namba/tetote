<?php
/*
Template Name: BENEFITS
*/
?>

<?php get_header(); ?>

<?php
$args = ['class' => 'benefits', 'title' => 'BENEFITS', 'subtitle' => '福利厚生について', 'text' => '充実した福利厚生制度を設けています。'];
get_template_part('parts/common/p-eyecatch', null, $args); ?>

<?php get_template_part('parts/common/p-breadcrumb'); ?>

<main class="c-main p-main p-page">
  <div class="c-main__inner p-main__inner l-page--common">
    <section class="p-page-contents">
      <h2 class="p-page-contents__category">各種制度</h2>
      <table class="p-page-contents__table">
        <tbody class="p-page-contents__table-body">
          <tr class="p-page-contents__table-row">
            <th class="p-page-contents__table-heading">手当</th>
            <td class="p-page-contents__table-data">
              <ul>
                <li class="p-page-contents__table-li">通勤手当（上限月5万円）</li>
                <li class="p-page-contents__table-li">時間外割増手当</li>
                <li class="p-page-contents__table-li">役職手当</li>
                <li class="p-page-contents__table-li">退職金</li>
              </ul>
            </td>
          </tr>
          <tr class="p-page-contents__table-row">
            <th class="p-page-contents__table-heading">制度</th>
            <td class="p-page-contents__table-data">正社員</td>
          </tr>
          <tr class="p-page-contents__table-row">
            <th class="p-page-contents__table-heading">業務内容</th>
            <td class="p-page-contents__table-data">財形貯蓄</td>
          </tr>
          <tr class="p-page-contents__table-row">
            <th class="p-page-contents__table-heading">保険</th>
            <td class="p-page-contents__table-data">社会保険完備</td>
          </tr>
          <tr class="p-page-contents__table-row">
            <th class="p-page-contents__table-heading">施設</th>
            <td class="p-page-contents__table-data">
              <ul>
                <li class="p-page-contents__table-li">社員向けジム</li>
                <li class="p-page-contents__table-li">社内託児所</li>
              </ul>
            </td>
          </tr>
          <tr class="p-page-contents__table-row">
            <th class="p-page-contents__table-heading">休暇・休日</th>
            <td class="p-page-contents__table-data">
              <ul>
                <li class="p-page-contents__table-li">完全週休2日制</li>
                <li class="p-page-contents__table-li">年次有給休暇（初年度10日／年度途中入社は比例付与）</li>
                <li class="p-page-contents__table-li">年末年始休暇（12月29日～1月3日：6日間）</li>
                <li class="p-page-contents__table-li">夏季休暇（6月～9月中：5日間）</li>
                <li class="p-page-contents__table-li">慶弔休暇</li>
                <li class="p-page-contents__table-li">産前産後休暇</li>
                <li class="p-page-contents__table-li">リフレッシュ休暇（3年勤続で5日／以降5年勤続ごとに5日支給）</li>
              </ul>
            </td>
          </tr>
        </tbody>
      </table>
    </section>
    <section class="p-page-contents">
      <div class="p-page-contents__wrapper--mt128">
        <h2 class="p-page-contents__category">制度利用者の声</h2>
        <div class="p-page-contents__voice-group">
          <div class="p-page-contents__voice-container">
            <p class="p-page-contents__voice-year">2013年入社</p>
            <h3 class="p-page-contents__voice-name">堀内 優</h3>
            <p class="p-page-contents__voice-text">
              資格取得のための費用を会社が負担してくれる制度を利用して、念願の応用技術者資格を取得できました。<br>この制度は、自己啓発を支援してくれるので、とても助かります。今後は、さらにスキルアップを目指して、他の資格も取得していきたいと思っています。<br>会社が成長を支援してくれるので、安心して仕事に取り組むことができます。</p>
          </div>
          <div class="p-page-contents__voice-container">
            <p class="p-page-contents__voice-year">2015年入社</p>
            <h3 class="p-page-contents__voice-name">神凪 理沙</h3>
            <p class="p-page-contents__voice-text">
              出産後、育休を取得して、現在は短時間勤務で働いています。<br>会社が育児に理解があるので、安心して仕事に集中できます。
              特に、社内託児所があるので、子供を預けながら安心して働けるのは助かります。また、短時間勤務制度も充実しているので、自分のペースで仕事復帰することができました。<br>
              今後は、子供の成長に合わせて、勤務時間を調整しながら、長く働き続けたいと思っています。</p>
          </div>
        </div>
        <div class="p-page-contents__voice-image"></div>
      </div>
    </section>
  </div>
</main>

<?php get_footer(); ?>