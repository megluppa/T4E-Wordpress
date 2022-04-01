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
define( 'DB_NAME', 'transform4europe' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'k#<tUL%g!e80,+AUR>$]Oyor,F_VgJ<ej#1g93t1>6Ea].*~NtN9l3x_R+A`H5Dc' );
define( 'SECURE_AUTH_KEY',  'ZJ-hSv*V`:I/e%~n$p{&@Yf1yO]bHO4V&jDA[*Ti7=d7_+<+%7OyYqy7Ml8>}Nb^' );
define( 'LOGGED_IN_KEY',    'pD+Rsnh8dA_p&ZV+JLbA,MB%[{6.i6:?7:uAR(<W.GiH<W#h@]Qs;D)2k3w@=N.R' );
define( 'NONCE_KEY',        '63ryZpr>k:wk4p8DTFb7N?~NP.9m`n*AN.?QiGz0l::>f`wW(-m]]b)F^%OL._P)' );
define( 'AUTH_SALT',        'Hz6gPa<(*{6[cQjq+|aVGo-5|}j!/=())07%L>)~.!4$g!*]PDIVlw3mbU?.5aAL' );
define( 'SECURE_AUTH_SALT', 'z0s@2*Drh<XRt;EWatbUXv}AjM_-T~b`b5QP# W:,kf.x9U `z2g&]${Y:0H<Ecx' );
define( 'LOGGED_IN_SALT',   '!eaMEHB?NE;Zj=j-6o}3A!L*]~w+R29rn<vm=7nAUN`ZNVd,xD#T|!r2+_JOk*.z' );
define( 'NONCE_SALT',       '!Iwn};J@Y1r.dl?RR:;TR/Bl?6>`k7s+HmyO]Z05itX})MI?U*T,}4`1b/QR<OV)' );

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
