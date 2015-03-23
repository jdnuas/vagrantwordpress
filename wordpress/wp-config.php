<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'victoryme');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'vagrant');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         ',JwW%`f&/|_3 .-++TPmTWB!1mAeDUim^vI`ehi./>Bxw7U&8UO97WX2.hT#bbwq');
define('SECURE_AUTH_KEY',  'S4Q<dbil|Dj`K)7tY7Po8/tST1/h{My jcX:%;j`0IA1;GAbd6r!Xt7BHB(Jb=E^');
define('LOGGED_IN_KEY',    'ytm|+3pz!.k-F|;)Ky>xS~lU+F$Z8h7q;;~FR4UBP7Ra,>V{%]+G2||6? 8#MV8W');
define('NONCE_KEY',        '<#D;w~7RP7pf%:nylp@5os6UCN@&?h+;+?] -]-Ej~d|z2#|>E)HQkWPx{WXD6(.');
define('AUTH_SALT',        '/9<{.%3OnZ-y0_4pFuQaB#+ wq#(18 $R*z+J?%vY%a43z0wo{iL6I0;Tor{dP<>');
define('SECURE_AUTH_SALT', 'n{8-de7a+b~ ![#5+j75|j3O~6wzI@+%?0xE=R#Ufg+3%MA?x3|gwl|y!*5z|zWZ');
define('LOGGED_IN_SALT',   'Fdoaz2wlmLUHB$f1Dg|]xiD+N3=GTMbDtS*?Jc>C(3^4c^[!{5v%q70h+E?ITg`F');
define('NONCE_SALT',       'FTbL0|fmdo+A}A0)-i7+mo`;!7ke263!<`~}0= 6`HxJ:@/m|cQQ#g,xsiTbgv4-');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
