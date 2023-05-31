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
define( 'DB_NAME', 'pruebaWordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'c>E0*XutaiKr8OqyM&=B0gdkdZ[w8=5<<D.p6reh@FJ2DELcc0/o^ksP3s&>w)*?' );
define( 'SECURE_AUTH_KEY',  'q?Pu.uPZ]XfPqL6J@7Dbi7-WhKS@D2r);j@:,AY6tCQk3J3VH7jVdSo&>POm*_L[' );
define( 'LOGGED_IN_KEY',    '{H#:>:K2*6))QUQGH=0Yo>aIhg+d?nd`&U(o&/bRtdAxpfsqqr+Jwj>!]Es9[`v4' );
define( 'NONCE_KEY',        'ef~;ory-YFpFDKo!0*vI7p3^%2SkXf!VG/tr04~u)Ng)GOxWnRV?w@O|X(WvkA(T' );
define( 'AUTH_SALT',        'kX5`KAo)/b}Uc%u7SAJ)PY{?4{B_${j2ac-@Saof:HK.dzW}3?LM>+apCfY}7=Sl' );
define( 'SECURE_AUTH_SALT', '8:<heWeb!V->D&P12M}^~n{P$?:[1<* }_u0G@*/1Oian)Mm5GOUBWFmt&7%!8-?' );
define( 'LOGGED_IN_SALT',   '?[f>Xj:g2}<`[Yinf-BzFABE`~:!QaEcrbT.9!8-aXMZ!]HFN@xT}(S.Xi2zI7x[' );
define( 'NONCE_SALT',       '<aA!{uhr EvWrf,&CaQk:tj{?^;<d`t0x)>^}K=TtEIHOw7w7ru`$>GXa0UEA{O,' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
