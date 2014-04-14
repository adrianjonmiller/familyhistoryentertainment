<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         '1fv0xmnn3g7sphedhqniszyofyhjuueccgwm83yiujlkn6c94xv7sjlc8i0cp8lk');
define('SECURE_AUTH_KEY',  'pxnffrar9wuscgyr6rtdwhpruv2aobvywjucgv6ez7dbl4bbpgo0it0fyeqyyejg');
define('LOGGED_IN_KEY',    'wawyefojbloxk4joiyxanlykiry4s7tzjqjchhcz5zfxwg9pzirwl4e6fmxy5at6');
define('NONCE_KEY',        'ivuktmevm6mkvuchpzc4teuuj0fermt2rxr9cwmiulp7lwmcoudrs3smmmfyobau');
define('AUTH_SALT',        '80s75g0wrm64qr7o29dyvfreni2qznosricklpt50l9f7141djdsrytkeo1wafjg');
define('SECURE_AUTH_SALT', 'yp2dpyamynn2brasfm6rkohdhg3kbsq9q3b6wg3eznf2i5gb9j4yu3xp1au0vapn');
define('LOGGED_IN_SALT',   'qm2t4f9scu9i0onradxyhwnuesxojmxnkd0ifye1ojle7f0hnm0pneiprl1hszfz');
define('NONCE_SALT',       'o31vib6khdj7jbsdjumxlmxeuomatkjviyrw1piosb1xdszddyoah2uggy7yfyls');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'fhewp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
