<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'gallagher' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'YB],YUkc~!EVfXdCsjiV}AJoTKbzMp>g_js@lyB^HX!8=,lhGEqhKKIs]CXbblpQ' );
define( 'SECURE_AUTH_KEY',  '>Y|Y.Op,f+*}q0*dFWGAoGn]fjLc3oiDVatH+3zL!`)q;R1~ol9`I;9AXZaX=CG+' );
define( 'LOGGED_IN_KEY',    'sl$m4:r|DvTI<M8[ 5$LuFq5Jbor/8NGZ]v.@O+NxLkTmOslWb# +gcMMGA{y}k$' );
define( 'NONCE_KEY',        'LY6S%1@BbfJ.lr!!,]v]$Ud^[QMu JzlONI>_6{Nj|fK,=^zx}V1GYtI<neJabZr' );
define( 'AUTH_SALT',        '@@b+o/-9z$4yC5 L~&GdoHq(W0FqO:KS1Sy^OFn2s`P_`}{/x~I-Ps a-Cn@YP[m' );
define( 'SECURE_AUTH_SALT', 'dN]%D9EX| d5Ad{AK7&NR1flIPk<xZ~HdZ<Nm6T#C9XyV@p{6xl3O&`hQ._?zv:Y' );
define( 'LOGGED_IN_SALT',   '=0&CC+HH#[aB6FQo>:vAJwCvIJLT)ImFEWb(E|OiR8=dH5y8`:[`$:P-fVj|](l:' );
define( 'NONCE_SALT',       'aDjcQ5]v0) ulIy%lVQIp#z3~$ba^>XRU/p,%]@ogsw0O%b}R}{0/3h>Xf}z1Afw' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
