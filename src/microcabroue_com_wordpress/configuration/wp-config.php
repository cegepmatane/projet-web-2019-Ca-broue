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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'webmeister' );

/** MySQL database password */
define( 'DB_PASSWORD', 'cabrouehaha' );

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
define( 'AUTH_KEY',         'paH!+i$=X+og.=p,HVL.-|EDnHe<6d9!^ wHm~bU%|ac#6)>(h?ZFm)2`TWs4)/;' );
define( 'SECURE_AUTH_KEY',  'kq-q&?S/.Ooj(us{7@Qme85%Uy@m];apWO>}lV-(O]]*c@|Z8yJ@HtRJ7Uzr.2dC' );
define( 'LOGGED_IN_KEY',    'P2w0P4rrpH&m?NqO+h6cV]seVF|q4.}p=s;lJ_=;`.SSCs/5/3^ukgrnL>].4:W/' );
define( 'NONCE_KEY',        'zwwR S5^;EPYR{5Z&Bi[Gv(AZetI{vJIXbyRvn#;3&+.1T$?E:P;`[5G8B@da5US' );
define( 'AUTH_SALT',        'zGz-|R@rY[PGK@5MN3A8bd4[!dS1C(d?3{6PbC`aX2}C/nZPx200mO.f)v4S_:de' );
define( 'SECURE_AUTH_SALT', '6`rENCOP+0{n^Z!a|1N&wp /V6-:F-!9 A gbYZ;!1TeJS(x3z.KRbf&:l=n0Cd!' );
define( 'LOGGED_IN_SALT',   'Uccg7|3qzODa-2]t{_eR[(zJs+0*Xkb+ Gy:v74e+C~4&K<$gUxd nYh(0woP*xi' );
define( 'NONCE_SALT',       ',]=Q<gIoF)4gi|M;hMr!NQ!O5z,%7Y<%|]tk{S}O|[|x!F-8.ZoC..0<P?&]6&x[' );

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
