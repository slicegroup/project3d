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
define( 'FS_METHOD', 'direct' );
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
define( 'AUTH_KEY',         '9Q~W6m{.Y(+uld63sNL%U;EhhdY:PlaUI65it:3)}}q70atVHDcy%.vC1,Q5$6Gw' );
define( 'SECURE_AUTH_KEY',  'X:x[ZS}_Z0hveHI>.zksRXT{!Y(OPcik0)KCT)vryNaYuYaa)SWLIhn@O&gmIvxD' );
define( 'LOGGED_IN_KEY',    '[2eZ%3Z*Tl/)QG1wegPZ3niC|hf4awNR&b$n$h)gbS-i<b75`&9$9G_e6ZbzK89T' );
define( 'NONCE_KEY',        '$n.n+Yl8AM8IGpBV^v~%Y}MWs(F$c~RyOay~J_8(_q:b4ESG;^Evm5zv3? ^x.D.' );
define( 'AUTH_SALT',        '/r-oUrW?E,Pu/br$Sw-[!>sdaCD2*0-e5.u?:n<:@L7_5c%}9pIyI,o<!KQ6_YEe' );
define( 'SECURE_AUTH_SALT', '>Vc/=@qcxbn&GB3cxClcu/[xj%~.F4~B;a[WW#P1*Y4}-y[T[y{g{I=o*&Z1=ybO' );
define( 'LOGGED_IN_SALT',   '5d3#K#hRSqnzG~Ip}@LXz&)PFRun%9(uHK`!5f^ 2<|nu$kw&:AaT%&X-8~6_oR4' );
define( 'NONCE_SALT',       '@1!6[ykVB]Ec4`1+M18fog~}J/O:]6t%J^<wy#DVyv-&;0efc_k6 u`s7rT(A{38' );

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
