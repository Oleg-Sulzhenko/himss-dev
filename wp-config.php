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

define('WP_HOME', 'http://artygeek.no-ip.org:2015');
define('WP_SITEURL', 'http://artygeek.no-ip.org:2015');


// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'himss_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'intelAtom2011');

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
define('AUTH_KEY',         'W8S+H^{Ke-+<c@w#G| a^B:kW/:lL6,CTYX2M;q,EYw-BTJQU+Ob,7,9ISI^O?~a');
define('SECURE_AUTH_KEY',  'MFeLq8nm-e[c?;kf,8zDqmk9W(( 20X)&HdcZRKkOGZ}UYl!|(yeLkFj op.m/@W');
define('LOGGED_IN_KEY',    ' 7|wo7P%*z>}8Z0y85Z`&y:}q[O4}L<+pYt)F26$]qh8)Z3+i}D:HR#-sNJczD0s');
define('NONCE_KEY',        'Dg%nS+VfZh3!4={TPE!g]P/a}!b)1$Df}F,y1+3SjUG5>.[MjsZFb^3B{j>33zCq');
define('AUTH_SALT',        '= `Y+-5!WDM8:Fi`<0tvo-4yYqX|G~aWDBh`t6U$??jvl2>dyc!%zC`w2fJxTTd4');
define('SECURE_AUTH_SALT', ' :F<f[#oq_|J]weyMN8>r?{uP!@S|K|2u|@d_-YU.%?Wi>*Lu?z#g1UB,+jU+o<Z');
define('LOGGED_IN_SALT',   'm,K)ETAi5fj6i$bcy=F{++RQfGeJUfSw&MZ|^/5ox94Ka-+}/gvi]R$2SX;0T0YW');
define('NONCE_SALT',       'Kb<0-%<C5 5#|Ar;xR<)-L(:wu-!oQs,UGa=<obU%lK7}w{c,z){/5trU*Sr+aIg');

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
