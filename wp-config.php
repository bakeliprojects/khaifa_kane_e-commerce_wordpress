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
define('DB_NAME', 'wp_mkplace');

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
define('AUTH_KEY',         'sN]!>S&I_4e:!,|w91+}vYsZyC:q?Ay*Xn<J +W{&S3vVN)V{?]2k> KR, D){c5');
define('SECURE_AUTH_KEY',  '_hqVBIEPlw+pD3fCYt2_Du1_#n]W.N7l~u-;`0affn qs0r%M?KuLuG$z~Jhkk@U');
define('LOGGED_IN_KEY',    '7-<o?g=4W^)dD%I6))!S_Ry<M^15VO%3817x!4;J/,r1`#b#mQMFIGT{$SPSEd@{');
define('NONCE_KEY',        'LmP6;=O<iC84Sc$93{Jo/c!YWpHOe5E}mucpSNp=i9z{jXl$t_1`+fEHO|!CdSMN');
define('AUTH_SALT',        'NC~2!yYpvJi2M(vxocJ[70D(?84%z``tKQV/Qn@p1.x&*)j$)mSHec*@Cy&G:vS~');
define('SECURE_AUTH_SALT', 'QJiU)y0_Rks-00}Xrq/y|/9to&-B~;at/tl#Lp1=$&D-6BRZh}fxW v[_X.J|?Y`');
define('LOGGED_IN_SALT',   ']=2F)!?MAuJ}hRS^EB@:1,}m=MQ;Mi}&?4twwAHh,H`P3;)=@9]>~u-mq7*-UK5k');
define('NONCE_SALT',       '*,@/F3:,W26w~cBr2pO0b!~qsPZ!<E+bq!wl9GC*|>du21IK_VBSer:D39T1#fCe');

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
