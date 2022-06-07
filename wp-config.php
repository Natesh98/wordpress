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
define( 'AUTH_KEY',         'J70{K[t:L^zaaOd)vN!2B|D~{eyS}|(wW}a-OCm-tt6lpeVLf`Hj~g{QnvT$`hsJ' );
define( 'SECURE_AUTH_KEY',  '<pY8YVA bXXt`3::w$!Ux9%m=dtk6(k36wD.M@Em@1n)C5JZda|]S>:vrGe s[3d' );
define( 'LOGGED_IN_KEY',    '~jTpn;(%)D.*F2:)@p,F$0$X~)n uZY>Kb=jHT&AUSDr;!xBUCcou4c^8CccHf]{' );
define( 'NONCE_KEY',        'CZs5q9:C,@[7g/1?K4>V,[~dEDE4?T-iK()m <8cbn |L6I]!UlG-kux<mo-:nh8' );
define( 'AUTH_SALT',        'xQg.z_M]r$PS00Fq)3rn%7!P}0Z9OvD$n|9k1f1-I1SZ~Vj+, j]Nah<Iz;,q;Ie' );
define( 'SECURE_AUTH_SALT', '_14YsISH$b{ZHA:WubmV:}itpJ3Oh~P/iTOHG9}}ChVD6cx5>6^zaO):<`]jbMq4' );
define( 'LOGGED_IN_SALT',   '@9,=Kx7Ir62+imzO Y@f` ;W?a_(RO!!F&B`1v*hVgh@0PR$5`u2[A$@WFH*LWdQ' );
define( 'NONCE_SALT',       '1k1d>Ksa.6#.a$p-Zy6cNXU &;|lG*0E0q5N^Uo&J`UTpzZm Utge&:l3ek4yt6>' );

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
