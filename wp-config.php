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
define('DB_NAME', 'stochasticbytes');

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

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'V3~VwB5r*=^Eo@LR7@N 3duf;<6!%,lW~>7lxd:5I,lxgta0DyF+q=R2qH$9Dbd/');
define('SECURE_AUTH_KEY',  'X4BqRq{ Dt*S3s*:(jot<(BnFh^OI:E=W;^F5O]^.kfki%GwR0$Zm<f*eOH6]m.5');
define('LOGGED_IN_KEY',    'AeqeB2j9G3VHOtQm%krb)g9xmh.~9$[o`kAomkJ;PtFgABPh=3T[tV^5+8lv;}%l');
define('NONCE_KEY',        'fuLf5p2MxxpMEr3L?4bdagDJ&Kgc<6y[,g@507bwk$c6l-Z4S9>l*kP`exge!o+?');
define('AUTH_SALT',        '(bJJ,.4pc/uMX(cI!yVSVICN}$S1z7/WTK%psA7zj3&!a k8G-~1U-{@]/NJ`<-A');
define('SECURE_AUTH_SALT', 'hONvcN-F6y9-VQ#_T,ya-g1D5>h)mFQg$&2i4d)xi}?IQ{@<EAwOQ)_:6ts_`7Yg');
define('LOGGED_IN_SALT',   '&:/XWJpKtltxJ8#9spP2Z*<8>S#f `gO$p:lET]oi7|wlPG !6dd|GAh4pN25+OD');
define('NONCE_SALT',       '{j;Jepq7<F}<S5vpUy?GOTw,WFgnmlXWcW!+5TRH)WoWrDRMhM+UfPU*c<4i/8dB');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define ('WPLANG', '');

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
