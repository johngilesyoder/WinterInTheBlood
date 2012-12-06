<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'witb_john');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/** Bump memory size */
define('WP_MEMORY_LIMIT', '64MB');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '!UD%j9xo7EmuLg^:|H{+I0*{i-9kD=,W<gB|I>S0;EB_Z.bM*!782^g0Srpgd0<R');
define('SECURE_AUTH_KEY',  'P8SXdD<cXv9puHo=3E<RYO_Y|[fxh|8Bxc&;kP[e</|_1t+NOa0*1J3pkG_Oo9xz');
define('LOGGED_IN_KEY',    'lilX@Z(J_KNHvyn!+eYBAXuUTD$LoYpe/scby}rp(|vYDZncF.G=!sC5_:hAe|GW');
define('NONCE_KEY',        'R+<?q8XRI$oUwOY(]h!gN_Jy-H ]~iyYb?W^_[iGhDDBV-OyH2]Vkn:NeZsVMazx');
define('AUTH_SALT',        'XU;i)t-Mh/q8_P]*t|p:)1Q/@b4 q5^Fh$d2mx-zYKA[G2<d4G;bB@5-$FI:t Kd');
define('SECURE_AUTH_SALT', ';-qm#9)7$|V, U(A8WW}K83`2UNgi`}vZqBUU1T_Fy!Dl$I8l8oznAeX{QP`{R&u');
define('LOGGED_IN_SALT',   'tM>>veXDTs$^>C^L0FGAt#u47;MF97oO9h[A`Ehr(8+^Kr]|VM+3%ddR^7V+o3+}');
define('NONCE_SALT',       'O0KBc-dX*Ry:|[g&$/6cGgB~DX`fQ?MXiGc|]iY8O9B%^M@e|Gb<%)]_+~-W41(F');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
