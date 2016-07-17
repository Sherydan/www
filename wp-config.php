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
define('DB_NAME', 'tesis');

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
define('AUTH_KEY',         '^|Ez<[~j(QB-6mD8eEhE2~OD,WJOdeC=m9K5f6)po@>~k:.g(U2]L4x W];(#N6A');
define('SECURE_AUTH_KEY',  '(5tr0]sCW@tC]>dh5:9|Bdj,{kF~$a5f:I6aB[ABt=!=z*-3FB5gn<D-.lYm0fC3');
define('LOGGED_IN_KEY',    ':sFPI)/WO2^,m0=g)c1S=w#&=I!AgkUvW_~5o}r<MEBx%5fsb9GO::ZI!iWid2KK');
define('NONCE_KEY',        '7=jw!3?:_M:WC4fm8r:wH*#$p!Z6<H(v(a|%<_Z6aAqu(ut;,r0XJ!+~)l7K[yz-');
define('AUTH_SALT',        '4Q[$/[n[rjQCVm9RrC-{]I,&gG}/YK|1oyDo8$n0VhOb0-3lDR1ep<Gx3^2tAnJN');
define('SECURE_AUTH_SALT', 'dwmz29$w>}8ncV4Iyk>b]*l(RBF]^[2d-os$HcF$pJjz}(1JAi|*0c#Tq}UIER|8');
define('LOGGED_IN_SALT',   '$PdokP`&Gu$fua7nF/m 2rCX$2es;ovL4za4B)B`3E$wAO@Jqqa;~f^:(7B@AQ~Q');
define('NONCE_SALT',       '3s3mkUJ/M8 !9DD~$3tmdD<v3|c]<9RpQY|V7]i-VL;6mcQ`ZFv[NYj6s0Fz4(eH');

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
