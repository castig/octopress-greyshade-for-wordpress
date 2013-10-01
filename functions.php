<?php
/* hide the default WP admin bar */
add_filter('show_admin_bar', '__return_false');  

/* add styles to next/prev buttons on index for pagination */
add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');

function posts_link_attributes() {
   return "class='btn btn-primary'";
}
?>