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
define( 'DB_NAME', 'testwordpress_db' );

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
define( 'AUTH_KEY',         'CZEwwD9y@v*ZaeorFj=.)+[S{zI(e=1Ln&LX~c)A-/RO8M{8i~SLP)!-wQ#cUX3G' );
define( 'SECURE_AUTH_KEY',  'c:?zcRBp+B.n+XA#j|8K{zT@3ucenATmm(k)c,)4 L8;YqiM~T@Xl|=_bbDd.TI!' );
define( 'LOGGED_IN_KEY',    '8;J*8.l8|FU&)D1m#;7-Peyv+Nk%kkTg^f=Jj@T|%TP.i6=#:]42SM7N-6TQFp2H' );
define( 'NONCE_KEY',        'uxF*e!`/8^R=F>kI3B(QKtX;B.={]._PZh6,6q*n4YYGcdpMoCJ[ZrhcGa n_{A|' );
define( 'AUTH_SALT',        '[s?GGJjYJG~xtS[uj(E4w[a]bklD,m5Z* *}2nEm)T4Rm$s^Zyc$pC%|b.k,F}|{' );
define( 'SECURE_AUTH_SALT', '+5#N]mEyM-tpC]nxCf#R-~hE+]HecnS13U94pm2s:*rbbpYN0<@H!k)$z<h1^c>c' );
define( 'LOGGED_IN_SALT',   '2Pmqm?M0Gf*QI.udQWpR[O]^ckSz AuRTP#<rAHaNGfady<qV,~kEhuqzQ (X6}(' );
define( 'NONCE_SALT',       '_O g1+acwI0N}{K+_{gSeLnC=2tvn;9u_P`iLy(}(WKW^,eu sW5dxX$E4pK MPm' );

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
