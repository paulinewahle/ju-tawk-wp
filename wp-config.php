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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ju_tawk_wp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '8B72o.Qa6_,:G8G% ?P(CU?%/f (BA8wkIe^8S~.]oXA$=$B=tU6:ybvg.kPZDC?' );
define( 'SECURE_AUTH_KEY',  'VdCr)gb#1YEPL_)qAVF~p`=%QMNI$Meo&#(MMc|7e<ETmb$x|6W}@R?,2Afp.LVD' );
define( 'LOGGED_IN_KEY',    'TM%^E#a4:FCiK@J e7eV70i99M-1<<#r3{>yl-N,1KiJc=QIMT7pq3<=1g>3[p+Z' );
define( 'NONCE_KEY',        'r96x>#]I_n1:QY_1.l4.#~T!w+G0C|caK+pZe8pvGms(YZna&f2`&xUG6R||%6B~' );
define( 'AUTH_SALT',        '&@8PiCl8QeXOHt-Ktvl1_2)!9?-{_p#_U{Z3y>X@={)uZW.Z%mGR(~22DD1cQxv*' );
define( 'SECURE_AUTH_SALT', 'rBRdn(CT7ec|&#^Mka&mo*!GwNLBl?U!j4/w8k-(9(e@B#Caj0bMKv!Q|8gLEz+E' );
define( 'LOGGED_IN_SALT',   'x7y* @pIox2,99R|xnc3#Q!mNN;20YCEG/Ry4t.f5Waik.i/:^Q,a/q)5GJF8@mK' );
define( 'NONCE_SALT',       'z)ThhWYUys!iy;X.ulJt#:770hg]Tf)WTPtEWaGMDv*MmSa$jLBnD:o,{cbYaMZ2' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
