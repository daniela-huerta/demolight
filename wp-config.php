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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'demo-light' );

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
define( 'AUTH_KEY',         'jB-aC^tr*{)wdSqfKX)xgE? W`8.)niym_EJg:;h>sm}HZF)tF^Wi&SzENdJ^10_' );
define( 'SECURE_AUTH_KEY',  'kCsbOD3SM,Mf6XI<]f9(ekzZ@qY@xChm=<?Ltp[~_EmMF(*7uY+Fm-[Et:fIrirU' );
define( 'LOGGED_IN_KEY',    'KI9:,5Q@F3%YUKP#i|H$2)H,2dsH4ZStdvX@1g-^CVBy:|+AmB>a./=|pr<C;h89' );
define( 'NONCE_KEY',        'ys~a~iH|/y7H3zMr]$38EQ!Af22c/0c 83GZ-:<r.;WR]T>|i#aeIm#65X_oz$rM' );
define( 'AUTH_SALT',        'w`{TRu#0[<l!q-N,@Q,_86.PGh!?C1Z1)]9),)Mx)c%mteOnh}V>-qV3s,UB*SzH' );
define( 'SECURE_AUTH_SALT', ';]`>/+?,.Kjgz|EBBe3m+G+87?#b,dVB73`XI[H<O1`:$7gIE`M1 DFo>mDX}ICp' );
define( 'LOGGED_IN_SALT',   '=[uk;,jy|},vgVJ}nu6iv[Vi=i+6zSohDXms{;^`zq%qaqJ.bBF[).$JdW&(V5:%' );
define( 'NONCE_SALT',       'BHu^tiB,h1C>3i-CtGP$%JH<v7-3VD=O,/F.7; C.LX:QELCr66nc-L42A>T Xpm' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
