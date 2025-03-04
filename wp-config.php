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
@ini_set( 'upload_max_filesize' , '600M' );
@ini_set( 'post_max_size', '128M');
@ini_set( 'memory_limit', '256M' );
@ini_set( 'max_execution_time', '300' );
@ini_set( 'max_input_time', '300' );

define('DB_NAME', 'local');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', 'root');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         'thkV{#Ze,/Kx8]A]&QNq?I9 9Lz/?.|]jNqBz&#8KZn qD}2Bd^TU3&-GJXQ>P[.');
define('SECURE_AUTH_KEY',  '@Ol#?#~wL)$z]VEf!^;p!w <&BN3y<H|/MY`6z RyMl3D4(v7DzFLm^cuv)Np:f1');
define('LOGGED_IN_KEY',    'vTVk:]jnv0`^L>cI_i;m*m-f1v?O37)b_?5o~AJvu-:b1W4A3&9N/p5S_b_,t!.%');
define('NONCE_KEY',        'VWk_XGAP<cw@,>WomcBlwD~%|(n-opv1:zE8T0h&,$aC{1v_Y?5w4tsB1|r](?Q*');
define('AUTH_SALT',        'NU3*dXCR!,U?_g&UchNM**&8*G5vXM_k:VJvQ6_!NxB!kAk><&)s)1,XKtv{Rx9Y');
define('SECURE_AUTH_SALT', 'z^Fl.Ds+v/#Lk#%.RqXl-5vo[64.ai>5T#>uH`A:.4-Mak6kOlL:q=Tz++Upx}%Y');
define('LOGGED_IN_SALT',   '1oT~*Of]bwGJ1v~su r4urqZ(#XDeMN,|s>uYTEjvjkD~Euahe@Y~lOwGm{IQ13r');
define('NONCE_SALT',       '<p Vui^T;+{SQ=:Q0ysPEGB&n*vK}k=w=b*m6*I49]b!!1c|E[]:-ySK1B HAMLW');

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
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
