<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'check-creds' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '6u85YeZTc4B4s18C2tWuwR9kXyJe2e8lsetjsD5fVlMJd10PMU3dM0oXwsOAfG6c' );
define( 'SECURE_AUTH_KEY',  'dPE3t7nEk3LijG9gjOxqMdLDQyWFVfCXcqIsdSTEus2pNC33CJg4KsHoeBsX5NNP' );
define( 'LOGGED_IN_KEY',    'VnK6OzNGLuON0w8NJRVy8dJOyLZAWDr9AjjTQTcu1VtEYixFgv3IR55dK935Xvuh' );
define( 'NONCE_KEY',        'C6u5Konw0iuGe9SHIuMjkk896QgUvOBAxIHO4Yjdx2qlJcacYqbT5iJG1eZnauM7' );
define( 'AUTH_SALT',        'q9BlgNkbJIIYnDy7vLPx8XRTjtFzTOrW04UNROcq5zsiaaicrKUZVZazg5qQ9nDr' );
define( 'SECURE_AUTH_SALT', 'sY77AJbjIKHqVFSSrSLmVGICG4wgreWnEOxprdqtCB9gvuz3t1boacpWeVcQTjca' );
define( 'LOGGED_IN_SALT',   'LhGuuuDmaFdfoFigrEFw5hS5zRpb5srlSU1Ez6pCbQumBHIXWVh6BHRuqFyYPLez' );
define( 'NONCE_SALT',       'kMVGl9NOKQrTGp5CsHIs4PzK89wfQOEjCrCxvw7zQoGjmvUGUOkMwGQepIGGe9I6' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
