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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'FIs29hzxAlPHYC5J');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'lNv3>ZLwQ9=-QPF_?[kf1?#&=<V$^r#yhTPzMC_Igd[SpJ*P}sYs6GWB_PNEo;At');
define('SECURE_AUTH_KEY',  '0?rx@]Nu92cKcD*~3bkO19kOcSej:<fhLq_d?rn6xkW`uv`E,pz/PU|S=B6Jju>:');
define('LOGGED_IN_KEY',    '!Tf[qbZawN,u8V-0(er;V2uO -CrN8mmT[jmATi%+7ed5!WvRUE9$Hu3vTLw=5.R');
define('NONCE_KEY',        '/pjeT!e0P^Wf ?f&w<WO<4Tu:M&zN&xybMh}VdFeXcORDV8VdFq|p+%42_dIF,J>');
define('AUTH_SALT',        'lNCSSj(fQj%QLX-d|iH3<5:iT0Y>7}~uwL6gFcxk^j+m{U(1_Xui:kprJeklA9W.');
define('SECURE_AUTH_SALT', 's[y6Oi7DQqYB8,GiVV^3lF?&-)$=dr4tX}2sXRQOw6WW%J=PPLU@G4&<;sir5B#&');
define('LOGGED_IN_SALT',   'H.d$ROsGT`<2^OynW}j8<RV@@d~w;zuQRN%0NVkY.Fn[uqHeZ%Weia1+}Ie|QPH`');
define('NONCE_SALT',       '70(bAS/*Mjs!X2R,iDSENXF[Fox>3Kx}dkK`kfIF]k,~GEDkRP7H$hib&/ka545o');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
