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
define('DB_PASSWORD', 'eatshedlocal');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '!)x|}&Sq&k|eE+3yl?(eHo)#w9nP_!I-b_^-LY.vRt#gNLG(v_M=]}vPpOT&z+<i');
define('SECURE_AUTH_KEY',  '},1!O}gq>c:47|`?.ic%SUsn#%=u*T>&`MG$CO;OZ=^X5u3+}H@FZR?B5{)g6$X|');
define('LOGGED_IN_KEY',    '=&I{XTtc|P3w? k7/#2J*tDSzrlH$cin$(PaN}7|Sn?B4+47q-M|Id+yr{ezX7|X');
define('NONCE_KEY',        '>a#BOBkOxg*Q!)NY8_,5FVkLk<4nbsC;8qE{,_G-%:uGO0:lz;{j-DY$]xtWA: l');
define('AUTH_SALT',        ',#}!P_fy@XNhd-+,:Y`fL8U|~138Z[N%XG-^e-!,G7YhE*FyA6Ia53sTzk!zN3i?');
define('SECURE_AUTH_SALT', '-i8Nm-hMipJ(b/o}qy=g$6VRA-?T09e$,QnC~G]i*1C+>3#mM$|yRe3>,:%Q%b8p');
define('LOGGED_IN_SALT',   '3%]BsBT+8[~gF<f%l_u6e]t0rS/uvTDAJ3IN3+?L4P#^i;[:y^+n]l7/gwcl07s$');
define('NONCE_SALT',       'Fu~^F_,F`Q3rZkHVJ~tdJ3^3{UEe4mMUBr9_=(-E)hA;KW)63P(d^pJp~YXZkQ@u');

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
