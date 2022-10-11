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
define( 'DB_NAME', 'prueba' );

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
define( 'AUTH_KEY',         'q0iw[xE[>_wTdmJpXIS@<CN1_L+WL 1u Dd^Pyv5 fzC$8U0.Xw%Cl<(~XyxmDIm' );
define( 'SECURE_AUTH_KEY',  '=3&G|s.v<W[owy&yPh}]!<_BH{O.p|+[S^+4]`j*TpUS&.fy{VHOgJUb&.2(pmu;' );
define( 'LOGGED_IN_KEY',    '^>/5LZglb`sC$#uOJ1l;cOcb])-bk.&jK1EJ@2mk!7fEbw,s5cjWi9M Np%6pv``' );
define( 'NONCE_KEY',        'Y<[We~)F9[-u%{n2>p9TsJXX0y;A/9m!c:d,]S>Zhp6d*)^it,%pY_Fa;VvTYlmS' );
define( 'AUTH_SALT',        'RXng Q4pQGx0[ibwDSfjZ*Bo:r7w<5^Mi.<ydFZ/JY{v!e%w%i&<d#,oWP>zu16f' );
define( 'SECURE_AUTH_SALT', 'jw/Bro$37@X+1;ygi[6L<upVjKN|%}^}eeyRg*gp<tEp5P0k)D&B]b6TXZ*FpFV&' );
define( 'LOGGED_IN_SALT',   '$o/?9F?H(#l1t3|LV{EK2&fYn8$f*-N+xP6=@Fe9Zv GyD4Cs~LH$+Q-pX(}NTF1' );
define( 'NONCE_SALT',       'T,/.L:{U:-aUBv!eSG]F+S9l~/itI+l@tkpHhc,n/^wn6.I%r[}xQ?QgA%b]9M?M' );

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

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
