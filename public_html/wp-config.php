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
define('DB_NAME', 'cl55-a-wordp-nrp');

/** MySQL database username */
define('DB_USER', 'cl55-a-wordp-nrp');

/** MySQL database password */
define('DB_PASSWORD', '6F7FfqN-d');

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
define('AUTH_KEY',         '++8iLFMqvP6XSHKeLMij(qwzsyZg7L9XIkZYMdXD3)(C4RkpvjBFtD/9Eew_eIms');
define('SECURE_AUTH_KEY',  'iA+FefeU0Tigoiq3z(bCyMT2T_#nd30maG_NiTcl85mFc!9aq7_tTkpc)0u)b/Aw');
define('LOGGED_IN_KEY',    'HiQO#j-zeo8GWCMJZTRKJGMo=qkzru82dn=C0WURlLtkJRWKBBDAHK3E=WF##YNV');
define('NONCE_KEY',        'jQUMNpV!QLXAA#oLikUb)Y5Zt/9!X(3s/2NtABF1C3d2zObejrW4S7d6c+H)yS+4');
define('AUTH_SALT',        'J-l=zbpfwxi(bO4KfVrZFCggJY6jNIJCe7Koizgy9/EXjGjMOjAImVQgKVBuZSqb');
define('SECURE_AUTH_SALT', 'PiVzybLO(G2Y)ZMu6rqKF4qjWjUhKT)ttFVU7HiX+gF#NMKr1uZzKX9OOEyb_yxm');
define('LOGGED_IN_SALT',   'Xmk4VH/2gUlwEWB+km6MMpRdUnyGI69hVOAod^jMzFTnN9Quw+7GJ6yLBX8oqzwA');
define('NONCE_SALT',       't9aXiML#hU2!YrtIZSDXLK)l#icWVQbk9WnVwDvE7aTs1MX+sprQfP-cX9kiAQ+d');

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
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
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

/**
 *  Change this to true to run multiple blogs on this installation.
 *  Then login as admin and go to Tools -> Network
 */
define('WP_ALLOW_MULTISITE', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/* Destination directory for file streaming */
define('WP_TEMP_DIR', ABSPATH . 'wp-content/');

