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
define('DB_NAME', 'wordpress-base');

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
define('AUTH_KEY',         '+:V+|<&we43GSx8a>)r-+[k84X=)QDp00g#q;2VF:-IkudI+4GL)6RoiiOY+9L>9');
define('SECURE_AUTH_KEY',  '`)s1%%E8|8^nR#+)MQ&-;<BMtc$`[8bc>4-f;bgH/+?!Ru-C.($U4zu_,l6DMX#4');
define('LOGGED_IN_KEY',    'uku`)[x|BwpaMn;w<PJLVlx,06lO!!-tZfh[|.z1-.]X?AK_?Zfl~{}+! -5*1+q');
define('NONCE_KEY',        '1:2 JKav|3lntP@S2nrO|5sHn!=C6ZFZ~>lU5!tx2FP0t0[[F-LT5!=~*MYQ+yW(');
define('AUTH_SALT',        'rc*~@;l@rC>O|1z9de#sM)_8mE]JY{uPMcY|K%>COgUP+N_ 0IdUj-Q|S_%]6g`l');
define('SECURE_AUTH_SALT', 'BLyDVb%R9-/mp|Y`c813o[]_Ck*9SC& VAVa[u+/2Gh<S/~sm%h>^hJoi8lD*ji^');
define('LOGGED_IN_SALT',   '2iZa_EMt(o:2,D~Qg,a{wQI9VOkZNZ,~9!,astmgrnO@QdN|+g~/ZQI:u/=&40p_');
define('NONCE_SALT',       'S-sF+6-JAl:nf5?fy,#+[kB]w u=XQsR!kX<t&]d^.f0zxg-f%qjFozq==E|4d5u');

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
