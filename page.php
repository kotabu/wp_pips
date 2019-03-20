<?php get_header(); ?>
<div class="container">
  <div class="contents">
    <?php if( have_posts() ): the_post();  ?>
      <article <?php post_class( 'article' ); ?>>
        <div class="article-info">
          <div class="article-date">
            <time datetime="<?php echo get_the_date('Y-m-d'); ?>">
              <?php echo get_the_date(); ?>
            </time>
          </div>
        </div>
        <?php if ( has_post_thumbnail() ): ?>
          <div class="article-thumbnail">
            <?php the_post_thumbnail(); ?>
          </div>
        <?php endif; ?>
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
      </article>
    <?php endif; ?>
  </div>
</div>
<?php get_footer(); ?>
