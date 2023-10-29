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
define( 'DB_NAME', 'tp1' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '4LFDPf,.@6aM=`(OT8mjG|dp0jdP&?#X}C^-09xEvc2S+rC,_p%4=,BsM@RPDKbU' );
define( 'SECURE_AUTH_KEY',  'g;*#i%$FHmAzs!y%{Fw~WiW`?lku`qC2XBupHYS3.3bA^ =HO8.&!<Wdrm4??npo' );
define( 'LOGGED_IN_KEY',    '<}0g9E{nML9ckfnf^wks!*Hh9;#Id7UwjHfGB=QQlRDd!1Ro5krE2-~OPz=lg@LZ' );
define( 'NONCE_KEY',        '%Sg|wB8kQ=295J8,/o;o[&J/w}t<$X(i/o^%(71 G3KV[dY_RE5JcCTM~-c)2Rq{' );
define( 'AUTH_SALT',        '0n>7X`^GY $s_c.#c8mF SfeK=4GN+pjc$a0Aq~`j+XBWZ|odGH`R=`y<^[GB2;8' );
define( 'SECURE_AUTH_SALT', '5;2#41jAJV8_ad-`M)zri>]5Hk2ps/s$FUFM>bjyr$@1ftBw:R}MhHKiKw9f]elY' );
define( 'LOGGED_IN_SALT',   ':zF#5zzZF~=sLVU56`3CbQ-;Rg0-Hbi5E&CS/;j{C|nVVLT7S0sFp)NB!!RuF 0L' );
define( 'NONCE_SALT',       'RT#B!GB`m3%L&@bdUk <}1R{6h8LG,?saRgAL=`AjV,&Sx|0#S1zm[0jT]6I:)qW' );
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
