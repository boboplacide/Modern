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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'kap' );

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
define( 'AUTH_KEY',         '5=5rmi$|iBEdJoO0Dq3(hNYo46@O+_g<#fdMpBBhMsg,;gXNeT):GTsDzNL<csQH' );
define( 'SECURE_AUTH_KEY',  '-[2A@)?6nr.2K(nU]c2;>uG<wNAhhx]RYMHUZKNMmM^K!k@w}D2]bB|Z0^IGr[5k' );
define( 'LOGGED_IN_KEY',    '}m~DqA.BhD1pJ8rV`j;t/Fq]d)V&^0+P5RhW@:L^TNk:wca2%yc1oVpyMDh>= _v' );
define( 'NONCE_KEY',        'k+$;&o)r;9b{>}RwB^Fd-c7O1R&/#WR(v*2%3hFMQ<R3<)knUub]FLwVz28s#SMP' );
define( 'AUTH_SALT',        'SB(RpMx6DPH<sl%Sa@edyk&z`DUpy?D(i<X@|q5G^ ]WY`x$+NSS`41.M_*OW?!^' );
define( 'SECURE_AUTH_SALT', 'd;`58]OWh27hgbmY>OfAq>!gA7T?bZ7Ml/58REV4N.P;hzN{0sJjeHQa6[H)&7<;' );
define( 'LOGGED_IN_SALT',   'P_8<xn8fp [HwAAG$pqUZI$(Ph1mnfu{MbFNr7tP3c2)$opQOFxz!Gma`Z!ZkM9R' );
define( 'NONCE_SALT',       '0jiQc($aPNVu#zQ,=kpvrx?xo&Kt3BtC|v!)#8]#b$Ff;3HBwRh{2V7W{:8mY>,3' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
