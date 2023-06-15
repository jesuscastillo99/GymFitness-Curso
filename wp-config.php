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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gymfitness' );

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
define( 'AUTH_KEY',         'bCDau5Da]CUW!~g3^wOg59W2@wEvgf`A`km4^J~Up+M/@&!7%f^$e#tk3 4pag@r' );
define( 'SECURE_AUTH_KEY',  ':@y:uA=tBPGe.7GPlATG(;!vY-HgQJ;OC{sW+I)Ft[F@G]h6j!!msFd!DzPS:1p`' );
define( 'LOGGED_IN_KEY',    'FBK+A%q+?Ve%O()Hl]NxC>g,[ZQ3[j;|CduIzj<RT5EcKa>$vFSL$N:r`EoDh!Fe' );
define( 'NONCE_KEY',        '/(9D=vUguL]VbuEe?scj^<e#PTN7ZA:L1s6O/*9U=p:-(~z=Vk<VdBl,T8!2b;4!' );
define( 'AUTH_SALT',        'l}h0wujJ.F.>OS856A94rj>jE[Gd(9>o[k`fhLVKrQM2ng9dk0+(5ba?7[N;eMk,' );
define( 'SECURE_AUTH_SALT', 'NDUFU.+ =r}Ub jknXfVTQ[D^UD{/&<iWSy~=|Bwk`+n:O+}Wsr#t{jFqKMa!}Is' );
define( 'LOGGED_IN_SALT',   '[)mavXn`V*^:7KW$|P}.Y4EaD6M-;fXg;IvSFbeFdnYZ,w&a0uFsAIaXkss?N[rk' );
define( 'NONCE_SALT',       'HTIk(>G_)C^mj<l:Gykj4;hIBtdEVOol(#6=a@G/!Wa?/.!{A^n-pO3=gv81Xk-k' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
