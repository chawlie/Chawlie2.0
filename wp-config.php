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
define('DB_NAME', 'chawlieDB8sxxg');

/** MySQL database username */
define('DB_USER', 'chawlieDB8sxxg');

/** MySQL database password */
define('DB_PASSWORD', 'OTZZftqw9K');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'LADO-#~l-p~HWOe#5C[81Co-s_KZt9ORg}80Gs@1dohw8Nv^NgvBNFU@>!o@,brj');
define('SECURE_AUTH_KEY',  'G@|Rk-GRYk0F7Jv,8kzo@FV$<un$EUMY,3>7j{Aiym$ETM3IAQy<]AmxqXmeq6LAP');
define('LOGGED_IN_KEY',    'zQFR@}U^{,brjvBQj,Mb<2{6jym$Ibq7IPe]6;Em+ubqfuAP2Ht~x#tm+DTLX.2');
define('NONCE_KEY',        'kFRz>Co@^cngv7MF}B4Fr!ET${Eq^u,MbUf{Ti;A2Iq*u.qjyAPWi;D2H;<2etix');
define('AUTH_SALT',        'rTe]ET*{_;Ht.#5dtlxDSl1H5Lt_|4h-[RhZl1G5Kw8Nz|@[VkZoVNd|4@}Uk@JUN');
define('SECURE_AUTH_SALT', 'r!vFcNC}N8[@J3j^rfQncN7YJ4,Aq<$nXyjUIfQ^LA{+6<ym.TEbQA{+paLi2_D;');
define('LOGGED_IN_SALT',   '$f^QBQA$7<$n,UEbQB{bL6<I2.*qfPmbM6mWHD;*t]*qe+m6hSH1O9;_9pa+maL5');
define('NONCE_SALT',       '!0kUvgRFrfQB7>y3,vj^6bMAujUE;*+maLiXH2PEu9]~p]+paxH2a-@dSG1,zjgQF');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
