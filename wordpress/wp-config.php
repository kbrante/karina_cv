<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'karina_cv');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'karina_cv');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'plop');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '8b}LKA]}u~D<Z!(Ufi_{#i~gdmZDcd6!u)1WWtS8a:rUSg=z[dtX%2t)/)QNl}kH');
define('SECURE_AUTH_KEY',  '9I@c6p/F(`2teHbGzQTT[(~z.E8V(/Kg%gS!b7qr7naB2w%>xy=4 qd?PJ8sjg{;');
define('LOGGED_IN_KEY',    '5,c5EnreOAz[Y[6i>Y+Z./oqagq:VEG*hfnm+P!(?bLx-/J[=*6*e;t{/[c6iY]}');
define('NONCE_KEY',        'oSxt8o022A(v?LWMWmccMjP`!O8adJ6#huX%z0|ThkEm,],cj)9eLAR%Gpf6$L{U');
define('AUTH_SALT',        'PESH-~INja0q>O_uxURO!;wSCFLN,?dBT;F6V_uN4#?mg^JckbZi+,i|k1e(G|Yd');
define('SECURE_AUTH_SALT', '8.3k@z@|+bqDQO7Xm5|$#H$UYJ=SZJ3T:sQIN>P>{TojAx<4WZtK>9O4d(8:D`2c');
define('LOGGED_IN_SALT',   'CxbB--#bS_5n7EFrMV;,PL,?36/vR9c7tda9REOqgYyU[eqDz;BKSy:vq+wM .{t');
define('NONCE_SALT',       '1AV$z[}/shyKahwbFcni$R 6 ivl}0i] {|2FiPGy`U]@Ter5[-aURc[ /;hvybD');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');