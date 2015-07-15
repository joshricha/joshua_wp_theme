<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'joshwadb');

/** MySQL database username */
define('DB_USER', 'joshwauser');

/** MySQL database password */
define('DB_PASSWORD', 'Unwelcome1');

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
define('AUTH_KEY',         'S,{s&a*%&y9-vnXUhyMr+g@rnl,iBGn5C33Vcj`7zw5?y~#CH00CD|sjYwb Yl)c');
define('SECURE_AUTH_KEY',  '$lw!SDT<%7:XO6.:n4W5i>#`xrf-X </LnL|]#d)zY+{^:T+[%z~Se;8d=k#7eZ[');
define('LOGGED_IN_KEY',    '8=%g?Yhj%dQRGt#sc)~{ZCsC6kdm{B/CCU!HrQgp-rcpKr_}7|71`1x/txaXCq[a');
define('NONCE_KEY',        'h1[1:+x[T*h3519K.^~||<[Yj)5$8|^elp+`Q4>RL;iL5_s,x*Ocn[1+$JA=q[f{');
define('AUTH_SALT',        'O0zy1y4*-?1Gboqbz<?$>IbY7ytB_|02oP)~I6,~va5&A<PsdlS9h@tweYeeNPY6');
define('SECURE_AUTH_SALT', 'R`fUcK46[(7imKZj4C=I+1I9@vXfC#YU$;+QGYzPJ`51>FdW74alWL?U>D0:}r&^');
define('LOGGED_IN_SALT',   'mRItoup6{i|,]|J+do|Q(US+-9A$|=+PY-yvy.Y[(_ye7=<:Th0|J_=EXs_q1!en');
define('NONCE_SALT',       'QOH#oA`{>v;29:34=jB,;t>$*/?3B|PGG-~gHr=~XGI1H}I2<O-HqK28T-AC4vDc');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_joshwa1';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
