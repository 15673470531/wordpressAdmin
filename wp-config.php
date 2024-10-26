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

ini_set( 'display_errors', 'off' );

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'cFzMv0Ha^&EIz&g6Va' );

/** Database hostname */
define( 'DB_HOST', '47.106.115.51' );

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
define( 'AUTH_KEY',         'QM-ew(7O[zTiG9(wbaDWMRMItVkY7Om8SO8@Wshax|(;u)yv=yC=tW8nqV&fAtut' );
define( 'SECURE_AUTH_KEY',  '{8ROdi#`6-V~7N}64DR~(md;*|7S3V&9~@gb2to6cSXEeR`4J-%A_Aq/E2,^C[uJ' );
define( 'LOGGED_IN_KEY',    'y?d~bXdX`C|nt/K O3wZlJAd~)]bn[JT`yAm6WvE,[S`cfSH}dTuizO`~QCO<=2]' );
define( 'NONCE_KEY',        ',o34D2yEoZ$<R m BiSnZ.U{o+9Jg86f`i)sN_zS4_y7H^1}ta^)VC )[2Kv/ ]?' );
define( 'AUTH_SALT',        'mvWlsu=9#wRvh?Wo9!+|J=M|Wn4BjJ4!0$AOQgK`uF_1bm-PuyV5$(Nd.H5W}Awd' );
define( 'SECURE_AUTH_SALT', '[OI9F9Ga{>?%v8FUt}p*s2~?0.Phe#v|?luxvE^2.[&p(?`>mPBG$63!F9jcK[_4' );
define( 'LOGGED_IN_SALT',   'uDKpXmT !D;g^+qh1[yuG G5=yyi<J2#mp~6TbC!zm|lezh61OdblM cJ4Yt?NRu' );
define( 'NONCE_SALT',       'Db;KuMYN;6Rt{S(<6Fnj4256cF6[[8XS$D%`]E`Zo>W9|HZ%l8s-xQb6nO:tg1Y`' );

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
