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
define( 'DB_NAME', 'lamnguyenit' );

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
define( 'AUTH_KEY',         '+@:ma@&Fb;5I-*oLL%oJ}|Qk<u4)/6pp4uOaU0N4vNugeu,WOyzr[+1bK-Q#xx&:' );
define( 'SECURE_AUTH_KEY',  'u2t @E#Y+`&g|:?h&b&+kxa>HXWS3$ly$.8y8ED4<jwO`rH`59nMnAqyGAzF<,-f' );
define( 'LOGGED_IN_KEY',    'Fc5EpF;,Xb@!ep7`Y<neJx)PLaM?D71`D:(y4yttt54[P$pAlKTAaOFJ=:DVIiOb' );
define( 'NONCE_KEY',        '9uE.iAu_M`$*TvYhevR+be+ZS<I7X6w}o/.Q[_DmfLR;2uR5x3TtE/?Ir 8em6qp' );
define( 'AUTH_SALT',        'ZL-ZIq:C~T#9{Yc/2Ef2OHz-2M5G!.EIWFE^*irG/H&/hl[{V(}a4@cO%Yqk2!rL' );
define( 'SECURE_AUTH_SALT', 'eFp12zzUZUE6+3cEB_bqFSl+f.QyM9eC/um_A4?oWu2wp/)}jFl`xNop!~#5<JIs' );
define( 'LOGGED_IN_SALT',   '9~2e)e8KKon?ONh|=<7Z,ZJ2VTM;_h}cCz[+P2* $G*rd%/tI~n~GX`/N8!z<k`q' );
define( 'NONCE_SALT',       'cE}uh$yi$$yQo7d(6rAcB*=N~To84LT0dZvtmPl<|Cfr|{yx3zbJci?VzkXl=Uly' );

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
