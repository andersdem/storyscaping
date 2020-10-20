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

define( 'FS_METHOD', 'direct' );
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'storyscaping' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         ',X88w-K`/_T!q*l9SVM}q9B|:KAP[F+N,S:)2X|j2Wilz}J`8$L96CtnX+c5IHRZ');
define('SECURE_AUTH_KEY',  'p1VJ^}he0e510`1A7XT=7{N~1WIry%8iPwE(K)m=]w&nGiy2BPu/bf_h>^*|f/UZ');
define('LOGGED_IN_KEY',    'Gjd@cvG#Rx+>Qf$iM)kBE?-{%Z+H F|)y@6XH/&OS/Lg^-jL}|EYb 3@9;Sey@-k');
define('NONCE_KEY',        'B_CEj1aX_cQ4Stb(&Cd9&jpQE=?|^n<x;9.wVLfFpOLs&litcc4<+wFM_AxEmy#7');
define('AUTH_SALT',        'r+x1$.4&J [jP1HQeM!ryZaiQHk^0Y8#E84#-$a+NL=vxx:Qea:3X^t;b.+Yk(wH');
define('SECURE_AUTH_SALT', 'BGc`u~&}4YWmo$X;pb^k>Kg{||I]+`s2L@lsy}AT8Rlc9]axU[H0gT$1Edagk&:w');
define('LOGGED_IN_SALT',   '{~d(+P<1-,Z)>K|-(D{+u]-Q}^=#q>Y2z-`+?%.KyeeuRxJEW([MQ[/6i&df/k0k');
define('NONCE_SALT',       'VnXkpZju<nR<QElDqY47[-|8+*WX*u.=~gWAbm5mnPK-1KRIl5<!c_aIXsYO>00C');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'storyscapingwp_';

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
