<?php get_header(); ?>
<div class="container">
  <?php echo get_theme_mod( 'main_color', 'default' ); ?>
  <?php echo get_theme_mod( 'link_color', 'default' ); ?>
  <div class="contents">
    <?php if(is_category() || is_tag()): ?>
      <h1><?php single_cat_title(); ?>の記事一覧</h1>
    <?php elseif(is_search()): ?>
      <h1><?php the_search_query(); ?>の検索結果</h1>
    <?php elseif(is_year()): ?>
      <h1><?php the_time("Y年"); ?>の記事一覧</h1>
    <?php elseif(is_month()): ?>
      <h1><?php the_time("Y年m月"); ?>の記事一覧</h1>
    <?php endif; ?>
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
      <article <?php post_class( 'article-list' ) ?>>
        <a href="<?php the_permalink(); ?>">
          <?php if ( has_post_thumbnail() ) : ?>
            <?php the_post_thumbnail( 'large' ); ?>
          <?php else : ?>
            <img src="<?php echo catch_that_image(); ?>" alt="<?php the_title(); ?>" />
          <?php endif ; ?>
          <div class="article-info">
            <h2><?php the_title(); ?></h2>
            <span class="article-date">
              <time datetime="<?php echo get_the_date('Y-m-d'); ?>">
                <?php echo get_the_date(); ?>
              </time>
            </span>
            <?php if( !is_category() ): ?>
              <?php if( has_category() ): ?>
              <span class="artcile-category">
                <?php $postcat=get_the_category(); echo $postcat[0]->name; ?>
              </span>
              <?php endif; ?>
            <?php endif; ?>
          </div>
        </a>
      </article>
    <?php endwhile; ?>
      <?php if (function_exists( 'pagination' )): ?>
        <?php pagination( $wp_query->max_num_pages, get_query_var( 'paged' )); ?>
      <?php endif; ?>
    <?php endif; ?>
  </div>
</div>
<?php get_footer(); ?>
