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
define( 'DB_NAME', 'website' );

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
define( 'AUTH_KEY',         '/LFor#k=|F0Q~gh^p-&0Iv}F92SdVV)$v9p( HJix!HQa`qx-O581bPXgp9@))d~' );
define( 'SECURE_AUTH_KEY',  'nLxOP8{:/cm2I{tDBR3rg,+v}@?O-CG1n5OZjYa1f_zD=[PL9RvEIu}iC_|d.L!T' );
define( 'LOGGED_IN_KEY',    'F6]t@a3aFbnpLA@nB5]hWB>~g]g86]OwIN}v5!%<<J3^Ey,NMJST:f(_ I0@&$X~' );
define( 'NONCE_KEY',        'b7b5E7nsn(yc@gw UbHd_vb2]nVN70Z{@LD/kttLZgDy29QOZRrW~$7#z: fTYHu' );
define( 'AUTH_SALT',        'NOvm5<(bWy`mo>zLGdE<T**)dDEWdy9rYz+5E`|^1Nt.nn_+8A3t3Kp24hI>zk^|' );
define( 'SECURE_AUTH_SALT', 'p4/t <x6Ot!>t~EU!&pDUGE2lLX;D*I<=|zvSLX?0ec^:)^xq%4%g#!mU<&8ZiK<' );
define( 'LOGGED_IN_SALT',   'VrOTL@z t]F1Z]ao,>en?Lnk1:.bNyVE8ksq;A_i3$JuK&[UowUw)V<n:Zq?Ycy=' );
define( 'NONCE_SALT',       'hD[rkbv4ndM3E@4Nbhhh{TIQl_;BK!u|XXL:Sl,I>vOP~%[,9P (#xhvdy=tOs.P' );

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
