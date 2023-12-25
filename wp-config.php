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
define( 'DB_NAME', 'mimino' );

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
define( 'AUTH_KEY',         '!u6h3:PaVWD7l-#Rn~DTytu7kB(7a{)sFnwq>YCD7cB}[J,oE3L&w zS)H!0,4WJ' );
define( 'SECURE_AUTH_KEY',  'wINP+|!f39S:%ZNn!m7B0+kW~T^=qqNxU+n6~XK7d393G4M+Md*Gb ;Uk4df1P,H' );
define( 'LOGGED_IN_KEY',    'a$.i[t/QRE5J>IEhHn7W*ACUjJoajZ%p5I`#h/&=P~jMM/a5/>sN8ys3pJR73?=Y' );
define( 'NONCE_KEY',        '=0_$M^2)-p[nkdCIy>DvvRS<K%czu_X65][6^cJlDDx2vPGZd^EGcV}C!, HJA<7' );
define( 'AUTH_SALT',        'emsTz^O*m8cSN7f 7C#Av9j5N%N2Pe&jKlHxL]+z/.3q) @!E9&-6O8`@=2`[;o8' );
define( 'SECURE_AUTH_SALT', 'TBzPV7pvE>h|9vnFwHv^X5=5htMV0R(6y2.|R%})vi0;SW+ogabTn$eJY_D&*&^E' );
define( 'LOGGED_IN_SALT',   'g{?5E[#J%|tcsZ}AK,qrFg~8R2O1P(Es}N}IDEuC|L&@H2+(8EAfIWN$6ug~&8XB' );
define( 'NONCE_SALT',       'EoSx%>$6:`%=V-eGg|&tCN.[pRR6&7ZLU&jf=)Q}YtEOMN3v@2i+$f<_U!y1+)M5' );

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



define( 'DUPLICATOR_AUTH_KEY', 'C@e`j~/9Em$V38w}V/?EwKIUCl_*u#Lml 5/0&X<~;eoVX7TtbPZ(d[wd+5jJIVB' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
