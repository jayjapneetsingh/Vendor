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
define( 'DB_NAME', 'vendor' );

/** Database username */
define( 'DB_USER', 'jay' );

/** Database password */
define( 'DB_PASSWORD', '1234' );

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
define( 'AUTH_KEY',         'F~O_jl#di,uBg3$9-(q>t!P.)f?lXz5~h(L0KnA60JSw5/&I2i-$ :06wz@VoXBh' );
define( 'SECURE_AUTH_KEY',  '+2Gi6fiCh`KScabZ|6S[UJ^wrS2baz2DbE]GYrA_xiGz1T}7x!|c(]XV<W:Fg,.a' );
define( 'LOGGED_IN_KEY',    'Y|QWA]rYo|jvL)@`<[wP];g/w6gYO6^a++8J|-|e<J1rg-|<C}Xh^W{0x)N]Q]u~' );
define( 'NONCE_KEY',        'y{rP(Xs5u0}&},Vp%(ru`_&zl/XRmp_s}b)#FGXE7qmzR1C50*I,b~B8io!*G!lZ' );
define( 'AUTH_SALT',        'mL;=!338YzG6%2^KO:xU-S{:B=dINUI`XV}i/,AAj`-j6&PE/V#T~Z5ZdFFetTSE' );
define( 'SECURE_AUTH_SALT', '?i |D6LA7eWnitASUYu;o@s{Mdv7e]vv2#5 NW&F;-)qC?7WQI]9_]hI(v!{:xvV' );
define( 'LOGGED_IN_SALT',   '|c2u_m;^Nx*&)>zpkv6^%RviMy,8Jy]>PqQ07e4I{Rcnjb~iA-dlj;$jaslD&t-^' );
define( 'NONCE_SALT',       '1ys4T/d:@<a~6R!%-z>+X(%M3WD#fssp-SY.+K{#mRESLPQr+&f .W:ly[@6av=<' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'vp_';

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
