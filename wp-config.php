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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'p4Z%%Wx1A/>esU5|r[2WdG^(au$m!vywf$:/M^QI6_pO&,ArP|)luo6Z/9b1~h7K' );
define( 'SECURE_AUTH_KEY',  '.M?SY& uj#U@x/.iO5UmCKb8&p@Cmaa)L$aTU^Mr.P4GOy^y{FsJ5xh*CXuwSCvX' );
define( 'LOGGED_IN_KEY',    '2831U)0#YlbOna.)l-}yh&B9g,~F=/]p:.jA)tvSoAAn]o]E{@x|+d>h@F-AHBDo' );
define( 'NONCE_KEY',        'CA3Ng8c73V17F<32,%U/`i;.L;!|OH -XYx&j:>Nr&,L9;=GJ:$6j!0%wN:{ )F{' );
define( 'AUTH_SALT',        's/Y&;%&gFN<CCo q=ISz(.HlI$@jYD7;D]%m5qU<b#128&D<u[QMXe+}$otd128|' );
define( 'SECURE_AUTH_SALT', 'KR9P+{*u,<N%xc1+k4uIgS{EoUnRS.DuGvy+oK@E&(eCMm)|C]Dw|z)(dI50hH:r' );
define( 'LOGGED_IN_SALT',   '}1cJJ(?5O}%T3FP9xl0YDtR2@[u@^pn$lRfhm8(Yh0Wc!$bz]DAy0@fE_|Jq4D$&' );
define( 'NONCE_SALT',       '~T!^.!A?@,L&;TYg-y]JN0yWK$:/EcOqx&S,P-_*Q1gFBy#^Fe#<<wO{n;fqDK3H' );

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
