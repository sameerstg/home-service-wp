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
define( 'DB_NAME', 'homeservice' );

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
define( 'AUTH_KEY',         '%`?u{e0T/=-XWy/}!u#Srl>co96&{vE 5;cXi(J>P]1A7pVb4#`]fFmMlX dkJU@' );
define( 'SECURE_AUTH_KEY',  'NsLQp4Yw/!o}K,,2{<sF<,a9y/:2w9zBN&hI}LG_@[N<Xq%$rI3/^(M#1&& VcK#' );
define( 'LOGGED_IN_KEY',    '1OwVG(lL=p@ W[uk~_q-XZT)uwvr1; :}rhJTNY-6Lo{bhuAGl7*s&j^S S?f~)M' );
define( 'NONCE_KEY',        '{,esP4+NyAHsTK&Ovucc4s;w2vbP?2s1K]=Iu+B>MJo,_k#LxNJkGqKyxPxFdJ `' );
define( 'AUTH_SALT',        'qmJ8zj>N2b&T-C?#VLJ7S,R]M%otgRp}0{2ooc|A-eLrD<H1Vr;LDCi*J4?s_[y~' );
define( 'SECURE_AUTH_SALT', '@4|lJ>gEbGl]Lio:>AB R_pdoUAV q@?~~/[My_:1LA+%/% I-qB#K[lE!:y%3J#' );
define( 'LOGGED_IN_SALT',   '~aC%(se+}r=p&cFNFG(7SJ#Sc`p|qmU{2[_UxofbiKXKxWX4 (`-fqAe|!3v[~%w' );
define( 'NONCE_SALT',       '.o*Vy6NMYS-Qp63VQ@LZ/)]Xm9&sl>2[%Jy.;?kSd0]HxLG(g~Rfiy;r6@k#mXx`' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
