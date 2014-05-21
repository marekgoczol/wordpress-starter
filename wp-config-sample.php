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
define('DB_NAME', '');

/** MySQL database username */
define('DB_USER', 'devel');

/** MySQL database password */
define('DB_PASSWORD', 'devel');

/** MySQL hostname */
define('DB_HOST', '10.254.254.80');

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
define('AUTH_KEY',         'Ks-=49-p#(~0-z>44mH/)eQ}O8U*js:Z)|AcE[qkt+e012kkOg#,6JU{OY|AH5}&');
define('SECURE_AUTH_KEY',  '8T[Y[@v-kT}e{{|7*M|L>D`E~|`-0,]!tm7/E?0MJ7y8,Mmu)):C-RMV^@C6F6-J');
define('LOGGED_IN_KEY',    'SwD/?m-^ H@vUOeDPu|9-7ChHX*Bm6zcI3S~zm}!-Hu|A8%g^`H9&sB.~w|6!qN[');
define('NONCE_KEY',        'e2|n#*-C+w|-44Q>GH$PWc_7hW|dQ67n5t)2wE .]S;JDDoYB7Wr+ob*y&D_/NH.');
define('AUTH_SALT',        'Y+E9lv8Mz9,u]9_,DEH/<:4yXlG&eME-|)XF8sxbaEjHvY?$*v~rmSp3sH-T-})Z');
define('SECURE_AUTH_SALT', '!7[zL#zKQC_G|~$`tuIla?I9e2Ps0d=JFdt%-pPqm;NyPq/1unMfjbMbif#JhK.:');
define('LOGGED_IN_SALT',   'SjV;C;xHW>mn1dTJOViT TZ!_H2+6g1BOS0`[Q(p7:}cj);xhlb^@8M#`t$ A{^o');
define('NONCE_SALT',       '44ywnU(S`9)Adu|@9/>(MesXdr^,;W:TDeAok[E%mCpuEzZ.;Q{w:(B|.9^:B6<@');

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
