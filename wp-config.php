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
define( 'DB_NAME', 'final' );

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
define( 'AUTH_KEY',         'UVCFnf$9W=H*>idg?7XKy*cB.zkx/J|WI+iGb&IQR{gms){/Xbuv~FLB)bGbNBJo' );
define( 'SECURE_AUTH_KEY',  'BG`XEJmro)w%4b=}rNtY#0Q+a`/iOtkdm,,jp42No7K04Tza#OoLkjHMZwBGu{qP' );
define( 'LOGGED_IN_KEY',    '%p#(ygB_PBw>(A`!KVS@iK{=q87VSfcF_1}Ilxo1hk7:&82kF2bb,O=c0RzQDY{3' );
define( 'NONCE_KEY',        '%AL3dHmCiR;E?rf^oa7kwt<oQSt;;k@zY28N:TOlKJbO7X,6MHi0G7yIo@o)tE{b' );
define( 'AUTH_SALT',        '.>ZGnqIPU_4CfzlEZRIjrC6ditxnEic!:/%)p3.73bX+w,TwD5~~vs2iU8e.t%NF' );
define( 'SECURE_AUTH_SALT', 'A!t*=c%LY7TnBtI5>Kz26Qku1wts2ia`ea2^M}ztx@RR0&XuHTX=#B2_-)j-vBWW' );
define( 'LOGGED_IN_SALT',   'T%j`aSdJtz]`W3S|>1SP7*g|/9r.uSUh=oj{I<by]kUB&#&OdNnn^N_r4|rzdkZ#' );
define( 'NONCE_SALT',       'O~8gTgDm]Wyu+/q8=&U@uxTC-(bO_*)916CL!B_xK-*V`2$BoBHwLSokN@SixkbM' );

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
