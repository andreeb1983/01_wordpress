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
define('DB_NAME', '01_wordpress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'n)uSrH7}pQ >DtI1LJr0G<L/Ks}iTs3AAm~[4`MQH+rI{iij~c.N[b0H{Q3|d.DC');
define('SECURE_AUTH_KEY',  '-><y1Hzv&C?)#khyyH=<c>/Gp)ytr&>:p~uPzErq:yO6jMLN]/h}J]MXCHgaQt9t');
define('LOGGED_IN_KEY',    '}{%n|8fjv:8gd}#l@|n^?>*iG5#{UB`&+bv=aU9smc+k*>~/>xBsP,qIVBmDYxtp');
define('NONCE_KEY',        'qw@9TH6Afs9QpF]sQs3%sFbp^kMY~/nxIlWuh7,/?a6Ok6_G1O]b_ag95Q0rbqa^');
define('AUTH_SALT',        'KP|)qi+^ _}enJ8XWJF7_]spvzVqwh@7VbGZEh?jSAVF*/7EIa/~#_UqGsnu6hU&');
define('SECURE_AUTH_SALT', 'XHkEzPE6?]1KGMQm9}qzj8l}8~M3mo8uCtnE|L?RhIE(<H$0tSJ~:@R:k]&aDBz9');
define('LOGGED_IN_SALT',   'j4_e4] ^Wpxu#UZ9W[!p|_uB?d;|+Ac_,.BUMnVh~7x[5/^5(r8knIOw[B<(}wN@');
define('NONCE_SALT',       ';>(7o:1j4)bThZl-B7pubC<AY@Ne.S1UhDp)tx|`~jkV`3FjT51_$WFSs1(K2wx`');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'mp_';

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