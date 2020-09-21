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
define( 'DB_NAME', 'wordpress3' );

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
define( 'AUTH_KEY',         'k9K+1+v8eo;kQj(Z>]+{5YPzAH&,^?]iJlul`Q?:0GO iNj>(|%PrivC (d!7y@i' );
define( 'SECURE_AUTH_KEY',  'xK|~ X=,`{Nm!ZSw X<<#!;8WDL(]op @I/#%zMC>=_uF.[l=fQ%Zg33A$27axl&' );
define( 'LOGGED_IN_KEY',    '&~z=k<?O|l@QMwnJ)f0$MI]0Wz5vPZ[Q>e6*7xLH;PXpM4/6:RZjrdd9=Ofz[Ky<' );
define( 'NONCE_KEY',        'dMUoH#8ob_G+LBg~b@&LcV+d,81BO<w29/edV;K{btO5-d2^Ui9s#j4jUune!n~+' );
define( 'AUTH_SALT',        'H7r!]@1F?y),k-8YwigLiBf2-Sz<JX)Z$n2h9-b32f(K>2)B(NJnL>Tha%8am^qy' );
define( 'SECURE_AUTH_SALT', 'B.mTkiy0/*a8`~};0SUjj?+qX&ZutY48Y12[{9t;7trj&ZQ&!,@&ZSp|mhilLF/)' );
define( 'LOGGED_IN_SALT',   '}&Cg|bxk*9{).xn~E 2|Iw;&vw~2g-mE;SDC]fj.U /XLg%5dixL.Uj=X,+ccpKA' );
define( 'NONCE_SALT',       '4WS1;_V{BF#5Yu)>g%KSz*a2}Ayg!SGJcx`}Q[&PwVcp~h)Huw;!@fTtzFa$8k]y' );

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
