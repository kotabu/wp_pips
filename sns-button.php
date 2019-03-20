<?php
$url_encode = urlencode( get_permalink() );
$title_encode = urlencode( get_the_title() );
?>
<ul class="sns-button">
<!-- twitter -->
  <li class="sns-twitter">
     <a class="sns-link" target="_blank" href="<?php echo esc_url( 'https://twitter.com/share?url=' . $url_encode . '&text=' . $title_encode ); ?>">Twitter</a>
  </li>
<!-- facebook -->
  <li class="sns-fb">
     <a class="sns-link" target="_blank" href="<?php echo esc_url( 'https://www.facebook.com/share.php?u=' . $url_encode ); ?>">Facebook</a>
  </li>
<!-- line -->
  <li class="sns-line">
     <a class="sns-link" target="_blank" href="<?php echo esc_url( 'https://line.me/R/msg/text/?' . $title_encode . '%0A' . $url_encode ); ?>">LINE</a>
  </li>
<!-- Pocket -->
  <li class="sns-pocket">
     <a class="sns-link" target="_blank" href="<?php echo esc_url( 'https://getpocket.com/edit?url=' . $url_encode . '&title=' . $title_encode ); ?>">Pocket</a>
  </li>
<!-- hatena -->
  <li class="sns-hatena">
     <a class="sns-link" target="_blank" href="<?php echo esc_url( 'https://b.hatena.ne.jp/add?mode=confirm&url=' . $url_encode ); ?>">はてなブックマーク</a>
  </li>
<!-- rss -->
  <li class="sns-rss">
    <a class="sns-link" target="_blank" href="http://app1.localnet/?feed=rss">RSS</a>
  </li>
<!--search -->
  <li class="sns-search">
    <?php get_search_form(); ?>
  </li>
</ul>
