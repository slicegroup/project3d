<?php
/**
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define( 'DB_NAME', 'project3d' );

/** Tu nombre de usuario de MySQL */
define( 'DB_USER', 'root' );

/** Tu contraseña de MySQL */
define( 'DB_PASSWORD', 'root' );

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define( 'DB_HOST', 'localhost' );

/** Codificación de caracteres para la base de datos. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY', '-LMPe?F<fSfBF .KxG/EwroIe@ nE($h#$<FS8=@8lcswkTj{upmnO:*L 9cWVcZ' );
define( 'SECURE_AUTH_KEY', 'ZthDdB6P`im,{ejaA It~6a#=;?:GJ~HSE<W0Fe/Y_kM)G 9!W@ ``;yLa3[:k^r' );
define( 'LOGGED_IN_KEY', 'XY)=H8#=hg6xZx`[<|lxoawk);x|WE0wRh;Q4[;SR96_)3uk>jg/S9%8Kjrhj<jm' );
define( 'NONCE_KEY', 'w_5HHKNlSkzaC0?9_M^LT8hI&8qO4]!|.GBMdA|zIhLx>ta{8JKxve#%|srB;R87' );
define( 'AUTH_SALT', 'jAF=4:P?74I8QVHNK5%d~;TP6j4]p7^wM73hf96LLB 7^R~M@*mYQ2UTdy1RF*Z1' );
define( 'SECURE_AUTH_SALT', '~w&{>zQ)D4(dVo`KYs&Wk4g%8PS3C/2}ub=y.HyxrJ)SO73M54:mDZR{}-$d?fNV' );
define( 'LOGGED_IN_SALT', '9SR~x,ix/!Kw#du=mgy<p~+AXQs,+_p^`_@jB26N8i-yRkg<E#I{Q<@j4ipPWL{V' );
define( 'NONCE_SALT', '1hnJ7@o<jIO`L[wa)3[5NnGJS4a!|w/)y5 =s>*Fezy__`P~k^9Tgi5(,#[HdA[9' );

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

