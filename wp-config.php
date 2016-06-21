<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp_bask');

/** MySQL database username */
define('DB_USER', 'hamidm2_wp3');

/** MySQL database password */
define('DB_PASSWORD', 'E(V0hL^)~443#[6');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '6huEkGxFI7OZgvT7dB7zlrDL8sHfvrGKf5z9udHNQPFLFnEkrmJocDDJW8VAGIwk');
define('SECURE_AUTH_KEY',  '4slWJJT7csQWMvg8SU4mmZRKrRPAo2YS0iEfVwfmoFjhGVV6uS5at0fYELd6jCIk');
define('LOGGED_IN_KEY',    'EqbxmgJbQVra8YoJDanj7inyCMjX1fDKeOFL1uIu5pYp5qgb96tZpIOzD9WZujdn');
define('NONCE_KEY',        'Ry0aYT37a6Hy00rYomYug2yKZwS5i9rR6hJmuDxO2oEYtzPfCg5c3frh9qpkId32');
define('AUTH_SALT',        'fjULw2miQ6xfdrfoONDbshuWO27RB34s64W4xSOGBChFa8s5MrN0hh0q6VFoiYUk');
define('SECURE_AUTH_SALT', 'M66Ma4cLA3ciaL3wGxUrOC9iohONlnBJw3j5YA0kRKCui4mI7DnLw1WXGkzSfpZD');
define('LOGGED_IN_SALT',   '5Zz4nqeD3vYc7WMYHZqW1GTPldrQaaa2W1Xbso0lfJmw1GuKFN3kPveqIDBQqIgh');
define('NONCE_SALT',       'MUnsb6eGs3OMawbtEWORYeOanGTf9oSQEAQqZcdtVFAl8fSHdUXGqRkOF5MNRBBC');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
