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
define( 'DB_NAME', '5DBbdsjg');

/** MySQL database username */
define( 'DB_USER', '5DBbdsjg');

/** MySQL database password */
define( 'DB_PASSWORD', 'gu2XPdaojD');

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY', 'G|OhZ[G5oh-OCZ+t#~Sla;#9tl~xHeS#~5ld-pD5OTLia].A2mexLAXP.6;eWtD6T');
define( 'SECURE_AUTH_KEY', 'JR|@4}gYUrk84RJFzr}!YQnkc0>JBhdVskC4RK@-s[!ZRogd0[G8wo|@zNGcZ}|C8');
define( 'LOGGED_IN_KEY', '-teK19_pwalO5D#:-_lSdG;6.mxaHT6D]t*lSaH]5_XiL2A<u+iPbE{2*<uaiP2E]');
define( 'NONCE_KEY', 'zscJ}8sZhOVC|1-hoVdK:8|o-dKR4G[hpWeK19_pwdKS9G[w~ltZGO5~[e6D]2*.x');
define( 'AUTH_SALT', 'c0,rYgNU7,}z^VdK:8!o-dkN4C|0z!oRZFN4@[slsVhKS8!:wdlRZG[1~|oVdKR4!');
define( 'SECURE_AUTH_SALT', 'qE{6*<uXfIP2A.{u+emTbELfnU7F>y^jrUbIQ7^>u$jMUBI{3$UcFR4B,rzgnQ7F');
define( 'LOGGED_IN_SALT', 'k5_ltZhKSO19|:w~-dlOVCK:[1-_owZVdGO_;x~ielOWDL;]1-_lxahKHO1D#:]t-');
define( 'NONCE_SALT', 'i6D#;x*itWe26*{u$fbiLTAI{2;y*iuXebEL;6.{u+xaiLX{3y^jrXfIQMA,{u');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
