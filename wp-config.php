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
define( 'DB_NAME', 'wp_fashe2' );

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
define( 'AUTH_KEY',         'cUbr+y>b+%$`LdP]-|aM^!x86GOUxVg6z`KO_o+T{j{}Fc!Hx`!U#4Yxc8m`f`2?' );
define( 'SECURE_AUTH_KEY',  'Tt,P6307Eg2:?blQw*j 84<IarNWF{v!{fo~rq{6RcJyreGmav,wUv$55J=q+.Dw' );
define( 'LOGGED_IN_KEY',    '/kw|Q#)|573)V@v=pkiwaO!p/gYE!AwD1tA@n[HSE)t^R~|m!ai81{IyX&(#5O,_' );
define( 'NONCE_KEY',        '{,Hj[4T)z8K;|T_+j=_QUcYUvZ`t&o T2~sq>u ?8zE]aW=ePzT71KMSEzCHfr[e' );
define( 'AUTH_SALT',        '|1F[2sl84|KJ8{;>,V>F~4x.Ge^hES=U`NN&9ZY1?_Q Z.XMsoxc7qE9;2`8FI|J' );
define( 'SECURE_AUTH_SALT', 'nGW~%X~EKHB%CTNGY44*Cfr-dc9oXW9+2$6b@Y6.Oi@UP!D1Q1f7e?3l?S3FY`S?' );
define( 'LOGGED_IN_SALT',   '?ZzYeplwZ-Z!Z_7v;^9S2Og(Bn_fEgteHYg^Y8IVI@w]Rg#IT9d8:I926]&gF%[#' );
define( 'NONCE_SALT',       '+^?eoV|/HHv2Vy*2O*+K*[lU6l.y;+|f=XKW;A5f>v5eu>=Ch?LZQHQ)P9 e.?$l' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
