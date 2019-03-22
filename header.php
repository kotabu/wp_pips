<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
  <?php get_template_part( 'meta' ); ?>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
  <div class="header-inner">
    <div class="site-title">
      <h1><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
    </div>
    <div class="description">
      <p><?php bloginfo('description'); ?></p>
    </div>
    <div class="header-button">
      <?php get_template_part( 'sns-button' ); ?>
    </div>
    <div class="menubutton">
    <img class="menu-img" src="<?php echo get_template_directory_uri(); ?>/images/menu.svg">
      <?php wp_nav_menu(array(
        'theme_location' => 'header-nav',
        'container' => 'nav',
        'container_class' => 'header-nav',
        'container_id' => 'header-nav',
        'fallback_cb' => ''
      ) ); ?>
    </div>
  </div>
  <div class="searchbutton">
    <img class="menu-img" src="<?php echo get_template_directory_uri(); ?>/images/image_search.svg">
    <div class="searchform"><?php get_search_form(); ?></div>
  </div>
</header>
