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
define( 'DB_NAME', 'nationallibrary' );

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
define( 'AUTH_KEY',         '`PxhbTh#GjNdd`Kz(_#tN>7i$H1f3hGJ%qZVB./gfWMj.wWW785r%E<#C0Tcp&mJ' );
define( 'SECURE_AUTH_KEY',  'Tw+b]%0bNFCJkkU#tiG}-G(lKBura)7tl$zs=>DwL:@QT:Sr!<WWAj0d+#gLXX9A' );
define( 'LOGGED_IN_KEY',    'vsU)@^8AYew+ZXeUupPr&@~/2$ba/an!ZlMQ?O_2>B9Nc/V3xCn%` pO_N=lGwA0' );
define( 'NONCE_KEY',        'fKyut}_}8i}]IZc)Z9R@TsXUjqzC1L>h!w=Pg_R=Bryu/BQpJFMc50#mjrI:hn/)' );
define( 'AUTH_SALT',        'AH`>;,D$%MJpw8 ~z_6iBIYf3s2#OOP?=f]Uk13&)]4NZl4s)>H/&UDd!WXQ#2KO' );
define( 'SECURE_AUTH_SALT', '-HX{c|.h@w#U%7U$?tj=tSVWfqhV,0nYBuO$zz# :ol!U`8_<sL,}iL)lKJ?bQ_$' );
define( 'LOGGED_IN_SALT',   '~}]9MHJ$.l#shCR:vvg?0Dk2Zd8>q0~(p)tE2_Jd6bGINF<.9LfS++?01P.1Q=@/' );
define( 'NONCE_SALT',       'C|I]WtW::uo0G+DKzgd}?b<O)2whTO?XBn3u/#4don5&:]$JC~N{K9:+i~5[Himp' );

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
