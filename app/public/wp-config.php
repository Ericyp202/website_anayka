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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'cny wW_F]~w+u]5@rf2_P;[s%ZZNywka!Ds&uGzUv|SJo_ns+WJ!31L7jfm7<o6d' );
define( 'SECURE_AUTH_KEY',   'oO7L<s2}28mULha%%ErZO$0P/dZ$3d:ZD6M<U|vHPx8)K[7aa@2R)BztdFW}fC#v' );
define( 'LOGGED_IN_KEY',     'LM2C`7ziXF*jB<!*X=(i+acG2`CO5IXxvrOdo253BUbDtl^5{?y>oDM{@wg%B%e<' );
define( 'NONCE_KEY',         '>%n(&HcJ?f]O)W|zG{+}O)}Ef!sC`fb:Qh^B0WSoO1RMRmL&JM(tN%-Ur{a3.iTo' );
define( 'AUTH_SALT',         '8<v|ptfUv#1Ov,&[&h[R/J>~^bdw=8gwcO}|9}FacnqU2^7!!l/p8)L-/ND`^{+*' );
define( 'SECURE_AUTH_SALT',  'Rmi+cR~X3)H_aL|n(uI]SUup10nVR1b><%q`V~q@w28=M0t5&Or`r~6h!yX2aYZa' );
define( 'LOGGED_IN_SALT',    '*ns`;ym9EGIFAAKpqaUd-dcq+{=b)cOZv)!YP@.vGon@1hbe,B@.k|>Jk9d<zMHS' );
define( 'NONCE_SALT',        '/5PRM@$iVgt4 JGnORR$>K=O-iQ4O<{;7C,9L3Qp>ILEt|$Klk,ZfvSFsG-TsI50' );
define( 'WP_CACHE_KEY_SALT', 'p9y|NKTj:^S8>f8:(8z=`3AH-#YUH1N:rJ{=`xQ-`oe2+(gLtm[5+92K3hnCX7i]' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
