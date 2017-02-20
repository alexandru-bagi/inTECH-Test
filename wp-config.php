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
define('DB_NAME', 'intech_wordpress');

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
define('AUTH_KEY',         'mWw4q8+;`AnDN%VSWKe/,iaw[E>hG:M.+_6b/_+5#K]7BTxVe,K;my-K*+&)oX&P');
define('SECURE_AUTH_KEY',  '=wk~mU|R7|VaF4;E{ y/rDJg8Tcv2Kof(OxUDCu9iZZ`L|dHjN$P;3uaG-X:Zf1m');
define('LOGGED_IN_KEY',    '<Cf;bgLW.#=`dK{;|CPg<_^cz&X[I-.?BVKqyVTX&>dE:!YhDZs>7|Ya1Y>P8zNz');
define('NONCE_KEY',        '%?8LE#mplWiQK9KXSeAb6gAw;@48ObeSBPygJL9K mf=J=S}wN<yQ>wedPOQ~ZiZ');
define('AUTH_SALT',        '`kQ45L(+},}gHrZ9UTQM36|;MfA,`B)v$%z*~M!Z}B+fHWNq;S}pF:$Zm%mZ<f21');
define('SECURE_AUTH_SALT', '%Ur%L%nZ3;Qe$eD*a7c s#EXF>)@m]qa&A3ez|p3y`WU4qWh!|6nD +Hvw(!52t`');
define('LOGGED_IN_SALT',   'k}MnaPC{j=$cP60RdO#j?==SmGs{Pm[>2}y[7!K5Yt~<.=adx6>/(aQ0v#U_l)~i');
define('NONCE_SALT',       '))Ic57i}LKoI.NlWiAd%*A-iwKsgjt>MqYjdjT{KvwoBC@dI,=?Z-jI_xV.0Cl}!');

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
