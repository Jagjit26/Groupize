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
ob_start();
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'user');

/** MySQL database username */
define('DB_USER', 'user');

/** MySQL database password */
define('DB_PASSWORD', 'pass#');

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
define('AUTH_KEY',         'a|R~xt%M7W*yO9BszQv@stG*,pFt8tx^z?.S*Gm]<P~_8fe/oDUuu%RaE_K&d>XB');
define('SECURE_AUTH_KEY',  '}Im*%I$s.!?)=v0O:SxmaB515}^8uf2D@[Xd@yV.9d5{RJwtx~,q|WVWU%<F$$uf');
define('LOGGED_IN_KEY',    'A?,.)y|nm+AYY6khS`!tDC5~#=`BIBq8P1gv|l&i!Ibsx!&HT_Ki`FbVVH81E;X$');
define('NONCE_KEY',        'zI4p>mys,sQEvWJdKOV;@uBS`s[Ps:H8r~PYWU7Xkh.m%Qx4#)Dg!ASR5HZ!_3|)');
define('AUTH_SALT',        '>@=up^J3oCxIR|1GcAl }dtPO|VsC]4J;<Pj$R0W>+.)Hm=KN=|=$.j}*Lx~/^d{');
define('SECURE_AUTH_SALT', 'MRcrrM& ^x50y6w_D#O6|QxO!=N(?4%,1@`{1wr!PwVC?|>a,5c/tSY2oF/_2F,f');
define('LOGGED_IN_SALT',   ']-An*PUYn7yOewHig[qAJ2t6VG*3/hDp,{hhe0QjW0C:awF`lKR(}}-/fANFd$7m');
define('NONCE_SALT',       'WFN]c.+H/I>~WU+`+M-6*sj(V.h?3h?c+p:]]b3IrGu8@z$mn/g^_.XU0l6iCuLF');

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
