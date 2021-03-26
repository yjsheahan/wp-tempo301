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
define( 'DB_NAME', getenv('MYSQL_DATABASE') ?: 'ttest');

/** MySQL database username */
define( 'DB_USER', getenv('MYSQL_USER') ?: 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', getenv('MYSQL_PASSWORD') ?: 'root');

/** MySQL hostname */
define( 'DB_HOST', getenv('MYSQL_HOST') ?: 'localhost' );

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
define( 'AUTH_KEY',         getenv('AUTH_KEY') ?: '&KD+aHQR- ?hrUB:-|?o9nuBd[zF]N5U!_246S[xZ$N]k94Wlb@`?5Tk2l8C];J#' );
define( 'SECURE_AUTH_KEY',  getenv('SECURE_AUTH_KEY') ?: 'V6d2ngdfTw60XB<FiP[(Wep}}SPcmG_`r0h~fZ/<&I?KD&cO|F(;NHpJ{Q^r!Ar6' );
define( 'LOGGED_IN_KEY',    getenv('LOGGED_IN_KEY') ?: '%>#*3T*OIxj`0}273rW#uwP2}&oH41MoUe(-xHF}uzh3xh~}t}`ysw)L]UjbOA^:' );
define( 'NONCE_KEY',        getenv('NONCE_KEY') ?: 'uToZOM:Q8kv_9x2p2~P:E(*@gO1=s+V2_/&V$lV-57y|KfbW%)y]Fc[Ck P!Xqf.' );
define( 'AUTH_SALT',        getenv('AUTH_SALT') ?: 'AB`DJ~Vcwmn#Ea7|I`6DyG}i!&ZvZ~$Q@K(rV;3?D(7WsfgQ/$6dk+lyz!HQ4g5g' );
define( 'SECURE_AUTH_SALT', getenv('SECURE_AUTH_KEY') ?: 'JU!$Wq5O+t_s`+9u @|,aVS8;6Gmjj>7,ZM2P/jce2-Ig |hBK8n0o@aa<x!.Sv9' );
define( 'LOGGED_IN_SALT',   getenv('LOGGED_IN_SALT') ?: 'fB4S;Y{L|9}O4k7|dg#Sj~~WnAyf7N9gC6g+PZjVvf#Pe=KP{FljoqrxF~4 #)^I' );
define( 'NONCE_SALT',       getenv('NONCE_SALT') ?: 'FnL)fnY~80W]t`QT,4;=`Xi?&OsPH`AGqC2T.d=<oIj2H=GH;4>8 xCWWbS(vM3m' );

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
