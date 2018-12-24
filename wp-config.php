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
define('DB_NAME', 'nafuucoz_nafuu');

/** MySQL database username */
define('DB_USER', 'nafuucoz_nafuu');

/** MySQL database password */
define('DB_PASSWORD', '.!m787SfSp');

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
define('AUTH_KEY',         'z7xjayzotbt0auasg1dxzf02oxspeb1vq3bhxd3k3ademjcsr8zzrtxqymo2e5q2');
define('SECURE_AUTH_KEY',  'fqdtkuo63yblfd87ukb8noky11s79xw1e8emsqxljr3sljdygbhupfoqoc9lb9iq');
define('LOGGED_IN_KEY',    'fo14havpmstswgyfws4cjd7oxhqtxl4cdgxe3nix5pu1hmopiqhhfktbi8d9m04z');
define('NONCE_KEY',        'hnbxkngvadrkio0gs4mmtile8wiktdcpikciu9e6kwpp1isjrp6xec7ujmenmtrl');
define('AUTH_SALT',        'ux51q9mccsbglhe0ke2xl2tyi8iadql4m7eyxgxgsfokjgtydlomrjlbfmvfdh3z');
define('SECURE_AUTH_SALT', 'oypx7iemfepiqajgwspitjqqobx3cmjrq0i71hkopqfz8qcugoj8ogfqqsa1bmhp');
define('LOGGED_IN_SALT',   '47k4awtyhjanfmof0atjn9gukjobfgvly5sy9f1xjxjin0tv6czhbjqhqsnqbwwi');
define('NONCE_SALT',       'fpftvn72sm2n3cnsz6otlcqdhuo7y7snv3baagcsivmzb9mqssd56kek2kp4pmnp');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'nafuu_';

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
