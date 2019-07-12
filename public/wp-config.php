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
define('DB_NAME', 'database_name_here');

/** MySQL database username */
define('DB_USER', 'username_here');

/** MySQL database password */
define('DB_PASSWORD', 'password_here');

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
define('AUTH_KEY',         'W|P}pKQf4+2kEIpac zl0O|{[:qILxePkJES^kwM?~thK5-j^n+<XUq9M& Vb:W=');
define('SECURE_AUTH_KEY',  ']vP_-uYyR?2K@[?n?OmCbS1UYTf-gKG.6WLw[%{~%X>yeH?6b,Yj? )921,DjcQB');
define('LOGGED_IN_KEY',    'UBhxaz7[UP<>$Y2?qPE+OdfeT,jK@@[# ,xfm^gJ8qQUixO4V|NW1[:08j):HIn5');
define('NONCE_KEY',        'VY/b_B251/wk16Mhcb,<$AFW/wLX=bDKIXo*O`j{cMlDr~RP-3mEwn$F3mtz/IGL');
define('AUTH_SALT',        '$|CO6Gi,DKbJ-_D>kG=m/Fp@HE%2paRhxW~QjusUR!)8!-1E#tblc-)Lde]0$u%+');
define('SECURE_AUTH_SALT', 'SrvDkhm^8fOb]#D3I>EsP6}QaZsYGI.%Ln_cmDLSnTAK|]I^gEUC<[#oUqsyU~YM');
define('LOGGED_IN_SALT',   'e79M%k6vAC+:R<C//%GHtK=H1`^6+NE6t,L/e%k$E+{pFDS:tPB[f{ks[d6s.?0>');
define('NONCE_SALT',       'TpeS4+>KZGjUi#CrZy~0m{#ulcHTaT<A:396++E|*-bM{7BOcffH-]^v5F}(l9v>');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';


define('WP_CONTENT_DIR', __DIR__ . '/wp-content');
define('WP_CONTENT_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/wp-content');
define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . '/wp');
define('WP_HOME', 'http://' . $_SERVER['SERVER_NAME']);


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
