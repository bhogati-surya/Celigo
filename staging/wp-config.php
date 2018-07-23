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
define('DB_NAME', 'celigo-staging');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         ')8(P&D%50>n9q>Yg5s+Zunqb/6_^W{2?#74eg9(i-7r`M~+?cdh;&-~NC^u(#g!S');
define('SECURE_AUTH_KEY',  'ISJ%`6Xuqe0WJ _f@+Hd6oeS~[ZcXJ`z78J}@!*;!W^T[lj2UzUA`oF]ldOH=$`_');
define('LOGGED_IN_KEY',    'gsDrQIENfW.+vhk}Sf,h4dXY MmrwPVyGLMqEAA.gimSczeu8Af1hx9?>,jy::HY');
define('NONCE_KEY',        '&6iHbx>`}5O8:$>{&{A5!O, (}KP&TKMHc1,xqY[OvwUE~2^_h~:Y3)OchTu%v 7');
define('AUTH_SALT',        '<?W<f>JDf4UiL %m)a$XA,0aZD8CSv-}nz=G4n*+) XDUsQ[E /w|S@xdXhQa~^M');
define('SECURE_AUTH_SALT', 'S^7*s0%(aRO7`n]c6iNXzgXSyZF7x$YZ*RQ5{VD)>rb>5,>LcK6AjsZC+{jf_6Kh');
define('LOGGED_IN_SALT',   'O.Bf;w)*HP$q(J78,HFT@zl-ilH;Z*5@ttBE4X&e_3Z@NKlv?;(/(X3f}!V`MGGv');
define('NONCE_SALT',       'KLG;pj[a}kEOad)8MyyB7M|&T/OI]HrvRy/U^~z2BSLN3Hc|[B*Q3e:sSkw:B,.{');

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
