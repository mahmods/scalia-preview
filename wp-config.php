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
define('DB_NAME', 'd51d61t8vm8kv8');

/** MySQL database username */
define('DB_USER', 'tixxhadquqtvos');

/** MySQL database password */
define('DB_PASSWORD', '2d96f0d7e3037678176cff9254280bf0ecb3f2b9fbfc18d931cbfc32ee2e7e83');

/** MySQL hostname */
define('DB_HOST', 'ec2-54-225-199-107.compute-1.amazonaws.com');

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
define('AUTH_KEY',         '`T>)y?/Hkmm%SC|-9x)Pz:Oq5+5BhP Fjt^~m.s;*w9nnuy8F[9D{!9f!^=wB~()');
define('SECURE_AUTH_KEY',  'd_)F*W+%mSo Z`<}@UB9REh O~F4-oos@p5 }#-(3@*e%b}J,O/^7-nJ*X4ARtH(');
define('LOGGED_IN_KEY',    'ISf3aE-y@6t;Oj@nz$ya%/Y~LQ=tD(bb$0ES>YtLACs-a0$M.m{T, /s=@pv$Rg2');
define('NONCE_KEY',        '!(DF k+zA[m|&f9k+ql@gjibAzt3/IB|*(d:}!8,UA>}S[P6HnU}(Nnq]G64wuQd');
define('AUTH_SALT',        'vu{-%fEA}Zy9I+SVm+y*jts/KOQ2jDW1&D}9Wy;D*_2a;y^%rv-MCT ~kN/|jGH^');
define('SECURE_AUTH_SALT', '50TRLiwZMKB|-eV2Nde9gy9Qc$r&W9`;C4t@Md;Mg>&0997hWr^vRyJ8/inJ25E@');
define('LOGGED_IN_SALT',   'H? HsohG5~3Ae@S3g?!],KZ>mp?>+57Zt|B]I]+/8K]y[l9cwdY]KipD%.5},4lv');
define('NONCE_SALT',       ':71MR>tBE|cp^nt_SK%&Wh SVr+|XWa$_SysFulW(|K;t67:8IKZwH<rKb4V|+nA');

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
