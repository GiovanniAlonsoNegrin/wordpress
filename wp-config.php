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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_giovanni' );

/** MySQL database username */
define( 'DB_USER', 'giovanni' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Lomo91juan1122' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '.dA&:1RJ^#PX9V19pKrbyu#pC.DRS(<C*YH df?*F.xPT?8Wqg]O#F?X<u]2$U1{' );
define( 'SECURE_AUTH_KEY',   '0a}2=3xsYdhS(dO{iV(2 -wRf.JwNh;<?5kI2U(D(8;`97b|`GSAbJej!mw.p|i*' );
define( 'LOGGED_IN_KEY',     'v+AY?2))I9~?^J^X1h~,2&BnQTN.Qe;Gi3fU-gp@$u.etK/(0ldU-g(w{ i3|Q<n' );
define( 'NONCE_KEY',         '=+8t!hB^= /`127e[]hCAD;d),<j1.$E3;bY=6V[@XU?jt$ay<;(E6/F=[Vn/0/:' );
define( 'AUTH_SALT',         'm^2.5Tj4.V&=Rj4`jV)6yRTE~s~4EXz.1GFV9<[QMPw*+j*Eu.ymF/vMaxiO9}+[' );
define( 'SECURE_AUTH_SALT',  'KRMHm6F9FE~G&vbqPZzSfWn5+9:*2CrUfL:([[flXhWCJY=-2D<l)~1[Q-7[VNH$' );
define( 'LOGGED_IN_SALT',    'Dn21plX/},^-<?F`Ytxx; S?!)(yc$#+2[)O)-h?OEae%=t{BTv-Q,t3QuT!q|CU' );
define( 'NONCE_SALT',        '6i=fH>*V=*GY%>JmvG67q#+ct6wA<(jHKtB7.N_h-AR,sb(h]-UvBzR ]mKMG4qE' );
define( 'WP_CACHE_KEY_SALT', '8lBn3TmocfA1*0u@n-4.fD %~-.!H+R-1u+XFa+oHP9&Lj(:KP1YCyb%(u[!3:|_' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
