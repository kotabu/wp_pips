<?php 
  if( get_option( 'sns-button' ) == 'type1' ):
    $twitter = 'twitter.svg';
    $facebook = 'facebook.svg';
    $line = 'line.svg';
    $pocket = 'pocket.svg';
    $hatena = 'hatebu.svg';
    $pinterest = 'pinterest.svg';
    $rss = 'rss.svg';
?>
<style>
  .sns-button img { opacity: 0.6; transition: 0.5s all; }
  .sns-button img:hover { opacity: 1; }
  .sns-button .sns-rss img { transform: scale(0.8); }
</style>
<?php
  else:
    $twitter = 'twitter.png';
    $facebook = 'facebook.png';
    $line = 'line.png';
    $pocket = 'pocket.png';
    $hatena = 'hatena_bookmark.png';
    $pinterest = 'pinterest.png';
    $rss = 'feed.png';
  endif;
?>


<?php
$url_encode = urlencode( get_permalink() );
$title_encode = urlencode( get_the_title() );
?>
<ul class="sns-button">
<!-- twitter -->
  <li class="sns-twitter">
  <a class="sns-link" target="_blank" href="<?php echo esc_url( 'https://twitter.com/share?url=' . $url_encode . '&text=' . $title_encode ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $twitter; ?>" alt="Twitter"/></a>
  </li>
<!-- facebook -->
  <li class="sns-fb">
     <a class="sns-link" target="_blank" href="<?php echo esc_url( 'https://www.facebook.com/share.php?u=' . $url_encode ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $facebook; ?>" alt="Facebook"/></a>
  </li>
<!-- line -->
  <li class="sns-line">
     <a class="sns-link" target="_blank" href="<?php echo esc_url( 'https://line.me/R/msg/text/?' . $title_encode . '%0A' . $url_encode ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $line; ?>" alt="Line"/></a>
  </li>
<!-- Pocket -->
  <li class="sns-pocket">
     <a class="sns-link" target="_blank" href="<?php echo esc_url( 'https://getpocket.com/edit?url=' . $url_encode . '&title=' . $title_encode ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $pocket; ?>" alt="Pocket"/></a>
  </li>
<!-- hatena -->
  <li class="sns-hatena">
     <a class="sns-link" target="_blank" href="<?php echo esc_url( 'https://b.hatena.ne.jp/add?mode=confirm&url=' . $url_encode ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $hatena; ?>" alt="Hatena_Bookmark"/></a>
  </li>
<!-- pinterest -->
  <li class="sns-pinterest">
    <a target="_blank" href="http://pinterest.com/pin/create/button/?url=<?php echo $url_encode; ?>&description=<?php echo $title_encode; ?>" class="pin-it-button" count-layout="horizontal"><img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $pinterest; ?>" alt="Pin It"/></a>
  </li>
<!-- rss -->
  <li class="sns-rss">
    <a class="sns-link" target="_blank" href="http://app1.localnet/?feed=rss"><img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $rss; ?>" alt="RSS"/></a>
  </li>
</ul>
