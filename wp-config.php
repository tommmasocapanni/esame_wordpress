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
define( 'DB_NAME', 'esame_wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'WsLu0QrOAAhu8TZ-k@-!-fatGQ)l{=j<y3wRLApIrp%%8?w,srHL&=v5Az<_DPx9' );
define( 'SECURE_AUTH_KEY',  '+I-h4_c8srgCvQ|KO~W{cb@~gEp-N[v,H]p]0vyG2]F}iJO9jjkdP l9G(ui;z?<' );
define( 'LOGGED_IN_KEY',    'p ~|MQx)qDDkF#xs(a7`OcbR5U=U(MxVZy{m%i|u4|ux5DZMO#{{I|<%Kcd5tshC' );
define( 'NONCE_KEY',        'TryIn<KK,huf>f?7}(Uc;v_lf7 u:lm+W+gAA$&0bsICR F)eIi`PXP;i{{/&#Fy' );
define( 'AUTH_SALT',        '78_Ys)JR4|$f|4cv`OjD6qhyznO`fS]7~*F:#5g9d.bvX8iylO$A7C<I_KZG*=`J' );
define( 'SECURE_AUTH_SALT', '`uR]]mtX aS812#fsVz3RQYAObhL0]1FJ<NMm$,}L>?L,_]u{7+NEZLze0m@QTmu' );
define( 'LOGGED_IN_SALT',   'f(z4]0[>Otx77(CQb!SUWK?8_.AnfkOtBN>0u;?fcxr:u@FY51UG}_Sqc#0&fS5]' );
define( 'NONCE_SALT',       's_}Q -O{GL@?P]l$nm X;<wi`qa=yX}zV,OX=X=x+)zE2!b*IP^-a$)@UGvH)<:.' );

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
