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
define('DB_NAME', 'eatshed');

/** MySQL database username */
define('DB_USER', 'eatshed');

/** MySQL database password */
define('DB_PASSWORD', 'eatshed123');

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
define('AUTH_KEY',         'HH ni/!5<L!KRzym%9OY5l%;DF22 )kv*K=F<%QuWH7Z8<e[i]YsI2Zi}k_wB;|h');
define('SECURE_AUTH_KEY',  '>3@_:Wq8qWs}pM:B+/jDeRtq(6jB-TJKw{a^m}E&|;7^xCQ8KI-TcMG?m=5hq6hd');
define('LOGGED_IN_KEY',    '>/AwT#uv<|2DX>rrryol+D6V)9@J8:Z%DXt$50fZR=S45O<8qn3X-+2JZSZk,t4x');
define('NONCE_KEY',        'hy+#t6+(~gb8V~ab$0(XG+`p?D*v[[)ybb aC0Ks{7f[a5o+^a818]aq<CJpN|)l');
define('AUTH_SALT',        'CH<R?$.j,-Zr6HJn3Ei9SX/3Uu9%1O9@3QcEe9:>B[kgV7_X8vg{jdi@O&f#hItl');
define('SECURE_AUTH_SALT', 'G|#0CVFkQV?|-|| B {l&8HX|,*(GjpOnc>K9o<h>A~0jS+A|i_vj!uVh{7rCAi3');
define('LOGGED_IN_SALT',   '%]?zWlmDqK|Oi$y9t663]@E+h?a,57*Ym,SvK]R7/HC.B4PpytQt$ODGC12Z|n4Y');
define('NONCE_SALT',       ' hl&KT0Quu;nrbZdk}Yf.zlZ&,Wu=kqn$pU=YE^1X^lxnQ4QYrs3Yl^*Fa7I*k#|');

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
