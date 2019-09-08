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
define( 'DB_NAME', 'wp_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'm3h3d1' );

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
define( 'AUTH_KEY',         'O)|i~7]w@^<@MIFXg=g=vHMm<AMM2LQ``p6hU`Rw6g[^EIBBOq60H=PTwaDv<^78' );
define( 'SECURE_AUTH_KEY',  'Z3<*Qv3g@w^Q~Fbci&&f-zboyRuSKa7/K=2bu`V^7I-$u@QKp1!HP4: fg>h}`tw' );
define( 'LOGGED_IN_KEY',    'G!gVmep^D=_X!|N{?53f&WEN>unaw5<24vRwTXhLvC1?,33z0a;-}g,oVU6>IdK-' );
define( 'NONCE_KEY',        'M9M)VXH_Ic3=0k4m>f!ea++w.t}_+(EWqs]:!h@`b*&N_FWW%j9BTu0FNFUxs/Ay' );
define( 'AUTH_SALT',        '~F! bbgn0Hr F-d3G9yXQK*zwa]b`V>d66mMoq ;ahO`OCg!#5>aAFhe3K9fVT3r' );
define( 'SECURE_AUTH_SALT', 'M Z4i_yv~vS<F.[dX`ZRmg)jdT0dIYH%L>v~]NYY[>C>@=m#!J^fXC7~K(SX+/G+' );
define( 'LOGGED_IN_SALT',   '/8j~+rl}9N&?E25C8qxQzw)!q+Y!YTO1BTV+;931`iiEThkl_fv0~[Op:0{AeLxY' );
define( 'NONCE_SALT',       '])ELziojo,2T1,qcx<#~DCQ3tOOkpzx;I.jLCS]K`]Zu*dGDp5Y0-WhNzqUI~nbM' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_dorothy_';

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

define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

