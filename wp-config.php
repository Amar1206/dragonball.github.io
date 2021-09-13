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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'youtube(site2)' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '$|-LWsg+QeEW6:)XC8kFVP8@T:wQxv4P$`F{P8bymH.7*;UY]:+TITIMm+;QIQ!$' );
define( 'SECURE_AUTH_KEY',  'x`R?GVsc#cW#py<PbqBgC67OC.9_Xmb@z+fwpeuk<^^sA0]~!nZh `(sf,<Z%6zA' );
define( 'LOGGED_IN_KEY',    'LY:Ipr3p;6bWR:mAg} TE~ ,+$I7#!=jMJH99eohC:sXBw[^],3!cwFz8GxiPm4N' );
define( 'NONCE_KEY',        't5>nlk8[9H`&M<5,WkR4r9j%>* ]IN*zZDgv<Y_m^rk:DuZjbl={ewM{vmaUcKxh' );
define( 'AUTH_SALT',        '<Yu_mr2/+Qu:cbnMW,rIBoE>B6)~_i@Sch^A._{@A5?s2{S:gCb? Ecr^:FtA:hm' );
define( 'SECURE_AUTH_SALT', '3yS()g,*mKg!KG^*C)(=bSc@^fN,5]ds#[b?_EbN*K{Z_O.cqU;FD.nf[*4v{y8Q' );
define( 'LOGGED_IN_SALT',   '3uO<gzk8HtJIH=J,t:8T,e@Z]dv$1XQJ7 }^r4la!3{,s`D#V4?Z!%~7t@A+oocw' );
define( 'NONCE_SALT',       'sfH5R2qz?lK}*OVxZZ{Gg3$X;7wFGj;sR39.!E7UH |( 2I.s7u`qFdv>mE~(.)q' );

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
