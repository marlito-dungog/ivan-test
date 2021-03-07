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
define( 'DB_NAME', 'ivan_underscore_db' );

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
define( 'AUTH_KEY',         's*^,0eeP#Gy D76%;HdC}Fh17Dw1h]_6U:whiM5gF1grQaM4Z8[s[l#&D,aCk}5q' );
define( 'SECURE_AUTH_KEY',  'VzKLLwUMCZ[{$vzBV=NZ}Fu_&R[Nc!7xxhIVnc1 ]}{H7]w/Y^lEUj&gk2 jHC:l' );
define( 'LOGGED_IN_KEY',    'Fg[/f&IsxG2Vufu_Xz&;Jxam(vkpn5I):7_JApS[Y6?*3fGbBIZReb##rBXFcz|>' );
define( 'NONCE_KEY',        '4*eZue?(p?S].$1Oov%ON%oj#<>4^UujP`)||A&`U:/xAkf#*>o7p%UpC4pm&4.>' );
define( 'AUTH_SALT',        'D+sit6$Z}vP^zSY#^7MfM4ZgTZegczS)G)N; !FP/Q;WQ X7jhNHZ;*:.MO|Gm<d' );
define( 'SECURE_AUTH_SALT', '0%,j:a|O&{nZQ@()X]?Oa?2K>+k.7Q~a-@/)G,]tb+Ai<cAgixb2,}Z1zg{D/,_.' );
define( 'LOGGED_IN_SALT',   'H;ZCf{$2v[Y,YdB`V`{/UjO2@bF&s<+P=WlWbBl2D!+<<&!E3.OY+:^@Iuhn$rM-' );
define( 'NONCE_SALT',       'eH%5R]!y+Xs=3*?WPrp0],k^m2ogB![txilzx!3e8d6,z[:8^m<|lP2etH?2vnE2' );

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
