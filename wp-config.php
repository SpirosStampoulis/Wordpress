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
define('DB_NAME', 'brochure-site');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'f*+A3Khw`4#ej8IiSWV,Ew%0Bm;Gp?HH[jb);V0G=jclAJqhmwZ?F_Fntmd5@<<D');
define('SECURE_AUTH_KEY',  'x{F[oETGmyF(6nP}SedMez=3Kq0oL%ka2cU|X@grgSgSm*&H9S)}EBI[8~2ia&-N');
define('LOGGED_IN_KEY',    '+|>qhoZzP#%u,`C;6KIpMe0l(@?MmQSQBOEtt{X=68?Tb3g#%#@`u:W$G!+fHr#3');
define('NONCE_KEY',        '?GIo%{-h+A,Xfa3:86/eM_XAdWftbfH6HWB|NcnksGCSV|(A4!_9bi)/*$-w0ej,');
define('AUTH_SALT',        'S5Rl&oo6,O[dSvMxddT`9=r$a[9-;]1lto8h[NCQr|wgRw=1fFb.|q0G5mw5l[Q+');
define('SECURE_AUTH_SALT', '?`C)$hqs+9)Rd-lU{1dsojzY6bH$SM&lZAxWlE$?FemFt|*bT:/vJ7!IaE-dXL1u');
define('LOGGED_IN_SALT',   'A_/>a^0{Uw6E8OAkgBeV *f-Yf`DWoqq0~s(aw>-eE-c{n-b*?s)OA|*V+1-dB`0');
define('NONCE_SALT',       '-7w89Tz[yrf#oKaeA]R&31$~pKEOwuu2 :t?gh|8&$orM[OONURu5%2%Y1+7M/Zm');

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
