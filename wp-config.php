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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'accorian' );

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
define( 'AUTH_KEY',         ':>=Mpq [myUo4xrap:Wwv9R fcWsP~?Dc6~;})^DME=Ft15w~G4hG@0.p!`DLQ8!' );
define( 'SECURE_AUTH_KEY',  '?_I*anpTNd?rJPK.Ygf/YvC<vzien0T-LJ@EY Ib)F)x_ QBN7 lFAXXbE%iR`rE' );
define( 'LOGGED_IN_KEY',    'Eha&dIqCEg-WBgiMR7H~XkDFyq<WDkV5O`%$}ydt=KTt|xhEH;K)c@GLg<S-RI-+' );
define( 'NONCE_KEY',        'MV$oxuc=Q@G1L&)S{N<M{.8+,?@k!tc71J]n`RI(t=011xp1k>~Up~eF4efi1F0C' );
define( 'AUTH_SALT',        'NP7^W|`EI#q/^VgS5Si6>:JWK-e;du(`kH[)6}j(z7CfejMY,9i_q&!Ic[Q-q 7b' );
define( 'SECURE_AUTH_SALT', '.?&S)-8MtWdhsVY^QDaDT):!SnNb5)@;^EKqX=q}c8sk=-AZ.M.}0n&?i.?gp:T8' );
define( 'LOGGED_IN_SALT',   'O*^y`1Uw$O^inN0*fvyG_i30+z;-jd7f/af*{~As4I_nPXH q2+y%pKgyW(4<GLU' );
define( 'NONCE_SALT',       '3q4G11Q&~uPEH;.{,9iw=>7{#<TG;<XjW@^{5ujcvr]A$IT,XzptB8`?V!r+mZGg' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
