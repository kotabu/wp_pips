<?php if ( get_option( 'display-font' ) == 'Germania One' ):  
   $font_url = 'Germania+One'; 
   $font_name = 'Germania One'; 
 elseif ( get_option( 'display-font' ) == 'Roboto Mono' ): 
   $font_url = 'Roboto+Mono' ;
   $font_name = 'Roboto Mono' ;
 elseif ( get_option( 'display-font' ) == 'Baloo Chettan' ): 
   $font_url = 'Baloo+Chettan' ;
   $font_name = 'Baloo Chettan' ;
 elseif ( get_option( 'display-font' ) == 'Inconsolata' ): 
   $font_url = 'Inconsolata' ;
   $font_name = 'Inconsolata' ;
 elseif ( get_option( 'display-font' ) == 'Margarine' ): 
   $font_url = 'Margarine' ;
   $font_name = 'Margarine' ;
 elseif ( get_option( 'display-font' ) == 'Indie Flower' ): 
   $font_url = 'Indie+Flower'; 
   $font_name = 'Indie Flower'; 
 elseif ( get_option( 'display-font' ) == 'Lobster' ): 
   $font_url = 'Lobster' ;
   $font_name = 'Lobster' ;
 elseif ( get_option( 'display-font' )  == 'Pacifico' ): 
   $font_url = 'Pacifico' ;
   $font_name = 'Pacifico' ;
 elseif ( get_option( 'display-font' ) == 'Source Code Pro' ): 
   $font_url = 'Source+Code+Pro'; 
   $font_name = 'Source Code Pro'; 
 elseif ( get_option( 'display-font' ) == 'Dancing Script' ): 
   $font_url = 'Dancing+Script' ;
   $font_name = 'Dancing Script' ;
 elseif ( get_option( 'display-font' ) == 'Shadows Into Light' ): 
   $font_url = 'Shadows+Into+Light'; 
   $font_name = 'Shadows Into Light'; 
 elseif ( get_option( 'display-font' ) == 'Abril Fatface' ): 
   $font_url = 'Abril+Fatface' ;
   $font_name = 'Abril Fatface' ;
 elseif ( get_option( 'display-font' ) == 'Amatic SC' ): 
   $font_url = 'Amatic+SC' ;
   $font_name = 'Amatic SC' ;
 elseif ( get_option( 'display-font' ) == 'Righteous' ): 
   $font_url = 'Righteous' ;
   $font_name = 'Righteous' ;
 elseif ( get_option( 'display-font' ) == 'Comfortaa' ): 
   $font_url = 'Comfortaa' ;
   $font_name = 'Comfortaa' ;
 elseif ( get_option( 'display-font' ) == 'Gloria Hallelujah' ): 
   $font_url = 'Gloria+Hallelujah'; 
   $font_name = 'Gloria Hallelujah'; 
 elseif ( get_option( 'display-font' ) == 'Permanent Marker' ): 
   $font_url = 'Permanent+Marker' ;
   $font_name = 'Permanent Marker' ;
 elseif ( get_option( 'display-font' ) == 'Sniglet' ): 
   $font_url = 'Sniglet' ;
   $font_name = 'Sniglet' ;
 elseif ( get_option( 'display-font' ) == 'Patrick Hand' ): 
   $font_url = 'Patrick+Hand' ;
   $font_name = 'Patrick Hand' ;
 elseif ( get_option( 'display-font' ) == 'Patua One' ): 
   $font_url = 'Patua+One' ;
   $font_name = 'Patua One' ;
 elseif ( get_option( 'display-font' ) == 'Satisfy' ): 
   $font_url = 'Satisfy' ;
   $font_name = 'Satisfy' ;
 elseif ( get_option( 'display-font' ) == 'Courgette' ): 
   $font_url = 'Courgette' ;
   $font_name = 'Courgette' ;
 elseif ( get_option( 'display-font' ) == 'Kaushan Script' ): 
   $font_url = 'Kaushan+Script'; 
   $font_name = 'Kaushan Script'; 
 elseif ( get_option( 'display-font' ) == 'Alfa Slab One' ): 
   $font_url = 'Alfa+Slab+One' ;
   $font_name = 'Alfa Slab One' ;
 endif; ?>

<link href="https://fonts.googleapis.com/css?family=<?php echo $font_url ?>" rel="stylesheet">
<style>
.site-title, .description, .front-subtitle {
  font-family: '<?php echo $font_name ?>', cursive;
}
</style>

<?php
    $font = 'Regular';
   if( get_option( 'font' ) == 'DemiLight' ): 
    $font = 'DemiLight';
   elseif( get_option( 'font' ) == 'Light' ):
    $font = 'Light';
   endif;
?>

<style>
body {
  font-family: 'Noto Sans JP <?php echo $font ?>', 'メイリオ', 'Meiryo', 'ヒラギノ角ゴ Pro', 'Hiragino Kaku Gothic Pro', 'Noto Sans Japanese', Osaka, 'ＭＳ Ｐゴシック', 'MS PGothic', sans-serif;
;
}
</style>

