<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'musi2770786759');

/** MySQL database username */
define('DB_USER', 'musi2770786759');

/** MySQL database password */
define('DB_PASSWORD', 'sAh=eZ1Q#nHq');

/** MySQL hostname */
define('DB_HOST', 'musi2770786759.db.2770786.hostedresource.com:3309');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
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
define('AUTH_KEY',         'B5#ZIO1DV=f5=wHxPFA0');
define('SECURE_AUTH_KEY',  'r&$5$0Ws5zfv!MAs3Vwg');
define('LOGGED_IN_KEY',    'QY!SFBTANn(TUns1jCB$');
define('NONCE_KEY',        '!af36yF9DAxckT5gsQ%)');
define('AUTH_SALT',        '=p $+IMA8dWjqV&&_6zp');
define('SECURE_AUTH_SALT', 'P_mbazgK@4pj2G8ZZJ(W');
define('LOGGED_IN_SALT',   'Lyw=c4YHFzP@GNrp-$vr');
define('NONCE_SALT',       'd9K1r2m4mY#HDdP#_CCN');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_10tzq0n8d2_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);
//define( 'WP_CACHE', true );
require_once( dirname( __FILE__ ) . '/gd-config.php' );
define( 'FS_METHOD', 'direct');
define('FS_CHMOD_DIR', (0705 & ~ umask()));
define('FS_CHMOD_FILE', (0604 & ~ umask()));


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');