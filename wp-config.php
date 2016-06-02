<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'teste-wordpress');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '.juwE:?!e-kN<#$e1|Eq{KUn<o{ke <NmH%D~Rr}F]M Zg]zzbw^]-XA789(y0#!');
define('SECURE_AUTH_KEY',  '(=zy%gKyN]u0?Ch|k@XB4x0_Ol.`,H>CzU:D`~3)VM@<6Z^P/l*A-;7,eVS,y4KC');
define('LOGGED_IN_KEY',    '_Xk_d.FvUFwK*sZb+6x:e>D9$a@&o=3gZ+6^tLifSP9~}H*yNI<J`$e`;f7}+5aG');
define('NONCE_KEY',        'Ijr.sfdd=n$4$v#9/WdjeH!6ELtrq:3M8/Z<IiCk:-O?H?)(Ya~SQdjWa *?`ys}');
define('AUTH_SALT',        ']n0iOiFrW_WuE?Jb^+> k]Dli66TmpN6d]h5x#NZ[qFavOZ`, >aVqtc.U}9VZcv');
define('SECURE_AUTH_SALT', 'K2b]aC$M1Y6RuVL_}>7m^ka9yTz4$pZ?!R$g<[xM[=kikPLZQXq`&Lg1!2|{/$A*');
define('LOGGED_IN_SALT',   'g<geF1;ps0]px:v1y%PQ G!uZof+>`:;M$^,,Yb1.P7;E9<O4x)~P|cS5$y3t@_3');
define('NONCE_SALT',       'B4Xr%$DHx=.yV6,={z`#]<Y^2aG{Is5CXlq:$0G=aW{_)C!pduf|Vj8OF@L.-CE^');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
