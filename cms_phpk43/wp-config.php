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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cms_phpk43' );

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
define( 'AUTH_KEY',         '9X~<3t+LxA9j>dH7[[btFn L-_}GLVUO|).Y8CnEFltd(DcjOkL6wJ4Aqpp/01$J' );
define( 'SECURE_AUTH_KEY',  'JW4~]r7 vOQmSq<a`-6 ^&it|cJyOn`EDr&$INUH,8]cbB6Ssv}^Nx5CZk{vq;5u' );
define( 'LOGGED_IN_KEY',    '[+[g,X5=gp<3E)t5v7OuU!T3m@qX)(/d%v<F1ocx{~]eo<j,~<*_g7&$W+3!B8Kw' );
define( 'NONCE_KEY',        'c; nCp_%X`Ka{XSyd3`?s;yBPjj1hHb-sD.i3scZ#f#K[4z}NK^q07!G6=0uG-t;' );
define( 'AUTH_SALT',        'ueR,P,#TI)5pPmB^%(sLJYt:v )!zlLd|kp7&z)a5v7R3?gOEo]ly+v211BG6pJw' );
define( 'SECURE_AUTH_SALT', 'tqj_;*C4XF17(5bQ}7^ngp-.wKha3)W=d/x@q*bJ7U3FE2fD;y6a<DNROX@crA}&' );
define( 'LOGGED_IN_SALT',   'aiMbBkjTzOwx#u_RUVF7(Oojx6j*(|zxo35B#=S<~OUIY0KB[I;PUI]*E*m!(_2>' );
define( 'NONCE_SALT',       'isLobj4kNRNiDZX)FXg]2lG3*3n`dV&SngAXLeM-_YgA9cQ?5Yc{AOO{u2=|+l0e' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
