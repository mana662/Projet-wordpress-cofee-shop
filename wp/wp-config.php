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
define( 'DB_NAME', 'wp-v4' );

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
define( 'AUTH_KEY',         'WM0:>z?d@,3NJQ@]PH`iY6 X#<Zs1<-Og^]4E|F>noW)s)y~x1>8]4nJ3/]eE#|d' );
define( 'SECURE_AUTH_KEY',  'nq!Fg|D%6r$uak97f|Z^rgC`],u$%g?IB2,HF4+`(|{Cf;]kx+f*(){Vn87(kry2' );
define( 'LOGGED_IN_KEY',    '%cO3P>j-<)GnJ+Xe+jdCzqo246ykdLtQeL4jj]W1yEBh%`jFUrS4J_g{yGy^kt#u' );
define( 'NONCE_KEY',        '/MT{{/ck(vC7oRO?9-YY+MC|JFmn]</_fohqOt{toE}> `_ w-[mrFSo.jemq/Ie' );
define( 'AUTH_SALT',        'Hw)cm_wN?(U)HCRP%]fcL/0;kUzc_[OiaAo-}(Chi](VN$xCP6{~=u3)Og9|5Sf9' );
define( 'SECURE_AUTH_SALT', '.3>Dan,|[<2EppY<W6$9:JNfY[{>]im?eK8B/-A8D?}Spg{!(MXfKz^,?dEbRNK9' );
define( 'LOGGED_IN_SALT',   '[F[XVRdlvDk3g/<i3#i;)r}puiTS,AQR95{mHR;BTV9wIc1GVXCD[c8RzN:F~o>~' );
define( 'NONCE_SALT',       ':n%,YSz:i4lpxezx?Mh2sGL@F)v7B mPbKw*OJ3)#ISL!i%{F(-1MIFG? [8KFF;' );

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
