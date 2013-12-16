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
define('DB_NAME', 'himss_db');

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
define('AUTH_KEY',         't@TYvKv;B{scYxqb)f>SEsyHa15pH*?Ss`mTnMFf;2>qF|vA&r@?efCG}cWB12VO');
define('SECURE_AUTH_KEY',  ')6#[(@c.fz(BU5cd/+#0R/`>tN<Tyx[i7NUh H#?:eok1;7zNV>p?`ysZC7W<X7v');
define('LOGGED_IN_KEY',    'JDz//Yi@f*6,=U03c>j-cN|w|lHJ6fw /8DG[~H)xeXI{$_^S;JBMFI)BYiJkXC6');
define('NONCE_KEY',        'v+Y<m2?o#3ajU{.b3W] ?aC{du5+cJ$IfIJe%WgUy:iYavpHt^fz<Yl>ok8aF#qZ');
define('AUTH_SALT',        '^}Vm]K7L(s9g~dvJLg=f}fP$GM^;d70@`aR:^rtP`x&n8sesK.nK+CPrddR67Ym?');
define('SECURE_AUTH_SALT', '1&I]wRG=+8a`_k)c?.zx8e:$*<oU3^:VE2:Codd9|wb?5X/Bk$VL+3+Kp~uHsdD*');
define('LOGGED_IN_SALT',   'E2Y]ptkHYF%WKBCY, 4vjjmbuJ7Faqh~GwLTvKG@A1G:]/&Ell64S6LW#]cSv5%n');
define('NONCE_SALT',       'Hk45B}ayX;H(Q:qGs4WBDd}Ec/zjd +8^SuG2k)0Y?N.*qg|lZk+IR08n`P[!!QR');

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
