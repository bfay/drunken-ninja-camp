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
define('DB_NAME', 'rockinDBa4x1i');

/** MySQL database username */
define('DB_USER', 'rockinDBa4x1i');

/** MySQL database password */
define('DB_PASSWORD', 'BxjA72ojga');

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
define('AUTH_KEY',         'f.m${6r^}BQBQcFQfr^fu^B;DTeDTet*it_2x_2DS.2ETfITiuTiu.2x<2HVhw_');
define('SECURE_AUTH_KEY',  '[K[4CJVdoJRckw@ry^{3EM{3BMUfnITbnu$bju$<Anv^>3B^>0BJUc7IQcjv$bjr');
define('LOGGED_IN_KEY',    'QnzYjrz,}7y,{3FMU3BIQbjWemx*]2t*#;AHP;6DPWepLSelt*#Xfmy*{my*<2AI<');
define('NONCE_KEY',        'D2DLWeDLWepxhs[4CKVd8JRZks-Zgsz!:Zht-_:5-_[5CKW18GSZhsOVhow_[3FMU');
define('AUTH_SALT',        'kjv^>3B^>3FMU3BIUbjvQbju$<gnv!>4v^>4BJU0BJQckJQYjr$,;AHTbmuTaiu+');
define('SECURE_AUTH_SALT', '#H4CNVgoNVgow![ov![4CJ>08JRY[1CKSdlKRZls~|ks~|18-|:8GRZ^{7EMX3AMT');
define('LOGGED_IN_SALT',   'I7IQbjvQbju$>Ucov!>4v@>0BJ>07JQYkFQYgrz,;AHTbmHPaiu+<iq+.;6+.;6DP');
define('NONCE_SALT',       'Klx~PXiq+.;q+.;6D.]6DLWeDLWemx*s-|:8G!:4GNZhGNVgowVcow![4hp-_:5D_');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
