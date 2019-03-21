<?php

add_theme_support( 'title-tag' );
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
add_theme_support( 'automatic-feed-links' );

register_nav_menu( 'header-nav' , 'メインメニュー' );

get_template_part('functions/original_widget');
get_template_part('functions/original_menu');
get_template_part('functions/get_image');
get_template_part('functions/pagination');

function widgetarea_init() {
  register_sidebar(array( 
    'name' => 'ページネーション下',
    'id' => 'under-pagination',
    'before_widget' => '<div id="%1$s" class="%2$s" footer-wrapper>',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="under-pagination">',
    'after_title' => '</h4>'
  ) );
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




