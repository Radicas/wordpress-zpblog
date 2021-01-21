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
define( 'DB_NAME', 'appdb' );

/** MySQL database username */
define( 'DB_USER', 'appdb_user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'gryilmmXt1lzkucp7uXn' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'Z+e0q=86U0N:}4&F?LJ9A1EgTe(ne1&dA)Pl=ZkbCHsA;)?`0(WZLU~Hm*;|2(`#' );
define( 'SECURE_AUTH_KEY',   'qY!W}L69]fS nX~Dnkqf_1iA}lL@y!DVY7~&EtTK b8zrLWXa9)mlWYIILDP=vOQ' );
define( 'LOGGED_IN_KEY',     'sVh)1+lXP#m}@zR$]AyVN2-YoYu/1-3*,pk2L0.Yg?n/U:en4ISO7md,-d{2tV.k' );
define( 'NONCE_KEY',         ' zA~I4i({I|PZ@^R#O8/Pzon@V^ZI%%@0kZ>paUhl#H5o6-OzjS5ZWW,#Ig(ucUe' );
define( 'AUTH_SALT',         '}z+|+D)ilG{R%W{3wj!jW2m_?&g_l[DKTM_[|e04LF+BV6?ga0%v3l1mnS|=FDPH' );
define( 'SECURE_AUTH_SALT',  'O<O~Z_IUZuh#l+hzc^d}z_O%`wuD!=WM8T3h{k/<nz(u40bRN#m/=lVZ3aa[PGt7' );
define( 'LOGGED_IN_SALT',    '~7vx]UGK/; C.y:BYqWXl%;_I 65+-%<X,*WxI_-H{DshiL)6dPJJu|!B=%ug0/E' );
define( 'NONCE_SALT',        'FO#yvVGMJ#Y7<FDFeup2ejm68@Hov2lZpYmSk3oVw }Aun[`Kxz*{.HBM<r^0;k6' );
define( 'WP_CACHE_KEY_SALT', '=FyQK3i}G$uBh#?Yx4}hhTgTTeRi6!:X(u<]1I3g}iq$%>,@>1&;pL&TU;t/LxaJ' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
/*
define('WP_HOME','http://23.254.142.59');
define('WP_SITEURL','http://23.254.142.59');
 */

