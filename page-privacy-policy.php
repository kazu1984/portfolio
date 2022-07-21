<?php get_header(); ?>

<div class="l-sub l-inner">
  <div class="p-privacy">
    <h2 class="p-privacy__title"><?php the_title(); ?></h2>
    <div class="p-privacy__contents c-message-box">
      <?php the_content(); ?>
    </div>
  </div>
</div>


<?php get_footer(); ?>