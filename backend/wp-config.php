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
define('DB_NAME', 'pedulikasih');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'tl0R6z`E oRCn{Q9H+1OY<FevTpM1|lpqCgZpYLu+s|+X+TJ$-V6Shd8w2$hkR$U');
define('SECURE_AUTH_KEY',  'v{1Ks6`awG`TK]zg+1W$-m]Kn5uez<(#|j=N}5s%6C|9g>wAex?,7s+.C!PY/RvE');
define('LOGGED_IN_KEY',    'N->D=W0VTuWaawtL-VAwuCQULu%,w_&q#z81VakWoSAV-D.^<u{l(0tCXJ#H[3Gu');
define('NONCE_KEY',        'pkNu]@}*~MB*JC4y6b,rrtNKYgb^rC|*.m.{sHRu(@X!?+BxKNf<+TZKtJ0!bF1C');
define('AUTH_SALT',        ']3:,$rx[eQKSvgch$?3k-V)~oT:mS]VKo5:S,T&7Oz?m`kx$8/dckMaUrTU=$G1o');
define('SECURE_AUTH_SALT', 'FilfMdA.rvc q6^s4C-^E<E|ND{/T0u~YBe*4foawP_?c+s}8/,7w[+fyr??ly37');
define('LOGGED_IN_SALT',   'cCU--Tq{I5] 5+2j+pXV/uLwe4Bc&AqP;nZ)#h1)>lOtk/cLxa8/QXIEc6[}oG$t');
define('NONCE_SALT',       'l1Ud^|{-<cP_q:`3$!y=Ndg10AOx?P^S/{ OV]|cOB/<C:eRV0$WHH[Ybm~E Mhq');

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
