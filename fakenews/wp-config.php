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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'fakenews' );

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

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '=],7xi?<d;W,&:UV$RV(4R_Ch%go3aZ%=Ub>(IE8Vo%/YzfvH[Zj|nY D{lA1[pq' );
define( 'SECURE_AUTH_KEY',  'R8M+2Nk+}8~T2`Mj^jUyy>dv1YU1]i%yt/(=sO9o8lD4G|R$^UX2R3%$:oC92e`a' );
define( 'LOGGED_IN_KEY',    'm:4nFZI55cW{V?`U^^*z^9up#7E 5OV+Py0DZ}|JJ7Ru(~[v_Z1AlbAxi+B#$3F2' );
define( 'NONCE_KEY',        'NetL{?^sri!STM;.;!I q9@]XmlT%Fw~buwusu}5vEwT,CHAEkboFNtBXd>iyZfc' );
define( 'AUTH_SALT',        'zWJuY}B@YbyCW+sxV3Dgp(Cir6)N8M&K@4g;UowuB+1^>7!ikl{cqnk]r^z97XOG' );
define( 'SECURE_AUTH_SALT', 'ZU9D${uF5$H]9EbKN2+Z]Vcz% Geq O9A F?nEz5%*U!WZF;w AfPH$&jP~?&-;$' );
define( 'LOGGED_IN_SALT',   'J0hUE8gS+w1+Nx/bnsx{`ne4>es1`iVSPu; u~=q2#/eVSis[9hE:#{ 8.,.xL8@' );
define( 'NONCE_SALT',       'Q]N{^*Bjx#R~|CD{tF[+`UPscT`1`CiPOJRw*5(-E&>|,nN%LIk8EZqsz|7DmA5P' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
