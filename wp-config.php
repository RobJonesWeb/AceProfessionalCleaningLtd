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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/home/ace/ace.robjonesweb.co.uk/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', 'ace' );

/** Database username */
define( 'DB_USER', 'forge' );

/** Database password */
define( 'DB_PASSWORD', 'RomeoOscarBravo0527' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'w.b@oG,R}=d)#!*+|HLIjiik]jF]E5l!EJb}Ghx`Vjx%^tFqiq}@oEVQ$b]RSgCq' );
define( 'SECURE_AUTH_KEY',   '8U4Ge@3-%V.*nt,%o?eP9W[#*bn:M8O-UJq3X>){ .+59W<+KS@44&j;wu?tN0kb' );
define( 'LOGGED_IN_KEY',     'oAL=?|zao1*<cGNh@RHTDsRZ=VOnOL5<[zsGzsSJeEh]`!8kIpA `g/OD;F A9Dt' );
define( 'NONCE_KEY',         'Ia:>t!>vm}KR}U{n*l~ykn<anKoVN=@d>&m9c=o hpMoxXXVSFV|r]-qmGp[),Q5' );
define( 'AUTH_SALT',         ' nT=TzB,z}VM64OM HE50Ncug]PyeM780K1Z9sCVW1WBRSo3@[2/0QOgCEmAT_Kw' );
define( 'SECURE_AUTH_SALT',  'w+De5*5)ywF;mDp&F@1EtzSVg_CgJ%/k/#o8D6xbFfJAuc#NQdSvXm!B7V?`7;Tz' );
define( 'LOGGED_IN_SALT',    'H T{}jQj{EOFOkG%-wNa{^zs|S=]hzA1ZYxr1;]sGrtP.}qB-}<0W[D~aZ3o])qi' );
define( 'NONCE_SALT',        '3JZpN]wl u) p^!)^qCI*+|}d/X>:CFNyB.,,_C}5t2asqL*hzJ!xYM.DPMnvJ]u' );
define( 'WP_CACHE_KEY_SALT', 'HW6w3HAC77_R{/XSQr>-[{o[J[3bb1,LDzm4RaPK,7PIB}K#7zmYSeI|lo0^_6([' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
        $debug = $_GET["debug"] === "true";
	define( 'WP_DEBUG', $debug );
	define( 'WP_DEBUG_DISPLAY', $debug );
	define( 'WP_DEBUG_LOG', $debug );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
