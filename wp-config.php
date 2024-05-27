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
define( 'DB_NAME', 'consultare_inc_group' );

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
define( 'AUTH_KEY',         '&a`-A5D7I`8<4G5Y!L}-z]y^m^|~!qcRdqRxk?ODS_U6!&)azQJ#z=L~[EXmW<`r' );
define( 'SECURE_AUTH_KEY',  'OZN51b0Zp7`vbkV<2H+5=/v~>BeL&&l9 3)?u6:4NOQj,k8v%VW8.P/S0heGq.=I' );
define( 'LOGGED_IN_KEY',    'e>NCc>Q@vA,&Ey}_j)%^<7!IsskeAvUY,OfR/yRcQW~ XF3s[Vu<<<(Ws/D3fBl=' );
define( 'NONCE_KEY',        '*,+jkdI`2V#$a@JzwsJ.LneX3w3-rM77io><T|C9+DeYeYH#vNeA%ue@,[OojKZb' );
define( 'AUTH_SALT',        '^f>+]JvF#()O-(?Fcly#goveiO![rSwH!&C|^Z|sKd39_s464_aS 4JB+%:%6ox-' );
define( 'SECURE_AUTH_SALT', 'xwS;RNG~|A3Ck0f0t-o:s7_VN{s(}dvyi(T*ecJD5V6n5QS`uGG0%^R3qMeD@=sU' );
define( 'LOGGED_IN_SALT',   '4>4#1kMvgiZvE&?0RKQZ,+PulYoZV<A/3GZ%<;L5hx~Yf-fsiro!^e3[GO])1yg(' );
define( 'NONCE_SALT',       'wif)}%N!|dan;IRz=X[|6> H4{cX5ai`3$X]WM>f$d35|Y4WHP;s,|?9kfs]wOT?' );

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
