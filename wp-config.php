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
define( 'DB_NAME', 'grace2' );

/** Database username */
define( 'DB_USER', 'phpmyadmin' );

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
define( 'AUTH_KEY',         'Wd^gV9*o=j9h^SRgdq355eFw<4?qifo.`.^,0QTe;X0KO2XfTpTU7>g1{@tN[AF:' );
define( 'SECURE_AUTH_KEY',  '-f+uFO@HnUE<YXSqVHTqH42u_Yf)0V327xmR`IF|+WTQaLmX{^j<5}ycL||2 +eZ' );
define( 'LOGGED_IN_KEY',    '^EH<E;F6<TF./+DoE=_X;e)aM[hiv9m$w&Q#a<ljL|JjB&K=F;uGsO 7a$$kf=*a' );
define( 'NONCE_KEY',        'Qs>YcPQ96n)ZIzveX&x%75D58nmr-X07-4Iva1whv;g}U$.UEG#J]Ia~TYb$MnQ]' );
define( 'AUTH_SALT',        'lL%r-xy/]^Km%1Yz(Wtz`XBm/yOOoF~h{|biu-QfDGF$n&46e?6GBQIdEDSqy6d,' );
define( 'SECURE_AUTH_SALT', 'Nvocfik9}AUez8d~$x9,O<OAw1N(_: hFMjpNh&{d0{Cm_@LAsi@&xp|^Q`KVLTA' );
define( 'LOGGED_IN_SALT',   ',-Mq?*QkGCyF>gK%`I5pwDz7>$lvo zs*}+dxK:pqp!prb1PU8r7)6Ac(#I H|0W' );
define( 'NONCE_SALT',       '{xM!NNp?y+SpQ2K~^EZ;NC#~jpF~RvAH6`#GIpw (]a-]4H=wU}OX.bgf8@ /lqW' );

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

define('FS_METHOD','direct');
