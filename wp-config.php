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
define('DB_NAME', 'c1_test1');

/** MySQL database username */
define('DB_USER', 'c1_test1');

/** MySQL database password */
define('DB_PASSWORD', 'Dm@mWR8uRKkn');

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
define('AUTH_KEY',         'b]W!R;=$S<(1rF5_zG!q:Pxy S&rw+{2cF:O4PiaTfn&wZ(.vj (.co|grk;o4q8');
define('SECURE_AUTH_KEY',  'W-|PB62I^s/@PF/zoo5Go1(n[,y.qBCU9UMm,SWHtg>CQ5R~>5S4&DfI;<=Q;QeX');
define('LOGGED_IN_KEY',    'KiF@L;kn}{*lq6+a&8CD{8EcL8tr9E4$XNC(Ul~a7{j@e}rv zi dxeL IO)*mDh');
define('NONCE_KEY',        '%oW8@emS)!^2MdfF<i^0H:!i]!nte*$wqfR</p`@]QL>Ug3dYECsKJuZ^Pk/Fd/H');
define('AUTH_SALT',        '%;>t.g;2K!kunX=@&W/.T(Kov?.0=_Pe({e>=m*{mfaSgVpn#jtl+3NeEN>1EZ/~');
define('SECURE_AUTH_SALT', 'oLfen%?x?|8[HW7=rpq [bU,5g!-D|h~QL(qow|SnwEl;N(IKn|o[cX;+%XqJh-d');
define('LOGGED_IN_SALT',   '<w91^DDQBlItPraqe/ C?yhjg!)|g{%CTYU0uFh&!HD9e;^D:mM:7C64O-vt^/C,');
define('NONCE_SALT',       '/SSpF7=b1<A~(`Wv:o70*7zcsOy$.W)1L>VULM1~sMF75wO3J;O}WnD_yVRF!`JI');

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
