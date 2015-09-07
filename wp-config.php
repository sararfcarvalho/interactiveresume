<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'saradev');

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
define('AUTH_KEY',         'sw_xnyU?*&_pJ]w.^FZC=^32^X3|[0a-eRu%k0)foidJk+Ja|;kJ/pSQm1g@*GYc');
define('SECURE_AUTH_KEY',  '}^5rA]M|ec[6P#U`9FMhMe0YNK+gy#-Vn;cT1(4 [ZE$#=LsT)BMF-uGoR009TQe');
define('LOGGED_IN_KEY',    'wUlfZ2<P0[1v.Ai.u^,?/FS+ZPXjd+~8((mhr)5N7Wjl2-_H5B.H6-h8y4_g{U+.');
define('NONCE_KEY',        '7m8: E9G:C7g%|]q{{BP]r`?D?~(|[G7}/<<Hth?i?LfRRF.@oJu!^;W0`i$1XDk');
define('AUTH_SALT',        '/[XX(AJ(-U-@|ny2Ln&T`I$#|KG)(MO1h4*QH@,?+vYILW5?*RccI$1fqIF|8g`D');
define('SECURE_AUTH_SALT', 'r@H?szD?t/@,zYpz2Ob6J@+TU`8Cw:ww+bh[wN.~/@Sx90UCa5Df-h,1M/<Qom/d');
define('LOGGED_IN_SALT',   '2|Tx)vE:zO4t-d=Enb56w |ECTSE`oGtijf~-i uYZOzMecACm-D1(O.Z(M~F3o8');
define('NONCE_SALT',       'h+0BC~ElUl#P+KC{gO<>Ud2Y]i2%-lL4]=SqksTY@4/(:;u@%m Q}L=b-?/g&$qd');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'saradev_';

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
