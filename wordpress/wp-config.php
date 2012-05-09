<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

	//Database connection live on Netfirms
	//Database successfully created. User u70659041 with password '637e9e' added to database d60593311. 
	//$dbname = 'd60593311';
	//$dbhost = 'crunchultimate.netfirmsmysql.com';
	//$dbusername = 'u70659041';
	//$depassword = '637e9e';
	
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
/* LIVE
define('DB_NAME', 'd60593311'); //windmillwindup
define('DB_USER', 'u70659041');
define('DB_PASSWORD', '637e9e');
define('DB_HOST', 'crunchultimate.netfirmsmysql.com');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');
*/
define('DB_NAME', 'd60593311'); //windmillwindup
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', '127.0.0.1');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'koko wa doko');
define('SECURE_AUTH_KEY',  'koko wa doko');
define('LOGGED_IN_KEY',    'koko wa doko');
define('NONCE_KEY',        'koko wa doko');
define('AUTH_SALT',        'koko wa doko');
define('SECURE_AUTH_SALT', 'koko wa doko');
define('LOGGED_IN_SALT',   'koko wa doko');
define('NONCE_SALT',       'koko wa doko');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
