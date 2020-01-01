<?php
/*
Plugin Name: diyshare
Plugin URI:  https://www.tomflanders.com/development/
Description: DIY Share Buttons
Version:     1.0
Author:      Tom Flanders
Author URI:  https://www.tomflanders.com
License:     GPL3
License URI: https://www.gnu.org/licenses/gpl-3.0.html
*/
// Adding custom text after posts
function add_custom_text_under_posts($content){
  $picdir = plugins_url();

  $content .= '<a target="_blank" href="http://www.facebook.com/sharer.php?u=';
  $content .= get_permalink();
  $content .= "&t=";
  $content .= urlencode(get_the_title());  
  $content .= '"  title="Share on facebook"><img src="';
  $content .= $picdir;
  $content .= '/diyshare/facebook.png" alt="Facebook Logo" width="32" height="32"></a>';

  $content .= '<a href="http://twitter.com/share?text=';
  $content .= urlencode(get_the_title());
  $content .= '&url=';
  $content .= get_permalink();
  $content .= '&via=twitter&related=" target="_blank" title="Share on twitter"><img src="';
  $content .= $picdir;
  $content .= '/diyshare/twitter.png" alt="Twitter Logo" width="32" height="32"></a>';

  return $content;
   }

add_filter('the_content','add_custom_text_under_posts');

?>
