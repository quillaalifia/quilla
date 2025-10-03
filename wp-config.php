<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '8k::Dd_p=3 DjAZTE@>|Rb[Lx@-?hm9Q<S{|WjWm3U+Aq9!iYsX3u``4+d~61U?D' );
define( 'SECURE_AUTH_KEY',  '?`y;VkI2V[a@LhkSN~2iB4T~w$^MoB{uSNjoU*&%td?bnmZ_mcyTXo|2)o1_&UdG' );
define( 'LOGGED_IN_KEY',    'q8@9 K2.E%8M!#M/4u<uXb7j{84z)@ o|uGfN7[aC%*_W)ZA{RHA$kV<W(bO+O%E' );
define( 'NONCE_KEY',        'c2}QU%{CY%_ $Mi`0hn@Z8]8hyi80 eS1:ztYq S0dz7=Kv#58k4Tx66{fF^uU&w' );
define( 'AUTH_SALT',        'A|1%V@5vw~d%3c<dw&JYDNCea{Llby0YHqzYj -{},r.viA3Ial-w</-ZE~a8N^&' );
define( 'SECURE_AUTH_SALT', 'cZXMRyAD<`n(=3nC,is-24c6D#Z4V4MT` *Icg@PYZiRyxTu.lAKt3pE.Fy~MbUJ' );
define( 'LOGGED_IN_SALT',   'FG7[xO!d|N4 +Bh7vs6l@m2x 9w(:[+oxN;Z:xTSHx&GVeLfoj4&{~</}Vb.}t[}' );
define( 'NONCE_SALT',       'kpQk7y)Jh7H9$QN|COdQ7~zqm>%o=K#1.R=6a&=|!mzT4HIY@Zii~NqWE/n]Oz^w' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
