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
define('DB_NAME', 'rockinDBic1tw');

/** MySQL database username */
define('DB_USER', 'rockinDBic1tw');

/** MySQL database password */
define('DB_PASSWORD', 'm5meE5E50b');

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
define('AUTH_KEY',         '|}4kzR!|Rk0FkJd@}Zo1Go[Vhd|GhdpGSO-|Rh[9~KZ[51Sh9KHp]SOa]5iepHSOx');
define('SECURE_AUTH_KEY',  'L*Lb.EEAQy3bXjAMIj,QbX^AjyuQyu^n<IjgrJUQy3cUv0}7v^zQcY^BcYk84F@');
define('LOGGED_IN_KEY',    'fy>>,4c@FBNz}R0Fr!Rg!@[gw84F@[|Gh[|0o-GCN~[|Oo1:8w!~9Z|1:Vw85Gx_~');
define('NONCE_KEY',        'rUv>n3NRg}Co@8Y@:Zo4Jv|KZ|4gkCRl-RV!1ds5K[Vp[9dt9O~:ZpHt#Sh_1Wp5+');
define('AUTH_SALT',        'wo[CoGV!1dwCNKKl:[5s~-Cd_:]St51D-#_He]51a-HWp*P;Dp~HX.#W6Lu.Pe]Am');
define('SECURE_AUTH_SALT', 'y<jEAM$<,Xjf<Iqj.FBM^$>frnBMIj^$Fg>,jfr74F@>^Ykg>FBc@F8Y!@>gro4G');
define('LOGGED_IN_SALT',   '9TxaiLqyH<Amq3Iu.iEn$IX.<Xm{BnMf^AB7J^}YUf7IFg^JFQ>30Yz40Bz,RNY0');
define('NONCE_SALT',       'PbAyM3uMX}Uv7Qyr{NJU>,0nzrJUQcok}NFn>QJk|!}kcoFRJ!}>Jgd|Gog!JFR~');

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
define('WP_DEBUG', false);define('WP_ALLOW_MULTISITE', true);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
