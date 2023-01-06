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
define( 'DB_NAME', 'admin' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         '7*HFJUws3E!.gfE1,,}ZCJac`d4Q{V#+wu-+/FFhF2/^WF7;RtH<2a*sH[q$!Utt' );
define( 'SECURE_AUTH_KEY',  'uy*4j]5k+<}-R3J=385neH;mE>:v{8=,LcWf#ySv}4ylp,mkv} $utQcjcGQwyI>' );
define( 'LOGGED_IN_KEY',    'X3z+gEIX7oJzGTIvGhe~k3K+LKnZh@ow4Z4i,zp%<|@>>UQO+Z}@xejBO*G$c5F@' );
define( 'NONCE_KEY',        'l)UbFHSN^6 &X2&=7)BJ&zxr>(1cv-:|jw2XWA(xyS7KYsBa8jcz,TSUKyCmeiwC' );
define( 'AUTH_SALT',        '%[GQ%5bR7$w ccJl()VC Q6}$e.8)`IO=dCGkDF+r?JK-u#5&gvf6~f%cz}vYOg/' );
define( 'SECURE_AUTH_SALT', 'OkYnq}.+D:mc4>gPccEmbkuNhBr A5B;(r>G8)|sb+Zh_M [PY#b>-V!`}y]*M7!' );
define( 'LOGGED_IN_SALT',   'GKnrg7B<*yTd14?ia>n81s<C;4s0`0M%Z@$P-f7/z00<~`h&sxal*>[nsZv_sFs3' );
define( 'NONCE_SALT',       'G^90TL3VR|/6a#>k{15)zEDfM8 :p@r-<2H0/trEU`*EAK((nM:ePb/YJnWZhhHx' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'tp_';

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
