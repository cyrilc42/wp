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
// Remplissez ci-dessous, les informations de votre base de données
define('DB_NAME', 'nom_table');

/** MySQL database username */
define('DB_USER', 'nom_utilisateur');

/** MySQL database password */
define('DB_PASSWORD', 'password_utilisateur');

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

 // LE SALAGE DES CLÉS EST À FAIRE CI-DESSOUS

 define('AUTH_KEY',         'put your unique phrase here');
 define('SECURE_AUTH_KEY',  'put your unique phrase here');
 define('LOGGED_IN_KEY',    'put your unique phrase here');
 define('NONCE_KEY',        'put your unique phrase here');
 define('AUTH_SALT',        'put your unique phrase here');
 define('SECURE_AUTH_SALT', 'put your unique phrase here');
 define('LOGGED_IN_SALT',   'put your unique phrase here');
 define('NONCE_SALT',       'put your unique phrase here');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/*
 * Configuration par défaut
 */

 // Chemin local du répertoire WP-CONTENT (déplacé et qui se nomme désormais "content")
 define( 'WP_CONTENT_DIR', dirname( ABSPATH ) . '/content' );
 // URL complète du répertoire WP-CONTENT (déplacé)
 define( 'WP_CONTENT_URL', 'url_du_projet/content' ); // /!\ Pensez à bien ajouter à la fin de votre URL le "content/"

 // Déclaration de la langue // Lien pour télécharger les traductions : https://wpcentral.io/internationalization/fr/ ou https://translate.wordpress.org/locale/fr
 define( 'WP_LANG_DIR', WP_CONTENT_DIR . '/languages' );

// On vide la corbeille tous les X jours
define( 'EMPTY_TRASH_DAYS', 10 ); // Tous les 10 jours


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

// Constante qui permet d'activer/désactiver le mode DEBUG
define('WP_DEBUG', true);

// Si le mode DEBUG est activé
if ( WP_DEBUG ) {
  // On active la création du fichier debug.log
  define( 'WP_DEBUG_LOG', true );

  // On active l'affichage des erreurs à l'écran
  define( 'WP_DEBUG_DISPLAY', true );

  // On désactive les révisions
  define( 'WP_POST_REVISIONS', false );

  // On active la possibilité d'installer des thèmes, plugins et langues
  define('DISALLOW_FILE_MODS', false);

  // On désactive le cache
  define( 'WP_CACHE', false );

  // Permet d'installer très simplement thèmes, plugins et langues sans rensigner les ID's FTP sur WP
  define('FS_METHOD', 'direct');
}
// Si le mode DEBUG est désactivé
else {
  // On désactive l'affichage des bogues à l'écran
  define('WP_DEBUG_DISPLAY', false);

  // On désactive la possibilité d'installer des thèmes, plugins et langues
  define('DISALLOW_FILE_MODS', true);

  // Activation des révisions pour un maximum de 5
  define('WP_POST_REVISIONS', 5 );

  // On active le cache
  define('WP_CACHE', true);
}


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
