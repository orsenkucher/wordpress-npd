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
define('DB_NAME', "wordpress");

/** MySQL database username */
define('DB_USER', "wordpress");

/** MySQL database password */
define('DB_PASSWORD', "~WK6W]Z@92y85£Xw*XeM");

/** MySQL hostname */
define('DB_HOST', "npd-wordpress-db");

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
define('AUTH_KEY',         'mo*I%*fP99gdiV^zO(jT^2Bz14dVIV(FZoGU!fGkBrELysYzp9LusB4RgX7YkbVR');
define('SECURE_AUTH_KEY',  'iUxDgxPMnXjnxsEaqSIuQqVdLBQZK6Y(9ozyuf&GeMpnH6eSBmjBHy3B&84kNwtL');
define('LOGGED_IN_KEY',    'NtvBPAXIzhIYZ3#v9X1O5^#gyeRF41O2QvWxykTDYAdq@cS#2&Trjie6e9%Q8MgN');
define('NONCE_KEY',        'bjIWY@s^EZKanXnJ^QkiohTR@jHaZkM30n(9GbfX)C1c7Bq4MVg6Eo(nzEqOeh4Y');
define('AUTH_SALT',        ')MfXYVVyCyhIvnKs@7@9YAtkIXb*egSMni5D5rW*iaZKzytEkfxcw1oJQHC4A1Qm');
define('SECURE_AUTH_SALT', '!0!3P0Hc3CZ&iN#5AYRDuSM8A!%Q6%Fzj!^WGR)ZpQ@WrOSuKaIhA0jzQ^1Tw!E2');
define('LOGGED_IN_SALT',   'lMM3ns*CJ%o*Ac2T4E@oegZx0@6Z39&fqgLAJR6nA9QGVdYRSALywt8y^nYKEWt6');
define('NONCE_SALT',       'tEJVpvt6u9rqWCZz6pVRl5Q&0r%wr%Tg!2IbIvEXos)DLp5Qa!)IHWoEfNwEvahr');
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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
// Auto-detect protocol and use the correct one
if ( isset( $_SERVER['HTTP_HOST'] ) ) {
    $host = $_SERVER['HTTP_HOST'];
} else {
    $host = 'localhost';
}

// Auto-detect if we're on HTTPS
$is_ssl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') || 
          (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') ||
          (isset($_SERVER['HTTP_X_FORWARDED_SSL']) && $_SERVER['HTTP_X_FORWARDED_SSL'] === 'on') ||
          (isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == 443) ||
          (isset($_SERVER['HTTP_CLOUDFRONT_FORWARDED_PROTO']) && $_SERVER['HTTP_CLOUDFRONT_FORWARDED_PROTO'] === 'https');

// Use HTTPS if detected, otherwise HTTP
$protocol = $is_ssl ? 'https://' : 'http://';
$site_url = $protocol . $host;

define('WP_HOME', $site_url);
define('WP_SITEURL', $site_url);
define('FORCE_SSL_ADMIN', $is_ssl);

// Only set HTTPS on if SSL is detected
if ($is_ssl) {
    $_SERVER['HTTPS'] = 'on';
}

require_once(ABSPATH . 'wp-settings.php');

define ('FS_METHOD', 'direct');
