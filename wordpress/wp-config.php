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
define( 'DB_NAME', 'arjun' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin123' );

/** Database hostname */
define( 'DB_HOST', 'database-12.cj0kgyqvw18l.us-east-1.rds.amazonaws.com' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '0SK]7mf{rFo|;B+eTtBi6s0PeR`cwYC:f.cxc,/rw@G1JG+M12mY%7XvlxRcOdW&');
define('SECURE_AUTH_KEY',  '2 O@~[A)J|o+7}S+,?.z1kNcL-O*.N>BgacF|W@3hqX,UVyC?7{+@r5?##^e<6u,');
define('LOGGED_IN_KEY',    '/qkq`>4n$TBJ0=;!^B+;wOzN=CS{;A+ef>_v.bs$k0=4X<1-A IU,5Z:sKo%|:/F');
define('NONCE_KEY',        '9q(bN6,BL3?RW~|ObT=&QbRj5rwFY|D=TvJiKoB4F~:+m>7e`|5.FG]VQ4*w]d[^');
define('AUTH_SALT',        'e598za{*iwi|{LsC%Z5,K%USKDg+-Q|-O/)y-!m0j1q&q-|@B<MHSBH_reEF+r^T');
define('SECURE_AUTH_SALT', 'qYizmul}H0e)W+Pv3Z-Zi /o<qPh-#JgsI4]x 3Piw~!gJ6Uuj4%=K_^Taje7zY;');
define('LOGGED_IN_SALT',   '|tE`%k5oHe>ov@R4x[0R};$rSqZ^Q|6M`;oI(4m$Ub0%,VU#2 T$E6mkq=qBG6c/');
define('NONCE_SALT',       'ns5:$Ec/ghrbCq^ednW`f ]>4FF(_*v|gqv5JRD It|G{T~V4=dYW%*K~&$Usr3o');

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
