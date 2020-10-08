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
define( 'DB_NAME', 'divi' );

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
define( 'AUTH_KEY',         '|WiJ@5wi%dTrV$<6_[oZ7V{dkL]8vW8Z8*g`6oCh^Apfdy9x]MRsrfd$Beq3S!x,' );
define( 'SECURE_AUTH_KEY',  'eX297CAV^Ksdr=-tKnP8co-R{QOH_+DZ8X>-$v|ZgS0zR4hmnqS{&^NggJ,LBk6g' );
define( 'LOGGED_IN_KEY',    'MR>be1( O*M[Y)k7[k37m ;n-yg5%hKYP_7xq*X dfY)#eW16EB9};d v8=3>{,Z' );
define( 'NONCE_KEY',        '@D5I5:Tv=0*}/3D*hyOhn.($Fo(w.c!a6bDT^wFeP`_Cp< K2+QYWU(f^okv~tWv' );
define( 'AUTH_SALT',        'HNn6s]^8ZafAt(&04A(w$9^37EtRW#pgj7C&3od1^V~Q9JJkya,r?!{*u3 -T.Qn' );
define( 'SECURE_AUTH_SALT', 'fG6F]xAG*-$.U[#L.Gm]-b}*.hR.pW*Uhd,%rBero2na0t2N;3+ Ur:F*@Yr0S6u' );
define( 'LOGGED_IN_SALT',   '(M .sH%Cuze/k1Yq9x|_*u4XhY](09v_&O^cs&v2kZxP<6*9XP#o-]D2Fn]X0PuB' );
define( 'NONCE_SALT',       'J-:F6T9{6rh)DiO5I@R2,tCvU@>u;)40uQ[;Z>~?yPG8f<Pg0/M#e|Y&+.jvh5=;' );

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
