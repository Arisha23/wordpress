<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'fDKn/(<`i;w|6XLw}j)LH|y3I@3A)eDWHj><yyp<8<%C)}}g;.1df=zQ=jy;q4jn' );
define( 'SECURE_AUTH_KEY',  'Y}8h~{WeeQCezXi|iD2-}9m1=}b{*`|_`mwMcLqXV8jLPC}iTx~=Os-n 9$M  uS' );
define( 'LOGGED_IN_KEY',    'U<ADydP`+6`TKUh{O524.9S+|e=[gGL1bVa:)f_lqrcYl^8D+8i8Ibh:bsroA^ze' );
define( 'NONCE_KEY',        'tn;y+y%DK&;w/x,n^}hNN|*n-9QA;r?vcE](~e~zR$hl.MP%[s`UV&|n!P7fl|x%' );
define( 'AUTH_SALT',        'Ds<Xo/m,H_rwEZ,e.(6y|E&XQaSfn*E_ey~MJD;fB{f%,[/=Lc2W}~C1WT^MCt.e' );
define( 'SECURE_AUTH_SALT', 'jV`C?%E?kv{KrSFjjN]aJ)Zjg,_L|RncK^.*</T+2$vp}onWLkS ,W{`h9$Uw+#w' );
define( 'LOGGED_IN_SALT',   '3zrgvSeZfN;2uPFH[!-~4n5nFR$8k4an`.0(SaYy]?S4#ayonMk#tgY<O`A`0%Vk' );
define( 'NONCE_SALT',       'o<EbmR}g+II(r@9/YqR*_w2tc$1~$PK!rw)CDUv.^PjsV~(0Cjz9OIK,l+YQQ^qR' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
