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
define('DB_NAME', 'webit');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '`oYJ?N)i@%j(e`as<4OLl1DW68~-T4p$%o(x%#F~<6?YQN/?r4[A=fC.;2{U!Yj#');
define('SECURE_AUTH_KEY',  '&CeyD&b|2|rb}E8kqwvm[muI8?3F]S}ZTz+6{0BX+(iUbfQi%3)V,i8GvbQZ7IFZ');
define('LOGGED_IN_KEY',    'SJ1bl?4wetdF?]sC(aP; (X2W$_3+Mt9nzn$J5.*@ZV$3=TP5$;@c-uc#L4wm7^7');
define('NONCE_KEY',        'b(EXs=F(EvXy=F9NZ:n~?zY(8j}HX]qqam?0nn9l_amBA9>}.t3osW`$y]Br(@Qh');
define('AUTH_SALT',        'D}zG8;+:W^lG8~]&`8eWaj(G+oO3-S8Z^sI&U[$T&Rv<}*f@0vyDQXqh6]~ESnH.');
define('SECURE_AUTH_SALT', '1f|ihXqwp0NDcuO2V7?3e[K@]|ajD?xJPp%,,ZTH4qSSa3Tc}F15puh&),clF/9.');
define('LOGGED_IN_SALT',   'EX=|a|!k*^:x4lPhf{JI]{a-ZKas;TphzHt4.kO?uN^jv1Zgp|pz7}9>z`uG$%#K');
define('NONCE_SALT',       'vMweDX_.;@G^#5?IpR~kS-#]|3(|9=/cufZ6njZ?Y#OU08pwx?{m3ByK2rm]_f~l');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
