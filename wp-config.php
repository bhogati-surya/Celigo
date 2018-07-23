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
define('DB_NAME', 'celigo-production');

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
define('AUTH_KEY',         '5oz_SmPb:vFMCN5ZSdCu_qIW=vuUsjGl3x)Ja|<lfYP~Uh5z(z!U`m;^mhMx!4+5');
define('SECURE_AUTH_KEY',  '=2?=|WgYXz(Bn1gtuvj*txdwE@&&G^PAr MI0jsALkI) OiZ}t(cN_9Z%CI_=sd8');
define('LOGGED_IN_KEY',    'po#vJ>mcmW;86uWY, /lhp>>]c=rh!ziiJSMfRBi|jV,7G1S!rsscw/?;tL4U#pa');
define('NONCE_KEY',        'CH:YN!a,|-ud4!+C4a$OBWl}U(Nr=2*YIg`dFv`)~,4GGRujtRj-zrJCjkiB *]{');
define('AUTH_SALT',        '3SN/cLf>p6DNB7RC36DQ~B9BWIxka:Ao)3}Z5(Dx)/Rh2qP,7:7&VpiO{UfAv!$/');
define('SECURE_AUTH_SALT', 'c.(?|ymFsW83S]B_Xag}*bw*@U:GV_DBkEoDS<*D^A,JTbLSR!qbek..CL$JGYD8');
define('LOGGED_IN_SALT',   'Q0WMUa,jnmDZk$#Mm|B:].KH}v-`ZzZ_aI(;eP1q/BQ| r}3)m~jAjD+/+MI4Wj3');
define('NONCE_SALT',       'eUW5SBkB:lL(IcrHhNm0Y9$96VP_ZV^6{C`!MS/#@].RkJT8;.F,h`um)?J7p&vp');

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
