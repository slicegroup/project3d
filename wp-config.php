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
define( 'DB_NAME', 'project3d' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'wzUM61t7XajP/&N|_;*Kw,{s=4m.LmIFiw]<8emPNT<2bE>dEw aMa}QV[AKgvE:' );
define( 'SECURE_AUTH_KEY',  'h9g`^=4ALC*+:~{7(q+~D+2J?bFS9(fZpD% Q=-2Z=#Xf_iOtBQ=UBVF6w^fZaJO' );
define( 'LOGGED_IN_KEY',    'D!v4)Wsz_1#>[n!toS(~}0FY=``2M9Rhv_%a7{_qEsKXm<zk[pH1,ZN9vHAi$;.k' );
define( 'NONCE_KEY',        '^Y%xy3Dz8Y?9?hmj`=pD`8vD~gk])* ]jAn=cL0[1!?R3X>lZ8uyck:={{,(>zf~' );
define( 'AUTH_SALT',        '5.1zJ{I6=@4PPTA6Iyvrm[/Z4n,9[?-kPsIv6>]gCj$!EB)yK)#dS2e:1:;xO}nC' );
define( 'SECURE_AUTH_SALT', '__iQ[M[s.QgAMI!Ilte{XTQ*)u(wom@G[V$qzH#~qZvDdI_:{+f6jI.W{v|4_YMv' );
define( 'LOGGED_IN_SALT',   'Ji9#^kb%R3ydTrWK:l`M`?qF4VU7p#AqmvK| D:r$*FkOr2zw6t|,qWrU:U7^;9S' );
define( 'NONCE_SALT',       'u F2D#iEI2,qa4jH_N5[D2 ,u!Dcw>HJgwYC*yK4!JX+/knjT7?.[qxIv1X]YAv(' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

