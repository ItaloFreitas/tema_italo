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
define('DB_NAME', 'u214255931_enysa');

/** MySQL database username */
define('DB_USER', 'u214255931_ymyde');

/** MySQL database password */
define('DB_PASSWORD', 'apuNeRyPyX');

/** MySQL hostname */
define('DB_HOST', 'mysql');

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
define('AUTH_KEY',         'U0nWB8dGt1NhG9KRaUHoxE7t573hf325l35NFWoTta57MNxQNzrk7CXVb6XzHXXN');
define('SECURE_AUTH_KEY',  'LtAu2yuq3xbLQoJwzAv1lqqSmu1AX6bJICP0CPiRoDNtl7OOnMAYCscdw9LE8u4u');
define('LOGGED_IN_KEY',    'qMdgxQ2zYjleCf49ggJIn9DytjPr5fDnUBeJDIF4LMUpavzRB3ALEaY3FlDJJCi3');
define('NONCE_KEY',        'ikNqnTqhy2b41Xoe09wOrBwL7bfk03rfxVSLqmxIsrN7r9oPx5nnpPAvAR3bu9zy');
define('AUTH_SALT',        'aVBcmD3EUUL9yJGmdPxUTUaFzOBUuF1ruADYrgIrPWTNlsKadUqzJxnZl3ed0eYB');
define('SECURE_AUTH_SALT', 'DNpaA68ATj011BmIZmlCjWNz5tmBtEchziFWdMGpdiF8tmfv3slzs32hW1SrzAqg');
define('LOGGED_IN_SALT',   '8urXV1osnqOt5w6fvCVRj3e3SwPBwh5lojm3n2Aquuj8Q21cdL4t9pEBDJ4bk1FJ');
define('NONCE_SALT',       'XiocAfzZwKAfOLFmCy9F2xjBw3pRAmSe0mhELuipFvm4O3DEI2IINxYrq7sF6usO');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0777);define('FS_CHMOD_FILE',0666);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'hxbb_';

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
