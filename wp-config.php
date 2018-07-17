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
define('DB_NAME', 'wp_gitesoft_demo');

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
define('AUTH_KEY',         '6-KeG~!y foYl!#mf-:xa$;w~/!~_S8`QUO>LV`CcJGy/JV=ua?;@~M`[Ml:28`$');
define('SECURE_AUTH_KEY',  ']n4z@9u}|j!g5A@Hmd4W#M{(bm6Ml:.6 8K-Z7y0?`b/_W]=%s1TvdW3xs@&;Td@');
define('LOGGED_IN_KEY',    '$u<7aV6EuWu|whFTp:AFCT]Xg9s>[3sC?q~EM$odz.7ZA4UzX|qjK3zO5yYL=!1V');
define('NONCE_KEY',        '%bQ, vumpz[8dY+9+r7;G?`L|@o$e3U?FT1;I>p?_KPwK$~r>eER~XAIsI_pp5B/');
define('AUTH_SALT',        '_0 fx#_FB*4O+PYa84N=sg:4@n!<q)~l9%,uhMrBq<q,cRzLp}A+nQ`;Z9&r!U-X');
define('SECURE_AUTH_SALT', '[42*fJ[I9,k(R1!5: e3g<n@HJNQShP{BOa;*!McSZ@C=I&-#T@eg_WZBRzr/,Rr');
define('LOGGED_IN_SALT',   'bGU`iBRQ4)LnDoow#u2c1KKrm%}T~?GiaU#:?w[2dHBYGAglf &>[+~|k;}O69 R');
define('NONCE_SALT',       'c8b`Umu=B6?$R6cW;6Um@uwqrTz!44JNioV;fZ(2zxDmb[eR`eIJ#D~*E}%LcBsW');

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
