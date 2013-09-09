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
define('DB_NAME', 'nrifmdb');

/** MySQL database username */
define('DB_USER', 'nrifmdb');

/** MySQL database password */
define('DB_PASSWORD', 'Nridb89!fm3e');

/** MySQL hostname */
define('DB_HOST', 'nrifmdb.db.10749456.hostedresource.com');

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
define('AUTH_KEY',         'r<yN}|f#Z8SBCmMWh0xcTM]8^:uW(~.!nU>Z11!p b>&T]>W#<JXv8Sr}q]bct~d');
define('SECURE_AUTH_KEY',  'An<mfa=>^<t*C~fo]CebJtut#tPSX%}Af2/SoA>BJ1V1a:dXe<r:_$s*Ul!1Q(*P');
define('LOGGED_IN_KEY',    'B!kKOM,C(-pM^lkq*uK!$Xe>lQN~eHFF&Ws49FWV}kblI)Y!Lgjcs9)?C@F.*z0/');
define('NONCE_KEY',        '+2mfNC[a;4#p|=d dsY#g6KL~RwEYE;b>qfm?rJ<Ij3!| D;eE5SIP8/v#4K@,y_');
define('AUTH_SALT',        'o,;OUT(o3?g/p=Jxq{SlU5J(lp,;FekO^M_hy9MuFDPi;7xL@=aWe:@oW+<C43AC');
define('SECURE_AUTH_SALT', '</,~E01mYydh1)G~DPYa,T%f7ffmK>Z<?gVJ]g?Z[vf_GLG@P4:?P1%jsesz@rb,');
define('LOGGED_IN_SALT',   'Zk*<L67zOIs/=&V}=r2nZ6)@Gs:WMnC$_b<<m|RKNhJCKqX(WH^AXF#Qi}WyZL2(');
define('NONCE_SALT',       'bw!sX]wvQ_Rcy_Me*6`y1X0ro(3D#ZcPp&K_q><$qfdmi/9; HdBT@HU(UO8H^S*');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'tbl_';

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
