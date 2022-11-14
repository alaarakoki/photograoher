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
define( 'DB_NAME', 'web' );

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
define( 'AUTH_KEY',         'nw/LMk-M)51OK*Y?`TvefLIN{(w<>_j2fE`MaBOF0F?KA^6`x15<!$8L:m4A9D*d' );
define( 'SECURE_AUTH_KEY',  ']e|dxv|%PaiZqUwH_^KH7%o=+R*dnq7flQqaNyY~^Ae8OQ0&d^<t9n?uzkl5VKHe' );
define( 'LOGGED_IN_KEY',    '|{Zpq8a[uXt=ilEm>KWFd(EiCctXB0w::WhcK`S*N$y2*@Yew@=v6E_h;Ue[qu7N' );
define( 'NONCE_KEY',        'alhkwy+Ql&f0Dq1A^Ak48at.)Yn3@^+=PJdFV p3i:SQ?u^^fNR?LJ>2([bp0[F,' );
define( 'AUTH_SALT',        'P6(8LX&kF8wZzU&TBT!*qN~nR.foLR3g_aY32MiwlxV.Ar|[mWull:Z(kYiuXnS^' );
define( 'SECURE_AUTH_SALT', '7}*9>v=&J4}0`SmgLi(gaDN%)7jJ}W[SQb8c j f^tN/HHIoVuNU}JMxCRLN7m:f' );
define( 'LOGGED_IN_SALT',   'SQD;j>&|MCcAE 1<%)xGm8o ;-4sMG@in#X/O!WJ8:T1L_*5y/9x3=cLUc; 9`KT' );
define( 'NONCE_SALT',       'yaMgRao:Uvz6{8J;fGw;tq KM}!p*ocC;W[;4!^?ElLj,-> t~y,=#JF97h.0W ]' );

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
