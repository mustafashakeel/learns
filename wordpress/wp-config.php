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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '}sqhk+bAvE%/O*B6AG(DhnF_v&l<#W_5-.;kXwzUGR&|.S}CdX<QU!LLe&wMt0Ic');
define('SECURE_AUTH_KEY',  'G.A`>RE8Z-H#l6Zt&_Wmp%DmrR+H$ ##Lt[p1gxWwa;;A#k7yg?/P;.wI@RB~zmD');
define('LOGGED_IN_KEY',    'RpT<cou)uGy~pMmpVxJOC{,y`]:2O--j]cr#&huvn6HH_-$pU`E6k)tQ2G$3}s2G');
define('NONCE_KEY',        ';<k$QALx]G(V L{*Z)Y ~/3u~pS),T};.Z^&H3P|9J @I:#xvAO&S(ztHYYRv1#`');
define('AUTH_SALT',        'qCB]5a,7VKZ4P&;*FH@t1[^Sk9HXOTyyT`GsEa 0jkjLkF61TV?XsedUhK|K&V#`');
define('SECURE_AUTH_SALT', '.1u`1*TxE@B,v^OB#4QyC%JaP&^*KZ+_*n:s19wNmu:2*eM~K/^xmYJNh-0`sxxT');
define('LOGGED_IN_SALT',   '*U_DIn[ce52;H4Wo<c3QVuL9u1i$=z}_FokXHNzVU[znY#cTqNpH@3S)w95NWT+c');
define('NONCE_SALT',       'Y!1oPec2->#_P)BAl*?l0CJFNeoI?j1_X;;LKWs/nx_RTEsjT_#}RFbdfP<$Vv%`');

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
