<?php

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define ('WPLANG', 'en_GB');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false); /** true to debug **/
define('WP_DEBUG_LOG', false); /** true to debug **/
define('SCRIPT_DEBUG', false); /** true to debug **/

define('WP_DEBUG_DISPLAY', false);
ini_set('display_errors', 0);

define('WP_SITEURL', 'http://www.acornantics.co.uk/');
define('WP_HOME', 'http://www.acornantics.co.uk/');
define('AUTOSAVE_INTERVAL', 180000);
define('WP_POST_REVISIONS', 3);
define('EMPTY_TRASH_DAYS', 3);
define( 'DISALLOW_FILE_EDIT', true );

/* Compression */
define( 'COMPRESS_CSS',        true );
define( 'COMPRESS_SCRIPTS',    true );
define( 'CONCATENATE_SCRIPTS', true );
define( 'ENFORCE_GZIP',        true );

/**
 *  Change this to true to run multiple blogs on this installation.
 *  Then login as admin and go to Tools -> Network
 */
define('WP_ALLOW_MULTISITE', false);
