<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gokboru_otomotiv' );

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
define( 'AUTH_KEY',         '6,lp2reT?OF<!3.3[HZcx&s#D@u!k,#<RTfGmmXl)k4vE3)<zZQRyt{<[u?9Vuu#' );
define( 'SECURE_AUTH_KEY',  '&]*3*s,U&tX>:PQ@3rp2*[rI4ti01a0^5zNjgZM!t?KRR_Avg$wS!HXqrwh8;ZPs' );
define( 'LOGGED_IN_KEY',    ':yQ?KpMknkw9JK6;huH`~H/3UXiniUl+d<l.4B]A=/1cpn6qrKZN*-*$YvJN;IOX' );
define( 'NONCE_KEY',        'b^8bYxf?puHN7.L0kr(s=E@2l-@jm!PDv($`;7RgB<euka|T.@Gd*3tC5c%:u;jM' );
define( 'AUTH_SALT',        '$kP66riW_c11<fz>^^M|g7-Vsg8N[e#U-UTtr>ITkUd:b1_Rai^Tqr#3[K.{Gl_O' );
define( 'SECURE_AUTH_SALT', '}PF~io|cD*ikCvjBL6DSqeS5-,lGlFBHwR454z-_QaJ6:)tc:la#hyEV#YjT]Q[:' );
define( 'LOGGED_IN_SALT',   '0]Uvo#$TO|f;T=@LfXg~1l3Vr9kyc/VBb;[eK-8xkaDYUHP^WEi59`%EGPCH-6hC' );
define( 'NONCE_SALT',       ',^Z{?vGxVBt!:s];()-d#>I)*(|LYl.Ax0f3H43<_nIS6~LYxm1Gj7})mvuFfbCy' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );
define('WP_HOME', 'http://localhost/gokboru-otomotiv');
define('WP_SITEURL', 'http://localhost/gokboru-otomotiv');


/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
