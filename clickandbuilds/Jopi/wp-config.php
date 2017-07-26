<?php

define('FS_METHOD', 'direct');

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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db689877874' );

/** MySQL database username */
define( 'DB_USER', 'dbo689877874' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wvouVZLvQUqnFvYQQbiv' );

/** MySQL hostname */
define( 'DB_HOST', 'db689877874.db.1and1.com' );

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
define('AUTH_KEY',         'W;A?g7i!e&Ug[}PUN!m?+j#]g:&])O|_N3=%b#CuYZ:{<@|zb}ea6dSyi~P}Rm_m');
define('SECURE_AUTH_KEY',  '@6suf#6ngrQqO%NHPOO5[W^~+G{MA&:Q/+ZT1x5huguy|p~#`HX8.U?6^Ee1%I&y');
define('LOGGED_IN_KEY',    'hJFnL6t9D[*REtf[oPjEi`6=l^gzqMaM+^.}LoI4we~I[ %[N_[4#CawVQZs|4B_');
define('NONCE_KEY',        'V^9.{]5AkI.56T~Otx]]/ &;K5ern<%<a|o0}[_Z$jbx)Yz[B5|],!e&iVvIJdsP');
define('AUTH_SALT',        'eZJY/_yOJ7+8|`QCWok#pC={fFKh6x9:|+q(@|e}TXc-^Weml|l]:o8GEre4},~4');
define('SECURE_AUTH_SALT', '|Rm<wpANre~N7~K&;~`Bz)e3w/<@O[3$yX!vKNM!~O1?0-!{VA~J1XtRx)Hk+[X~');
define('LOGGED_IN_SALT',   '-g*{O8ZzCYgoWcHf,CbI%L0OvL~SHweI9$bw?n+S<lrW@C|[*xEy@|MMj;b+UI*?');
define('NONCE_SALT',       'CHbls)Fl]2#F+l,??CM=X<Jk@hjpz82DwS.bHy2d_ThMM#D[l~Woqxk7$cYj(--+');


/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'qiBzLvyZ';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
