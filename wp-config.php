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
define( 'DB_NAME', '' );

/** Database username */
define( 'DB_USER', '' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '' );

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
define( 'AUTH_KEY',         '<1bxgB#/.p4,cNQpqu@8L3?dQ/|=XCNW,uVQ[pu(?INY8e%@M{MB5ITrm]sQhAl-' );
define( 'SECURE_AUTH_KEY',  '~a ?%nmUA!pj!4-0A2`IBlHZLlw<:toVdrLo6[)=gMPnW#9gtAB=S2H0(Y|QS-z:' );
define( 'LOGGED_IN_KEY',    'n2W7>R?=h]+*]e,{]K^]Nqq]|u&/%iAb^Hu<<)y2*%GR72SVzwr3`Oi<j`4HDXFk' );
define( 'NONCE_KEY',        'Omtu3B;}j&La3W[5)bGu UqeN@GXVa!X3nTQA9,M>/F}0]c(_p~f5gnMkoF3dQ}M' );
define( 'AUTH_SALT',        '~lY$kT+/C/2MZ>9*MLc)8BO5}aI);QAwhmP0.meeo@Gie}86Z/jlL+Up{`>Ok_b[' );
define( 'SECURE_AUTH_SALT', ')Y @Z?Q`vuv^qR=T1t$_,-_RLVOf:vZ;G.4{wg4^KO5vnMNwIEs-*&he*~HxR$PV' );
define( 'LOGGED_IN_SALT',   ';Ve,d>^X?x0O:J9T]PR(}6!pY5zI}Pr0^fP[*AGuOfR*jIRaJH4urMFhU/d9 _(x' );
define( 'NONCE_SALT',       'gF#jBi0JgOI+|w%UVTPc}9 !lj-D{roPR!yHFcvhA1E&Sm7+EASDpw+/[:{oHb9`' );

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

define( 'WP_ALLOW_REPAIR' , true );
