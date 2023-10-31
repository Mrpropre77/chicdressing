<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'Nl_qFuIM0Z#zbxk~R~p<m1=p~T/e*1V+!<~cYMJ#rwSdI(&;s<QnsAgMnB5Sd#BJ' );
define( 'SECURE_AUTH_KEY',   '/yiiH2ZJI.wz9ppq5<)_B]?0)lj_Z^-DDoUgw3LQpJcz&5? O0T&DH-@xhe&qx2 ' );
define( 'LOGGED_IN_KEY',     '^Wva*~s=g<SH0)e+mfiU2 K]FfS`cMduH{;g`n*4Io2}zgU:W?JPUV^|]JA)P|Ue' );
define( 'NONCE_KEY',         '=;Uw1` S?%W6H-8-h])PN~N_n(vzkKo:3GA31O%I([/!@t?!PYDrT@D)vpw>7BIj' );
define( 'AUTH_SALT',         'xkBlSjJ<]Jq8a/{kP#q 2G%w96J8q5e&xVGLj~#TZ/HnK<uGN,eDY<^yV^>4}A[[' );
define( 'SECURE_AUTH_SALT',  'voM2W*8N:}<IM}MXgxj:G>zN7e;OC:[@;FUkMg_lX3~R8Ws%%:?hA`,RZ?Mi]i-x' );
define( 'LOGGED_IN_SALT',    ')np!r)b_HM+::Zm2~|W:e)L.~30Tm1{+*?D@lJWS9$H?d:]?oUuICA>}ZT@M/ngy' );
define( 'NONCE_SALT',        '3kBg.a!8mPv|f|vNpM10xmquU}EA|CH+#hpUjDLd!]Xg.6YiCCV 1y<*-a7+?}Q:' );
define( 'WP_CACHE_KEY_SALT', '/C e?.Rk h[+x?{lHJNTGe=!Gl+9bep!k:acACm(r}+}5S:WkGM{CAaz:MB_>EN6' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
