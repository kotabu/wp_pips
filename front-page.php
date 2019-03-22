<?php get_header(); ?>
<div class="container">
  <div class="latest-posts">
    <h2 class="front-subtitle">Latest Posts</h2>
    <?php get_template_part( 'latest-posts' );?>
  </div>
  <hr>
  <div class="popular-posts">
    <h2 class="front-subtitle">Popular Posts</h2>
    <?php get_template_part( 'popular-posts' ); ?>
  </div>
</div>
<?php get_template_part( 'under-contents' ); ?>
<?php get_footer(); ?>
