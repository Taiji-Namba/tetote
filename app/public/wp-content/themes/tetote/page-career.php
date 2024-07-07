<?php
/*
Template Name: CAREER
*/
?>

<?php get_header(); ?>

<?php
$args = ['class' => 'career', 'title' => 'CAREER', 'subtitle' => '研修制度とキャリアパス', 'text' => 'キャリアパスを支える充実した、研修制度'];
get_template_part('parts/common/p-eyecatch', null, $args); ?>

<?php get_template_part('parts/common/p-breadcrumb'); ?>

<main class="c-main p-main p-page p-career">
  <div class="c-main__inner p-main__inner l-page--common">
    <h2 class="p-page__title">キャリアパスに沿った研修制度を用意</h2>
    <p class="p-page__lede">弊社では、コンサルタントのキャリアパスを、大きく4つのステージに分けています。</p>
    <section class="p-career__career-path">
      <img srcset="<?php echo esc_url(get_template_directory_uri() . '/assets/images/parts/career/tetote-career-path.jpg'); ?>, <?php echo esc_url(get_template_directory_uri() . '/assets/images/parts/career/tetote-career-path@2x.jpg'); ?> 2x" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/parts/career/tetote-career-path.jpg'); ?>" alt="TETOTEでのキャリアパス(コンサルタントの場合)" class="p-career__img">
      <p class="p-career__career-path-text">TETOTE は、コンサルタントのキャリアパスを支えるために、以下の独自の研修制度を設けています。</p>
    </section>
    <section class="p-career__training">
      <h3 class="p-career__career-training-heading">1.ケーススタディ研修</h3>
      <p class="p-career__career-training-text">TETOTE の過去のプロジェクト事例を基にしたケーススタディ研修を実施しています。<br>
        この研修では、実際のプロジェクトで直面する課題を解決するために、分析力、問題解決能力、プレゼンテーション能力などを実践的に習得することができます。</p>
      <h3 class="p-career__career-training-heading">2. クライアント対応研修</h3>
      <p class="p-career__career-training-text">TETOTE は、クライアントとの信頼関係構築を重視しています。<br>
        この研修では、クライアントとのコミュニケーションスキル、交渉スキル、プレゼンテーションスキルなどを習得し、クライアントの課題解決に貢献できるコンサルタントを育成します。</p>
      <h3 class="p-career__career-training-heading">3. 専門知識研修</h3>
      <p class="p-career__career-training-text">財務、会計、ITなど、コンサルタント業務に必要な専門知識を習得するための研修を実施しています。<br>
        TETOTE は、幅広い分野の知識を持つコンサルタントを育成し、クライアントに最適なソリューションを提供できるようにしています。</p>
      <h3 class="p-career__career-training-heading">4. マネジメント研修</h3>
      <p class="p-career__career-training-text">プロジェクトマネジメント、リーダーシップ、チームビルディングなど、マネジメントスキルを習得するための研修を実施しています。<br>
        TETOTE は、将来的にマネジメント層を担うコンサルタントを育成し、組織全体の成長を促進しています。</p>
      <h3 class="p-career__career-training-heading">5. 外部研修</h3>
      <p class="p-career__career-training-text">社外で実施される研修にも積極的に参加することができます。<br>
        TETOTE は、最新の知識やスキルを習得し、常に成長し続けるコンサルタントを育成します。</p>
    </section>
  </div>
</main>.

<?php get_footer(); ?>