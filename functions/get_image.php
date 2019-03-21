<?php


function catch_that_image() {
    global $post, $posts;
    $first_img = '';
    ob_start();
    ob_end_clean();
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    if (isset($matches [1] [0])){
      $first_img = $matches [1] [0];
    }  
    if(empty($first_img)){
        $first_img = get_template_directory_uri().'/images/default.png';
    }
    return $first_img;
}


?>
