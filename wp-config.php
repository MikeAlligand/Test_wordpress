<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'test' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         '<AR_tYLn=Ubg$-uMY6ZU@&0RO:7R<Xx#.oYTYuI[X7(DU9O{biAUz<QLXeP<Wj>c' );
define( 'SECURE_AUTH_KEY',  ',m}3FQ;5)$hZwl=k2o1`~UH6F&l!FAFY+!tCj_X`,nc/_+p+9ycUwS*-/eOanjzh' );
define( 'LOGGED_IN_KEY',    'fBb!{t&|Vs$^Q,<W2m1N8^mR$O,#KIGdby/{IUfbJ>?S[l^[8VCYcSl-$e{-d)e{' );
define( 'NONCE_KEY',        '3]Y`)):.B:vw^/4N/t+tU%Fg9Z5Vy`]y1hD-gySALdj l%T?RssK%r* y.0Q$iYg' );
define( 'AUTH_SALT',        '2{yB@])!#o:KClFqX;&h8?ycTwmaIQK/eZp-dL(#j{)7q>jjtn))qTSe3*@C{gqa' );
define( 'SECURE_AUTH_SALT', '!8)ch_eXG2s-c~{vdO@V~aEXD.P/04/x/y$Ex32_0{0E>9wyg4dDT]VP4N{)nbAw' );
define( 'LOGGED_IN_SALT',   'yviL9u{nw?{NJM)%!2330tuANBB2E$L{=uxyA<3B/J(<dzk6^:$QwE:.$?!6h$dl' );
define( 'NONCE_SALT',       'N!;0Ir)47vr2kPcIHv+YtB_v@;Cf*ECn)Zo(9#,NzC}W`rk~5z%K#e8t~Kh<nS?O' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
