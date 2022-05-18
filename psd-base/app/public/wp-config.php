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
define('AUTH_KEY',         'Er9nYlLpNPD6q0ii5YNVGVDtyewF9qbWZcZQ31r0wSjkfI2Np95DEgwEzL94MFrEWJKCfu/cieFnAGkhb3xMKA==');
define('SECURE_AUTH_KEY',  'MhdG2TmqbCEO4/xRE+LGFpq2/oAc2gSDBaGw3NHEGuAjxIg6e1oC79tZ/1o5qfhsX9Hdlg+vMEk528Y0Pqlbyg==');
define('LOGGED_IN_KEY',    'MVrV9L287Qp0sxqETqikVRhczcUnlMhTqoiXl15LERno/L4dxmszzmu6x60ic5DUbAUq8qvSSEuSV57lGzL6dA==');
define('NONCE_KEY',        'ai/89zOW+iVBR+w14Q7M9k6m3Z7e+02Jsjyjb1PNl3XlaQuBN99rwYjO9i9+EZOJr6W5MNv2A3uJl9e5Yk4pHg==');
define('AUTH_SALT',        'HOrfJicDbQUq1VxxxuYE3cfMuyy7Xr+w5pBhUgv3zLIaJr4al6BLfo4z8MEzEsOb9oo35VWTETq/Ix2VV/kZMg==');
define('SECURE_AUTH_SALT', 'Sw2AGIcRookLNWEwZ4bDm2nJ9Frk/Gs/GvyBA8HYCnjVIe4usNG5T3kZ4uohVXdPw2gz4VySZr4uIiiZZjcWgg==');
define('LOGGED_IN_SALT',   'ZBHgkahEaaR5xKMhWbqzzfAAnCR3nbTEMs3SvlA0iqUaD2HzyqNOviXf6IAu+XOlb5n96cEN/pk8BprRdq5JJw==');
define('NONCE_SALT',       'kFNYw6zBPLjKp3dhDtYa+GpFQgZMzkiY7Fh2S4DtiQZPXdB+IhER4Zx9lsrTIN1xr+a9y/+jrzqeYCnqYU3NcA==');

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
