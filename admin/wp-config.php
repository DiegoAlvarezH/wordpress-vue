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
define( 'DB_NAME', 'admin' );

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
define( 'AUTH_KEY',         'xBs>j:v`){AlyZ&Xbmr_dW@QLGWh,*.!P>Bl(J#~JcqQH}(Q0/,?u$9&^@j>JChe' );
define( 'SECURE_AUTH_KEY',  'GU;hEK/SdEn3]=Wn}b[4lh>oe,aznrs@3*^3w9IcO9^0;xBrN`xjj{3,l]8,Nw|q' );
define( 'LOGGED_IN_KEY',    ',)hAA4jZs02n$rtt:&DCThJ}E?KTfL3Giys*`bz}_RUx#v;PT6k]hf{QBzp3Z]_O' );
define( 'NONCE_KEY',        'rJgOOpV#+^[n:v1APodbf3owgV6!a,X5`Pr?]YY?DjrA|n}@(Y|Y@iDle>Lt9t`B' );
define( 'AUTH_SALT',        '$Ksm<Oju,12 P&^X/FvJnpE444}|Xzh^#TT6a`n Rm40}SC4_pC2MR}zmT819`H(' );
define( 'SECURE_AUTH_SALT', 'I!@Yis`<7:cp<_4viRk$sBEG`BWZ.fP`9ekJtz}[b8ZAJDT*W9fW6j0O(gt>-ygY' );
define( 'LOGGED_IN_SALT',   'U4x0@;gzf.d<VFU>=/w#fZS`qku%sZ@!34-h}=Q4CjrEmB)y_l*bn<YfTk`JzXcu' );
define( 'NONCE_SALT',       ')nXVix)6w{9)vz9VB?<x#rrjfDRJoBGdjbvU8+N#/G^I/HoE>~Nh`otah{INa S#' );

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
