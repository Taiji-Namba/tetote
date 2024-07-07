<?php
/*
Template Name: ABOUT US
*/
?>

<?php get_header(); ?>

<?php
$args = ['class' => 'about-us', 'title' => 'ABOUT US', 'subtitle' => 'TETOTEについて', 'text' => '私たちの理念を紹介をします。'];
get_template_part('parts/common/p-eyecatch', null, $args); ?>

<?php get_template_part('parts/common/p-breadcrumb'); ?>

<main class="c-main p-main p-page">
  <div class="c-main__inner p-main__inner l-page--small">
    <section class="p-about-us-section p-what-we-value">
      <h2 class="p-about-us-section__title p-about-us-section__title--center">私たちが大切にしていること</h2>
      <ul class="p-what-we-value__list">
        <li class="p-what-we-value__item">
          <h3 class="p-what-we-value__heading"><span class="p-what-we-value__number">1</span><span class="p-what-we-value__title">飽くなき探求心で、革新を創り出す</span></h3>
          <p class="p-what-we-value__text">100年を超える歴史を誇りながらも、常に挑戦し続ける気概を忘れずに、未来を切り開くソリューションを提供し続けます。変化を恐れず、最新技術やトレンドを積極的に研究し、お客様のニーズを超える価値を生み出すことに情熱を燃やしています。</p>
        </li>
        <li class="p-what-we-value__item">
          <h3 class="p-what-we-value__heading"><span class="p-what-we-value__number">2</span><span class="p-what-we-value__title">デジタル技術の力で、未来を加速させる</span></h3>
          <p class="p-what-we-value__text">ITコンサルタント会社として、業務効率化やイノベーション創出に貢献するために、デジタル技術を活用した最適なソリューションを提案します。自動化、データ分析、AIなどの技術を駆使し、お客様のビジネスを革新し、未来への飛躍を力強くサポートします。</p>
        </li>
        <li class="p-what-we-value__item">
          <h3 class="p-what-we-value__heading"><span class="p-what-we-value__number">3</span><span class="p-what-we-value__title">人材こそが、未来への鍵</span></h3>
          <p class="p-what-we-value__text">従業員一人ひとりが、高い専門性と人間性を兼ね備えた人材であることが、お客様への最高のサービスにつながると確信しています。個々の能力やキャリア目標に合わせた育成プログラムや、多様な経験を積む機会を提供することで、成長を支援します。</p>
        </li>
        <li class="p-what-we-value__item">
          <h3 class="p-what-we-value__heading"><span class="p-what-we-value__number">4</span><span class="p-what-we-value__title">未経験者も歓迎！情熱と意欲があれば、誰でも活躍できる</span></h3>
          <p class="p-what-we-value__text">IT業界未経験の方でも、熱意と向上心があれば、当社で活躍できるチャンスがあります。研修やOJTを通じて、必要な知識やスキルを丁寧に習得し、即戦力となる人材へと育成します。先輩社員によるサポート体制も充実しているので、安心してスキルアップを目指せます。</p>
        </li>
        <li class="p-what-we-value__item">
          <h3 class="p-what-we-value__heading"><span class="p-what-we-value__number">5</span><span class="p-what-we-value__title">働きがいと充実感あふれる環境</span></h3>
          <p class="p-what-we-value__text">ワークライフバランスを重視し、従業員が働きがいと充実感を感じられる環境づくりに積極的に取り組んでいます。充実した福利厚生制度や、多様な働き方を可能にする制度を導入し、個々のライフスタイルに合わせた働き方を支援します。</p>
        </li>
      </ul>
    </section>

    <section class="p-about-us-section p-ceo-message">
      <div class="p-about-us-section__wrapper--mt125">
        <h2 class="p-about-us-section__title p-about-us-section__title--center">代表メッセージ</h2>
        <div class="p-ceo-message__container">
          <img class="p-ceo-message__img" srcset="<?php echo esc_url(get_template_directory_uri() . '/assets/images/parts/about-us/ceo.jpg'); ?>, <?php echo esc_url(get_template_directory_uri() . '/assets/images/parts/about-us/ceo@2x.jpg'); ?> 2x"" src=" <?php echo esc_url(get_template_directory_uri() . '/assets/images/parts/about-us/ceo.jpg'); ?>" alt="">
          <div class="p-ceo-message__text-group">
            <p class="p-ceo-message__catchphrase">
              あなたがやりたいこと<br>
              それを全力でサポートできる、<br>
              それがTETOTEの強みです。
            </p>
            <p class="p-ceo-message__text">TETOTEは、ITコンサルティングとコンサル導入企業への営業を専門とする会社です。設立以来、私たちは「お客様の課題解決に真摯に取り組み、共に成長する」という理念を掲げ、お客様とパートナーと共に歩んできました。</p>
            <p class="p-ceo-message__text">お客様のニーズを深く理解し、最適なソリューションを提供することで、数多くの課題解決を支援してきました。その結果、お客様との深い信頼関係を築き、共に成長することができています。</p>
            <p class="p-ceo-message__text">TETOTEは、個々の能力や個性を尊重し、多様な人材が活躍できる環境づくりに力を入れています。年齢、性別、国籍、経験などに関係なく、意欲と向上心のある人材を歓迎します。</p>
            <p class="p-ceo-message__text">私たちと共に、未来を創造していきましょう。</p>
            <img class="p-ceo-message__ceo-name" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/parts/about-us/ceo-name.svg'); ?>" alt="田中浩二郎">
          </div>
        </div>
      </div>
    </section>

    <section class="p-about-us-section p-services">
      <div class="p-about-us-section__wrapper--mt111">
        <h2 class="p-about-us-section__title">事業紹介</h2>
        <p class="p-services__lede">TETOTEの主力事業である「コンサルティング」以外に、新規に取り組んでいる事業をいくつか<br class="u-break--tab-and-pc">紹介させていただきます。</p>
        <div class="p-services__contents">
          <div class="p-services__content">
            <div class="p-services__image p-services__image--consulting"></div>
            <div class="p-services__text-group p-services__text-group--first">
              <h3 class="p-services__heading">コンサルティング事業</h3>
              <p class="p-services__large-text">お客様と伴走し、<br class="u-break--sp" />売上に直接貢献できる</p>
              <p class="p-services__explanatory-text">営業との連携で、人と組織の成長・変革に向けた計画立案・サービス実施、さらにフォローまで。コンサルタントとして一気通貫で携わります。</p>
            </div>
          </div>
          <div class="p-services__border"></div>
          <div class="p-services__content">
            <div class="p-services__image p-services__image__solution-sales"></div>
            <div class="p-services__text-group p-services__text-group--second">
              <h3 class="p-services__heading">ソリューション営業事業</h3>
              <p class="p-services__large-text">お客様の課題を見つけ出し、<br class="u-break--sp" />必要な施策を提案する</p>
              <p class="p-services__explanatory-text">お客様が抱える課題へ、ヒアリングベースで提案型営業を行い、コンサルタントとの連携で課題解決を目指します。</p>
            </div>
          </div>
          <div class="p-services__border"></div>
          <div class="p-services__content">
            <div class="p-services__image p-services__image--system-engineering"></div>
            <div class="p-services__text-group p-services__text-group--third">
              <h3 class="p-services__heading">業務系システム開発事業</h3>
              <p class="p-services__large-text">お客様の課題解決を強力に<br class="u-break--sp" />サポートする<br class="u-break--tab-and-pc">システムを<br class="u-break--xxs" />設計する</p>
              <p class="p-services__explanatory-text">基本設計書に従って開発とテストを実施し、本番稼働をサポート。企画から運用までの全工程を通じて包括的なアプローチで、安定した運用と迅速な対応を保証します。</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="p-about-us-section">
      <div class="p-about-us-section__wrapper-mt150">
        <h2 class="p-about-us-section__title">会社概要</h2>
        <table class="p-page-contents__table">
          <tbody class="p-page-contents__table-body">
            <tr class="p-page-contents__table-row">
              <th class="p-page-contents__table-heading">会社名</th>
              <td class="p-page-contents__table-data">TETOTE株式会社</td>
            </tr>
            <tr class="p-page-contents__table-row">
              <th class="p-page-contents__table-heading">所在地</th>
              <td class="p-page-contents__table-data">〒100-0001 東京都千代田区千代田 1-1-1</td>
            </tr>
            <tr class="p-page-contents__table-row">
              <th class="p-page-contents__table-heading">代表者名</th>
              <td class="p-page-contents__table-data">田中 浩二郎 (代表取締役)</td>
            </tr>
            <tr class="p-page-contents__table-row">
              <th class="p-page-contents__table-heading">事業内容</th>
              <td class="p-page-contents__table-data">
                <ul>
                  <li class="p-page-contents__table-li">ITコンサルティング</li>
                  <li class="p-page-contents__table-li">コンサル導入企業への営業</li>
                </ul>
              </td>
            </tr>
            <tr class="p-page-contents__table-row">
              <th class="p-page-contents__table-heading">電話番号</th>
              <td class="p-page-contents__table-data">03-1234-5678</td>
            </tr>
            <tr class="p-page-contents__table-row">
              <th class="p-page-contents__table-heading">ウェブサイトURL</th>
              <td class="p-page-contents__table-data">https://tetote.co.jp</td>
            </tr>
            <tr class="p-page-contents__table-row">
              <th class="p-page-contents__table-heading">メールアドレス</th>
              <td class="p-page-contents__table-data">tetote@tetote.co.jp</td>
            </tr>
            <tr class="p-page-contents__table-row">
              <th class="p-page-contents__table-heading">設立年月</th>
              <td class="p-page-contents__table-data">1923年4月1日</td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>
  </div>
</main>


<?php get_footer(); ?>