<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'sentiscsipl_new' );

/** MySQL database username */
define( 'DB_USER', 'sentiscsipl_new' );

/** MySQL database password */
define( 'DB_PASSWORD', ']+uIN$}u1#2K' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '/2fg|w[4HRE-_d[2e)C)CoRcOtdAQrIX]u3Wzk#?ed}BH%Jb>,GzS2u9]Huq?p7/');
define('SECURE_AUTH_KEY',  'wa-Ecm*5^R .Ypo,beKg.`SC$]l-G-ygE0;3c`3t^Z2|TVjR|Jb*01VzJHYOg10U');
define('LOGGED_IN_KEY',    'A/1|%qm$#YM$1x+-)Q`((081[4{L~]vQiWgwM>+j)/U:=H=[Jhk{n$y0l,N$TLBf');
define('NONCE_KEY',        's1e),+4;l}`lI][e+!B~*:_)y9b>hX2HJ3LU?<Joa`Z1^V4Wpu=wFHX|XV~[<,-,');
define('AUTH_SALT',        'FpBfm|HL/)w?55*%{Gn!8?KK6H3~e9_A]BUf/|?| HFpHLC=.g+Rjq[Fm)u,+w3_');
define('SECURE_AUTH_SALT', 'US`zZ39d|nB2:9myEgIkX-IGw)n]D9C3sJTK.<=A:Z|-vH>BDv9XkkV|=w33NUd]');
define('LOGGED_IN_SALT',   '~&Sa&mmn;niR[p0;8+W)j![E|yPv3Y!-A@4xwQ|tHoqmcW|j9>K-C*{z*jW}.bBx');
define('NONCE_SALT',       ' YO&yoC14ec+1K>o)FKkAc<Zn7e1w|~)Ilg(<97GH&9d+8kELvXQtW/}Qd{OvH a');

/**#@-*/

/**
 * WordPress Database Table prefix.
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

define('DISALLOW_FILE_EDIT', true); 

define('DISALLOW_FILE_MODS',true); 
define( 'AUTOSAVE_INTERVAL', 300 );
define( 'WP_POST_REVISIONS', 5 );
#define( 'EMPTY_TRASH_DAYS', 7 );
define( 'WP_CRON_LOCK_TIMEOUT', 120 );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';


