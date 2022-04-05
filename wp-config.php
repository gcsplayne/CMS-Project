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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
define('FS_METHOD','direct');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'assignmenttwo' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'jC!wd/)2^:@hW,@N_3Ad@q68JLK(DQ`iu~c[2%4fjM{p:`2U}8t1u>p1j/n*@}]Z' );
define( 'SECURE_AUTH_KEY',  ')op})MsFM1VKv2l2Oy^V/zyk2$+pg>[V_!1}/B$z5iqe48.VSR!A=>/EMtp/$%;!' );
define( 'LOGGED_IN_KEY',    'C.S70S{n[1~yTjw);qAvG=o%[e&9OTE:xVIi9~&%&_zj6@UY:ukx?+!P&=N_4*iq' );
define( 'NONCE_KEY',        'hC2Xj#G(C,RXnqqJNM!^J~}>KagX_%^4mL,}E|l7os@G>amM]<:)9/l}zI}zPq(9' );
define( 'AUTH_SALT',        '0Zkgr*E3T ]`mnck(g|tUgp,V,[hHe^=raUh[J9Sn;o8aqoq_6Ot![w|W% Tz1<O' );
define( 'SECURE_AUTH_SALT', 'yhM(o{;[IJkh|f~}b1*3LvOl_^io_30{W^8-DIuM=j5l&qZqb+ _;Y5,|dI0xz5G' );
define( 'LOGGED_IN_SALT',   'KmM]zf&7kg~#%g/@|.6A8f.%d+Y0J+`rQE?C?(U, hAAW)UI0p$0Ak]AS2#;@2fB' );
define( 'NONCE_SALT',       '!Ab)l~r~d=c&jA127fJ.zE|.5FtVv:lGSJr5iubAq&hR.4&eMSjC0Fwu:,ia`(YI' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
