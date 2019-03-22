<?php if(have_posts()): ?>
<div class="article-container">
<?php while(have_posts()): the_post(); ?>
  <article <?php post_class( 'article-list' ) ?>>
    <a href="<?php the_permalink(); ?>">
      <div class="img-gradation">
      <?php if ( has_post_thumbnail() ) : ?>
        <?php the_post_thumbnail( 'medium' ); ?>
      <?php else : ?>
        <img src="<?php echo catch_that_image(); ?>" alt="<?php the_title(); ?>" />
      <?php endif ; ?>
      </div>
      <div class="article-info">
        <h2><?php the_title(); ?></h2>
        <span class="article-date">
          <time datetime="<?php echo get_the_date('Y-m-d'); ?>">
            DATE:<?php echo get_the_date(); ?>
          </time>
        </span>
        <?php if( !is_category() ): ?>
          <?php if( has_category() ): ?>
          <span class="article-category">
            CATEGORY:<?php $postcat=get_the_category(); echo $postcat[0]->name; ?>
          </span>
          <?php endif; ?>
        <?php endif; ?>
      </div>
    </a>
  </article>
<?php endwhile; ?>
</div>
  <?php if (function_exists( 'pagination' )): ?>
  <div class="pagination-container">
    <?php pagination( $wp_query->max_num_pages, get_query_var( 'paged' )); ?>
  </div>
  <?php endif; ?>
<?php endif; ?>
