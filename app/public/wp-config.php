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
define( 'AUTH_KEY',          '5JEB58>s9/ &Xzso7s-3=H{.#&pA,JY4A.-:^8Q}<eBgBW1!Ae}KXgPonE, R&^I' );
define( 'SECURE_AUTH_KEY',   'laA2>CTwKFtydFP&QfyYvb3~x)_K&~WDP.U=C aIHq3(6z` s1Dz$W#[44vr<gk<' );
define( 'LOGGED_IN_KEY',     '13?9R6X IU?4E`65yyE;@>><8L6O?j.G_41!qo]N!v&0LTx:>m!yH()O)qi|66]^' );
define( 'NONCE_KEY',         '#Vvv)g,J1YsXZ@~`FOOKf;OYu:C`j-xG:TvQ^|Jzu9ueuL8NT Fq|HaQ/kYAp03C' );
define( 'AUTH_SALT',         'GG/nCcC)ny)_3nQibR3+]_ykECf1u8e1&-:WLr,^!8:h(yAK~)>R[5_Bk|gfzNj4' );
define( 'SECURE_AUTH_SALT',  'y<WdAz}wq0R>Z+3Q9Mua}IZ=y)r=t$d;!0~vheb4XebWM^{Z>!9^oG-U!B6b+h<K' );
define( 'LOGGED_IN_SALT',    '>a&ct!c< D.wDC_-/Z#lL1(yl3?#?CNYw;2|TGDelhng%aySU)d#wY40pDDsX+kS' );
define( 'NONCE_SALT',        ')4EC5z>T8p(OuKUk9]^)K^~^u]TnI=Pc)JC}uLng/WK0)MR5{O2P$MVX78aHn@1R' );
define( 'WP_CACHE_KEY_SALT', 'GPPl{@3HLJN]qHCJ6UlyIgq*#|hUHyi2f|%nftFUM~YC0$:t#17$*ITNG^Lc:84C' );


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
