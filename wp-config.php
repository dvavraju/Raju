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
define( 'DB_NAME', 'raju_db' );

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
define( 'AUTH_KEY',         '(]~ZRmld{Ne}4!@1;_TVF.J_m--`C`iw G~{#ZY63N_Yusi5O,<!cR7W#.eRn_qf' );
define( 'SECURE_AUTH_KEY',  'bUN|G0`~>aMi,y]vt6^>,3#PPaFzX( yB5s@S0_l30Dt,D&l8-V$3Z!~m*PK-~ec' );
define( 'LOGGED_IN_KEY',    'Jby1x/NWzJ,r_oFOh{0RY/I#MUmzLtQiw5^fj~7L/q+X#{WBHOqcyxRu0G`-kIjS' );
define( 'NONCE_KEY',        'N0lZ %gQT:o#Y]Z4yrV?mlls)Wj #-$}[>)E}+XM09Fe@^AT 7+Ga/C8{4K=x)M}' );
define( 'AUTH_SALT',        '2+6A|*b:BSQaV!jpf#>Zru&CRAYxvtHaM.5KGO7fEC 754duLRy]CXaF;8!D#9(,' );
define( 'SECURE_AUTH_SALT', ']1gO_t_[&`jQM4zFCFE5nk%l?j)-_!lv/;]yx9~&S^71(1g69.@:J=L $-J/D]nd' );
define( 'LOGGED_IN_SALT',   '`RLmo[=tV}@_3G,kpD[C &@Vt~S5&?7)xA$W(7fy%4l3vH$q}:(;=LT!Ye5e;CTa' );
define( 'NONCE_SALT',       '6-*C4UG1{@5H<}(9980Bz9:GqI*[#a3gW^wavx`h7:PQ+qHg(^W)<_y~&D<d/9V/' );

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
