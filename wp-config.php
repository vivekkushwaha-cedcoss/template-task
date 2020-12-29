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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'YdndErf65ba7eyw81BMC2/tYjPhZN3LQ1/v+ZXZJN1x92nO+5IiPAUMi2LO8uVVN574N3jQJxCx3S5VsQQ1IKA==');
define('SECURE_AUTH_KEY',  'NxDHbybL+VLRsnA5RTmooyZtVhs8p1VcUB9peEEuBxlC5Q75qd8O0nHa6g3c09fwemRTe33Ca0FpTgO3xTnivA==');
define('LOGGED_IN_KEY',    'euR+dmkqde58mDvMbN8bC553W1KBCVTjI3hE9AhGir0Rgn3G2ZoB3eREM6taIZTkVArvhKLV9ttyAqFouTHkdw==');
define('NONCE_KEY',        'YMLLBBSrZ58w+cItBSKjAH4v8GU7czM2nGVjw/+VBb142qeXEpOYn0tdRGPP+NBJOhAYohPjFVRFCpOrRaL1Ng==');
define('AUTH_SALT',        'pUs3qu8ISZEDRmAjHROu6qDtMEjN+y38qGMFgivw4KOnS56Z8S0FTha3ft0U6eQie+uKRL3Vnu+Or27a008MGw==');
define('SECURE_AUTH_SALT', 'B0ezCVTNf73+3j08FRvux5wg5euo/T9dUOSN9WZZSiOtXxWzYifKZ4BE/MmbWb7nJqSuSw3Y7Bv2K92DgGKMsw==');
define('LOGGED_IN_SALT',   'JF8tLwiaSwQU3Unf/fEpCOc5whaHjSWjLcuX0hZ/ZeBlJGw9Lb652b49dJoxxY32Tvp8qbHyiczf3kNu1H6Z7A==');
define('NONCE_SALT',       'F8Jix1tpa5l3Nw3xXFG35yuUqmKMckpd2fLvnD9TW7ezvBMpp8cXNRDSdp2KZK2JbXBHe0jLODgIiF5ZE3FaJQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
