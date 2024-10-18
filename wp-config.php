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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'novelegend' );

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
define( 'AUTH_KEY',         'K#YdY*[U+_a:m7Huu&|G]8t1?w38g@9b;Umq/F*Bwez^x2m?UY @Hc7@@pMY)xSL' );
define( 'SECURE_AUTH_KEY',  '(gQGYJH`2kkFx`O+V(R1&;*Qy;$!_hNUmH|9{%<XI2W_1yl~AFTnYT7P$ NHq~ZJ' );
define( 'LOGGED_IN_KEY',    'i3 +6l8BDQA@C/WtyR3($?)=-Lzp&W&WC{SqIK5W?G5h}!zu4R5bhRD7]qy->oM#' );
define( 'NONCE_KEY',        '{a(yaaaPnBZKSX]<Dsd{peVe>>#D|.<>o@`E(5>SM3G2=$ NaJAL^}eATv8K{3]g' );
define( 'AUTH_SALT',        '(G4{,QLns?y9qon7*jM=2t*Mgqdney9.2FLb*CsN]6f:YH(/xfQc9hm;$^`He}dU' );
define( 'SECURE_AUTH_SALT', 'K9w7nS#q7Q35uw]r4bM#&>J0R7S^!;8F{,eR[= /C4D$z1hw$U$<{x,7xHR;!VHA' );
define( 'LOGGED_IN_SALT',   'RL Hl~pD?L,U}!%To?9x.jNB7N8ofy2&o)Dw2:U:3<SxXR>M<?4mu[$oV?LVkQH0' );
define( 'NONCE_SALT',       'q6VK]792ZvrMeF>6/R,p+4w )nS[Gz~C Sy@zP?F(4ijz_tus{$:/b@x$!&Y]}8r' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
