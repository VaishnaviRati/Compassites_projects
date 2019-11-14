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
define('DB_NAME', 'compass-sports');

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
define('AUTH_KEY',         'jXGiiV| -g=CW).jY7X&,{Cr@PbCT%:O32Y(~K[N,j}V3VZ]mUm+3gj4lErP=(:6');
define('SECURE_AUTH_KEY',  '148ORTs-Ii$]27^gMDwR2h;x|$YhD^Y^u2`71kG!6L&<bi7F[Qc/5Vhel%L++:[r');
define('LOGGED_IN_KEY',    'H.vSoqQ:):B!F6}3K&A,Ef?Be;t$T7pcMXdN/5Cc#JU*rw2NFr.70%b$32iJz[z1');
define('NONCE_KEY',        '$*o_?j_(Z0|}b;lg+R~#*8#tIGkkr?3YBPJc)09w_F{R*T]FdU~%P4zB6&slC(yb');
define('AUTH_SALT',        '=YKv%)nP< 2Lm*og/x-L@F9&&ZjFFj22y4$N+pKkyexU>vV{0mUzoZ93(Sl+H(^I');
define('SECURE_AUTH_SALT', 'e{&i]w?`..xR-!ky0E*7se6Yf|C {B.n&mbj,ddgZ;KCj44/u$mt,1KX~@xvuywD');
define('LOGGED_IN_SALT',   '*;xHteI44_qe@dewG`:,T:gQu4D2?L)DU5a[&5s_VG?HYZ3St(MNa(ip,j;%k}ag');
define('NONCE_SALT',       'Zvpe }2Rz6aws!tQS:(BOli5wPBTDR]]8Sp*PDO8XOD|T. :aZYbE:%*dCS2q%<o');

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
