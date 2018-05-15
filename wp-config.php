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
define('DB_NAME', 'youtubedb');

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
define('AUTH_KEY',         'b[).A%MwFqJUKvD$(Oeuud8Jd|oZ8]ACI(KS--V36Hy.&ylLwU3@f.W|{^TYA1OZ');
define('SECURE_AUTH_KEY',  '5e:wLCkGyJEiY9mTIgRzsfY**Iud3*qWl2+xSS)GTc.~|62*Yerqev3#otGk>PVV');
define('LOGGED_IN_KEY',    ')JSB8mo>t;r:6I!Zf<=aAnMI3%FO_F`(UvrqR@sc1R)KK&.-Hw.=lia7~lkE|iY>');
define('NONCE_KEY',        'm$ppZrjO^^+3zd_~+vZJ.6@s9cP<Z/UqpAnPkT]-FaC&/sr(k@EExFB4,4^6TMB~');
define('AUTH_SALT',        '6iRtHIa#l0MR/FB_fxmAF^rM|am)>x|<10*Cjrr*3:)WEC23U;wvi^@@t sFK%8~');
define('SECURE_AUTH_SALT', 'j=Yu^Z)uT8$(-LIs$.!j bm2Eb=:(P;fK10)3qY<)KtwL.-Tzg$(5OfZ%- a|mf)');
define('LOGGED_IN_SALT',   'N&1FEw6b+9%G-|r6Yh(_2/dVX5IODD9LdHQ5xzFZ#YAeF0~MK]#?vBY1kmcr5:00');
define('NONCE_SALT',       'bN{bC^[T -=`;=kMSn5$cB}}gnapU4H6]!7p;n?6*w<|$F~/@u;~ntHvb4Y1xJ2Q');

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
