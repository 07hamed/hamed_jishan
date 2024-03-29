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
define( 'DB_NAME', 'hamed_jishan' );

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
define( 'AUTH_KEY',         'EU*3S}Eh)ow1i<EVZ=hVd#*sXd!y/!-UB/{0 ;5D$FH4R#R|RUn{ /q)pGYCg#ta' );
define( 'SECURE_AUTH_KEY',  ')wScMj _iC!X3p6n3>c?i]Kjdcb%bRf7^ikvqCzcM&6B3-g3/z1=rT,,0T`yr$)X' );
define( 'LOGGED_IN_KEY',    '$fU/kuO$E+:?Tg:J}$0haLPWsm{A6QfN?V4.:qE3sEqZ4h$3DJC&tlp=_Rp#$CFo' );
define( 'NONCE_KEY',        'j-B5P`z+<&Je4O%]Rmkt @X)v{*sg;=Vy}hFB(O ^t3zJ7M|d!g:Gn#KoGXhzWx0' );
define( 'AUTH_SALT',        '3u*{d2bH6* $W?(T<n|b)jxT9z6Fv@&(ZXD-Nhl!?Jz7z I&ph!j[ad_ouZ-Ree}' );
define( 'SECURE_AUTH_SALT', 'eT l;z>>1 3v!Sft5pS63`Vtu#>x@cP,t07kL{mSGg%;UGd<p$CqCJw8a}JUv+4~' );
define( 'LOGGED_IN_SALT',   'LFb;-xO}:SZ0#e_CiOR]|R(vta&WWR}uuCuR+XVh,=0L3%#.W|FUB,G0D-0Vmx>+' );
define( 'NONCE_SALT',       '&LPW0(hlLdDT;~+A7ONkXqNtPNe]4e#269mrABVDeQyq,dRx<3{J(:*f]HT]+~#G' );

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
