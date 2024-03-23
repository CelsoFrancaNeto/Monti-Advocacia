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
define( 'AUTH_KEY',          'yX8(yDq@nh9m ,PJqMY5^+Jtm[rlE(0!7U,D7c9/|SJ@kY6mO29QKC)pL(Yw^n<C' );
define( 'SECURE_AUTH_KEY',   'LBPWFqyrZXU:O8#]rg^)B]$=fuSO]u7f/T,JS{J)pN,(o>][X2)Y^Rh}%a_r|[!$' );
define( 'LOGGED_IN_KEY',     'V6>;Z0),MjTrs_X7dVwTl&A?w~s7N+9@}Gq!j0WP;2)Y<?5|X~(n;E-pJ8i!c16[' );
define( 'NONCE_KEY',         'JX^C_2<3yw>jRQG%,g%rXa4,M5DW3jOE>,jLcK8>svc$R|W(|mnYjA4G)[h%uIuS' );
define( 'AUTH_SALT',         'fvYNsO45ox0md<iTOBrlt.}@n+bO..Cq%V6%idI6T#}UP|>E>yxI{I/X=X{^gNi?' );
define( 'SECURE_AUTH_SALT',  'W@!gk!O/>:Q/_~WTk6flfL1d#f_y!a4{XGR&A!{Q]RaaclQn`c9vl)]0}(.bsO-P' );
define( 'LOGGED_IN_SALT',    'w(* ^htY4ovxHornE{)zNZcl{2dX5Ua|K{B^g:gZHBIYnyQtbXFYW&%C,zp<X~);' );
define( 'NONCE_SALT',        ':Ynm5|[,yCE&.Uw6]E3:iUBIW 1TBaukZH])2[}?.e5]4%q_8m bmTQ[}Oc&?lAP' );
define( 'WP_CACHE_KEY_SALT', 'd0}1f8*X(X2eLT4l4=g7!:&O,<64~Y:!cp#4?)60gEUU!Kv=GvKl {_u)YzE?8<^' );


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
