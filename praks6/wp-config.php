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
define('DB_USER', 'wp_user');

/** MySQL database password */
define('DB_PASSWORD', 'qwerty');

/** MySQL hostname */
define('DB_HOST', '10.0.2.6');

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
define('AUTH_KEY',         '@DH`i|`Ss fXOp*BF;i da+hKo`gSuB4`@l+L kVSMv(#4I,N]-@g_]%7MI*I<]r');
define('SECURE_AUTH_KEY',  'IZUjs4V`smuqcV|9{-ZBw=P2zup6w$)t4H8^T3(Rg-e_bQj}ix:b4zHb+jhRa:9|');
define('LOGGED_IN_KEY',    ')q&29HT.U#J/D%mez1bm/?7GN2GaG~h9 w>,4nJ7&[lR35yYZ&u%p,LJxl#Nlq|&');
define('NONCE_KEY',        'oM{P*2+9R}ww;XSj#8Ma2]@?^V-r(5WjhFXX&|4Yov[~wL`wV]jo~l^D4+}gQxxr');
define('AUTH_SALT',        '.p%Rl89Yv5<5O$ [MKfap|HliK9|~a~bfdTHHx2.>0+<i{T_*3^Mu3Ow`i}Lj=BX');
define('SECURE_AUTH_SALT', '6Qoz@A:](i]|;<8:(&wsebG]@1JfLsP )C>H79s@]45,LU(rUE<]p-*;L}<1dA=?');
define('LOGGED_IN_SALT',   '[p5F8KWptW)#e$Z[LO>l9sENq{WFf%?A3E=HBK-mmKACf.+#Gh??333%ecz{_]!&');
define('NONCE_SALT',       '!i/)*{6*0:I5d%O-6AC)gbk*2$mT*y2L)I=%(J,LyHFQV;MqG<FrpswScvqJWk4P');

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
