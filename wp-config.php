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
define('DB_NAME', 'holo');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY', 'sjwuadolwxi5ngzm6gj04paqurqwm9tnbgcumqyrxttybd0w4zxmfasrazo1oeca');
define('SECURE_AUTH_KEY', 'qzcfqdfuu2xaividsrosmoyd5zpyamv9dp2ykjadwiushoogkrest1uzxhjlfqys');
define('LOGGED_IN_KEY', 'h0rvokyrs4siluwigrzyuwbantob1ve0ja86rrfezae11hseapby811pgmwzwngn');
define('NONCE_KEY', 'a982iwiulgutlnokubkpdp9rvrl5jr2yjawornloudsbko4orb7qd5hwqr3clll4');
define('AUTH_SALT', '50xwkyj2jqarohc1jeksfrbfoxocjsmys21oeajo84hq40aya8covtigqyop5nij');
define('SECURE_AUTH_SALT', 'p1odwt9znafstuyga4t70zsanc5kzvfpn3lu7pzujzkmrql4izalhymdtmqvgxrt');
define('LOGGED_IN_SALT', 'ezw17dzo9i8kyipytfzxcnptz4irowdsz1v9ps0dkbefdwx8fbjqcfcwb00svmbc');
define('NONCE_SALT', 'japl5m7lbutusfxzsswwoij137isu6bw2t66b0qqmcwd8uyya0buqvgff5uegmfy');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__) . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
