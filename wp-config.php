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
define( 'DB_NAME', 'wordpresssample_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '??t~Te2_&Jnbx0toM>U8fD?JJ9JO-Ze+!%AC~QtD3(a+%oNkJdN8rhQ%d-7% d;I' );
define( 'SECURE_AUTH_KEY',  'OowL(WJO|STd}Y-yvNg]uj,H;=XeDXU:~AJa!Dr(?95Kj1qrNcck3.aGH|}Wo|1a' );
define( 'LOGGED_IN_KEY',    'kk.T1F<&Byv,VO_Y3F%l]`SO6AiQK%6d_5JQSOJMMTrxI:u[#]c@j=7*6O7hn}ke' );
define( 'NONCE_KEY',        'PS8K/N5=l(%Ng~w}7dam {dd7`;U3-a.BntF?aT5PoM+Qo3c82UN!u*^=?tbAC|G' );
define( 'AUTH_SALT',        'O`,YsvU9_jERAFwC.K*KS:6i_Qe/_:T7}xrv>Et+re(EO}S{v<t b#/`^@Fou?O`' );
define( 'SECURE_AUTH_SALT', 'iZj@$oT^L}X7:6/ejBfn3r #7; J/h6L(uo!}tsj~.eSR~zM(Gr5061/iSC),#N=' );
define( 'LOGGED_IN_SALT',   '94cow^A2(xmD5e{mdA!~*uF3zOR/;tth>m[3RlM_5bA2IX#mMBfX,)).u|0q-i]b' );
define( 'NONCE_SALT',       'RV/oc!bC1K(THon -<-%N=klJU+5=#i}+sy<#Yp_),Ah6m<hi~Dlk7(IPULl_NOK' );

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
