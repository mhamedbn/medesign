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
define( 'DB_NAME', 'medesign_db' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '%g<M]H`9A(!O<JOCz^btQue0QFJLT&8oOPAh6pI7sQPqX~sA]Ef}bdJXJ!}>,4bn' );
define( 'SECURE_AUTH_KEY',  'fGEtD6_Lz?slde@N(.$+k?3[L]+a@L7H>-)o56)FYV P_y5J/YyJ&qS6@p$!3|]q' );
define( 'LOGGED_IN_KEY',    'i6dg>dr;8eV7$xI39+^@$u&Zxz6Y7wH2BSyNFI RF0UU;~TnYuGvZeNc&;yA(BOn' );
define( 'NONCE_KEY',        'EQ~0)3_W#<:!Gz]tUzwECFL_}S-r[^tOHf*n^Ey.ArrFi@6t)+mfcy{Gv]Ythg$E' );
define( 'AUTH_SALT',        'V~fSixb8+1wFBEfu>f~ F7FjlA0gv2VSTmY[,mZ=2Up=FTWNjp>-fq7#y?h*P7tF' );
define( 'SECURE_AUTH_SALT', 'q/a{zOQ#8s-QuuX9*1CY)]f<E$kvTu?rKZ44l;1$#0#1JYTQX_nOQv^he .&13-a' );
define( 'LOGGED_IN_SALT',   'Uk XTIE^v Q4RM2`YWxZ!4mi^V5xmdUv_EZ#8lRN{5}f(DY+oG&pc6PRb-7v?.3T' );
define( 'NONCE_SALT',       'ce}%)~93<QnxFmAWwX&Ft.85kha2]u|+6hy;(mAT7T&eleS_&HorlF|5{li3D+xS' );
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

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
