<?php
define( 'WP_HOME', 'http://localhost/riverside' );
define( 'WP_SITEURL', 'http://localhost/riverside' );
define( 'UPLOADS', 'uploads' );
define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/storage' );
define( 'WP_CONTENT_URL', WP_SITEURL . '/storage' );

/* WordPress debug mode for developers. */
define( 'WP_DEBUG', false );
define( 'WP_DEBUG_LOG', false );
define( 'WP_DEBUG_DISPLAY', false );
define( 'SCRIPT_DEBUG', false );
define( 'SAVEQUERIES', false );

/* WordPress Cache */
define( 'WP_CACHE', true );


/* Compression */
define( 'COMPRESS_CSS', true );
define( 'COMPRESS_SCRIPTS', true );
define( 'CONCATENATE_SCRIPTS', true );
define( 'ENFORCE_GZIP', true );

/* Updates */
define( 'WP_AUTO_UPDATE_CORE', false );
define( 'DISALLOW_FILE_MODS', true );
define( 'DISALLOW_FILE_EDIT', true );
define( 'FS_CHMOD_DIR', ( 0755 & ~ umask() ) );
define( 'FS_CHMOD_FILE', ( 0644 & ~ umask() ) );
define( 'DISABLE_WP_CRON', true );
define( 'EMPTY_TRASH_DAYS', 30 ); // 30 days

/* Performance */
define( 'WP_POST_REVISIONS', false );

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
define( 'DB_NAME', 'riverside' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', 'utf8mb4_unicode_ci' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY', 'tqW{~/.9,6D6$~A+C I@n,gxE;$lseXxLj ,J{raQ/}c;$k.maxpo!MaeFL1k8q5' );
define( 'SECURE_AUTH_KEY', 'e)N]]7}VZiRAdsoK/`<NnYH?S?>[,h.3e+3T`nm8Pu=fZ$3`fa+K}m#xWCmz<kfN' );
define( 'LOGGED_IN_KEY', 'V0Ry/XsZhlIY!3y*xDgSlT4x;$1q4<xP9vu1Wd[K <~{j0 %+xV3I_@8QJ$t:Zf%' );
define( 'NONCE_KEY', 'nu:wxd;7N&C<mJ`gAQxaRiKv|CVGX.D/Z&rFQI!xFZm#*:SR5fY^LIY^1,|+#V+t' );
define( 'AUTH_SALT', '2SP}{GJ~sWyo*fL9i6tG8m-?`|Q3Z9LmVU4Ge+kdW(`)3> :Zg~oC&o?,j(wQMvE' );
define( 'SECURE_AUTH_SALT', 'C`z+SBX6{:sCptmr8T8PE=:V>N7`cokNQf,r}?ny i!%<@]#~%xTL)bO5SVz.$:#' );
define( 'LOGGED_IN_SALT', '3M_g]nQr4s+e2E/,`sQ3p1oqbUK|OeT:t,]Z}g+[1Ef!Ly(M5P$s&jjnl#mpBzz ' );
define( 'NONCE_SALT', 'H|$1*BnSONIi0=Gdhbgq(2h(rvP?W9BN&_0E.*!<dm`@cUg,)u:NAyQg5[$t@IFB' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wf_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
