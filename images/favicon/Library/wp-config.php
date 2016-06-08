<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'com1533802571358');

/** MySQL database username */
define('DB_USER', 'com1533802571358');

/** MySQL database password */
define('DB_PASSWORD', 'x9X#6OigPWcZ');

/** MySQL hostname */
define('DB_HOST', 'com1533802571358.db.3631859.hostedresource.com');

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
define('AUTH_KEY',         '=&@n)D4WL+xrcnA7WF9R');
define('SECURE_AUTH_KEY',  'CQKm06Lwva3LZFrGngq-');
define('LOGGED_IN_KEY',    '4pLCsmf@yENf_2VNLsj4');
define('NONCE_KEY',        'm1q#WXB/bkTb(DQXVh/1');
define('AUTH_SALT',        '0hIhbkfPzG_OHCL*%Nh/');
define('SECURE_AUTH_SALT', '%HC_9G7E%TvzWv26rhnY');
define('LOGGED_IN_SALT',   'LkdcH1#Q9CCwt#Bg+82V');
define('NONCE_SALT',       'C59WFmVG5a3c5kwx(V5G');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
