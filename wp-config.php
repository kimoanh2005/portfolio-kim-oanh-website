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
define( 'DB_NAME', 'portfolio_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '4Vq,`/3$[(2<3&(.R11xTSn;u)Z1<ENIldk|hv@JTW-wKiI5IpK06ZpVbWn,[ g*' );
define( 'SECURE_AUTH_KEY',  'h;87B2Vv&l$#]GB|sFrlTfx<n5Ghac;xbO5Q_)h7-Sr/dpnS<B*tzt-tG1@aF]Ku' );
define( 'LOGGED_IN_KEY',    'xu]-O06-z|!bWo{E]^Ym{+Ri:=}S,0QL#n@6.y?k-< RnZ]%on^&kZl~;=s]ii6N' );
define( 'NONCE_KEY',        '[:MP72frQF;-Q}bN2Y_jHtnsOFVjvBY$6uEhkC7Sa2/D!uVoM?S1`eP.&nocSgU6' );
define( 'AUTH_SALT',        '4K<OLJBV[@P3vc0Jc5ky.;%W~O<vl!}.{VgYy|)J5DOd9|Y_B_P:(peG/dh2e!6r' );
define( 'SECURE_AUTH_SALT', 'Uhr,;?=QttYG!W :.AtlO`U#0mGf|thoWf#VrPKWTOHC:q?T`!IR]7T_m0r!ldsw' );
define( 'LOGGED_IN_SALT',   'l=Ci@qHdoE@rK,o0C*q+vDHp1L$SL`f,*u(?Sv@auS65~e~C)ML-%HkC(gz<P*Q2' );
define( 'NONCE_SALT',       '`EbS)QLwK~rorC-JsEwE~JhmkLPx/kK&6 `nn)r7fVjt&y ,u3 ,|e0yCl7]QF!d' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
