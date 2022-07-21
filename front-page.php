<?php get_header(); ?>

<div class="p-mv" id="top">
  <div class="p-mv__inner">
    <h1 class="p-mv__title"><?php bloginfo('name'); ?></h1>
    <p class="p-mv__subtitle">portfolio</p>
  </div>
</div>

<section class="l-section" id="about">
  <div class="l-section__inner l-inner">
    <h2 class="l-section__title c-section-title">私について</h2>
    <div class="l-section__content p-top-about">
      <figure class="p-top-about__img">
        <img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/images/common/profile.jpg' ?>" alt="">
      </figure>
      <div class="p-top-about__profile">
        <p class="p-top-about__name">kazuto iogawa</p>
        <p class="p-top-about__area">島根県在住</p>
      </div>
      <div class="p-top-about__message c-message-box">
        <p>過去に5年ほどシステム会社のエンジニアとして働き、システム設計、開発、保守、運用に携わりました。</p>
        <p>在職中は主に、Java、Oracle、Flex等の技術を用い業務系のシステム開発に携わりました。</p>
        <p>Webサイト制作とはまた違った分野ではありますが、過去の経験を活かしてクライアント様、そしてその先のお客様も満足できるよう、しっかりコミュニケーションをとりながら業務に取り組んでいきます。
        </p>
        <p><br>【使用言語】HTML、CSS(Sass)、PHP</p>
        <p>【使用ツール】Gulp、Github、WordPress</p>
      </div>
    </div>
  </div>
</section>

<section class="l-section" id="service">
  <div class="l-section__inner l-inner">
    <h2 class="l-section__title c-section-title">サービス</h2>
    <div class="l-section__content p-top-service">
      <ul class="p-top-service__items">
        <li class="p-top-service__item">
          <figure class="p-top-service__img">
            <img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/images/common/service1.png' ?>" alt="">
          </figure>
          <h3 class="p-top-service__title c-lv3-heading">コーディング</h3>
          <p class="p-top-service__text">デザインカンプを頂き、コーディングを行います。見た目通りに再現するだけじゃなく、今後の保守等を考えてメンテナンスを行いやすいような設計を心がけてコーディングします。</p>
        </li>
        <li class="p-top-service__item">
          <figure class="p-top-service__img">
            <img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/images/common/service2.png' ?>" alt="">
          </figure>
          <h3 class="p-top-service__title c-lv3-heading">WordPress</h3>
          <p class="p-top-service__text">WordPressを利用しての新規作成、または既存ページのWordPress化に対応します。カスタム投稿などを用いてクライアント様からも利用しやすいように心がけて構築致します。</p>
        </li>
      </ul>
      <div class="p-top-service__message c-message-box">
        <p>その他、既存サイトのレスポンシブ化、納品後の定期的な修正等にも適宜、迅速にお応え致します。</p>
        <p>また、製作中の進捗報告、納品時の品質チェック等もお客様の安心につながるように心がけていきます。</p>
      </div>
    </div>
  </div>
</section>

<section class="l-section" id="work">
  <div class="l-section__inner l-inner">
    <h2 class="l-section__title c-section-title">制作実績</h2>
    <div class="l-section__content p-top-work">
      <?php if (have_posts()) : ?>
        <div class="p-top-work__cards p-cards">
          <?php while (have_posts()) : the_post(); ?>
            <a href="<?php the_permalink(); ?>" class="p-card">
              <figure class="p-card__img">
                <?php the_post_thumbnail(); ?>
              </figure>
              <h3 class="p-card__title"><?php the_title(); ?></h3>
              <div class="p-card__button"><span class="c-arrow"></span></div>
            </a>
          <?php endwhile; ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<section class="l-section" id="contact">
  <div class="l-section__inner l-inner">
    <h2 class="l-section__title c-section-title">お問い合わせ</h2>
    <div class="l-section__content p-top-contact">
      <p class="p-top-contact__text">ご不明な点などお気軽にお問い合わせください。</p>
      <p class="p-top-contact__text">1〜2営業日以内に返信させていただきます。</p>
      <div class="p-top-contact__form p-form c-message-box">
        <?php echo do_shortcode('[contact-form-7 id="70" title="お問い合わせ"]'); ?>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>