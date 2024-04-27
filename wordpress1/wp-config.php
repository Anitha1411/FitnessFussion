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
define( 'DB_NAME', 'fitness' );

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
define( 'AUTH_KEY',         'k]31yi}9_4*-ooZQG[%TF]NRRU/q&%2oGSByMiPZ>/F.{X4}rrU?w7mgSk7W:;;i' );
define( 'SECURE_AUTH_KEY',  '+]x #=u<K!(z<iPedQz<(iLqm@;(Gws,nikGvJwCIM#HN=MMp56MpqXD0k@46ZX7' );
define( 'LOGGED_IN_KEY',    '6`FS+-JbGzy*rIY%ZF:@7P[RMoBL@<?.jR&(mp],L@mob*eF^fMy<4x%jd*`w.CN' );
define( 'NONCE_KEY',        ']?qt!0B;PkKk!.-+V<@[]gWFRooPGvTT_iQ3Qf!fnuDx=Pe8!R]A,A];KR9pk~^q' );
define( 'AUTH_SALT',        'm/JZGfBZi/A+DvY2p%z}N[p#=Nud#uXeiNgh/:%k;t,=uh#2_Je]V`kt1ldi!wd,' );
define( 'SECURE_AUTH_SALT', '3Eqj$=gm_HQ%(;Whchh<#e4L;dj ^~}*>:+lU/h`8:_G8 W>~aY[l!4H`vuj[oa.' );
define( 'LOGGED_IN_SALT',   'l=3h[[Y;kN{%+N ];MB]D_t2R/RlutF>x(x9ZKNc cmtZ0jkL}?N3$N,=e4D-@ev' );
define( 'NONCE_SALT',       'nuwL^;!cD2z~L(N60p5d!9MjxG3XvSo@o6]d ^97~0(2U~*AVEAg<|A9`LV&.w-e' );

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
