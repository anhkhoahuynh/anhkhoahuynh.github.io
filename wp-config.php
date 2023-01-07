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
define( 'DB_NAME', 'bacuccauda' );

/** Database username */
define( 'DB_USER', 'bacuccauda' );

/** Database password */
define( 'DB_PASSWORD', 'bacuccauda' );

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
define( 'AUTH_KEY',         '023/;kGt5%MSdZ#l0~ DM7vv>PAZ@HN5_~^1gRs;[]r:|:L-Yl[NUl`av^Bu0e6l' );
define( 'SECURE_AUTH_KEY',  ';!e|O}N+}f|V7_OmosiDZGKUdb5(h+iXOtQQ{)nZ0gNk|NH;qUZR>fX{8!240$Yc' );
define( 'LOGGED_IN_KEY',    'Xt+mHPs*%VTx(NpOW{)K>0k)eHYZd19Au;8Em*0lx&ob&:oHKq*G0l6UJIAJ!?k0' );
define( 'NONCE_KEY',        'w?}m+({*kQ>a^+Q{G[i)>%?J+:an=!ANk*O=oZ,lK4i)^Cv`/#U)s~*|Er&qk:BI' );
define( 'AUTH_SALT',        'Hx4_!pU= ${bFK)t#a{OHrzFEXn^D{<oPKev5dc_%X}@Og6&<<AcDFuX)nbL+5 o' );
define( 'SECURE_AUTH_SALT', ',/.7CXl+G-XB^Dg@3j.;Ta>)OAA-M;i/N439Q{4ei-o%uOXN/)Sq8_3mmskS8k4%' );
define( 'LOGGED_IN_SALT',   '!Wuq6tolVz$Z1g?6I2VEt4+Q]%QHpWC_j_bAvU|689>!W4|%`ANwFg2JF(*B,3`P' );
define( 'NONCE_SALT',       'aeUnN{8rW1be:NPi7S7v^6H6jz+eACVNL]*!:Uba!!?y%)I0y3d{!lLDcVNSx@ H' );

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
