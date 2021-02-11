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
define('AUTH_KEY',         'FHw1XrZ5FoRq5Fv/dzMICZ0RmbyIo3c/kUK78ilGHmyGDM6RfCBWrDfAASWErL+xFqP+3hWi4C+F8YtOBodyxA==');
define('SECURE_AUTH_KEY',  'MEqfmrKuNV5NlgdrUkNCP/7kY7ouRqecApd5zO05BQFrv31xdepvYzj6jdCT43OyDPuiW8wqvPYY0FKsjcI8zw==');
define('LOGGED_IN_KEY',    'KAJs8ZxywogEeRBHFZB1UdmBdm/+Ny0P5F/nHjhdxsaHO6VBimWZtEtiaKMfS6/Of/pu1+iCbgadhsDVwINjdA==');
define('NONCE_KEY',        'DsfmY5iM1PWmud72TKexKmwlsrKpURV31M9uUdr+R4D4q441fZ7fswLHTCjN8jxdvCqiTZZDmPp1QWziHAgocw==');
define('AUTH_SALT',        'cPs0l3NlARb4D+PlZrCvu4e//pDSrotTiFwbTacFOiIUwOIpB6Wuwhl7/UPy+734ZztL8z3e+JB8WvoISR9BTA==');
define('SECURE_AUTH_SALT', 'wHeF8eeD8ZQSUcAyAFhGU0eNGcdmYmIuqmrhIdYr6NlizS+M3KseRUneUbYqntWoaA/Ykv/rwa726sOMh+lEEA==');
define('LOGGED_IN_SALT',   'MdSubkPpedi+rnZkvRn+S3w3dR8P8sfZbXruPYKuI7w0oCvOTfeV5ABG25yQiXAeZlkpuBJxl6YSVnHiVwRLuA==');
define('NONCE_SALT',       'AjDqtqeDJUZ7LA7MLAZysmvzGwEepu/JvC8V56MkAYH61aGTL4MEeH0rbrzdPkYmH9rRCWKlvxfwgKzdBE4e1A==');

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
