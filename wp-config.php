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
define('DB_NAME', 'wordpress_study');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '1q}tTR:!||[ZhN7A|T@X=FS|y++k=yVRz/#@gTKw+U8/-I%fw,I2gg{:e|4 6EmM');
define('SECURE_AUTH_KEY',  '5h)-__i60fEkNHvt-=O8^Z~GH}l5<<H8xRLY;Xwf8BR97OZP-LSa!d^o-~9cOjM1');
define('LOGGED_IN_KEY',    ',Kf_sle`**LdS}s&OQ0h]-#B6f|bn!*jTy+StLo`n`[w-GBA:`Olvr`9ejWwKhr.');
define('NONCE_KEY',        'Ru ^V=AQR{Dha2knM<ho_!^V/%!IQA)cE%SmEa,fr|R6?#IvRXZ}-oK9N`pREA~D');
define('AUTH_SALT',        '2Cl.3aoeMY:WsS5.8d:qOI-J_P.so(w}BCRbX2}ZI2T13&F-b${B+nQhi,%b|g;>');
define('SECURE_AUTH_SALT', 'Kjf|E)F+rFvP(e[:AdOm.2K?Q+g-g 4U4+o[rpERaVN6eQlR^HYj:b:R2_oueMY9');
define('LOGGED_IN_SALT',   'G>aLiY1*|]zhf#-e; a2qV^OC3;+oE` |g}|CN}3cZ767)o=4*&pbw7b3?b5#PqF');
define('NONCE_SALT',       '-Jw(jVirFt7l{=}[q_w*qgM:YK4rQ6 G+0vqivP`<N[;/|F^QX}Ic,v2exI3B)Hf');

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
