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
define('DB_NAME', 'wp_pentahoday2015');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'sejalivre');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'XJ&CQ$>%=iw[LUnuaLR|--3v+|jrf%R9dA-v/t:5$_0fPo8|%A1k7=e]y!N02]M+');
define('SECURE_AUTH_KEY',  'Qbw=&Tk/Vxu/{.nbp.h;MCbg5#Vsur]kie2b4$moS&-O0?lB+oG:yy,juO3>|C}z');
define('LOGGED_IN_KEY',    'n);EToWPpQ=U3-y(ICNdjTp;UuJ%:h{W^G[1j[S;i h!3IQ4#2B P&0:VMCJ S, ');
define('NONCE_KEY',        '?gFaec3?>dY^X++PmnuZ//8@Y.okPtK)ov<42k5J0,[l%GMN!.;yGfzqvQl)~o=;');
define('AUTH_SALT',        '0KaPc<S}/eAiSA8j@5c||:|MA^-?_%&u_gDM,Kw;+<(IR3xWK?EJYZ7Y-$d^G|K#');
define('SECURE_AUTH_SALT', 'FO%s<Qoh+c2Frl+`hA&opB8F~|(TmBFaG%AZsng@]9Yn!?1ZPXdqU`DYkQN`7NFU');
define('LOGGED_IN_SALT',   '-ULR|uu@^IOQ,2+Bw[*5x|SHm2>awb45cktBn-}e!-q4RY<l,UsE_g(KQ/QI|FX|');
define('NONCE_SALT',       '06Dhm[9Tk-~+@$C+YKk>/<_%Fhu*s#T)}>U:z}s@BM53m1d7+N%:Oz.lavkEPux*');

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
