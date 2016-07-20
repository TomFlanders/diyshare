<?php
/*
Plugin Name: diyshare
Plugin URI:  http://tomflanders.com/development/
Description: DIY Share Buttons
Version:     1.0
Author:      Tom Flanders
Author URI:  http://tomflanders.com
License:     GPL3
License URI: https://www.gnu.org/licenses/gpl-3.0.html
*/
// Adding custom text after posts
function add_custom_text_under_posts($content){
  $content .= '<a target="_blank" href="http://www.facebook.com/sharer.php?u=';
  $content .= get_permalink();
  $content .= "&t=";
  $content .= get_the_title();
  $content .= '"  title="Share on facebook"><img src="http://tomflanders.com/wp-content/plugins/diyshare/facebook.png" alt="Facebook Logo"></a>';

  $content .= '<a href="http://twitter.com/share?text=';
  $content .= urlencode(get_the_title());
  $content .= '&url=';
  $content .= get_permalink();
  $content .= '&via=twitter&related=" target="_blank" title="Share on twitter"><img src="http://tomflanders.com/wp-content/plugins/diyshare/twitter.png" alt="Twitter Logo"></a>';

  return $content;
   }

add_filter('the_content','add_custom_text_under_posts');

?>
