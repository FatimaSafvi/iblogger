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
define( 'DB_NAME', 'iblogger' );

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
define( 'AUTH_KEY',         'xIibD5Vt;50<#icF%fPcvq;HM(~*s7jC]rwnD}&-`tet QL+`U:.8$KMt8IC8gz8' );
define( 'SECURE_AUTH_KEY',  'Fn76n{ua(+X]LH,(pr>~aO(V|o%9<&lcn54.5 Bp/ddWfl>@G6Ek]NI=[yC vIx3' );
define( 'LOGGED_IN_KEY',    'OYk>B[%oY~rTA|8g,gKvb%5D~vY#,zZ^8}0tJpM+G91:PVF:apu#wH6%=m<F~l3c' );
define( 'NONCE_KEY',        'OFhn!l2_U?.,EA;C8i^Qcs0k|=ziCuMY9Ou^#~0]KS(UCpbR#c9fbja8:)6LFs}B' );
define( 'AUTH_SALT',        'Fp;mJdSJN&C_vtNKb/[vv;iGN=8=$RFW<R^c9Y|)v}mjFJOTX}[s`r ;j>M.=8W~' );
define( 'SECURE_AUTH_SALT', 'bWh7{axU5w%)*zhtsMxZi>Nb },}KPs_{&MUK=q`G$COX=@>t?wgheLdkG_CnG:S' );
define( 'LOGGED_IN_SALT',   '}qW5uRD:n!UUA~b_Z?O{9}5(fo#.&x,`n?Lo:YHx_W7FDY!7zIFL!![%v#4|Je0=' );
define( 'NONCE_SALT',       ' _FEyBO#buX!__KV6BxBM^+hs=[F({KPG(!s#|>*It(>[3gU|x4OFwElNGu5yZ9V' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'dnikc_';

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
//Disable File Edits
define('DISALLOW_FILE_EDIT', true);