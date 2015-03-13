<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'juliemac_wordpress');

/** MySQL database username */
define('DB_USER', 'juliemac_wrdprss');

/** MySQL database password */
define('DB_PASSWORD', 'WEFiJ4EAVfrS');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'suHFqfLK^!TGR{7r+~_$|k}jqS~}gpC9`||#|-@_k`XyR{8n~{~Y|/`C@U>7tw/&');
define('SECURE_AUTH_KEY',  '+v}T%|B%x(~0tv]yH|_Q/0)3;7hsen@i>;Unf+KWN-:1!e5>@r2Y$cO_nX-|C3.-');
define('LOGGED_IN_KEY',    'tZoq5z N].VD[7O%jkmrE+JCZ.J?Lqm$lp~bnRi!goE:^3G@X#bxcyd:fz2<Yi?1');
define('NONCE_KEY',        '+qwTN;N=NeqU.l_;$`75;wTZHS|,&xvU:!q#|I9YRDlvL7hZxIN-@QD5IOr58rN/');
define('AUTH_SALT',        '`uWrr`o V)a-(6)(=l~q.kK>Z.!C%KCuN1n>^[=Y[t;,aiA8=sGB.=Cc0aln]bbh');
define('SECURE_AUTH_SALT', 'Vd/rD#8 hNzE9DF4r2#`zjGvM}e09!-7,Onw!xAwB#YbHv*r]w8Shb0-{-#Aqmh@');
define('LOGGED_IN_SALT',   's4w#NHOOKl sVf`;(+evy}rqyShX/]WZ-twH-uj$}8|H+#WujeK|:]n>i2]z?kVg');
define('NONCE_SALT',       'T!4*Wx.kzP^)f@}U?KPbSL]7MVo8~@N-boy<s]n>J:YT}|_)bcWQ0D>@x%&v3NR~');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
