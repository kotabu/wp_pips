<?php get_header(); ?>
<div class="container">
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
    <?php get_template_part( 'latest-posts' ); ?>
  </div>
</div>
<?php get_template_part( 'under-contents' ); ?>
<?php get_footer(); ?>
