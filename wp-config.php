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
define('DB_NAME', 'acensblog');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'acensblog');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'bocaoroyalblog');

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
define('AUTH_KEY',         '-t$|pzO 0[+{t-19G(z/PPa~@o@(nrRkne2|rO@p,WF0KXcC3|.W]/{b(on)Tk2_');
define('SECURE_AUTH_KEY',  'vw#7yYgAGRgVO8$LP.3aZd;X!cCm*O&KG zvby*+FLa ~x>d?5?N|CeiNS73iD~B');
define('LOGGED_IN_KEY',    'ty^b>m]qNYpIRYExma) A^aZ( ;ZCdbf: qrCxbc.>8jQh~}]fE)4}L]wN[QC6/O');
define('NONCE_KEY',        '(C |HFb]Ggi4(6h9(~M/?$}o.lf5U&Vf7oy)QW|N-bL,$0c7ci/arc&^K-{LuD6T');
define('AUTH_SALT',        '9qqt@;mxdA3ynD:*CsB=ql@+KM73W(jcV*!*89I>`Jc4D|;2+Z6=Q*Y<%hVXv,/g');
define('SECURE_AUTH_SALT', ';!|h3qF|MmsLLlP]| K[)U2F4y~-vhPmgz8X!*PP.*&qU:P3+S@oj%yWLlkQ2ILb');
define('LOGGED_IN_SALT',   'h%#(Oj8kB(BDDhd)jAQB;Uckxy:oRP0;{^2NJ<hxPt[*-p12{YE8JF.Nu^7r-}85');
define('NONCE_SALT',       '|U$qY7%1&,:9vM+Wz{zTW=S*[|+Y{S-rKl ^m%O-)Oc2[T03[aRC^{_9+j0>-,4[');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * O idioma localizado do WordPress é o inglês por padrão.
 *
 * Altere esta definição para localizar o WordPress. Um arquivo MO correspondente ao
 * idioma escolhido deve ser instalado em wp-content/languages. Por exemplo, instale
 * pt_BR.mo em wp-content/languages e altere WPLANG para 'pt_BR' para habilitar o suporte
 * ao português do Brasil.
 */
define('WPLANG', 'pt_BR');

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
