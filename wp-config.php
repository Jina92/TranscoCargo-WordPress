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
define( 'DB_NAME', 'my_dev_wp' );

/** MySQL database username */
define( 'DB_USER', 'dev_wp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'dev_wp' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3308' );

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
define( 'AUTH_KEY',          'oKPh]Bl3w7Y/J-aNd$2.iFDmyqOU][LJTLwNaR7wXJHYs^.?TW[vhjv{c3pG|<KW' );
define( 'SECURE_AUTH_KEY',   '/pZm9=-<MMo%ygzI *>7Z5jYmf{lKb1E?!ay.ZVFDa T.-R47rE#T/4/?.^*AEp%' );
define( 'LOGGED_IN_KEY',     '!c,79<SG095b-)F!z#Y?Q~@5.2bV*)C!?V6(~>E^sSc4@2v-@mSKjD%noOBgKO0{' );
define( 'NONCE_KEY',         'KW:]sS<b|6u_e~G}YeAW,3>~R0&J~_2sLTW /Zu]o~p|e:7R$b{}z%5@%>IHHP!>' );
define( 'AUTH_SALT',         'z4j*8|F*f9N-ERBu9~;#<!*ozrzQMKV`Dp3{QR<^R+o$1I=h~JC667{K7CXK(45P' );
define( 'SECURE_AUTH_SALT',  '/!_w}$2]v~iWF[i3=1`[Hu+iCjMs0Wtt(IgVEVybIqr {3|T?3dx:4!KIxPdWY+D' );
define( 'LOGGED_IN_SALT',    'y{z}e~#bU}sDnVYRW$l}TL( (mEn4>t;i|X89[1iOxrha KYZWl$lp>>3rUSlB4r' );
define( 'NONCE_SALT',        'MKY_zx~R9d.ay/Y49> BeI&!I 7&DC&ce81j|y-SQDP?r!LCPH ~|~&Gug@;fsSy' );
define( 'WP_CACHE_KEY_SALT', '(=6>|CzPwk7bs-%3EakhmS<eDV]tlTK:vJJ-RBW>=`tJ=/kMQAYW!<IVKrEZt(pz' );

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
