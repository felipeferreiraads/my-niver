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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'myniver' );

/** MySQL database username */
define( 'DB_USER', 'mobiliza' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mobiliza' );

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
define( 'AUTH_KEY',         'L3o!H*UA2Sq#k}^{o[9(933u#.~o!<M4/L%_K{}uodl:tu*.6pM#^=BJExiYfD c' );
define( 'SECURE_AUTH_KEY',  'u|A)T1n-ADf-ai$YJgN),d+Eb}]|%uk/`|cDeyGp/1hm@?ZMwOb;9V%nzqZ#o5#f' );
define( 'LOGGED_IN_KEY',    '#&ee<qLw/fH+%UG4wmIz,y$0>;2=_kwnEx1>Xb2a:9j!`tt:]Tb,80`cdnzZ{%g:' );
define( 'NONCE_KEY',        ',|S,KBd*-_n%ufwkdH^me5Zm|@<+IP=vR+L5OV<#Fo Si>i*]}Gu`%gK=MBB1s2~' );
define( 'AUTH_SALT',        'NU8]m1+gOgWuNz)q=L~2dkd]x2dQCDz%OU5ixkp5E7+/0wTQ~7eML4Czq>{28`%*' );
define( 'SECURE_AUTH_SALT', '*a&5HRbT x`opfg+beKfM/oQyRhgK~R?M]-L@Ci#<e^vem2<f)(JJit1l-`P-/CN' );
define( 'LOGGED_IN_SALT',   'sxRLL:=UDn|tu=V5b2`8fpDK% [zg.#9)G3d=n@quo}`jn3R>=?N|Seou 21e.A}' );
define( 'NONCE_SALT',       '`ad]|oDlPkhtC)z6:p]T<}[$1.+<*N`x[{g0z:7hbUn?]R{5!*uWCh>X(1nP{RU*' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
