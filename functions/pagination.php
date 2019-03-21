<?php

function pagination($pages,$paged){

  $pages = (int) $pages;
  $paged = $paged ?: 1;

  $text_first = '<img src="'.get_template_directory_uri().'/images/first_page.svg">';
  $text_prev  = '<img src="'.get_template_directory_uri().'/images/chevron_left.svg">';
  $text_next  = '<img src="'.get_template_directory_uri().'/images/chevron_right.svg">';
  $text_last  = '<img src="'.get_template_directory_uri().'/images/last_page.svg">';

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

?>
