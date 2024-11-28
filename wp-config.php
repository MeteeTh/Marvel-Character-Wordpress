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
define( 'DB_NAME', 'marvel_char' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '12345678' );

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
define( 'AUTH_KEY',         '^Noip[bV]( og93r|elO~@e/~<2V*ndXyX~ih_V4=5ST#aJ/G-mxXdJ}0c)n}reW' );
define( 'SECURE_AUTH_KEY',  'p%^aL?kI^dt[E)3%XG^tcBv/[egr*0sB_XfU]nM/~+Ew}VhyE;Gw]*WJ@88I&Z;t' );
define( 'LOGGED_IN_KEY',    '#mnYVC2}0xwMMAWhG}heTk8R8h?a`O5aq,> >?!Uy)zl.}I,tcaIJRqv[Z0t-7O/' );
define( 'NONCE_KEY',        'LNSZSl#yYM-:x6eH-]>$,Vq]vBKRbBM]%tY$4oXfV^Ni=8bgtJ&<u!)<<Nv~<AU#' );
define( 'AUTH_SALT',        '52|}kWS5(F9tkv[#%a8Cox%BpyQBxZ?.!`S>zA0^3lhLO=zF[EKKpi@XrgpYv!(%' );
define( 'SECURE_AUTH_SALT', 'SEB,q:0Koj9OUkvPtZqmOm<Pn;d]k8%Ldgm0*xR>:]xjpV5CT%iJNV${IF0Z(D@t' );
define( 'LOGGED_IN_SALT',   'ZW.X:JMeZQ-^xFZ>)+D_GR~#on{GRtX6I{I.s2UmL)A@bsl:8s.3ns= 3aK3u=-[' );
define( 'NONCE_SALT',       '+mTj)prV{D<0YuE6haq|c4/+5=lM-?L&r6F1#jV5Wm(v=,I<=7i%v8KSPZdF*bI$' );

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
