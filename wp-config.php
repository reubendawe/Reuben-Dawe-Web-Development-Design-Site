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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         's!Bg!pAOy)*(|TEI4KwEcB49h5,NUr+&UMQ%yFiAdw&>,+]WeM HAjfp4X/0 p[M' );
define( 'SECURE_AUTH_KEY',  'q*Jszw|WeTvxJ?qL[#7LB j^6iJ(OV/!C$/55Q#{S1:BJNVn5fc_X=7I)~f6P1Ir' );
define( 'LOGGED_IN_KEY',    'fKB@54NH|)U,NJ?bo6wt,Q~WO9}QPVzExlI,Fsd|UfA!|`3Aylal]vhNa[U5>)N1' );
define( 'NONCE_KEY',        '2w@)LT#+!:dK@r2}i9K2QC{7>AOr{9e ff~gc]_ALUErA_1/;&(})X<t6yKZXk$*' );
define( 'AUTH_SALT',        '!@B%}|JW@mz;d?hkbsRY+F1To)F!S7.sQ(,Wb(&},{=+Tb*E$P_!7Nql`xh2XT8a' );
define( 'SECURE_AUTH_SALT', 'EC8hU[O s6?RmDrQBZ8/v*Y-[=68N%Y7&{uAUW6oz!L`<fu?hXUlj.kajwYi[Y$]' );
define( 'LOGGED_IN_SALT',   'h`xnLY=JcYEG5jmP)o|:C[8370/qU}i-r`W5f.a`,%KZJSA>BhG| ps-V+CP0x|u' );
define( 'NONCE_SALT',       'PQDRjv53]3K=~wx4%A6H3Bl+Vo=]?41qq_E(g>9RZW|q0qHZ(.mCW8)rGE+|-PD?' );

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
