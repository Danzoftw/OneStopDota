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
define( 'DB_NAME', 'onestopd_dota2' );

/** MySQL database username */
define( 'DB_USER', 'onestopd_dota2' );

/** MySQL database password */
define( 'DB_PASSWORD', 'si}5iVipxw)R' );

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
define( 'AUTH_KEY',         'd_QkNwBx>n:~7%Fr>f_ztheo^?+S+41$]Zz$xrrh[r?1Xqy([B.da>}XwjKAsE.j' );
define( 'SECURE_AUTH_KEY',  '#_iBT&t,2EZBBTs*?$4pv6UAi7`$?^)l[G6+H9J!P#bUC84.B`M>~E6{T(/D@{q1' );
define( 'LOGGED_IN_KEY',    '8?&4fp*:)@g|!Nx;iuI?A!U&wZ*f#fvgEoQ6x=S9u^&3bWBeF<&tV]3mY+x>uB6n' );
define( 'NONCE_KEY',        'e_3[EO<d#k:{_GC<s4l)Y7;_h#!rklFMVVBgvTje[[$41! zjc}Mw?TF}pEYsVIZ' );
define( 'AUTH_SALT',        '-RXaqb3xA=^]Vs&Zk,&Er/fqZ`PF:A:pQh#W1wyLYx,j6P{~O8%?`m7wt`V8`wPI' );
define( 'SECURE_AUTH_SALT', 'D+=.Rmet[`fk Fl<v%i}WeBwqHY|O]@t%Ikm8HiP9#H:C_Z5vNw:RRbeOvHYi&=f' );
define( 'LOGGED_IN_SALT',   'qA_@z`L8GcF]K~b]H^2cRES0%T;W&f1Bdy:HvjZB)4<[Itc>:-~aCt+=J>,rLR%C' );
define( 'NONCE_SALT',       'iFtNN)fvFf8F>U}5D3Pku0-A#wrl2(Y>]c6ySD$lUG^f~&!OsznQe1,MMq<fhwWK' );

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
