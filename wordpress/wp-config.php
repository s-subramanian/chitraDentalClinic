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
define('DB_NAME', 'chitradentalclinic');

/** MySQL database username */
define('DB_USER', 'chitradentalclinic');

/** MySQL database password */
define('DB_PASSWORD', 'shilpa');

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
define('AUTH_KEY',         '<(M``JcG#f3U6R~kx9mmn,n@O<ZKlr#*/WR :d@MIny(M ! GJ@EiS*+NTo&r0D}');
define('SECURE_AUTH_KEY',  'Jzh1TBas9p,#<+~/CdSczb;QHhdV55`bRgAH2[7}PBDOjtdMe86-OVMh]l]hHK3.');
define('LOGGED_IN_KEY',    '1upb wF)F ~Tm^r`9THKMOVqz([~Xw*aX;<i6x)HB~T7p{s@%%l!~h.Y{6u~PR%$');
define('NONCE_KEY',        'w77O9UL9meH|~C5DHfn/:d0?e^?*>NjpXp^50`(45[{vodKKr&l3@IUu<[Y!ai3s');
define('AUTH_SALT',        ')yh@/+AI<_YB4n{0Y7eKWL!;!t(cd(Z22lj`*pH1cUaT@sO.1A5l5s-2M&2@~06X');
define('SECURE_AUTH_SALT', ':>LpgdPZ*/@Imp@my4U$V=zGSPPiR]WfDfwe3AG[j;tN_`1cy}RZiH_s-:|(EYQ:');
define('LOGGED_IN_SALT',   '>v!aQm6M!N~G@.NDXj$CqkA(Q!jI4 Vmz(kb:Y^[Qdu7!yAI3h8;d!xk Ph6!R3!');
define('NONCE_SALT',       '9%Cx<rXgiq_@]q*7o9-8Z>DyNjEA3./(^cVL=615x1)k&Y(}!I@:mP&,.G>5$i{1');

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


