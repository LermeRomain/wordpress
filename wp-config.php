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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '|(m<!6[z^LyPrOn9Uwq,.B4I+pr>$tL.2CMkfZ!w{KCF(|-cadV!tvvlIw^=eWwc' );
define( 'SECURE_AUTH_KEY',  'x>#!0>^}5Jln=K1AVO-*yL#h:[%9J7Q4>j8rj uug.W@~+7!&W .X3Q_&;EWe?WL' );
define( 'LOGGED_IN_KEY',    '#[%CoOF{)SUlQhM{2QXA`bap+jZNeRWvfAix5s1b*J$_2I!Zk9Awb5Z>Q_9Rql4P' );
define( 'NONCE_KEY',        't*<6,rRLdE:UZU:v1sf`pbff_<sG%gPaLA)db7h)kuFZYAgyh|N/0i0i_V#$pR^v' );
define( 'AUTH_SALT',        '!qIAB&MGiJjbdO)WzN5qL%>$=>70y-e]8`gca+_wkw1s]hPBq<F> %rJ28aiw#v|' );
define( 'SECURE_AUTH_SALT', 'eGCK5**FHYdSIJ(JV^m9&EgR,2q-Ia%Eqa%+8 .:PGX%NE|pR~B~KcVFHL0=M4+F' );
define( 'LOGGED_IN_SALT',   'xgb]QcTn#L]gOF<tpI$2.!gV]MbsdK.ToOM/wQ6V{;~ZYU0RbXRwAoxY.`^_Qf^f' );
define( 'NONCE_SALT',       '4 dBeP:LS+?+Nej!46V)Jrk)OR([(h~yyDt9?Df2.`phS_$QoNAInVW{%58V[|ro' );
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
