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
define( 'DB_NAME', 'codepress' );

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
define( 'AUTH_KEY',         '.),W1H=aVm-utB_2Ov{o`f#~?erZ/n@X*e$#4u<.uRw9u+stz$PrU(C|{}2N,#l=' );
define( 'SECURE_AUTH_KEY',  ',;Ca!2[*AHG#uN.j+e@E/|bV(-&%Pq$_>bV*[s^v}JG*yD4A3 XfV):GP}>qF{TF' );
define( 'LOGGED_IN_KEY',    'E;ysxXO&EQ>@3IkE~<VqHuC}0vz}i5rRs9)X,%Pdsv{7?1>7E]VMzbFRHRnU`v>/' );
define( 'NONCE_KEY',        '2<OGO}*!yXGZvgm@zP$26%K+t.f]_)r%,&^^71$XbwqCk<u-~iKSl-giH%WH,dW3' );
define( 'AUTH_SALT',        '8MbR?DH,][D|CS]v@OD~jf4Apr^%d9m<25df( M7A;ExN~[1RukBS&ab;ETG^=tA' );
define( 'SECURE_AUTH_SALT', 'T%wHLL%JTj:je{gL|;>8U(c5O~<>dQzL2Ik6DoSAad&34 J9;Yy-.c6lJwXm|H98' );
define( 'LOGGED_IN_SALT',   '.9h$(s.q==%k3H=-hSz7:Q/@R%~xmbE==|ug<.uXxqJE,na3VSB68z9?*m@o0Wm=' );
define( 'NONCE_SALT',       '6WDtER&kog]UQ*TM^lPX:!,bpQ@<)+A:j~B6.jiq1n9$rl.,XQ7.{}R9BOfsTO(0' );

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
