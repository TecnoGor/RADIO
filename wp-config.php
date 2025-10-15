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
define( 'DB_NAME', '1033db' );

/** Database username */
define( 'DB_USER', '1033' );

/** Database password */
define( 'DB_PASSWORD', '1033db' );

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
define( 'AUTH_KEY',         ',An- g@Tv+knS0ynI:BJ8?]~n1;lM!K;nsaig8(75!v9e!@mSj1v)0akK|, k-bM' );
define( 'SECURE_AUTH_KEY',  'YRM_?5UTVx^QKOm=vSln%(5:?~C4(uR~1lF$DfvT3uV^sMSTK{5NH%CuSNAB $R/' );
define( 'LOGGED_IN_KEY',    '==jQe0.w4T%%3cbn~v&tn g=?n}/vAR/MXbd[]=Y*K.syz.,^i,Zlt^=P9Kltv5y' );
define( 'NONCE_KEY',        'b|0V(lygI|`$&#iM*os39.[%S[vTuBdM?1%jM+m+q_m;1b:TE#MEv$`Ht,Vvj Gd' );
define( 'AUTH_SALT',        '^I#c?Q`Oh,pLN2=<3Ecj3#E)@.=^gGSC~D]zX!EtN~.T7YY>fee$@%Oml)g|wQ,b' );
define( 'SECURE_AUTH_SALT', 'cx4]jen7VS`T=]L3Dj9&Lo8kq#m(k@ty1d[(^lQ3|w)V@8<&vsf7oK+T7z7[Q3h/' );
define( 'LOGGED_IN_SALT',   '>BK]8A-z-UkX#|1U~IuZmj$}3Fv1gBd9`=,ls:U?i^)6%SLCAW9/?(^P}uArl=@7' );
define( 'NONCE_SALT',       '.,>G&$YZ0~jJ7lxE8j%<8xWNBAwsRsyKlI!]dLJsj~3soce>SgoMn$g<=QgX!3iE' );

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
