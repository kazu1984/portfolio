<?php get_header(); ?>

<div class="l-sub l-inner">
  <div class="p-sub-work">
    <div class="p-sub-work__inner">
      <div class="p-sub-work__img">
        <img src="<?php echo get_eyecatch_with_default()[0] ?>" alt="">
      </div>
      <h2 class="p-sub-work__title"><?php the_title(); ?></h2>
      <div class="p-sub-work__overview c-message-box">
        <?php the_content(); ?>
      </div>
      <dl class="p-sub-work__info">
        <dt class="p-sub-work__info-title">[URL]</dt>
        <dd class="p-sub-work__info-text">
          <a href="<?php echo get_field('url'); ?>" class="c-link"><?php the_field('url'); ?></a>
        </dd>
        <dt class="p-sub-work__info-title">[Basic認証ID]</dt>
        <dd class="p-sub-work__info-text"><?php the_field('id'); ?></dd>
        <dt class="p-sub-work__info-title">[Basic認証PASS]</dt>
        <dd class="p-sub-work__info-text"><?php the_field('password'); ?></dd>
        <div class="p-sub-work__info-space"></div>
        <dt class="p-sub-work__info-title">[製作期間]</dt>
        <dd class="p-sub-work__info-text"><?php the_field('create_time'); ?></dd>
        <dt class="p-sub-work__info-title">[ソースコード]</dt>
        <dd class="p-sub-work__info-text">
          <a href="<?php echo get_field('source'); ?>" class="c-link"><?php the_field('source'); ?></a>
        </dd>
      </dl>
      <h3 class="p-sub-work__sub-title">特徴</h3>
      <ul class="p-sub-work__feature">
        <?php $feature = get_field('feature'); ?>
        <?php for ($i = 1; $i < count(get_field('feature')); $i++) { ?>
          <?php if (!empty($feature['feature' . $i])) { ?>
            <li><?php echo $feature['feature' . $i]; ?></li>
          <?php } ?>
        <?php } ?>
      </ul>
    </div>
  </div>
</div>

<?php get_footer(); ?>