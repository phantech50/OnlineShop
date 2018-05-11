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
define('DB_NAME', 'site_yetu');

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
define('AUTH_KEY',         'aP&L[![fUUH8N9%CSlH ).FmG@Ps6CHZUMXnGpq({^]e6CQ<8>3CeHBI?N!3zv}K');
define('SECURE_AUTH_KEY',  'B>k@7SKp[^(aTa43{`Kf6t0XFR)`7>frO[xud+51TN<[p;S|vqc6X&~G{#j&wkfs');
define('LOGGED_IN_KEY',    'R=TNk6+sL5:dc>qmT,A~mGHNSB pITn7!`s7TirT5`m.EDwd@fOhO3N0ks^Z[1(Z');
define('NONCE_KEY',        'daTjZ}-Ocr_ O6?hvWO}qyVW@0Ag|zn?ib.DW$1DA*#KR^S3.?NVabsTG2uOkX+7');
define('AUTH_SALT',        '<J5,RFX}U2>9??6g|s%FYrPS3.5+21H1:&LO]zC O lCSJDA:rf9+cs97Lt$l1fS');
define('SECURE_AUTH_SALT', '<{3PZ#KQa^4T&mg^Ihr60m`psq;xmQz+b(d6=GcEx33>3QA]Q@]7hQ O4@Jhk5y_');
define('LOGGED_IN_SALT',   'NGz}muLx:6AM.AgQ[Fug[z?At2Tx^N`6ohpI`=1~kB;PG..mhpk!J?Sh)!aOIh$2');
define('NONCE_SALT',       '$!*~l$!6;fyTv{a&xK32vA`/JH.shfLK>x0EE(,(x+i89AWjn0oLf|+`It8MkE?L');

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
