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
define( 'DB_NAME', 'sagedemo' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '@Kkv0KW^5pS3z$-bX3@}rRzp-T7aft?6Q1v3j6@TcVet.1fbYP47;;PsLr{5IoiI' );
define( 'SECURE_AUTH_KEY',  ' 2RH4<4qy+>a<]s3obYvot`<Eb4 h+f3#Y:a?!=WxRsqxGCxv>/@:ihC7:Qf*J>e' );
define( 'LOGGED_IN_KEY',    '[6 %=K{o}OU8}cv!jZvl1wwE/},^;n^_T+,VY5]Vi7xf:OJ/OZeq^o4Fze3s,tu@' );
define( 'NONCE_KEY',        'pQA7o*P9W{GvMO?E2q(o;sby&.xu1/b,rTLIhN ~iygz$Q;(0H?6WMT,A3l{vHcw' );
define( 'AUTH_SALT',        'rLPdY6NFf<S<j@j?kK7EwrWhy#{iDD.JF_&*$)rBWjZ2nhu1]<-l/3L:E#/zsQ]`' );
define( 'SECURE_AUTH_SALT', 'awDf!*>h.CbrU$3ohfVVoNt]KiKy{HtwF9g.el*ezOb>5!QETB*>r~=mvXwzD,{T' );
define( 'LOGGED_IN_SALT',   'aN){LXHEzC))Pns;~yG&fFR~Yt&-0*wC?sXe5VHl2](~@Pkj)9:i8qf`mOux8(67' );
define( 'NONCE_SALT',       'C[!|3BBTho*l,M#gSqV)ybdok3LDG%qrFfCV~AU*uXG|CSpRqf%Vxl@Z-P19bDUB' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
