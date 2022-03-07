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
define( 'DB_NAME', 'newdb' );

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
define( 'AUTH_KEY',         'EpQlKsIJ6bq+;/u;+!UZxRU>/gnMo^9DYBZXX>;Qe0>*7Jlw`l|.EKj:wwm]JEfv' );
define( 'SECURE_AUTH_KEY',  'WX4)Qk84WcH1ObjJ$6aY_r1qSYlCZk(u^ |jO^6dc%=e:s+B>-7C|d(}X|4/Fxmi' );
define( 'LOGGED_IN_KEY',    '>{{x/KDfQ]jjmha9j3<bkvC3uSb.hM~{8%pSjih:$s1yik!Q)e*2BTolLcnPCD<K' );
define( 'NONCE_KEY',        '>udv%CKQa#bQ#y4322FBowN,L_LHm;15Cw0.VsV-Bu<>M4jJ;JgxVgiYh?:NNDT]' );
define( 'AUTH_SALT',        'pX(su%`3rf`_W?`N5LE0[Ey:f*2!-FwB<*EgI30EU`nmy(U?1BznvH mtXnblRNu' );
define( 'SECURE_AUTH_SALT', 'BAs>gO4L7IQSrJYOOYG:Rw_E;C_BR?0;SjGex[V/Eaf wSg<_2|,DGejG!gOQmOc' );
define( 'LOGGED_IN_SALT',   'ncfhS,$hg2]zt0(DN5PGluk&_21Xxu%?1x8nw5yvCqzk1gS/gAbY6xlly!Kc6=:1' );
define( 'NONCE_SALT',       'O5WpJf*%ca5WU#-@n<FO;C1Y/h?EGm]CJLOj%c!w?<plmXrKSZw@Yv[dILdOkr%a' );

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
