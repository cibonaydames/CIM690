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
define('DB_NAME', 'cibonaydames.com');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'cdames92');

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
define('AUTH_KEY',         'm{`Snh!X%vD|H(*R Cvl*G.ix+WXU<zs}yG{9>lLmahu$at? Cgg7F>&fh3;&s3,');
define('SECURE_AUTH_KEY',  'JAJh/$%0@_#[1Z!=MLR}z=y.vwD .Ra<87Jd]eR+(N&e8fHd=Ts^=K81_5>?#IFz');
define('LOGGED_IN_KEY',    'qg|^Y^x!Wj}~duy,LaBrtgr4{t-Pq:Z/9])|TQa(qQR=l%M6^olxZh#;rA&J;NZ0');
define('NONCE_KEY',        '=l=3(hkP}~jOHf4AAsuv_9lUZl ^0GK%u%C%xxCn+n2t?USHa|PB+ *yzzx]U%p-');
define('AUTH_SALT',        'x|Fv<Q(}b{1P6-XbL*_tE&FxdrTIeV01T>qZQ4,C;ZUV-WN!s~U@&`Q,)ev+/c4#');
define('SECURE_AUTH_SALT', 'd*-/+I7Hc?S?X)%=b*lP0YqhP?6cW++t,ha|3]-JLC-1w=tkMCcz>j_=CVP|&?~_');
define('LOGGED_IN_SALT',   '9.m1;!p941U=]VqgJe=`Uk-f8qUYkp5%/t^S,6Wi_L+TM;r1i,=wICjS)MRiRqt3');
define('NONCE_SALT',       ' /;(m(#rC$+wnjYNk#{fRbeVN+I}o{CmFg=BKvu;KN|YY0Za*b/A|MyxxWuR-C7Q');

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
