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
define('DB_NAME', 'wp_demo');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '9:diJOB<R)2<n ={m$GOLtNTzv t_5ac81c6)C?r8%>0$pLY@Jy RVfsy$z_NP4l');
define('SECURE_AUTH_KEY',  '3[9[_b[YqRm[}wRxid]%!8_[horR*nsKY:;sS%5P(vaM grY1?9&(m:r.v--=iH(');
define('LOGGED_IN_KEY',    'P$Y%l!!8|}(Ff)`YT,QJ>zvMe]GXhI~>9z!ef66q~,yfRn~!; qr`/w#C+.RinH7');
define('NONCE_KEY',        'h$[1( ~`KoWfON65R~6<-ZY_wl)0qWfIwY9}pspD-[/O,?k>H[4Vi07lXlp<C9=`');
define('AUTH_SALT',        '?ND.x* LtF(=I9Z+2p)u4^hCU7+Zs0C+:hC^>;eNae+4ZkPuR.b[)&d7sgptb$/C');
define('SECURE_AUTH_SALT', 'f-m6BR&sf63cLbuaF;;R3@vdw1C&.n=D&Pf.0<_&~pj@TK.%^4g$0(93l:+:h{Nr');
define('LOGGED_IN_SALT',   '3IGR(-e/c#S+_1Fn_Eit{I*KJ7,[Ve!kIn%c`#w^A#h>TvY[ ~G}}L#^NlDgjv.!');
define('NONCE_SALT',       'Aj|N>vB=i`Vb`dJe^i|m:,B!CTYP8l-`+r@[L=X;eF5lc6)PyY!pcQh+ZE%@SPA/');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

echo abc
