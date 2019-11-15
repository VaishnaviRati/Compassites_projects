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
define('DB_NAME', 'datai');

/** MySQL database username */
define('DB_USER', 'homestead');

/** MySQL database password */
define('DB_PASSWORD', 'secret');

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
define('AUTH_KEY',         ':MMdH8mJFZ3q4/ff %7@?G`2ca[)UJzx9C8!E/qD#Rr8L)tb4ZuU`4,R(_W^aBj8');
define('SECURE_AUTH_KEY',  '1qh^Kz{,cQhy Jyu~Swi!{p[RV,HAi*_{CTG=d[f@NCsgNBp8v}h3w4=}tCmkP~|');
define('LOGGED_IN_KEY',    'qM:u/{2}4Px48VO:>zW}k|&;(g^:__l[ 8b9/LEx+ OhK/I1E)lnpIb^jb7U~Bwb');
define('NONCE_KEY',        ' IAgc9IQ~Fg-xyY|y%6@0R[5-kbdI3V{$,m+*rZ9ybikR@UmLMUKQo)7l}Jmxb`u');
define('AUTH_SALT',        '%|ne/b.-Z=Im*RE)^zAI &`Y4_2+}-KL9,I`+KD%ff b+aQ-fG6OgQ?SZ<9B(h:q');
define('SECURE_AUTH_SALT', '*37pGc!c!hnu+Ntk^fp8n<A1@Bo~bMme<t&/!Ypj8/@OvGWm>#m|!vqWx*9L-ifJ');
define('LOGGED_IN_SALT',   '+)f0a,*<2[t6v^_xH=Gx>GAEc&t_yzb3Pn.(+-W1Dp?D5Rr)rHBHIoEm[HP&W@9R');
define('NONCE_SALT',       'B_-pVoQ{D{b&Dm+iYNs~(YJN|s!vIK}26yo&A<Vf5$#Y.s>OZU~6jg3T?7Bp/NaJ');

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
