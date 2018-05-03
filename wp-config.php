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
define('DB_NAME', 'webdesi2_wp610');

/** MySQL database username */
define('DB_USER', 'webdesi2_wp610');

/** MySQL database password */
define('DB_PASSWORD', 'S5][4Imp35');

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
define('AUTH_KEY',         'njfgvsrrxtujbvpqaees7bayducbyynjr6hqdxklwmlyxawqq75u6aet1kktyiox');
define('SECURE_AUTH_KEY',  'uwqehzhczjkcrnmgmnzjdq1g4r57t8o5svu0m8uu8fwtmuf3w7u6vkyucati5jya');
define('LOGGED_IN_KEY',    'zabl74irz8iodghyamifso041nrgxukxrmy6lx1p1v99y22qa7a4uibkkuudn8g2');
define('NONCE_KEY',        '1e7ujlug3nyoyvmidedbdhl0gzi9iuavuxfrsmxr4mnbam1bocrzlk30mkeau3rq');
define('AUTH_SALT',        'hehjjt1vln7xtzxgscbogl541da3tppgdwyrm549taqbyrn8a21vsa9uyvfbn06w');
define('SECURE_AUTH_SALT', '57scm1gs1kl2dwkrl4t5q8i1kftpjndwc968czviqlorjeuji6krjiq61j8520ww');
define('LOGGED_IN_SALT',   'lihv5rhuwxgnvozxtywznxedxojzgeduark1co3tgn41stvyouuuggqk1qurlve6');
define('NONCE_SALT',       'ma9nuagcgvfk9w4vjgjwrcaakv8rr6y9bktvarxo0qgdn2qamdr3my3b4vphaaxb');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpa1_';

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
