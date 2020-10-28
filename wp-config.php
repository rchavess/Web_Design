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
define( 'DB_NAME', 'web_design_db' );

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
define( 'AUTH_KEY',         'q7x;}sU=Y8Q!pz_^e,<<$CwmFuRkxbM,A}LTEg@*E#>T_<mkzAscA,^^J9w%mqu)' );
define( 'SECURE_AUTH_KEY',  'z$x6BNtI8S]2|BJKJ,E6%Cb-hi nXuJ_!Z:Cia(cS~zHERvz<GT2,qRf9G}y)`[Q' );
define( 'LOGGED_IN_KEY',    '<NPyE;k`|7SE=XbrWKiDUR&/U4q!Gozb$`~ep8,`~=m58=r1L|N lJb1a@Oq@1Z!' );
define( 'NONCE_KEY',        '0P(h}Oq}}W=0hJme,J:avnR[lJpfhmsSc*WKDUh}beUnX+$a)NQSL`[B-&~%E[U^' );
define( 'AUTH_SALT',        'Mz(]))S:}#mZ(vjM>VU?|):>Pvmw%@fk1prE~w##(~fzOH/,&h_E9p@h3}fPz`I7' );
define( 'SECURE_AUTH_SALT', 'C>b<@RP((GS$WI(a}O=Q>4lR|qdsi3C{o+NfU[/5sUIk}w*[} l};^<3^o)hhiqX' );
define( 'LOGGED_IN_SALT',   'Q4TNfN:pQMRn!<1b9BqKa3uu,Eu)fS*E:s-!m`li<Z?Mq(|JD!+u,u`z.gOKljpu' );
define( 'NONCE_SALT',       'a [gOXQ>RKR$b,7/Y9|O+#&=) O= fygeSYi_~s bc;]BXJT2}+DaC)9-vck.t_#' );

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
