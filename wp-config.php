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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gadaladeniya1' );

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
define( 'AUTH_KEY',         'Tlyv8b[@PhMS4%5ooXLLYdwUT*y$.5%h4HQ}--CQ+;MoDbKcu]7p{cMw|+^ho4wR' );
define( 'SECURE_AUTH_KEY',  '(J[V<cLBb{$s2235i/HXdD@s8d<wNHgfOs,]@j@or>HHB252cc_yA. v{5^wiWwU' );
define( 'LOGGED_IN_KEY',    '/*<_L4y$}O{ZEOBKju.Q{h(j/hQ`i2!2A3Lb.iuQOUB]hb?mV}:,jip>|b<_mtHB' );
define( 'NONCE_KEY',        't)sEguTQm2QlzshTNvmu,<zet^dLV`9y0OR-N)8t~kyAU?kgj0PQIq$g$>?@9kn<' );
define( 'AUTH_SALT',        'YE!cQ}dShv]QCnc+?L:0c)Vm{.yM;{7m5u#pIpz)N%RYlMu&;]`$b>)L6D#;9fk ' );
define( 'SECURE_AUTH_SALT', '=%-}Y5r4_AEHEilT]:xS.ZF$0hh~,pG^V<{twejrE*/Hjobqtq|dr1XQI)PMzD,k' );
define( 'LOGGED_IN_SALT',   'MaBI[X.D@^q+7~_O3LX(Uon6dX(h-O-<%+5-h2kWa>16Pa/4|$D!3Dny$7GK3Z8j' );
define( 'NONCE_SALT',       '[)CwD+]C3k3-l[LUL&/FMPJ!M9rVfObe:=e},*H&iZL*xHIQWsqdGON}8Z-K1NL+' );

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
define( 'FS_METHOD', 'direct' );
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
