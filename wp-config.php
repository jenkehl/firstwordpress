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
define('DB_NAME', 'jen_wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '0525');

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
define('AUTH_KEY',         'r;.^78!]n:+?cH3Yv8B7w+~jTr!Vcs+-Ld!SXcQRCfC 3s 1&ud{$h{qyNt9f3w|');
define('SECURE_AUTH_KEY',  '5C,Dwi!bXLG?,@`|->+_oN UWc/A>U$tVd|gZ5*Q@nyiky/yLr5P#e#}#C.-lu-m');
define('LOGGED_IN_KEY',    'B88+-WMr0-{c |z}P} 7SBjKKUTX^x!=O$>f]Ez[}%%D{sg:t+ZY?!=E=>b~w FC');
define('NONCE_KEY',        '95>B[*FTp;[ig,mMs=??NOLF{-7uyS*M65dE&Ke*nGU;tH@4O-,r;R`/oG.;|E=q');
define('AUTH_SALT',        '|fAxS/QBSi4i>ti)u:}=,}*P|-Qi2-YBXD4|o`c|,DE82ADekY+T{DlxHDHDFtj&');
define('SECURE_AUTH_SALT', '05`=7H,n$qT4)-u:|Wv)OJU;g4DSIa9.q;ld}o5dOfOru4s~/Pv.-_icuVlQ& H&');
define('LOGGED_IN_SALT',   'FyL(vE-!}m_qjr3qJ$W./~FdbX?&(6],k57.X9q{Z6$.1.M9)#O46HLQ}2Qc:4|@');
define('NONCE_SALT',       'HK)vMo)rd&69_@[i*0%$m<tvd(YB_ c>|Mj1{Xf]{hJJ-JgKS_Ieayo@eqLSu|@U');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
