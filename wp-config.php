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
define('DB_NAME', 'portfolioNadia');

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
define('AUTH_KEY',         'yU4nA><)p:VfM?( 9wIf,/.kyxVM}lmR:)%f[<E[[qc ?=Prx;IYvs6DAmUtcr^8');
define('SECURE_AUTH_KEY',  'RI9H}QctP3F4NJ(8XNT_pi}A<^Xi>pHe<q%m*-]6DbeXky@xjc&k>7 .Zy?(V>gt');
define('LOGGED_IN_KEY',    'sNSi_I{dd *NFTc z?a;BfYlfM(V6E2I]G:Ws.J7_X*4b [CLx4^R5I=/|egu[LG');
define('NONCE_KEY',        'FqWJFK^~NSd{_E1N~L:=|rM{#J_U3N?f3o:{[@(gEIQd|%#htd%9s/lXqto_{Uk]');
define('AUTH_SALT',        'I..O<<yF%q<8gf(Bl?xJk!u1j/yRmHHo)Wc9l<~7~76ZrT+P/l6s2cjKfSVevJ4V');
define('SECURE_AUTH_SALT', '=|#skRxn<#t(krav+6G]ZDS21/`ru9ILW@y,%v;a;aNW,cPW|1Ub|I%*7aJ!-A)!');
define('LOGGED_IN_SALT',   'UOJS?q6XM:Qt-;7TpRSjIEC$U&]=}v0,m.#X.]zgC)_@rJU*dM;R!ZMS5q2EU,qP');
define('NONCE_SALT',       ';}eU|IJ5eznl($8m0Wx[vp&@::qkdmJi21nCg>QHK)wB-j~_06u};)Z3kw_cFe<~');
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