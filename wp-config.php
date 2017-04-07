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
define('DB_NAME', '222996-do-try');

/** MySQL database username */
define('DB_USER', '222996_zb96652');

/** MySQL database password */
define('DB_PASSWORD', 'Ruquia1993');

/** MySQL hostname */
define('DB_HOST', 'do-try-222996.mysql.binero.se');

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
define('AUTH_KEY',         '?JQ@ah7fJ2ba;[,J6JOfb#y;R_=ZRx<W7&s!B)jV?L%1Cyq4q3Z:xOe8 Gd0w{OP');
define('SECURE_AUTH_KEY',  ' Q(7vQzY6%FP)&3_B_Q`;=[jp(4+=`4:7$;h14Zrec-d=AnM[0-YqBk-]>LAMx0I');
define('LOGGED_IN_KEY',    '46XyY2^R,[lN%21#8,h7:oE|{O]714HDVTgFx9Ua) HOkN*Y&0tTQ<3i=-7r=/Q~');
define('NONCE_KEY',        'Ljp;2&6Xou#99kJD#,[C>_ZfHI!2t&1J?h$$-!Vc1dZqa73JWN$`E{*#?6]oBC`E');
define('AUTH_SALT',        '6><<lh5t&3A[Znp!P1glVF0#`^|MeH)aQX8ZJ(ZkxD)ZeN$Le$Xi  U8yV@f_CQP');
define('SECURE_AUTH_SALT', 'VD*p~pvrLK{g#{`Geubke]z4fF@c$ysKCl(Jrcxo-ss:qu=Fl*Tr`YuR}]O{4!2u');
define('LOGGED_IN_SALT',   '#Z^|0@CFYGFP*[=N[7dGO=;FmLZ:CnPkeqk@)1raB[&Op.J[WbcXE6kg@-0>l(`u');
define('NONCE_SALT',       '&65G?Z8+~5!6I|UbL_GW1j:A95[`V1t+ QoDqMNNR_emX.U%G1L}rxJ`;lUjzXSi');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
