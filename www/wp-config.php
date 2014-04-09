<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'test');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'eyZ[PGm`ro-WQEO~-$L)d!Y4NyzoZR9K*%O0|0>7.C qB2RBwu]SvKVME2o:|@}d');
define('SECURE_AUTH_KEY',  'gLZOvl7YpY,aGU!n)/&,Ppsc1b-Djt!6:41;G6&0DLP{aF?6Rye1I-!5/-0Wg=#.');
define('LOGGED_IN_KEY',    'ct<5G6<#l{csB8I=pHJ<DEBvsY]F;}qlTc[tKd]In(q}yw~FK%yg7~h<Q+n>2l<]');
define('NONCE_KEY',        '-9<zM~ RNX~H%Y4~QiU-w`6uF-Lvk9|gqef8MI-CL9Q:Vif>u^TjCfdK=&w`y7Fk');
define('AUTH_SALT',        '0,Bw7^p4jK%#1:7 y]Ydz9.&A<Wc`[~r9Sb6S$ %p*Xw-Y;=06 eL>W[e~,U;ZA^');
define('SECURE_AUTH_SALT', '(U>74h?|QZdq]Ks2JbaE3;Q--|1_HcxZPtRW+Eu|;c7aq_]zqD?6vV|T~1q1&cLh');
define('LOGGED_IN_SALT',   'e+nm PR*H;jsH4;m`|g+~B4[fP+?cLL!{nUAv-XKt^kd>|+L%TiR$`=qeb5QB(AM');
define('NONCE_SALT',       'BUmjP?:-@7?DF+KnB=-Lfw8FeG6l42t=@P~+sl3S,L% 4@MESh0$@9?q{6;Q${n ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
