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
define( 'DB_NAME', 'edufront' );

/** MySQL database username */
define( 'DB_USER', 'homestead' );

/** MySQL database password */
define( 'DB_PASSWORD', 'secret' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'KRdH7.z.!c?QgqaZ!|q{kW9_N,aN8 EZYAx6Ow75zg<5shd2];WhU,1^g9=%j4=I' );
define( 'SECURE_AUTH_KEY',  'AtJ{x!$ii.${O-)@3Az}j&wPiv;GMM|N=klBtS*&.]Qx?6Zn8}$@,_`Oj<l8Oe*j' );
define( 'LOGGED_IN_KEY',    'inp$tc35xJ**:o<^AV*BAa9M,9}@*Q1&Y)nG,%2v,EA~[4HMi1e#E(Hp!DgfzF7E' );
define( 'NONCE_KEY',        'Or[jLb?2tF5PE2,T&rLPR^+1xEBDBUf#,k6]*4MI#y#$FK;9OXrBy,xJgu(Ty-61' );
define( 'AUTH_SALT',        'm9PaUlTtJ2z`k4<p]TCT&dZUC6,~9xWgM-y=uhvk!{Xs}xzFUh+C$oy/HhvxT_~I' );
define( 'SECURE_AUTH_SALT', 'h>IdixN;z!Uv^GJrDBdc#x|}z+lnqGa ;I%=`cp9.5fr5f]KQGclR@1|O%l/*lXS' );
define( 'LOGGED_IN_SALT',   'LlWmy{82Q@.}vo*UYn/p4Ci!`hBBbPM90}:S tbQCdPp^]6>#3XYDg1mq-5O:whN' );
define( 'NONCE_SALT',       'DC,v/-E$$wl, kN1) C%6C6<n3UNvV{X@7KjH)&fQ!rW,R[B5iV25t_tZq<9~%?-' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

	
define('ALLOW_UNFILTERED_UPLOADS', true);