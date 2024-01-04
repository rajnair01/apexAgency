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
define( 'AUTH_KEY',          'oH twT:+y)^|[J<s&gk)>A>|BIki6CjbeUfr)GL~6T$i@#Bal%s-<79ipa_vhWfX' );
define( 'SECURE_AUTH_KEY',   'Ygc,3|O+l/7jaz: WTct_k~MBhWjwZAlc^,PoP#MM/V?Ez&QfAib/$kUt<lLc6Mg' );
define( 'LOGGED_IN_KEY',     'CgEaqP$4TmErPlclHM`#Re1/T]#a8{FYi?B6.)czMNL!neZ($(4ae2Pd|^wM}WGm' );
define( 'NONCE_KEY',         'gO9NIE[+*W@1m3v7lUAvUp#qJW<g/?VMT3J>3{ m4@`T9Dtr[o;obE63Ov=eE8D6' );
define( 'AUTH_SALT',         'Al!1NmS{ML):[U[Ixs<3/_(urEqjdb=h>Or57*|CW:{?==DaRpAH9o}(_y#.Z2 x' );
define( 'SECURE_AUTH_SALT',  '#-2)?4XsA`b9Cr_w~N2G6U7_Z1EX~}K ~[ww,T-Vd?$bK2V1iBv!1GIg/>qcmE^Q' );
define( 'LOGGED_IN_SALT',    'hA3L7 .mfq4:S6s0rlXJJeWZBZnJGGAv|A/%d,=:ZE/3EI@$cg>I^N1|$Ex*7#M|' );
define( 'NONCE_SALT',        ']0lLc5vgdjyg#c](8C;i^wb)/+Dva^k2sll}sHcPDa9/p>Zf0HwuU3&Yle_pGHJg' );
define( 'WP_CACHE_KEY_SALT', '11<Kvz+ThhnB//0Y&i%}t4|499N/!N Lig>junIOyU1$QaD>~5h0We:BXBdcN{go' );


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
