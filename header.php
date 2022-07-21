<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="format-detection" content="telephone=no">
  <meta name=“robots” content=“noindex”>


  <title><?php bloginfo('name'); ?></title>
  <meta name="description" content="<?php bloginfo('description') ?>">
  <link rel="shortcut icon" href="<?php echo esc_url(get_template_directory_uri()) . '/assets/images/common/icon.png' ?>">
</head>


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div class="l-container">
    <header class="l-header p-header">
      <div class="p-header__inner">
        <h1 class="p-header__logo p-logo">
          <a href="<?php echo esc_url(home_url('')) ?>#top"><?php bloginfo('name'); ?></a>
        </h1>
        <nav class="p-header__gnav p-gnav">
          <ul class="p-gnav__item">
            <li class="p-gnav__items">
              <a href="<?php echo esc_url(home_url('')) ?>#about" class="p-gnav__link c-menu-line">私について</a>
            </li>
            <li class="p-gnav__items">
              <a href="<?php echo esc_url(home_url('')) ?>#service" class="p-gnav__link c-menu-line">サービス</a>
            </li>
            <li class="p-gnav__items">
              <a href="<?php echo esc_url(home_url('')) ?>#work" class="p-gnav__link c-menu-line">制作実績</a>
            </li>
            <li class="p-gnav__items p-gnav__items--circle">
              <a href="<?php echo esc_url(home_url('')) ?>#contact" class="p-gnav__link c-button">お問い合わせ</a>
            </li>
          </ul>
        </nav>
        <button type="button" class="p-header__hamburger c-hamburger js-hamburger" aria-controls="p-drawer" aria-expanded="false">
          <span class="c-hamburger__line">
            <span class="u-visually-hidden">
              メニューを開閉する
            </span>
          </span>
        </button>
      </div>
      <div class="p-header__drawer p-drawer js-drawer" aria-hidden="true" data-click="false">
        <nav class="p-drawer__gnav p-sp-gnav">
          <ul class="p-sp-gnav__items">
            <li class="p-sp-gnav__item">
              <a href="<?php echo esc_url(home_url('')) ?>#about" class="p-sp-gnav__link js-gnav-link">私について</a>
            </li>
            <li class="p-sp-gnav__item">
              <a href="<?php echo esc_url(home_url('')) ?>#service" class="p-sp-gnav__link js-gnav-link">サービス</a>
            </li>
            <li class="p-sp-gnav__item">
              <a href="<?php echo esc_url(home_url('')) ?>#work" class="p-sp-gnav__link js-gnav-link">制作実績</a>
            </li>
            <li class="p-sp-gnav__item">
              <a href="<?php echo esc_url(home_url('')) ?>#contact" class="p-sp-gnav__link js-gnav-link">お問い合わせ</a>
            </li>
          </ul>
        </nav>
      </div>
    </header>
    <main>