<?php

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

?>
