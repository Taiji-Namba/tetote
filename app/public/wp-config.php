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
define( 'AUTH_KEY',          'Nh[=f&=-IwS=Kt!W}QK*vlemJw|q74={E9_ims1nHC{m4^W/23Bsf$vzVkU;yWx,' );
define( 'SECURE_AUTH_KEY',   'VvKb~Q/DZTZG#9:CaH6qnn:P:Wf(uT%OU&-#XA7:jy;]>$/t=H*jR^-B~Y>n>Kx(' );
define( 'LOGGED_IN_KEY',     'En:=5V#}. C?]I;%RK;qxyY`mqWu#{UpFdW?&:@OX,)wv!*119< ^&C?^VH{g|P>' );
define( 'NONCE_KEY',         'b>q57vj7frz2JzHs4Q;J)blTXf2b[TA=~<d8o6eykzH+C[2nC,aNa!3dZ(fk%H,f' );
define( 'AUTH_SALT',         'sluYt/;LtITd5k8_wc.v9@cVg{e,g27C59b[fEjZw9A`BjS87X:+O/00RvTt5Q8]' );
define( 'SECURE_AUTH_SALT',  ']E{kYCki;r-ZYDKaqH](HzhF6`?HpPzmik-QK07F]S_.^2`yu3&!8y@}BXJGy&tg' );
define( 'LOGGED_IN_SALT',    '}c7Wp-Lt$h|;s3Kf<2nrKehX#UYc,Tx(iQxDaAz:wDTQWV3~:TK? L(mxcHtJ357' );
define( 'NONCE_SALT',        'HsL%41.g-TNRD#g x#}H9^I8IdL|TiPZi9>Heu0?i9mH?Y$%C*Q^{r~@;3|*<*;{' );
define( 'WP_CACHE_KEY_SALT', 'r/Kmc>/.wh[8j*{k9u2P0j_g{IcNz@go,C|L.$0z*;f& h.~<Zs!e*;L_V8MP7#-' );


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
