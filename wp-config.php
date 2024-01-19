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
define( 'DB_NAME', 'hellocoders' );

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
define( 'AUTH_KEY',         'BknmTIIDF_~GPl$MN3qxnBMht|XBk#)jAlxO[jB%XVvu?g$4e:@;>%,e{E2cIT2^' );
define( 'SECURE_AUTH_KEY',  '*{YR}|WLg7<D9`l,q^3DT}J5dr`9Gn6I  /N=Hc1/.bB0bTc/.@Q{)iMuYI4KY*z' );
define( 'LOGGED_IN_KEY',    'T*lUM$|Dr?txQN]XKM+g zp!,dhf b<RuF~_@d!}jl gk+0}zqJ1Gh.uW3=!l.j>' );
define( 'NONCE_KEY',        '>>}^gX^/}<y|Q$@ki@%`kXI*8ItaPy~b5n<{ZH)Hs,3/K&Rza1UF`}K;C]Y>=%v:' );
define( 'AUTH_SALT',        'x;FPY9B|)&E+4v(-5)k]gO%%/6H=W04ct+16[6UlO%`HMwRZ8%oo>j`ZXS$T4WKn' );
define( 'SECURE_AUTH_SALT', '-H24^W$xx>f}b4U^TaX}%jkV.p;u9ZlYzwCb JRhESUo1L,~x~&`I&D}Y&ec.VbG' );
define( 'LOGGED_IN_SALT',   '&U(5{vTsZ!MF{Q:f{v#J8+n$C;q#B@Pu@sR?~/@+!.hW j_r-l;yF0?awT`RA^%L' );
define( 'NONCE_SALT',       '~*V8.e@`IkG@a5hw^XYIiwnvi]xU;81RPpiZOUSEY?*v(Q;TQ~qFs0m6h~#$O2ER' );

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
