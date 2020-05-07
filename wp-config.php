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
define( 'DB_NAME', 'cartproject_db' );

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
define( 'AUTH_KEY',         'V6N511 HKm/6l3lsYNwb$6~cbJ;40p<F<#p ^E{uD`HS9,`caOW*_#wqRnp|L-W>' );
define( 'SECURE_AUTH_KEY',  '3Et.fD(#>&20Q0cy1&FZ>|v=;Rw-[YVt.p2m|kpe[@rsKmLd(3bM]l;NUs0At)8<' );
define( 'LOGGED_IN_KEY',    '~H&UJeKBYOqZ:1D:Q#Mk@N:|$b0-9,Ws0n:A316pg:]PIJpf1w)UhGnVZ1M]Y0%R' );
define( 'NONCE_KEY',        'x|NaCi0k.0@K3xug141OFPKy%5Zm!*+Qec&XPi1p9p)Fba^C?=j)WaNal$8PGuBb' );
define( 'AUTH_SALT',        'GB@/oU~Y:S&%Y,KAC~tB-DMH%n+aen(V)x}F0L.~^ZFPRHMMX1_0mk M kKlHIkR' );
define( 'SECURE_AUTH_SALT', 'a4]xq3$/bVL%/C|:O=82.O+@%s+K{(VtA^VwMW 8aem7ogU&6}5Y}DCFCp2A:6w?' );
define( 'LOGGED_IN_SALT',   'VU-3]i@K3c+]QmuTHVb7)76P>(r{TyzgJdw(*XXQG*zp/ms?VY[Mngl)a).&2dds' );
define( 'NONCE_SALT',       '_16v}B%c#d<sst@XM/?%D BcUoCik1%_brLsQ3 1_VT{L.&`$Mwt3yAzU1h|[%rB' );

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
