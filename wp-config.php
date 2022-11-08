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
define( 'DB_NAME', 'am_press' );

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
define( 'AUTH_KEY',         'nj&EVcOV06aW{$#.L%1I%#?Ci|KY^%(Tnl_I1xw&7tq`@Tm}S^DOz?;X~v/l|cWo' );
define( 'SECURE_AUTH_KEY',  'sVUOckBrA31LvfnU`/Ef_Cgq3{?i>V_8f^.^=5*z;b_eQZF0<N/_G#I)28L;Arhp' );
define( 'LOGGED_IN_KEY',    'n*#M]*j!dJ*q0Phz5o-n`1mPL}#^eVetYqa&^/[CfiN Uz]m->PUBU^K4F}xOFgc' );
define( 'NONCE_KEY',        '&Devlzy?%f9w5@xH74?-!(&tkiHo|0ZF&Mro+KM[UDi^vKz_<d=)+)#Clo+MG`Wu' );
define( 'AUTH_SALT',        '}+*98Fuv%Tj~,}|y8=bLA*BbFPB93>vgz40Q{Hm6)5^$[M;pKAr<@Ws4$qz?V;vL' );
define( 'SECURE_AUTH_SALT', 'r2r7.j1le~`*nI#RmRzl&QbC#HtG$d]rH+Uv*1q3o^Ju^B$!<MLuDvr!kBr)T}R_' );
define( 'LOGGED_IN_SALT',   'mRv3pcl}YB^!1#O4fvyf$jQ21#^:7kUeDA`1Br~EhSx R!w2%>!e}i{,My,a,0/I' );
define( 'NONCE_SALT',       '725@&K`}eQUUEq!4|y[KwrnyyS}Z5&>tPti`MM6s^8]`{]Yb|s<p{=e1A~`&f;*U' );

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
