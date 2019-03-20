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
        <?php if( has_category() ): ?>
          <div class="article-category">
            <?php echo get_the_category_list( ',' ); ?>
          </div>
        <?php endif; ?>
        <div class="artile-tag">
          <?php the_tags( '<ul><li>','</li><li>','</li></ul>' ); ?>
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
      <?php previous_post_link(); ?>
      <?php next_post_link(); ?>
    <?php endif; ?>
  </div>
</div>
<?php get_footer(); ?>
