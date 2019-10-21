<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

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
define( 'DB_NAME', 'hoangnd_newdb' );

/** MySQL database username */
define( 'DB_USER', 'hoangnd_newdb' );

/** MySQL database password */
define( 'DB_PASSWORD', 'hH9LfilCpS' );

/** MySQL hostname */
define( 'DB_HOST', '107.172.48.244' );

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
define( 'AUTH_KEY',         'NdJ0R>KP.uV^aQ_V4iGZC)*>C&u.J]}?<^ (+%e%nRlO8((v4>rb,f0q:@H#4N7:' );
define( 'SECURE_AUTH_KEY',  '9N3hTC?Kti6o]qjKy.,K8Ef=Gz2{ m}5Av8;-:&/oxaP)}lC-8prZr#d[x3wt[n ' );
define( 'LOGGED_IN_KEY',    '!|l)9q9H &$y:,,e> pKQW3sTe8}tI,o<7dNp,nzFh-adiE(surT{^n>%<&JqL*A' );
define( 'NONCE_KEY',        '%BLTNktC[bQe,G7s)i8lSN*ZT{f!yKNM*BGrF5ap*hLu)#IQGx/{Im9,d2-Uru]^' );
define( 'AUTH_SALT',        '<Li86zrf4Y495.=XQ4IW13#+jq_=AS*((7I:+<1qgM#lB,0bQzOj$;.;{!3SrD7K' );
define( 'SECURE_AUTH_SALT', 'V_k 3k65[ Kv.])L!~o [a}) O_Q$vJdI`g^Fj$z4Ii-UiFjl|3mtdxWF H$&O8@' );
define( 'LOGGED_IN_SALT',   'y3Nq|9][*m`!1mnzpt<&5hvMEGt;pFZ,[,H<;4R0_2x#Rt<T()?sqfz+0>6(+m|P' );
define( 'NONCE_SALT',       'ND4UA:OZKDdh2<sS1A-^.%lgJBV}jPrM<fx&j;@x7BX<TD.07t)U]AQ/nB*50#XK' );

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
