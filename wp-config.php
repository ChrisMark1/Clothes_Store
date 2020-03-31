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
define('DB_NAME', 'jpweb');

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
define('AUTH_KEY',         '%o-DdS5a_61dm)-I_D8#>sD^!_H6tq]O(XxbCWN4&<RczBB@2h.<UY?Q9:3N=+&)');
define('SECURE_AUTH_KEY',  'eFW)#0D:>Yj^?XV{p11BX;dEK%q<.zu@<&JF*y#>bVjZ9O_nXi-0pI{Ykr&;TuuV');
define('LOGGED_IN_KEY',    'CBtxw?QU!bI^Kb#+[P1Ubg<Yk>.q,yM?[jA6{40%^4bNeQpoP#b+=9F&x^y-xl/3');
define('NONCE_KEY',        'ix)):rpnTw.eY!}fsC1BwG<C}a$*}1n*e=$;k1WXYLUFKtM$5U7Yt{<`O(r<3]BB');
define('AUTH_SALT',        'BOLi|C_4L|DY8.a#0T9>hYI0Z^.YUm8}dHZYt3lxwT)RyX,!}bR?[meN(ZH&qK=T');
define('SECURE_AUTH_SALT', 'PFdXc8KF_w=-#B;UWY0%]qS`7:<v(s_=iV4*(7 90QbXp:2[sfr=(Kl;Q45cpk*8');
define('LOGGED_IN_SALT',   'z2@UK4|MW<6;];KLp9saFJvlED1}zJ GP=_66TDFl+f8G%*WR1dXR*.=,^u%Dd.u');
define('NONCE_SALT',       '?sd@#~G:CFwVr:<p;&Gc B]X`-vI1O?AR6d%VkZ784nJ0w-G91rZtGNN%7[(XK@h');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'jp_';

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
