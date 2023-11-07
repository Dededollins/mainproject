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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'kehatimesangatsuwi' );

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
define( 'AUTH_KEY',         '6/lP,C&qc$Xv,B(^s6_|tU(54Vwi|d&bWT5CaSN6KHI|n`,CBg#&B6KQ@1-~_%Q=' );
define( 'SECURE_AUTH_KEY',  '4G(a>5_n6%YmO|e0rg*tX(?_Z|p1x{AqaZFw^[>Q;M](,qv+,26AKvm5Ulcfbs/5' );
define( 'LOGGED_IN_KEY',    'Tffx*7Bo~^0hc8>9]G({V:tf9`P(kR5B/Y(f`!-x9KX3@gyUVZWHMtdG!5:;8ty&' );
define( 'NONCE_KEY',        'Ip0{o|3}I08F}f_Xt/DXj]e%80/dEyIyH };3>-b6#Ko;T9N(YmOyd{Pn.W3o_Nm' );
define( 'AUTH_SALT',        '+fYQhe^wJp%M(F:2Uql-NAgudI.!C),#**cq_.+`=1#A(N=Dj$u=o|3I`l7J>=6K' );
define( 'SECURE_AUTH_SALT', 'mLQS6}E@s;%-X.E/guYpbmA)Ex:bXV*`2[K>T,y$Ikou~=owYeejVSp.lUG|YXAR' );
define( 'LOGGED_IN_SALT',   'qn>ZefI+ LUtYpSk*+$Vja]IPHOx=~wnU|}]S1~aRwqZ]|e|0UA=,$yFE4)C84,_' );
define( 'NONCE_SALT',       'huk6KhInFHL O@:g~agX$N(V^.0[+~qGbq{Ezs~9[>VyRi1`.iIHFQFH~XT.zH$4' );

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
