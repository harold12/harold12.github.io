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
define( 'DB_NAME', 'paginadiego' );

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
define( 'AUTH_KEY',         'C?|pg[hK{z$K,*kI;k~ gF+uH4aX_:DK.~U3`e^-a49Bf$c5Gfw^Y($WU(c<w%OR' );
define( 'SECURE_AUTH_KEY',  '`=lyCeDeolVb?YINF,;i?u=%-J^wTtE`=hMR6DEKm >;kGokv0#>yjW^y*X3]HOc' );
define( 'LOGGED_IN_KEY',    'yCisoM(8ZGHsifR)Kef5!vsJh[ QPpT2EDV7PhYq&4NNbA|FW_B{y-_hbd(smNQL' );
define( 'NONCE_KEY',        ':@_gh):~yv#Q~=*qi.(q76|`9w{;0.A|6E*v<`D29:i|8X^Iy4W Prjv3<gp2toR' );
define( 'AUTH_SALT',        'n 7sA1f;s$ShB=j6o)()tVqYjgV,8U}{F Z2E3)Q{S5|%nYLX;bDJ>%+w[yA1V1L' );
define( 'SECURE_AUTH_SALT', 'nQ{_~Ha~%dINS6_@wvO!~}X-}3X80Zqr{AZU$e9WSH$-]I.6[G`o<o@`~8TF dh0' );
define( 'LOGGED_IN_SALT',   'eE8mKo@C-Z/YRqPQi0Mx/wXFq@]YjfC~it8P7=ea5o0waffmKN*)YKYL;[N;s1Vp' );
define( 'NONCE_SALT',       'V6J%TXmjFJ(7KVM!;C#O`Usdd/DNY6Fr%h9()=;a VD{MT7TrP%X) nl52FFXGJ{' );

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
