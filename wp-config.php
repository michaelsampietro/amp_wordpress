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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'AmW/c1i~Hk3FUza`E`+927|Mja-kT+&w[(H#/>0%OmIpkeiF7.+veL?#r|ELZ$Y[');
define('SECURE_AUTH_KEY',  'k{hUw+g>`J;yR)EfI2|x$[?[VeTcZr?s%upy`(c)yZl/&mV]PlnNu*vLom!`lKL}');
define('LOGGED_IN_KEY',    '.~Q4,O(v,]k^%Fg;X6gy>(de9~+/!rM)PY/M,C.<-pI0hzRg.C#{/Mq-@HFVCYjs');
define('NONCE_KEY',        '?t]s:pS6UI -BQ8JsiE%@,N;#U)LTf_RI@jSv6hinMy*+K%p=uq15*.%k2Gbc$ZA');
define('AUTH_SALT',        '@[y5=1&wmhtqa[A+d+}e=R5RBh[cS^hVSf{Vlqai`]HkJqd~A2fa,oYgp^/Uv)*r');
define('SECURE_AUTH_SALT', 'x=~:!C4sKelcalE_Cc@`U4G8BO[yFmE,P/jAL)4:g2<k[5gH5_ZT&/N2p5N46Q3m');
define('LOGGED_IN_SALT',   'La,).&IiV`u7<P[O|2Q[i5#N/{u/&G4[%lb95#Zf5qA_e#QRs`/lw_?bEx7gyN47');
define('NONCE_SALT',       'OsjkJrR;d5yKLBMW^!,N&!6PTvuOjeZY8R7x 2,8Plm%w@~g9bAr(OzV.iyhy]y9');

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
