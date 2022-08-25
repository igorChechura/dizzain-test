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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dizzain-test' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

/** Database hostname */
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
define( 'AUTH_KEY',         '6~p-yAZFXp=&:j]CP#.j#=A-DYD[EmWdLBr6p6)-9clXPIhLm&]qleO-$_)9?Ii ' );
define( 'SECURE_AUTH_KEY',  '.uII(E/OwMME[),FXts!)2/|0|/F>_!7{wp#hDU^>p,bDP$j02mX]GCQ(d_btMXS' );
define( 'LOGGED_IN_KEY',    'cM5vS#tC{+x[+n[ThpSe}%m`w7j<tagIs`Hn_=4{YM9d(Z?<h;?.c#l@f,%-5qgY' );
define( 'NONCE_KEY',        '!;zlN_K:f3`a+:g[qh1=g&f.umOL@mFQTRcmdc([1e}rRc}JK3)kDlZJoBOLdwk7' );
define( 'AUTH_SALT',        'c-*4hb$,$Eq%%NFbO:5UqjAbR/7zEh?Hu]IB]<y@ZU66iNu/i2|Fk lf8Zk51gQE' );
define( 'SECURE_AUTH_SALT', 'OZhak+-dLdf~5r!nabMV^17tW4`U;}|Nzo)3C,@O[ak59@G@F^AS317K3%#p;76h' );
define( 'LOGGED_IN_SALT',   'h-:^Bza.jA;G^h_^|XP=:qDZ7dK{~3KUDoR>u z)nqid~j+FkH+F*co[@[&6Q`&S' );
define( 'NONCE_SALT',       'FJ1 z!}IU,bL}$C+K+~^X}vA*egas~zu~%do4$FUjFjXO6jNY+x>#0n%-DdAINz/' );

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
