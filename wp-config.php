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
define('DB_NAME', 'db_letung327');

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

/**
* Authentication Unique Keys and Salts.
*
* Change these to different unique phrases!
* You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
* You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
*
* @since 2.6.0
*/
define('AUTH_KEY', 'L06dGDNJrgK1unX51ozlQzNcm38Ai5OCh4AwYIJA1b9xJNjWawlFNjE+KNK0BmwC');
define('SECURE_AUTH_KEY', 'zpWarT2t/8TRt3WZxGTysGxjXSM7sfakBEF7f6xjq08U+a7k199ytMGEThHu53FQ');
define('LOGGED_IN_KEY', 'Yuo0uYPVh2ZanMLbI4GHQyzgrksNZKg7y06y6Xq8Fb+7LWbLowfV8ewyAtIKGmX8');
define('NONCE_KEY', '0qPE5zPRklyMvJ6stIvS9lIeLqLBIh/pkVde/osJzDRLTXd2tRyK+RU9a26V6oPn');
define('AUTH_SALT', '3ZDDL7CwxIg8noxLSIJuIULcIs75uXtk8t6kCCPB90U6O5cHmWrVlMAOmzcNXCbA');
define('SECURE_AUTH_SALT', 'sFSZvN5+drJlqt3EyXS6wwfiVNEkMDzzRSiciPLet2LkkGjfVkneYQUv8NPsEYIp');
define('LOGGED_IN_SALT', 'DPhT+tH1/Riljr16sk9HxdVyLUZ+qw6P//a/TZExF47ODy89OYDNcrRcGuxnnbab');
define('NONCE_SALT', 'zT4fXckuQYat/35TrWT50w9t4LFHN9KHZCaCDeh8l5GJRXvCRL7Jcbo4Lw9G8d+x');

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
