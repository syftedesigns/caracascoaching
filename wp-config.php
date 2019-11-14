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
define( 'DB_NAME', 'caracascoaching' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('FORCE_SSL_ADMIN', true);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'C^}.crlInp)4J[sv2b;m}~0&-D&hxy]J[^OT^$yH%Tfl_8[;%ubhrz2EN gY;k#l' );
define( 'SECURE_AUTH_KEY',  '4Ai22@O*?iY!T=&/]G&YZvE,,eVT)a:^YWB%g_j3OI$O5R>%QV-I3GRgSMk_uEWl' );
define( 'LOGGED_IN_KEY',    ' $,x@6z8a!8TUlOx{J-V/TAfY)*$vb$sQKe%,yWIr#t6oKY$k`m$/Z8+)0sX*@h&' );
define( 'NONCE_KEY',        '{k]AyN(S4Ai}_sd-jZj2t4JE6g/z=$<W}7R P*[t2_0yd7^;M ]|Q~>lF-dgMGXa' );
define( 'AUTH_SALT',        '&i 9}ROcOUW+XkRz(q~jVSf:Z._[D[0oc{<:4tk/cqupca9r]C|,Q7FPl3,*E(,g' );
define( 'SECURE_AUTH_SALT', '^E|_.rvuB^$:oOZ[P&J6ZlXpF+-s=Y>q|R,O$Srbl3&,pkKnu-_mpNOC88hL3&F9' );
define( 'LOGGED_IN_SALT',   '/|2Dh,V~shTmbLyA2mz&G-pg]7/tm[osvjHCK$Nr_WgX-E{3:;kccWI85.vo`+,d' );
define( 'NONCE_SALT',       'Pj:6pB?i-Lug{*Pb;Xp5(J?+e:O^}PyAaMZwieq_;[#z ;cw*nUiKtNAVl8b`M$k' );

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
