<?php get_header(); ?>
<div class="container">
  <div class="contents">
    <div class="latest-posts">
    <?php if( get_option( 'popular-toggle' ) ): ?>
      <h2 class="front-subtitle">Latest Posts</h2>
    <?php endif; ?>
      <?php get_template_part( 'latest-posts' );?>
    </div>
    <?php if( get_option( 'popular-toggle' ) ): ?>
    <div class="popular-posts">
      <h2 class="front-subtitle">Popular Posts</h2>
      <?php get_template_part( 'popular-posts' ); ?>
    </div>
    <?php endif; ?>
  </div>
</div>
<?php get_template_part( 'under-contents' ); ?>
<?php get_footer(); ?>
