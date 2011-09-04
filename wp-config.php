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
define('DB_NAME', 'maindb');

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
define('AUTH_KEY',         'EHO#/~t.X<cT5H?5{H]?>Mq?Z-]c=:@Svab%cpH]]SH;ZcdCSsP~R#@*UA;;>los');
define('SECURE_AUTH_KEY',  'U5[?ERe8Kbd$yfb%O/=mI$6t;UE^GDcG7xPV*(|#;l42cE5frB|AWTq16/u[h+:D');
define('LOGGED_IN_KEY',    ' vYRh[aWx/-Qb)k#,{TIS#I4}&GP;yE=L#m}FE/N_`Ew7])L+^bU2PDM1}P2O{2c');
define('NONCE_KEY',        'pPpEm.?rv.~_5J$6-X:]+*On!%)~ )~ewGI8R:p_`ad4LNu:MYPv;<AC<=!in$IF');
define('AUTH_SALT',        '05G0R8`#nH.Ry^ JYcl+xxVI@YVF(2&]Ug% 9gLCYy`TnEytBD<=`fL@@HHT 7Mm');
define('SECURE_AUTH_SALT', 'Vl<yYj9fI mk!4ibKx6BC/4q~o9}*%DHuQ3D1uyW0%b>shnHW57F]9DFFH$ R?I%');
define('LOGGED_IN_SALT',   '&vAV27Y>Vuv_PMxa4&1Wq2YTY[`EfRv*~Uwccrm$?pg=wF8otp y/45mdBH T0;3');
define('NONCE_SALT',       'Wd=smPZ>jvd~:~2A_v#!MFm+;bU{gy~FyIY@cxO?CqS]brGiv$DFd.7a;]fHO`EC');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_ish_';

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
