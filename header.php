<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-wdith, initial-scale=1.0">
  <meta rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
  <div class="header-inner">
    <div class="site-title">
      <h1><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
    </div>
    <div class="sharebutton"><?php get_template_part( 'sns-button' ); ?></div>
    <div class="menubutton">MENU</div>
    <?php wp_nav_menu(array(
      'theme_location' => 'header-nav',
      'container' => 'nav',
      'container_class' => 'header-nav',
      'container_id' => 'header-nav',
      'fallback_cb' => ''
    ) ); ?>
  </div>
</header>
