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
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         'rF3R3vIu(/%]otf?TmJ,v_VAO/Yh.e7-HJ1-XwMDa}m3yL`-aP]HGyFB*(R_VXNT' );
define( 'SECURE_AUTH_KEY',  'pWr0*8~Alj3*UBGYV.c]sELCni(wi`0^!6P$[2N-=&_8D[ZgkAo~11K f$YWgZ[=' );
define( 'LOGGED_IN_KEY',    'b&&BBY>%~HYXvUiNYFdgUA:MavgVwuP`}CC#;LWpMA824V`R;#jEFHZu:DPs:(`?' );
define( 'NONCE_KEY',        'RbBV2!/FyhDd?o 7urgq@0aE+kK~F*LI kuTi1cTurOILb4L=s_<=tU9;jYel9n5' );
define( 'AUTH_SALT',        'm`^u]_t?nHr2d%[].I;sj/`z*fu[UOqkHHRo$5<g*}CaO=Sg~j49wqoiM55<.F5B' );
define( 'SECURE_AUTH_SALT', '^(}Z3(HFZg^~N[@$vu^7gQ-vQI!)c}S~M:yKr}9KNYOf%N78;-FwE1s&[1Jxp^B&' );
define( 'LOGGED_IN_SALT',   'id-kW&lRf!Iu%2Rd1H%Y2V9X;:]:S<nTtb,K/D!# ;wydzH]k4`c6dTQp,8|fMW7' );
define( 'NONCE_SALT',       '%&}TmAg1%u,=;=rw[8+SB_U+8u_cH7~_E2SoUVeU3ZsM[C_Y`6)UR&|[Sr;OdK.(' );

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
