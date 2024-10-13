<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_dp' );

/** Database username */
define( 'DB_USER', 'wordpress_user' );

/** Database password */
define( 'DB_PASSWORD', 'sandi_wordpress' );

/** Database hostname */
define( 'DB_HOST', 'mysql-server' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '5%xEC+CM,;y5CCX?$KU>%3?U_ns|sY1eQZkP,ShU$xXuv))QlB4tRcVpi@Ae].Hh' );
define( 'SECURE_AUTH_KEY',  'lhsV1<?+J11XhD4p^J^U.g{,l<*_p_1GH14)LQ1Gk=x5eb#IC&c[2KP4TnFZd[xc' );
define( 'LOGGED_IN_KEY',    '~.hxv3G(#)K/uVX8P)Er?5-w~vV;uUm/eZ[FRm~gZ]xLRO;JFN7Zum~=IE&J^VeM' );
define( 'NONCE_KEY',        'IXM])P!e:-Z}! v095QsmsP[MyJb5PJp!I[Y9K%4].(X<4veEyV%0SQ6F?(a9}ky' );
define( 'AUTH_SALT',        'm{i[>km@@Yn[-7ouBVYE?Gu@8Q/][!^0lXsn1{YmsUMUzk97H,M =kUOdQvbRS&.' );
define( 'SECURE_AUTH_SALT', '|>ri`G1m8`D_KEvk@TS@)g+:`#W(%J%/Xd]_K|.[+; ^rE+6)d]5Ii_nN[r`AMgX' );
define( 'LOGGED_IN_SALT',   'usV}sn~@n{FE_?-%y!=)ig&A5,~a,/plZY5vViRZ;3s,u_p<;WGns?P|ZNvF3uxl' );
define( 'NONCE_SALT',       'B!j@mUT<_e:F5H@8^.{1ovl.7&qQ>,,R6cD:+_Y^iYyzO:&K-,.$od=}thN:#o(C' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */

define( 'WP_REDIS_HOST', 'redis-server' );
define( 'WP_REDIS_PORT', 6379 );
define( 'WP_REDIS_PREFIX', 'dolanan' );
define( 'WP_REDIS_DATABASE', 0 ); // 0-15
define( 'WP_REDIS_TIMEOUT', 1 );
define( 'WP_REDIS_READ_TIMEOUT', 1 );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define('FS_METHOD', 'direct');
