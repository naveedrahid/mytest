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
define( 'AUTH_KEY',         '9U7tKSE}eTQmIqB~a?]3<gcXd2L|8$`0k;(+)[mWIY3[ny,s+4-;3Z*:X}|)ecwV' );
define( 'SECURE_AUTH_KEY',  '%SoAgG%ZwqIm0He$LDwr*#&cagk|-%vES,Vm9f3Z|oLwEf3rR[X^IyolllN;krnG' );
define( 'LOGGED_IN_KEY',    '7{(tBWMRrVT)& PS?2>1~rQQ[UuwM7{~ooG++zVWe4;VQ+THYZCv3ke.m*RNg*9N' );
define( 'NONCE_KEY',        'dI)g{`iK&iVNhj$>+(Oe?IeV5y^6%&[:/jo7nC,( p(ZIz!,b/prD*<r ?AT&)!>' );
define( 'AUTH_SALT',        'B tUE:0g0efbVFxk:6fSBlzET(W5 QVX?AaJDz0CjtR;vOa*X{#OG7/}G4c?I<][' );
define( 'SECURE_AUTH_SALT', 'ySVu-;t&{WcgdHBD|H7F`!D. :)ne?|fm,j,V[cZR&$$4ApEcq[]L6yAw-x[qSR=' );
define( 'LOGGED_IN_SALT',   'Z3OlNF09X+LpVm+E[pB_6$hUFhq1j.Qwa28}U.9bKOc1}q_/=t8fFlM#N)?Dq{f@' );
define( 'NONCE_SALT',       'XBBsjccPJ]*Im. C,b]V[NxN1@f.vz`J,6eAS<t40%Hd4IA9UQ0Zb/;7Uat4#*XG' );

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
