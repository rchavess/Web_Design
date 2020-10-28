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
define( 'AUTH_KEY',         '#fVi$ubLr}-fQF9C`qtBc4x21[mXuNUX(ezolG}e?+mKrrYK bl6o2=HHv7PpsVM' );
define( 'SECURE_AUTH_KEY',  'Rm6e{)~+GkND(llg:7Gx[nE&DCfPGC9/._{%4Vbc1QA;/dA_e|ee`np*6jCEG-ff' );
define( 'LOGGED_IN_KEY',    'RS}#urst/;S1B#7vA{`l;TZ/k#h{!0#-F)nO2M4$Bue-%fR6SoBr8U*2u+D2tj5x' );
define( 'NONCE_KEY',        'T/69X{.JU^IwPY@g#=o?.&s~hMjS1@5 4{uJZeu QP*pI!wZE#*QL@0^Hwl{y$AR' );
define( 'AUTH_SALT',        'ZUnBHy*x=7u0VBcg$F_5azqVDU+M16rk2*>R=IdqWiS#L5o Yx@4HE)y(*|;{jZ9' );
define( 'SECURE_AUTH_SALT', 'vU(:B->P]_AGIDS!Qkd24_ka`Jja >un>wQyrw=9bHQ+.YC%5.l95b#Fe1^<,[w$' );
define( 'LOGGED_IN_SALT',   'BsAJ( 716z?7@Y{d}lyS<O_2`tk.}vV/LCeMH@rAFZ%-gA/):B.@&+38o4IgEwID' );
define( 'NONCE_SALT',       '`yqCw=Onbvna@3Zlb&$r,KNN!V6?- <}+gOuj>|Eq{Kwo2YVkr/doC(5B@bMiHvu' );

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
