<?php if( is_tag() || is_date() || is_search() || is_404() ): ?>
  <meta name="robots" content="noindex" />
<?php endif; ?>
<!-- ogp -->
<meta property="og:site_name" content="<?php bloginfo( 'name' ) ?>" />
<meta property="og:locale" content="ja_JP" />
<!-- twitterogp -->
<meta name="twitter:site" content="<?php echo get_option( 'twitter_id' ); ?>" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:creator" content="<?php echo get_option( 'twitter_id' ); ?>" />
<!-- singlemeta -->
<?php if( is_single() && !is_home() || is_page() && !is_front_page() ): ?>
<?php setup_postdata($post); ?>
<meta name="description" content="<?php echo strip_tags( get_the_excerpt() ); ?>"/>

<?php if( has_tag() ): ?>
  <?php $tags = get_the_tags();
        $kwds = array();
        foreach( $tags as $tag ) {
          $kwds[] = $tag->name;
        }?>
  <meta name="keywords" content="<?php echo implode( ',',$kwds ); ?>"/>
<?php endif; ?>
<!-- singleogp -->
<meta property="og:type" content="article"/>
<meta property="og:title" content="<?php the_title(); ?>"/>
<meta property="og:url" content="<?php the_permalink(); ?>"/>
<meta property="og:description" content="<?php echo strip_tags( get_the_excerpt() ); ?>"/>
<?php if( has_post_thumbnail() ): ?>
  <?php $postthumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' ); ?>
  <meta property="og:image" content="<?php echo $postthumb[0]; ?>" />
<?php endif; ?>
<!-- single twitter ogp -->
<meta name="twitter:description" content="<?php echo strip_tags(get_the_excerpt()); ?>" />
<?php if( has_post_thumbnail() ): ?>
<?php $postthumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' ); ?>
<meta name="twitter:image:src" content="<?php echo $postthumb[0] ?>" />
<?php endif; ?>
<?php else: ?>
<!-- othermeta -->
<meta name="description" content="<?php bloginfo( 'description' ); ?>"/>
<?php $allcats = get_categories();
      $kwds = array();
      foreach( $allcats as $allcat ) {
        $kwds[] = $allcat->name;
      }?>
<meta name="keywords" content="<?php echo implode( ',',$kwds ); ?>"/>
<!-- otherogp -->
<meta property="og:type" content="website" />
<meta property="og:title" content="<?php bloginfo( 'name' ); ?>" />
<?php
$http = is_ssl() ? 'https'.'://' : 'http'.'://';
$url = $http. $_SERVER["HTTP_HOST"]. $_SERVER["REQUEST_URI"];
?>
<meta property="og:url" content="<?php echo $url; ?>" />
<meta property="og:description" content="<?php bloginfo( 'description' ); ?>" />
<?php if (get_option( 'meta-img' )): ?>
<meta property="og:image" content="<?php echo get_option( 'meta-img' ); ?>" />
<?php else: ?>
<meta property="og:image" content="<?php echo get_site_icon_url(); ?>" />
<?php endif; ?>
<?php endif; ?>
<?php if( is_home() ):  ?>
<meta name="twitter:description" content="<?php bloginfo( 'description'); ?>" />
<?php if (get_option( 'meta-img' )): ?>
<meta name="twitter:image:src" content="<?php echo get_option( 'meta-img' ); ?>" />
<?php else: ?>
<meta name="twitter:image:src" content="<?php echo get_site_icon_url(); ?>" />
<?php endif; ?>
<?php endif; ?>

