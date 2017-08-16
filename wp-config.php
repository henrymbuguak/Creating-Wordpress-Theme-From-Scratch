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
define('DB_NAME', 'wordpress_theme');

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
define('AUTH_KEY',         'e2^gj=G%m7Bl).p<TOW#?dNOB&~H U<]8&;(zm+.iRu&8 Xu.CO3=e]~| qC)?C%');
define('SECURE_AUTH_KEY',  'l*r84u1YLys_%P.{|-22v60W9*>]V;YI5l)UHOv.</-/_7-~ -(Cz1k9TkH2N1KN');
define('LOGGED_IN_KEY',    '2Vc;9Y2Y|vg>=)&!]i@Ss7LYqWK6Xmvq6OdYh`qK~vDG^7=%:Jqvh;r{`e0|M7JZ');
define('NONCE_KEY',        '-T.o-6HAPf8la0UgWv`ydr~F5pV_Dl]NXsm3<gnGZ>pOO!)DLrP*(QnMI+H>(>=0');
define('AUTH_SALT',        'dbSWYN84}a|yM::1M+|-9r0<W 9iyaOWA4HM5eWCzeH} @i{A!kd>&lp_D2z7B*l');
define('SECURE_AUTH_SALT', 'UbE3^(180rO2L8_H#~M}nQ3K 5)f8tL1<;{ xx=l$fjk@,;<z]cb&gH(/bOgFheK');
define('LOGGED_IN_SALT',   '-ID6L|uF+yC^zd{ZnyKxA]cz>CFSyiVg9]y}uR%N} ;a3<o:rPC#t]WwF8kn|J:i');
define('NONCE_SALT',       '=eq75^;+>U.3t[i9T=m.j}OaVABspWz}QxNX(7@gI&:ydbVNv3,vx%F Z/3Hr|1:');

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
