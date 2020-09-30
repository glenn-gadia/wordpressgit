<?php
define('WP_CACHE', true);
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
define( 'DB_NAME', 'iamglenn_wp838' );

/** MySQL database username */
define( 'DB_USER', 'iamglenn_wp838' );

/** MySQL database password */
define( 'DB_PASSWORD', '6)mp74.Sjl' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'e0sdcjuwnvo8psqktvnqmflknfkby8dmpqt3lzimczyduz340yiz83mqngw0fjsu' );
define( 'SECURE_AUTH_KEY',  'tgzvdowu8w9qecekdrsrwz4obga0op647debafaniy3yaikuuvuh3ddm9zxihh4k' );
define( 'LOGGED_IN_KEY',    'juuba6cbmry1hufn5qrilzjmydqkts6xz7pvnsderbmavflusdildd2yjqdwaeag' );
define( 'NONCE_KEY',        'atpuuh31rucfltdkmwmcfizbyuljqb9igp5mqmddxcygnvpe2cng3tklknxbzlny' );
define( 'AUTH_SALT',        '0ae6doderm7kncdr3h5onm6nu0mzahm7iag7nwiisesu5ff6d3krphc55ajcmnbk' );
define( 'SECURE_AUTH_SALT', 'zn1j038p81lsjletjcvej9ze1ig6ru5camlxkacumntkk0lrdnzu5ifobj8zoywv' );
define( 'LOGGED_IN_SALT',   'uv8e6xute1wpfoby3kdnljhkljhrksw8q8znml9mpdvt4lyljlcwdmgqtxygw3pw' );
define( 'NONCE_SALT',       'pjzvlzb6xqdftbmga315qmc6bc7v5oss6ai4iy8argq0ffhnoso7zsqayluqcrgp' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp5z_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
