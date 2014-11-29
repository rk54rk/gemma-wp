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
define('DB_NAME', 'gemma-wp');

/** MySQL database username */
define('DB_USER', 'gemma');

/** MySQL database password */
define('DB_PASSWORD', 'ux6yAPjFGQ6tfLeD');

/** MySQL hostname */
define('DB_HOST', 'localhost:8889');

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
define('AUTH_KEY',         'Q(h.|eLc|)xw5B5){hfu50`<L0Wng3Ad$L=5A2|9A;D_QLt+K.W&mMK_sDd*fu#/');
define('SECURE_AUTH_KEY',  'Nao9#loeM`^+%T$,CD!S+2R9pEyWt[@5x,a1|$aOLO>,7jg4tJXr9y!~&7[Frp]2');
define('LOGGED_IN_KEY',    ',JoBosYy~d;R*vv]Z1=l3)j2zr,,|q%cBvH5cLC4+A_Yn=$IsWhQ`J9feRz^XL~g');
define('NONCE_KEY',        '>>Wk@0,ko$2v!cUZ --%-w.=.[{kN>a/eVcXu!8=GHvL+-}kU?jH-BF]D&+;~?K|');
define('AUTH_SALT',        '`[-xkK#|Y-_*JxG*z}s]A>;ro2`g[Du8+le^oIgM8sa6O#mle?ARr{-NUI8H|_Tr');
define('SECURE_AUTH_SALT', '7F%|$pL%lv(hQM%2W`HZW[i dxK@]2DX;7}y v#$JZlR@&#[2Gc4|{/bES%m}WGd');
define('LOGGED_IN_SALT',   'D!@_U =.zb)zS#lD39 /,kAMPNBex#6Q=V!^D9IIKA9W![!mR:kJ,,/dqbZi/e%3');
define('NONCE_SALT',       '#!&j_rbb,;xNBywi%T4%sJ1QqjTBy.Z0OgwXs6#ayq8uQ{KU/e+vLBd4(%<!EdF2');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'gem_';

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
