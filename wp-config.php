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
define('DB_NAME', 'good-people');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'jrB.M]:y%p^7/OIXIAQ^%d9$ndG`61&hch7*sy: *]Wq6M#=6b|bBlP^?&YD{18n');
define('SECURE_AUTH_KEY',  'R 3^`sV=ocoAkpmw`g_>iO5?Mo$_ ruD?x*>7Z{p.@.U8.:>xxkxcP89(3Ao?ozE');
define('LOGGED_IN_KEY',    'NrRPs<jE]ZBnv6UoO3XB&+{iuuOC n@S6LOxa*i=x8+m9_WVHO;h9ZfmjBo~rWrz');
define('NONCE_KEY',        '@5wGz6b%JvqU~{$NTTzba.lF4<D9P*2F[aq<cWGk77t|Rff@&Q[0je+C?z,aD7Z#');
define('AUTH_SALT',        '8Q~;LMy2|4Dg/ >eYE|Ut|.<2DF+5e%7?5mM|7;GxS/)/(FbJbeFQdOQP)U2:Tg8');
define('SECURE_AUTH_SALT', '1WJM]yf0AuzM{%42#hDv3iVNe0sMiPGMi5]ZZzw.INe!r6f(4@;J-E2619}#e%<F');
define('LOGGED_IN_SALT',   'vh}N+OUw;7*1@@f/ sHRw42C4W1-AyV1F033=9zw*8%U(x$T[.1a^t6*vA8:A+w1');
define('NONCE_SALT',       '10C908Ae<MA*fMYlN.sfAH$M|+>Lq:=feoMPz78ZN{>3dCi`:%mtFZjg8Aq([/#p');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
