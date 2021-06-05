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
define( 'DB_NAME', 'iron-man' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'v }]&cP*k!zT?-*z-+`IW ,pUHlUtLfRl<|-88&Zzphv_7p?Fn|OsR-nZS3Lv%Wb' );
define( 'SECURE_AUTH_KEY',  'qS^LSCZR<^K+89zJK~S?Jz7V-)+?)Jd<rVOc]?G/_V5Pn,bG7M5e?.-}mI!o-ok4' );
define( 'LOGGED_IN_KEY',    '/E#@tTLWC-u3QNI^UK*dK^Wm1jeK(1sE1I|p&gj33BV}2?FqF&j+4X<h$_6!*+/~' );
define( 'NONCE_KEY',        'n4<s&t :0Ni18D:F%f5<9owRWV+R~,Jfx6HTupz!EHJ|j?h:,BPeq{xKg]N~t 1a' );
define( 'AUTH_SALT',        'I56uLom~Qj[U#f7qHzus;Tm5M5$y;*,yco7D&$cm`C6v#iUaJt|9]+rFYhEX}#z-' );
define( 'SECURE_AUTH_SALT', '#j%B/i0-l|507z!.kL(R,s-oPI1XyCRQ+$:~sq0@y~=l0qa]G_I)Z(5q]4%g~=v2' );
define( 'LOGGED_IN_SALT',   'bESK<er.e)Bp}<*&x#g:<Go>mQ&%G;yLU&ub6^]SyIWGg.IA^v(2YW}Q5DO}^/A6' );
define( 'NONCE_SALT',       'E>KL_o;/#,L31kC`}w~Nl77ve0tN,{02IYz/NjZZMeVU-;#<jCXHt@}5-J^%H$Kx' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mcu_bd_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
