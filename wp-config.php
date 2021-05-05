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
define( 'DB_NAME', 'wordp' );

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
define( 'AUTH_KEY',         '8a.SozE/.-18f.rZf5a#GOwf5ef]H]Y&)o=*y&LwVftp@9R%]LfP<*8u)>i:J1w6' );
define( 'SECURE_AUTH_KEY',  '.n$}&#_Ke5J /H,?~I2@O8d|N`.S@J`_-nMftytk>i>8&d%^4/;8E$Z&:UZZ5<;_' );
define( 'LOGGED_IN_KEY',    '!dtAVQ1Mx>F>(RL8Pwd~#Un,Yms4~ba_=ogG4kXX%5&gJ9XWsj|y>x1K4rW?9G@*' );
define( 'NONCE_KEY',        '$f~6[ypRD[7P=*p`.nT)o!th+BuOlYkeSHq3qA)9|YwkI^^kJK87gZ4=pLyF4<=y' );
define( 'AUTH_SALT',        'kba$9+z$g#ZzFsm[}Qzyr=${-7N7)Xb]CB/:0ml{#FBu$=c0L0Ke,Ao_XV6Pc(_:' );
define( 'SECURE_AUTH_SALT', '^PpvWQoz<b0$T*<V`V28im<McM2DwtHb]{GW{#w6 Zc{#UD>Xt?Q%0F/XX<@juGB' );
define( 'LOGGED_IN_SALT',   '#:?Gk2J#3T7QB$FN?]*r8KYs(1zf|qE=tdx|^TiTmt^qJv~4M7q^_~;[7mf@eQ$K' );
define( 'NONCE_SALT',       'D1X/y>hSTnVT@?-DEzW~sbqew]%b-F_RpC3ds L+pIHBE.<rIur&J.=u]3lcQz>l' );

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
