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
define('AUTH_KEY',         'GVH27sE+FVbHDFSuI3yaTqdnotVMOrkQYbIhk9BazHJQg/GcnaaRWI3RiijhP0LUl6i0Gsp7+EPWzLdhwWGz1w==');
define('SECURE_AUTH_KEY',  'dz5hJcd/qYRmiMiJhM2ILGs1J9P2TSunu0h1b+mmZJ4xGdzSEZ+T3dNCwm/Uw3rxnXVk9Xa3sC7/q/R3T2E1Gg==');
define('LOGGED_IN_KEY',    '3EW4PW8yd7/zlR2Aim20PwqgvOfp44zak+KwxCK7frX1o3t6am9ttQiXvIwuxdX56/wiOgd7Vi2NwGVxKrta4A==');
define('NONCE_KEY',        '10AcfQROLg9aDct6Bf2qsR+X28KYydzngS8pb9i6fT8Ag4XGqJbXTispWhIBQum/gRSKvkaPY3Sam6Q4zXdpuQ==');
define('AUTH_SALT',        'EP6FCp8/u8Jk8glyRnI0/Z7wKmdj/GvVHJFiZ7x5fKeYgoiQBkw4A6JdQwQeWwroI/jztqfUEOZsAMAnNU+W+A==');
define('SECURE_AUTH_SALT', 'yvIMD2MDN/hdotcxncdj6NxC6EKqu3zUzgFs0tJNH36eJvcVg6gER8WV9N+Ob5pdCilhX3xIelIK36BVv9bfBg==');
define('LOGGED_IN_SALT',   'XfH0PWLuCwjkt+qV40B2clzk+O0joZYcv98MmsqPUXT59QEp2QnMP8BtdSxExNEgnyXdKG16HZfU+rMNIFJ0Jg==');
define('NONCE_SALT',       'uIbHbaXt4JtVBULB5xNgLWRzY5VO7GhpAFaIvcmA1CloVNIrw3hiFM2cJ4YCq4/v3L2Zh266Tb7fINtj4itSow==');

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
