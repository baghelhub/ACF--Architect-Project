<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'wp-architects' );

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
define( 'AUTH_KEY',         '|is29_[XM}<G7*l4fjudqcgoK2`J]?Q3WGZR2-FwWa:=|2NBEIH,z7u5uirP@Kd=' );
define( 'SECURE_AUTH_KEY',  'Zj{7S,zi!+/-?l37/}0oQ[B))lP</:ZUM UNr.rC~tAr3@p$C/n8wm_y+nElFhIH' );
define( 'LOGGED_IN_KEY',    '%G/3 +]*`+HrORo@J}+Tv!hxyTPqa7l^ADCyu7(d#}EY?&p#N|QOR2z]-L4M>u|d' );
define( 'NONCE_KEY',        '9{;eV,Y6(6xh!m)~_g0z:}^mQ$tjYEs&B.T[VyAz>qVdBLz#!Toq~MA-7M^yG6!%' );
define( 'AUTH_SALT',        '`f6._d}?U*~)w6`.ly?X4[@X?zQ|J`_o6|B>a[0@E~;IsAIdG5pwV5ZMkXwCAZaw' );
define( 'SECURE_AUTH_SALT', 'x//Wz@jL^+<C>l8^WMWH/I/QUYy8:*cD7IWW!4C_;@$7E^)F:xUDmGo[E~g9+0ra' );
define( 'LOGGED_IN_SALT',   '4O`NRYOB{{Au-hhF)c]OQ|@r&:vs7NcT~-Lcec;#HhNO[CR[&,:3(8,*uSDxkMl1' );
define( 'NONCE_SALT',       '`N)%`m[L-zty@<ci<BhFpsIJDV_&(0|202<!(+Bbfl_0XQ/OliUGZbhGn_Yk^)TU' );

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
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', false );


/* Add any custom values between this line and the "stop editing" line. */
define( 'WPCF7_AUTOP', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
