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
define('DB_NAME', 'newco9fx_newcore');

/** MySQL database username */
define('DB_USER', 'newco9fx_newcore');

/** MySQL database password */
define('DB_PASSWORD', 'j-45Sd)1Zp');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'm4pibfwovrai2dctabu1ysgocc7vlpss2sedu21mhv0whafoiqxxi7w0mupwyt4s');
define('SECURE_AUTH_KEY',  'oiavcumbd0l6epdncv5vj8egwmwq0ddj8qx9xpuguiuokiyao6pbxsdwvgf86xjp');
define('LOGGED_IN_KEY',    'zk4vldnugk3qkgxgygyx0rvnro2bimh58h3mneae7kqeflipan3x0nvjkk3kbxj7');
define('NONCE_KEY',        'fzwdj0vvqdiltlcqz5ewshfzfq4cf7bknlbksjbdxc0ilghxkh8okjggbqxnpv8p');
define('AUTH_SALT',        'vnqihvyy9sl8venonejpfcxdn3dqt75pc7qbfmfinuwvqjsmbhc2upawsi5l9w5o');
define('SECURE_AUTH_SALT', 'pa9djc4pmzq0d272f1t78bphwyqdwmjo0kd4clsnkcm1fggr91lnvvzo9zlb5pho');
define('LOGGED_IN_SALT',   'p4nk8q5yufk3nsd10agtvww1tqajdlxus6zhdxhuwcrmazu4zsswpn0gvp0bs8dg');
define('NONCE_SALT',       's4lk9ofhqi8vbskb1qrjz12cczfrceaniw1xgpcymftdpnqhsun55pixefryxm4r');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = '';

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
