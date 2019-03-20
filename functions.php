<?php

add_theme_support( 'title-tag' );
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
add_theme_support( 'automatic-feed-links' );

register_nav_menu( 'header-nav' , 'メインメニュー' );

function widgetarea_init() {
  register_sidebar(array( 
    'name' => 'フッター左側',
    'id' => 'footer-widget-left',
    'before_widget' => '<div id="%1$s" class="%2$s" footer-wrapper>',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="footer-title">',
    'after_title' => '</h4>'
  ) );
  register_sidebar(array( 
    'name' => 'フッター中央',
    'id' => 'footer-widget-middle',
    'before_widget' => '<div id="%1$s" class="%2$s" footer-wrapper>',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="footer-title">',
    'after_title' => '</h4>'
  ) );
  register_sidebar(array( 
    'name' => 'フッター右側',
    'id' => 'footer-widget-right',
    'before_widget' => '<div id="%1$s" class="%2$s" footer-wrapper>',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="footer-title">',
    'after_title' => '</h4>'
  ) );
}
add_action( 'widgets_init' , 'widgetarea_init' );

function main_color_theme_customize_resister($wp_customize) {
  $wp_customize->add_section( 'main_setting', array(
    'title' => '色設定',
    'priority' => '10',
  ) );

  $wp_customize->add_setting( 'main_color' , array(
    'default'    => '#333',
    'sanitize_callback' => 'sanitize_hex_color',
  ) );
  $wp_customize->add_setting( 'link_color' , array(
    'default'    => '#1111cc',
    'sanitize_callback' => 'sanitize_hex_color',
  ) );
  $wp_customize->add_setting( 'title_color' , array(
    'default'    => '#333',
    'sanitize_callback' => 'sanitize_hex_color',
  ) );

  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'main_color', array(
      'label'      => __( 'メインカラー', 'textdomain' ),
      'section'    => 'main_setting',
      'priority' => 10,
  )));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_color', array(
      'label'      => __( 'リンクカラー', 'textdomain' ),
      'section'    => 'main_setting',
      'priority' => 10,
  )));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'title_color', array(
      'label'      => __( 'サイトタイトルカラー', 'textdomain' ),
      'section'    => 'main_setting',
      'priority' => 10,
  )));
}
add_action( 'customize_register' , 'main_color_theme_customize_resister' );
if ( get_theme_mod( 'main_color', 'default' ) !== 'default' ) {
  function theme_main_color(){
    $main_color = get_theme_mod( 'main_color' );
    ?>
    <style>.main_color { background-color: <?php echo esc_html( $main_color ); ?>; }</style>
    <?php
  }
  add_action( 'wp_head', 'theme_main_color' );
}
if ( get_theme_mod( 'link_color', 'default' ) !== 'default' ) {
  function theme_link_color(){
    $link_color = get_theme_mod( 'link_color' );
    ?>
    <style> a { color: <?php echo esc_html( $link_color ); ?>; }</style>
    <?php
  }
  add_action( 'wp_head', 'theme_link_color' );
}
if ( get_theme_mod( 'title_color', 'default' ) !== 'default' ) {
  function theme_title_color(){
    $title_color = get_theme_mod( 'title_color' );
    ?>
    <style>.site-title a { color: <?php echo esc_html( $title_color ); ?>; }</style>
    <?php
  }
  add_action( 'wp_head', 'theme_title_color' );
}

function catch_that_image() {
    global $post, $posts;
    $first_img = '';
    ob_start();
    ob_end_clean();
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    $first_img = $matches [1] [0];
  
    if(empty($first_img)){
        // 記事内で画像がなかったときのためのデフォルト画像を指定
        $first_img = "/images/default.jpg";
    }
    return $first_img;
}

function pagination($pages,$paged){

  $pages = (int) $pages;
  $paged = $paged ?: 1;

  $text_first = '&laquo;';
  $text_prev  = '&lt;';
  $text_next  = '&gt;';
  $text_last  = '&raquo;';

  if ( $pages === 1 ) return;

  if ( 1 !== $pages ) {
    echo '<div class="pagination">';
    if ( $pages > 2 &&  $paged > 2 ) {
      echo '<a href="', get_pagenum_link(1) ,'" class="first">', $text_first , '</a>';
    }
    if ( $paged > 1 ) {
      echo '<a href="', get_pagenum_link( $paged - 1 ) ,'" class="prev">', $text_prev ,'</a>';
    }
    if ( $paged < $pages ) {
      echo '<a href="', get_pagenum_link( $paged + 1 ) ,'" class="next">', $text_next ,'</a>';
    }
    if ( $paged < $pages && $pages > 2 ) {
      echo '<a href="', get_pagenum_link( $pages ) ,'" class="last">', $text_last ,'</a>';
    }
    echo '</div>';
  }
}



