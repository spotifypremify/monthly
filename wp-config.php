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
define( 'DB_NAME', 'monthly' );

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
define( 'AUTH_KEY',         'Sc7Gxfrl,a[H-2ucB.*MJo`$d$p2,)_lIp[5A^DGQ[Y;-+kn}!w<d:+EO6OKXXWV' );
define( 'SECURE_AUTH_KEY',  '3i;jFGwVcAlaX=PJc_k(ZvI^(zE/}1p1*?`2&J)5nY<:mVKVv@E74|/C/^A]#?|c' );
define( 'LOGGED_IN_KEY',    'M5&OtFqf{/T4LXJN~~P>-4{L7x`|vqX;B)v^d{B0g*[m%@v^-N:{3b2QS;hNgwTp' );
define( 'NONCE_KEY',        'S;*}5U1ZZ=RQc4Z^>769|A/uP}k/dNf@o|qNF57cL>q-/oq|pkm!w$/<mr/5{,c_' );
define( 'AUTH_SALT',        'TZJo=8>`nC5Pp.y=eeZz)h`XwiYH7ASmDKx7+r] ~V ze3qsCpppmq$?(NkiILmf' );
define( 'SECURE_AUTH_SALT', '{m{QE`j_Kvl+hA_(lc?zC*2*_RY)H@ty6-]rqK{SBSgqf7*(00&KaA,3c?7yTcuq' );
define( 'LOGGED_IN_SALT',   '0aRLjm*MQyrJMVI6n7r>hh:?,0j.~,5=6reH6AXd@?C-[_V&.EWJiX744%T{}3{l' );
define( 'NONCE_SALT',       '&vJpjt>cP>AZdOjI]SB-@U%o:tOLRdqQrJbR/5{)sMYzC.a5yb2;_kjRXiB2xaYA' );

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
