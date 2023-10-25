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
define( 'DB_NAME', 'bd_belajarwoo' );

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
define( 'AUTH_KEY',         '(1KBiU=pAeS8//9iHVeC1lJ96ic0g>^O/;=}K|]kr?KQC;NoRv.hZ76A3yxS2n5|' );
define( 'SECURE_AUTH_KEY',  'oo?arVd4S[.}Vy;MGemZM0!_z^rxS{^Yf7j {NF)/Co5>5_Z{pK(MJQY-Vbb@XsI' );
define( 'LOGGED_IN_KEY',    'sQJ(`D23VaEN/1P:z;E.M`}nE%?.|?R:>KuUd<O=aB:V9P^0T!H|P^|LH%QE0<B:' );
define( 'NONCE_KEY',        'qLJzCmhEB:}sdX]Y*McSm~ +gJ?] =^P_~A0g^x. _8$tD?0U+q(zP4q2:s;4wFC' );
define( 'AUTH_SALT',        'Q18ZcO:UR?jhtT)e*iY:cCqI^tJrWR8/buIbMFJX1Q5~~No N!/4?Vp:8{.oa:=R' );
define( 'SECURE_AUTH_SALT', 'jO?kaN2=c3`Ou@5bU~2LK-y=kFFxcoHE_Bel/(!B5g&!(YiT;jN@KwGD0[vIE<Zi' );
define( 'LOGGED_IN_SALT',   '{0eWWZP^]P&5SZ.E>rf8D}>L<a;OYUV)?Dun_`!u0?{Hhn6J5C{zNj~hC%G)}N>?' );
define( 'NONCE_SALT',       'uYi<]o%sUbe4d [gdIz9fW!w*,Q{-oN@:g)A=+`z|Xh9zcc#{|yu^ #8e3yIIiHW' );

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
