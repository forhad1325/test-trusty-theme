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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordmove' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'ENQKL,pq1XZoP4me@%CzJ=_G5_I VXc^+u%jib+e`|2+[;Hzl8x>PCzr6r2bi_w|' );
define( 'SECURE_AUTH_KEY',  'olK*|{dp&za8pf#q(P5Upbjt[t^M 7rXNG76:%FdLLF)jo$jvr-,Iqd?v-)%VH`>' );
define( 'LOGGED_IN_KEY',    ']FIkc%:]$~,U$(w[ =MQy}xKKBlbV$d!Wr0(ASEsLVc=akhFe|T+71Ak:0.PN!(<' );
define( 'NONCE_KEY',        '6Q~JC.9#=8mRItLzi/_FD.{T`5pZ`V:~n{yO$@+)GC?7C9uq]52Bwl;vl8]H87Dm' );
define( 'AUTH_SALT',        'MR-!0,S0@b;>2^xA0aB4+Mmu/wjK>ct{nc>3ACD(cy,StXy&ZdtRkL/45/4#/+<:' );
define( 'SECURE_AUTH_SALT', 'SI%T%j $022Z_Z=~,yuE42^Eeqh?D<=lBVCs,.,M{jb6=(EX;>060bZpJyC3v4%J' );
define( 'LOGGED_IN_SALT',   'XV^!;Tt[<={wB+~^n})c.wkRkN4mpZISP5~/GF{]WUJmn&$4n6V?N^_-t2M5H]@,' );
define( 'NONCE_SALT',       '(Q,t(jj$:=J%hfuoTDsN*}4*pGZp:xpEJA8?E2:55/2S8a7j<h#/y|QL2T4kbrT1' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
