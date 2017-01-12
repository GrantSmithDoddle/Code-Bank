<?php
/**
 * Below are useful bits of php for wordpress development.
 *
 * 
 */
 
//====================================================
// WP CONFIG FILE (https://generatewp.com/wp-config/)
// Add under define (‘WP_DEBUG’, false);
//====================================================

/** Define site name for Wordpress and Site address */

define('WP_SITEURL', ‘URL HERE');
define('WP_HOME', 'URL HERE');

/** Change Autosave: */

define('AUTOSAVE_INTERVAL', 180000);

/** Page revisions amount: */

define('WP_POST_REVISIONS', 3);

/** Cache site after development: */

define('WP_CACHE', true);

/** Disable cache: */

define('DISABLE_CACHE', true);

/** Empty Trash: */

define('EMPTY_TRASH_DAYS', 3);
/** Set to zero to delete permanently. */

/** Repair database: */

define('WP_ALLOW_REPAIR', true);

/** go to '/wp-admin/maint/repair.php’ to action */
// remove code once run

// Disable editing of the theme:
define(‘DISALLOW_FILE_EDIT’, true);

// Force compressing of files:
define(‘ENFORCE_GZIP’, true);

//====================================================
// FUNCTION.PHP FILE
//====================================================

//====================================================
// REMOVE LINE BREAK INBETWEEN PARAGRAPHS (BR TAGS)
//====================================================

// Single page

add_filter('the_content', 'remove_autop', 9);
function remove_autop($content) {
    if ( is_page(227) ) {
        remove_filter( 'the_content', 'wpautop' );
    }
    return $content;
}

// Multiple pages (replaces numbers with page numbers)

add_filter('the_content', 'remove_autop', 9);
function remove_autop($content) {
    if ( is_page( array( 225, 355, 227, 238, 358, 236, 252, 363, 254, 258, 381, 256 ) ) ) {
        remove_filter( 'the_content', 'wpautop' );
    }
    return $content;
}
 
