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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'E.fogA:tQj|Xt&&;&Uf!5@aZ2MqKl+u=+7+U?6|UB/|3/-bhe.9oz@e:aZ;vKQ:`');
define('SECURE_AUTH_KEY',  'EM5w3g}2m-N2k0kUls!swi%(974(u4X0#d{Ic){iy6_y1ypi($bRi/DJko}q|OU5');
define('LOGGED_IN_KEY',    '$J1fUNLUzM:yxt-eqj.3|#kTM#Y/>)2#g36g9I=_z1Wbg*eziGt|.VDV,Zu|9m&,');
define('NONCE_KEY',        'k]Gwj({m-,#lyuoGuAbM<+[@DXwWx0q3UOV0u+^Vi9seWg+bWvY&Iin%=WQ|o)&n');
define('AUTH_SALT',        'y1-/JoW+6}0coKVSfM,*dH>`6-h/G=d7OO%]s4I=X2qkH3p*AD:qjf3g$qpl`xIf');
define('SECURE_AUTH_SALT', '&yK4EMMTQ|bpFyw8|IP]73-@C c*B1d^#+/VSExWzsd(]%0x>uh<d+h{)~3~QHx2');
define('LOGGED_IN_SALT',   'QfQC>*~B%Vft,H8=B5oTWXmt!kRA2#O$O@Hb):hBK-*RRI6iqII`c=j-[acZ%4&S');
define('NONCE_SALT',       '>+6meYkT]?G;BQFYI:aJhc2-D37+|k3NS?N25I10-YIvBB%vgtZ_X0Hy|,o<G{h6');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
