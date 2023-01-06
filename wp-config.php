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
define( 'DB_NAME', 'khoahuynh2' );

/** Database username */
define( 'DB_USER', 'khoahuynh2' );

/** Database password */
define( 'DB_PASSWORD', 'khoahuynh2' );

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
define( 'AUTH_KEY',         'WVVyKC;^0>#^x?^OQ]Sg*Vm]hAK]8+]z.j7_Tb9*`UU(d#t,e&1{cNsia53J!uwk' );
define( 'SECURE_AUTH_KEY',  '7j/GgvUH.K>QV&_IJY~Iaub#ZfZ{t^jgt&E>fu^IRhM$&x?<_?rDQI72%3_G8>/3' );
define( 'LOGGED_IN_KEY',    '/W+MHf8UV`.L452BwOV=.).z!XWO~{i ;$=o-&Rk6%PAG#^-3eUtbH3)O$?Z&t&6' );
define( 'NONCE_KEY',        '2J^y/}+V0XHi#`UNVO^y;BwCl|*42%-E~}R`~,)7Q.5ACRbGWqcV`pvq:r&#oDvs' );
define( 'AUTH_SALT',        '4`2zuKzCF.T%G*| NkCAu#DMnr&F=K=~t;kLA)eYH{rUI-BMRH_=8oJJO/$9dt!t' );
define( 'SECURE_AUTH_SALT', 'n1[UQu|!ruhz*~L;Gf4Gje2LM6Et_28PJ${q2il;j$y:}/Cq&y^,[-3XOD~P1Y%<' );
define( 'LOGGED_IN_SALT',   'Y{Og{7:h%=sb^m ]7cH0;|&og3o{La;#xck(.&&MuQXOX!j(0-9%_hmW{UJAu@zW' );
define( 'NONCE_SALT',       '?#SL}^wug#_Du*RcTE/kd87kQxb%[U;?tz9ULt,oA|Y%%UX3?0VwoYge.6wFORKZ' );

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
