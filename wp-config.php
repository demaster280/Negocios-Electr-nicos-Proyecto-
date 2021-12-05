<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'FarmaciaOasis' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'Mj~^,](xgekN%N,[cF^L_dL f(8jaUD-^kc&2z/Z-EUFO7Z>kLpP[@^p}-P&5~ZT' );
define( 'SECURE_AUTH_KEY',  'zC UA!;LB6-L9|/W_>^_m22@eDG{xH0qp!pZ$O*]&QvrU|V*io6Wd^v64z~gc{$J' );
define( 'LOGGED_IN_KEY',    'iLeQ]Y>nCRi<[uzQi/Kzd]BPW=Tb!/b,BOn!/n= L`5.s=9h@6vY4]2MO*T/e/As' );
define( 'NONCE_KEY',        'V39P2$=57vQ/jMDid,0KTS2foBJb%qIABO#|G<+]q~a#.8UqWCN?5zp;o&H+VkGA' );
define( 'AUTH_SALT',        '&BeJ&d$><E(MGw5^a$X$)#Y|,3>Rs%g(nDx.e+5B94d!bKBKXF}gGeO9Ok#/$-)9' );
define( 'SECURE_AUTH_SALT', 'oA|x@O=0|wV Cq|;q~, hB_S-*o<%I.~=pDk37Lt@Y[q.B/hd+#[MS8)YjfPxN}t' );
define( 'LOGGED_IN_SALT',   'k]> g_(|MZD!GccOD?$AJJ!OXw;e!Zze]XpZ+K0srCn%cGr<+:+>5]6r}vYz.z4$' );
define( 'NONCE_SALT',       '{z<z]@^17_0? {>lVT(7P%[43S7^Uy7:c.Wz#d`aRKGeyQ_:lu&,/w /i3Ubt3ZZ' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
