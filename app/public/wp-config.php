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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         '0Y0JHJCPhIS5W5mrAM2iC5y0Q4ZAUoycc+O3dHtIJRUO9DreeEGGhN2Pfl3zaYMq6FDW3pFrU9rCeXP+JPuCkQ==');
define('SECURE_AUTH_KEY',  'pRUIfFca7Akw+yHHNaRmuRJXfvzMOEr4Vdq7I6Kztn4LDByw/ccqgdPorK7ireR1IseufaECN59XQmYWRSuN1w==');
define('LOGGED_IN_KEY',    'dXGDtBn2StGAaNFBx/EkYuHYyargXJ4zbOWRx/s8e/jqTyGYjP8quvaGxn4tNugKvUyGyGZvaS38pW1HJ/+yTg==');
define('NONCE_KEY',        'sHwFUNYM7rVDQAPfsBtCPTAMFdefQ0ev/OmIMIj9oTCsFtgzMxRbDf3iO3JE67aurJoJcsMO3Mn/MTrSLYH7Ow==');
define('AUTH_SALT',        'RfMrAvQ1cQMhLKUWRIxXEQ4SN2tEoRq6T8EYdvlBqYjoGWf8a9cuyVoKFLsIapUNkNYVg36yjUfZQy7ENLYIFw==');
define('SECURE_AUTH_SALT', '91g5DxKN1N1qoL+bMewnFoj5akAM9qqh0MTxz1/LhZ+XYua+OAu+3N64cIwyL7WXIf8He1eD3eFRJCWsPhHx2A==');
define('LOGGED_IN_SALT',   '/FVdMo118aGqGojuTdmrSzjjgcytOM9cM70SOjChRitF8WDEoKKZFGpBco7qYlnCNAgdsBGunbi1Qxd0YbSofQ==');
define('NONCE_SALT',       '0G2/72kdAJPmtg4hYNAfqQlocajCxIV6LhhEgZZKN3bUe1UOLlt1UMwtnsRN5vYaxplb8TEe4Ch504PnuMX/1Q==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
