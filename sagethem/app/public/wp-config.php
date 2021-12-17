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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
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
define('AUTH_KEY',         'nlqEIKm6txH1k/yjy/sxcC9rIJzCDqXpQKEQ8SF0eehW5CZIFbo047mD7eRWygU655M9AjKjeGOROoT8zupSrA==');
define('SECURE_AUTH_KEY',  'hm2ur4YPj/DTIrIsBjWKHLfv6IzR1OWkPlJF7H9BgA9GGaOjGyHcl688DlI+q2AQiyzB14gKTwBfjBMumGs5YQ==');
define('LOGGED_IN_KEY',    'MKiyHbMV6OngSBZ1600Zvgxa90S9sTF/FInaleB9SZu+GZyvCzRh0XsHVQ8k0wJ4bSFG8P1Zx/6P+qxGC3JypQ==');
define('NONCE_KEY',        'Y66xQzuk/oCw+K/dgzHw2ps60EOARh65sPOoUL+Dcf8YzpFptW7ybr/s9aRJJd3GpZSjEcJUJslHrNg/+qoWgg==');
define('AUTH_SALT',        'rL5kq8Go7EQSR2a1XnHBhSpYQJ6CspXnIgkSrh5Ao2l1xTwpRW64bYDptf5aRXrS6GToVGLek4nFhT53wEma8Q==');
define('SECURE_AUTH_SALT', 'MuNHp7lVp6w01NxkjpbckJ45BuyAEQgqr9aR51Q4ILWwcdF8ahN1t0Yor7//X7EowbqaOQNwNe+eILn+FIomuA==');
define('LOGGED_IN_SALT',   'vTpAYgZPhNVtrZ02ezpFrNE23rNv34ZTuj9u00q/GtH5sPBK5h0OY1fVsGvCscGkUoJCu7qUqpwwOURP+45tFQ==');
define('NONCE_SALT',       'HwmZ226LA6AtqR1qmIzIlHFolyDfQuTLXRqkU9tGJgCRlK3iyJEr772r6EsxLr4CmF8k2K5DLk/KZjyolxtOmg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'w9th_';

define( 'WP_DEBUG', false );


if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}

// WORDPRESS_CONFIG_EXTRA
define( 'WP_SITEURL', 'http://localhost:10016/' ); define( 'WP_HOME', 'http://localhost:10016/' ); define('WP_THEME_ACTIVE', 'sage-theme');





/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
