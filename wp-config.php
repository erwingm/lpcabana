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
define('AUTH_KEY',         '#9wc1ZCu|A<:T`?mtJ0go%Brng~$PX/9p?~}9E36sBwGP4@mB`0yg D{#j*)&sKw');
define('SECURE_AUTH_KEY',  'JzX{97&YCpd:fPu,X2,iWmF>qA^Y{$`TBI6lqOV=NdU!{o8fFsBJx}2Km:}UYlH@');
define('LOGGED_IN_KEY',    ' :+oy/zxG)Ok4v49+d;{2Yn4E8<<`Ct@O$<[^t7QX9^=q>v<F+=]O8S?DSk@;;t4');
define('NONCE_KEY',        'i;{^D-WXI`SOD^*J [4S2mf^D9/(EgB+3{wg|6|u0^QshH,aQk1X<QoSR5B*Q%Y9');
define('AUTH_SALT',        'l;dXzLRc}9NeGHP>q{`S2Bh}.+HaYE)OO{q^:x3`?<*ySbrKRaVJI3Zrfz2~}yLt');
define('SECURE_AUTH_SALT', 'Gl#XgkrqB$fL+.N8^N$1ca/,`CM4`hR&X;dhB(ZWo[uT=(NFa*%gqd.4YIyu(P]k');
define('LOGGED_IN_SALT',   'nV2o;n%<yczWH$OpoF$%SEBF8vxQ}6tTgh1$[(:9W[H43PRzn+$-j%[^#xey8f%9');
define('NONCE_SALT',       '9z@>u~O2Sd/KU@>Zpm4D~(YCe/3,#A>|,$4*F{RDxiUaXtWKS-GOW3S-cc~Jv}u{');

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
