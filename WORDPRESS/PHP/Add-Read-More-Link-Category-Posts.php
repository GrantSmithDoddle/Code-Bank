<?
	
//====================================================
// ADD READ MORE LINK TO PLUG IN CATEGORY POSTS WIGET
//====================================================

// Changing excerpt more
   function new_excerpt_more($more) {
   global $post;
   return '… <a href="'. get_permalink($post->ID) . '" class="readmore"> ' . 'Read more <i class="fa fa-angle-right"></i>' . '</a>';
   }
   add_filter('excerpt_more', 'new_excerpt_more');