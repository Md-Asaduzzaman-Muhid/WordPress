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
define( 'DB_NAME', 'wp-plugin' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Muhid2277' );

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
define( 'AUTH_KEY',         'Sc,t$s5Mofx4i&7:.]R=qq7{0ktV|6$&;!LcTL[@xmZ#iFbG,nF7--g6o.cN+q7A' );
define( 'SECURE_AUTH_KEY',  'uRyQkJ}y<Jcj09U1d{-]6@qZBUNo/`RLc:VL}StaDS0UisG3gG[-38&SGDX`PA:%' );
define( 'LOGGED_IN_KEY',    'pb[#?-ysW)KR|e!Y(T?5ybUUI9/D;_42.P8ZDi%x&$!m|*yd].Ld(y6iX]&vw!Tb' );
define( 'NONCE_KEY',        '_M5&o@Oa_XwGB~nH558za =Tdh$ISh@8Is[VMYl^S&+@`~n&.4oB2b^;bUek?|WU' );
define( 'AUTH_SALT',        '![MC~I&s>uD1Dl$yL_1^TWVt8TZT:|#8s1<M.a*u|#oWA.DOp},H!PiQ{(ATh8wI' );
define( 'SECURE_AUTH_SALT', 'V$(_E:jeo7n{%k*?tG!_jhfu{|G^[`lD}6,s8&.25|:(o2@@;K8Yq4P4A{r5qM>[' );
define( 'LOGGED_IN_SALT',   '+.U)3k.8VL2|*~PX*h)pXohNAY6jc&YnOT90pSi{$syOx!UQ++d.I.:oBXg5DsjQ' );
define( 'NONCE_SALT',       'Nv4?<QY>MDI&YG:$?3gi~/cTI,qLMY?da<&?g=lq%Ggz-8bdFoUqKD~(NnGrXzV!' );

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
