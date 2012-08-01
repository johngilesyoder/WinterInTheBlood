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
define('DB_NAME', 'wb');

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

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'JzB_+:Qgc}0hZ/9c-?QT6yH@X/F7AFx$Z,w^P,&+LD<{QI&?@ymK1I{KVA(~IDVx');
define('SECURE_AUTH_KEY',  'MRV|1~(IX=L8|SC{`>L$k0ieiz &Fi/D8|WHv0#R^kzz?=-&voo&^7tjZFdEEg,L');
define('LOGGED_IN_KEY',    'rC }?xsAv5-F$Q!k}%~g-~?iopA5N7}]tQF,v9^:`j,]iVvfi j*M7]U}qr?+}Tx');
define('NONCE_KEY',        'PRt,BK&M8om<HdBOkPE<k6)i{RZ)wm7LTBGnyvHY$9UdBpeI&3Z_[]Lr-/MEp_*z');
define('AUTH_SALT',        '<P!Z0 _P!@jbi2[A-=A+q0Qtcc<1_d?eCR<<zP#iEuwUiJP)#pM6x*z&nu]N^ete');
define('SECURE_AUTH_SALT', '[)sRfm,Yt@Hs8!9`?JF?y$RQxL5`W!|P6rLEaq/|Q11(W6*%2z[?v<k3;v]SPP/*');
define('LOGGED_IN_SALT',   '>-(FQAz +M5O-!:tDV967k-(ny`-LXVY},t:`{SrC|:~pby$NdZ2cl(C jN?v(+,');
define('NONCE_SALT',       '|-a6Iw1|dU2EDd3O+hX&>O%jE lF@-%FY7}xg%_0l<^4}Bh(RtmX<Nd3u3Q{aH;>');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
