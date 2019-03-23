<?php


function view_setting_customize_resister($wp_customize) {
  $wp_customize->add_section( 'view-setting', array(
    'title' => '表示設定',
    'priority' => '10',
  ) );

  $wp_customize->add_setting( 'title-img' , array(
    'type' => 'option',
  ) );
  $wp_customize->add_setting( 'popular-toggle' , array(
    'type' => 'option',
  ) );
  $wp_customize->add_setting( 'sns-button' , array(
    'type' => 'option',
  ) );

  $wp_customize->add_control( 'popular-toggle', array(
    'settings' => 'popular-toggle',
    'label' => '人気記事を表示する',
    'section' => 'view-setting',
    'type' => 'checkbox',
    ));  
if( class_exists('WP_Customize_Image_Control') ):
  $wp_customize->add_control ( new WP_Customize_Image_Control( $wp_customize, 'title-img', array(
    'settings' => 'title-img',
    'label' => 'タイトル用の画像（設定しない場合はテキスト表示になります）',
    'section' => 'view-setting',
  ) ));
endif;
 $wp_customize->add_control ( 'sns-button' , array(
    'settings' => 'sns-button',
    'label' => 'フォントの太さの設定',
    'section' => 'view-setting',
    'type' => 'radio',
    'choices' => array(
      'Default' => 'デフォルト',
      'type1' => 'タイプ1',
    ),
  ) );
}
add_action( 'customize_register' , 'view_setting_customize_resister' );

function font_setting_customize_resister($wp_customize) {
  $wp_customize->add_section( 'font-setting', array(
    'title' => 'フォント設定',
    'priority' => '10',
  ) );

  $wp_customize->add_setting( 'display-font' , array(
    'type' => 'option',
  ) );
  $wp_customize->add_setting( 'font' , array(
    'type' => 'option',
  ) );

 $wp_customize->add_control ( 'display-font' , array(
    'settings' => 'display-font',
    'label' => 'ディスプレイフォントの種類の設定',
    'section' => 'font-setting',
    'type' => 'radio',
    'choices' => array(
      'Default' => 'デフォルト',
      'Germania One' => 'Germania One',
      'Roboto Mono' => 'Roboto Mono',
      'Baloo Chettan' => 'Baloo Chettan',
      'Inconsolata' => 'Inconsolata',
      'Margarine' => 'Margarine',
      'Indie Flower' => 'Indie Flower',
      'Lobster' => 'Lobster',
      'Pacifico' => 'Pacifico',
      'Source Code Pro' => 'Source Code Pro',
      'Dancing Script' =>  'Dancing Script',
      'Shadows Into Light' => 'Shadows Into Light',
      'Abril Fatface' => 'Abril Fatface',
      'Amatic SC' => 'Amatic SC',
      'Righteous' => 'Righteous',
      'Comfortaa' => 'Comfortaa',
      'Gloria Hallelujah' => 'Gloria Hallelujah',
      'Permanent Marker' => 'Permanent Marker',
      'Sniglet' => 'Sniglet',
      'Patrick Hand' => 'Patrick Hand',
      'Patua One' => 'Patua One',
      'Satisfy' => 'Satisfy',
      'Courgette' => 'Courgette',
      'Kaushan Script' => 'Kaushan Script',
      'Alfa Slab One' => 'Alfa Slab One'
    ),
  ) );
 $wp_customize->add_control ( 'font' , array(
    'settings' => 'font',
    'label' => 'フォントの太さの設定',
    'section' => 'font-setting',
    'type' => 'radio',
    'choices' => array(
      'Default' => '標準',
      'DemiLight' => 'やや細い',
      'Light' => '細い',
    ),
  ) );
}
add_action( 'customize_register' , 'font_setting_customize_resister' );

function meta_setting_customize_resister($wp_customize) {
  $wp_customize->add_section( 'meta_setting', array(
    'title' => 'meta設定',
    'priority' => '10',
  ) );

  $wp_customize->add_setting( 'twitter-id' , array(
    'type' => 'option',
  ) );
  $wp_customize->add_setting( 'meta-img' , array(
    'type' => 'option',
  ) );

 $wp_customize->add_control ( 'twitter-id' , array(
    'settings' => 'twitter-id',
    'label' => 'Twitterのid（例：@keshiyan1）',
    'section' => 'meta_setting',
    'type' => 'text',
  ) );
if( class_exists('WP_Customize_Image_Control') ):
  $wp_customize->add_control ( new WP_Customize_Image_Control( $wp_customize, 'meta-img', array(
    'settings' => 'meta-img',
    'label' => 'meta情報に送信する画像（設定しない場合は、サイトアイコンが使用されます）',
    'section' => 'meta_setting',
  ) ));
endif;
}
add_action( 'customize_register' , 'meta_setting_customize_resister' );

function main_color_theme_customize_resister($wp_customize) {
  $wp_customize->add_section( 'main_setting', array(
    'title' => '色設定',
    'priority' => '10',
  ) );

  $wp_customize->add_setting( 'main_color' , array(
    'default'    => '#ffffff',
    'sanitize_callback' => 'sanitize_hex_color',
  ) );
  $wp_customize->add_setting( 'link_color' , array(
    'default'    => '#1111cc',
    'sanitize_callback' => 'sanitize_hex_color',
  ) );
  $wp_customize->add_setting( 'title_color' , array(
    'default'    => '#333333',
    'sanitize_callback' => 'sanitize_hex_color',
  ) );

  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'main_color', array(
      'label'      => __( 'ヘッダーカラーー', 'textdomain' ),
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
    <style>.header_color { background-color: <?php echo esc_html( $main_color ); ?>; }</style>
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
    <style>
      .site-title a { color: <?php echo esc_html( $title_color ); ?>; }
      .description  { color: <?php echo esc_html( $title_color ); ?>; }
    </style>
    <?php
  }
  add_action( 'wp_head', 'theme_title_color' );
}

?>
