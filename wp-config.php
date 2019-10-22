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
define( 'DB_NAME', 'sidselsteen_dk' );

/** MySQL database username */
define( 'DB_USER', 'sidselsteen_dk' );

/** MySQL database password */
define( 'DB_PASSWORD', 'sms97832948' );

/** MySQL hostname */
define( 'DB_HOST', 'sidselsteen.dk.mysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '&aS|A.s$PYU50!_(?aldwlLx2J,Sunvp%FA9^r5a^ddrPtrb-:!]9)/QsmKg4^Fi' );
define( 'SECURE_AUTH_KEY',  ',94)a30ZFA6w4IP;-k-w8j$ROey9a$Vf+(EHin1,rwMezH6lV*OxJTy%Xy=#=@EX' );
define( 'LOGGED_IN_KEY',    'hP@O;uJH+R}fHa;9)Vl)RPz*S/a2B*UxW#:7G{hJhoJ~7^2pEd^`5+=%,3 ON*b)' );
define( 'NONCE_KEY',        'Yk[@ecNi|R{Kx8VjmhDf%q/Qh6ObL|=9lHN8@Yh@@EaQ52MR%RILs%m%u@0eSN/M' );
define( 'AUTH_SALT',        'V^Dn,tAL`k%A?oa.8Ip0xA)lroy]T$_Dg49@-!6L6fe|0[EXQ5HWDah/TP`31[ M' );
define( 'SECURE_AUTH_SALT', ',d{F;G$fLI;8P pdX}xZm,LLs.*jan|>!(N}PHl*:M.O>-@Ga,qshlyL/$()? mi' );
define( 'LOGGED_IN_SALT',   'Z8Ey~t&WgV`0udquzOWN#nBpv}YV{.wG%Brmd6fA*p~%[KXn/U[V)o36=+_BN`Ra' );
define( 'NONCE_SALT',       'g]J}W.nhff4+/adp}=M&Tzckd,Syh/?+v]>}Ptuq~8W/@?2ulX=%Wj2L%j1|)Z/2' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'grumswp_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
