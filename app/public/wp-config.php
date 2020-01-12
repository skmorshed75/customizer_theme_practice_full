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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'M6ZD9/2IQJyYkJH2PQNplbE2lu8ehbISTl5BLKLiKIwAewp2Mcp89oQSaocIqCJB+hfliKd6XAxiJFFk4nfY3A==');
define('SECURE_AUTH_KEY',  'ufY4b1Zx5J9dwFOqFzuVw+IgY4eHpOclI7Z4yVkxPMeKXe8q5F4S1sIV9JhttURSvHupGwAWaxOYZwOWNCT2zQ==');
define('LOGGED_IN_KEY',    '4WZ968Jer/vHrwqAUkLksVc6VShYXyYpJjyiuGfJ78zn+cjEgAUPWnpgL354pTJTh2ju+cEeSZh50SOUyrXRIw==');
define('NONCE_KEY',        'JJXXb++XPH8N1kWEG6wxSSUcvTER4HQUwKfjpXjH6znd1Kn4UtjDz0svW5sDFRZ7xPFLvkKfozIDifxOjZogwQ==');
define('AUTH_SALT',        '2ycsiidFV624DvQiBqzTXGeKAgFGNs3gw5DobQWEBSOibxLrr/9mGTCu4oMVXGB7OAB9Hyg/QuUFpFby168Qlw==');
define('SECURE_AUTH_SALT', '2nNxuKk7Qhi+lUbRuEitHa3/x6yzldHDcoV7X4dIutOLWcXDjF11ulq9jX+gQ/cmY1RBdRKd4ihct4HEe30uVQ==');
define('LOGGED_IN_SALT',   'pZQJLg+nOId+1hOP5IuZFUINlWK8x4+lDuaGTw9uTwj4dK0mskGLaboVO/HtNiCA2+gmOSRdATdFjfrJctWyMA==');
define('NONCE_SALT',       'GXU1JGX4oDidSrt/fB9mpY3Va1juDRFPYrXTUgxHyPrC2td2SChiQ5qmzg1UfjxLHp8cDIgZQukHxxjrbaUCqA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
