<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'pudim' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'admin' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'web123' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '!^e+a/^GeI:r&;Iuy6L5$9T3..Q]&@m@WoV=CqAcIEJ~9BNVbxRAIJ^xEE?@&Tz^' );
define( 'SECURE_AUTH_KEY',  '%_{DM7X! BRKr*$zfcr518Fj+NYn),}`j+*mpedhPEUj$`Mf*{`Czo_^]lqYm|]P' );
define( 'LOGGED_IN_KEY',    'IJ&ev!7B4Z-Ye)|I0wjH=h8kWmerUkQ#1R3{]FiC|K;aeo5HsB<q;nnnt,TO^3|G' );
define( 'NONCE_KEY',        'n<vxMIMnB7+7-I?6Hq4x0pbtBWf-|cVm}rq1rL_R0KQP[VyE?Eg3`l0]k}^Z~CS>' );
define( 'AUTH_SALT',        '[dp$%pedM2PX3p1@qa-Ju jlYy4m{+oy>h$Rq<9h?06Gck&nYv^Gr_+:71=LX(3A' );
define( 'SECURE_AUTH_SALT', '  F&OGybaP|He^dB<tGK{CJYOF@[fCWp8H2bpc!u]I4iQ6-#YjW&yr~1cNjKAAj3' );
define( 'LOGGED_IN_SALT',   'fgl>?lm$<RA+%(MT:^pTFuZp]0lCzH4)L!-KD1%f1t|L[AwQYsQ6f*y@7/A0=t5J' );
define( 'NONCE_SALT',       'B<z}SwN7T!Bz8tg(21:4TbRMI(sm7?uCFY;ag+?:5o5?kN?$_{>-n/N,Qx[8I=]n' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
