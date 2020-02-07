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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'silawordpress' );

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
define( 'AUTH_KEY',         'g4A?Relc5gz9 wO@KpO(K2Yem:zu%<OZ^Fh;~/scMrh9:W-N[uX@2Mc :lWei}U,' );
define( 'SECURE_AUTH_KEY',  '$*A}fBv-2)+`s$_O 3w[Ki0=.q7uCEEOGvtd_N=KU:?ir{=#ibvUQ3kp#&c7+}L2' );
define( 'LOGGED_IN_KEY',    '/4?hz{=RG}O9cxWbX4NW3ism=T=.P*mFRLzhiM[}-*bVfOr@aLzw nLVbPI4&{?`' );
define( 'NONCE_KEY',        '66&`8UDF0>|#m:L0T([,=;guYFJXX8GzaVsj8#8^}*frRh?f8lcyOrYJ!,94d[e}' );
define( 'AUTH_SALT',        'lE/mg;b*p)C7e;m5`H-_drs0Pb!k`%Y>FT6VSfUQ@!jd:[yDU}!/?61POx+a/,G`' );
define( 'SECURE_AUTH_SALT', '9/y04Wblupuf7^J,ky|LgtY48RYkO._w;=ijBb:>v(c(:5GX%Thbsg*Yi/r7[G/{' );
define( 'LOGGED_IN_SALT',   'KFJmTv@?6K1~&S;|cFGe}2!u<Sk,%7~WQp3~LobOyiKRgT2z ?{`OXseVaQDh1n;' );
define( 'NONCE_SALT',       'k,#.*TtS[8}*H7LQH)|+FLU!S!-;[H%{NvUe>^Vx2PYAR|K{Zl]OiS?62abr^N)E' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
