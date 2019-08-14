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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:8888' );

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
define( 'AUTH_KEY',         'Y[LR@B6R061oiJ>Lg6EXRk0<)r-hS8`@GO#I:Zh_PeNX}6HR?/y11c`4k9J/#+Y`' );
define( 'SECURE_AUTH_KEY',  'N#@h35<]|q(7o8O/L|KDzco!&JabFpr!Ytub23K_S$QBKa>.*Qgn)BVS1Faq#^=0' );
define( 'LOGGED_IN_KEY',    'RC3Qmm|(L)W?&k~M_-~i4Ch%yOrZ4W/$;>31T$/w&4Z(3Fe8/`-kei},{{Rc{b}(' );
define( 'NONCE_KEY',        '1Ij5 D9puSKOEtDK]ft^WwZ/JxT})s]-SgD9d*}G|n^O}-fi%r`3+ 03RXf4H!.p' );
define( 'AUTH_SALT',        'sXifn;mRx`J[d0#F1DFAkA>Ceun-w94Dq$:%ksGpd, }pL&R?[P.K0;96p9Pnaf/' );
define( 'SECURE_AUTH_SALT', '9wm PZVCQE8+%TAuhyS>^1};@*:v5,fMa>~c&ScQ<[C?y^Ov=F;Qm>con<Uk&hJ[' );
define( 'LOGGED_IN_SALT',   'q-l}nzsxG>nOD[.|$#YSE/uf>QE(^*wUbd+qynt1I,6YAelXkkq&h;ZoHgl%J;Mm' );
define( 'NONCE_SALT',       '#sB~j7iIoG-z4&Z%s>:q,I>K]^9o.`?mGbErX][4=l TS{xT]emgcO}|LRIVyNc-' );

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
