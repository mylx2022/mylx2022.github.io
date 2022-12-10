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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'f6yV~{N^^vU,vz$iq^j^O(Y-m+I|{NA!@qv1^LzI7@}lkh PjV({%-OZt~%ppHcT' );
define( 'SECURE_AUTH_KEY',  'F`<PvQ,e/E3wSI(=}}TmNQ*JN.v3X`[vd]rT;)-3k5^3}xm@cnSrRzVov>_TaE>l' );
define( 'LOGGED_IN_KEY',    'Y.3gnEd D8df`^?` Q%P]P0Vfp=&hoF5-ONPO%4)Eo-:77empa[P:2/uJ=wLkfL:' );
define( 'NONCE_KEY',        '.[T  V:Y@W(T~~(AY=g[ZT(-^=qeDr5U&C|IeTdkIO7Zc1A;`jZNfiYj;NAJew9)' );
define( 'AUTH_SALT',        ']]zh9z)1@x2KFz>$P<](eHVhgM~VSB[^YvM53hTSV8SzPIIwA&|rAH]XhPg46s@<' );
define( 'SECURE_AUTH_SALT', 't%;iLw2od%*-;!H([v1d;IgQoV$?cyf4,3r}(LUIRig#GHwD]:`yJ]&i2]]td|ST' );
define( 'LOGGED_IN_SALT',   'd&}d9s$UM{2Lyz%yHW9.|-~@L:pOg>-E|e|h>;F8_8+Yn,3e=5-g%5Tgf$R`;&(s' );
define( 'NONCE_SALT',       'tPX`JeZX%1$;4n&srf-qXPf`1*H@-xG/,{EQ_a[9p[?cjnlH5tt-&5EcLRA$/(I|' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
