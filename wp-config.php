<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'sendigitou' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'jP>6IZQ+f+*d1fF7ZdJ1W5Y3E&.klsL[`EYSihQLafCZdra`_Dk7Nt6kFx)5:Y)f' );
define( 'SECURE_AUTH_KEY',  ']Fs=LF+T.(> ~<,k1[Q7Pn`3fN(lkNYl!)X#SK{no>T`UjdF`8w!4KnVK?=,o%uO' );
define( 'LOGGED_IN_KEY',    'X]XhA8jx wXlIjTyh)~pS~GdyiPSS!dW.DZw/!DR$*g.G38U7m=?{h85Fl:wkg~m' );
define( 'NONCE_KEY',        '=2N][}:lZ[qE@=S~ {L0qavHGetKkCKPD@`_c};gan b5YJ))-Ns]Bc)`fe+RdzL' );
define( 'AUTH_SALT',        'vEI=LWsHopS:;%mm p!Sq?pB 5i0-x-=Wl~5Z(=$cGln,W:e;@@32[k^/tDzCQ2#' );
define( 'SECURE_AUTH_SALT', 'M:MG@Y}f!Dvm}Lkvk%=SD;U&SiU=GF,%4*!Uf#4J$`<i0T{0lE|n]<M+>Y*0T`!{' );
define( 'LOGGED_IN_SALT',   '~.=b >&uVqFKE]2*gZ,9IULo^/PF?^O$(`VoPn]=FYV/ociR_$GA8|Xabs2bLO^0' );
define( 'NONCE_SALT',       ' g?EXOsRL%n(`V(|ktNT0qG2nC<Mx~U+jL#@<eiy_$?Gx9kH#yC~qCR~}x>e] mk' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
