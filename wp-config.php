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
define('DB_NAME', 'base');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '!axn-i!+Q{_uqU3l)QJmAMo*d0mqbC|YWt(.|kMo>YM-dmdJYL}_Ry.kT->K`xNB');
define('SECURE_AUTH_KEY',  'E&Pkf%8Yk#Qz68-eLI5Hc[a3y-QIIN*A79|$e1#cJaavn#l=,@8LsW ;Jk~mUumK');
define('LOGGED_IN_KEY',    '|ajZk$u%]~R5$e73+O1#WeqVG1`WamFda,]d5;Tq$-@37{B+D(G/lC6*J9sQFu&V');
define('NONCE_KEY',        'YBJmzb,/b`l!GXt{X7zf6T`s[LT4$yD*M@1%grDIc6EsQ6ws_:dMX`uGX_Y7&~B!');
define('AUTH_SALT',        '2J9y7OCS=&4}a$o1LhQggk.a*V3[VI?XasnJAE[NlDuCc4#}gT3`Qa@wqjVwv8V-');
define('SECURE_AUTH_SALT', 'h*lZ?v91+c|pKtQ==%BBNMHOmR4G$4mc0|?5g)u`233Q>Y?Y4J2q=D+%ek!GB:&K');
define('LOGGED_IN_SALT',   '~)hLpPge{Puir[]R>Eg8(5[rL-0t3dS*BUU1qk/Od@$O4A>&,fX6M/L{X$V;*5}l');
define('NONCE_SALT',       'BAh9E=3iNSFhIfWQ`#}jD]4gOHeSrgT@(,$$B<Qd=~0t.73ndLi4.IUQ4*p8S!O0');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'fp_';

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
