<?
/**
* Register Utility Bar Widget Areas.
*/

genesis_register_sidebar( array(
‘id’ => ‘utility-bar-left’,
‘name’ => __( ‘Utility Bar Left’, ‘theme-prefix’ ),
‘description’ => __( ‘This is the left utility bar above the header.’, ‘theme-prefix’ ),
) );

genesis_register_sidebar( array(
‘id’ => ‘utility-bar-right’,
‘name’ => __( ‘Utility Bar Right’, ‘theme-prefix’ ),
‘description’ => __( ‘This is the right utility bar above the header.’, ‘theme-prefix’ ),
) );

add_action( 'genesis_before_header', 'utility_bar' );

/**
* Add utility bar above header.
*
* @author Carrie Dils
* @copyright Copyright (c) 2013, Carrie Dils
* @license GPL-2.0+
*/
function utility_bar() {
 
	echo '<div class="utility-bar"><div class="wrap">';
 
	genesis_widget_area( 'utility-bar-left', array(
		'before' => '<div class="utility-bar-left">',
		'after' => '</div>',
	) );
 
	genesis_widget_area( 'utility-bar-right', array(
		'before' => '<div class="utility-bar-right">',
		'after' => '</div>',
	) );
 
	echo '</div></div>';
 
}

/** From site: http://www.carriedils.com/widget-area-above-header-genesis/