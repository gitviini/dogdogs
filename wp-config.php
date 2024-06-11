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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'test' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'iRqs^O1$)9<2+mpe7v*mhQu&f}Xnc7~-W={V[$kpBd909eG7JhGhl8Ac9eBiC8V ' );
define( 'SECURE_AUTH_KEY',  '^DzM*cHL0?i$1YrRry847>7TUQEVHO%+.;j_R=>/XqefD`GYig)|.%q2|(G<Iz5C' );
define( 'LOGGED_IN_KEY',    '_!/ 8wYLWOUI`g#{W! W3Y+c/m+R:*562Qv_m]GhM?J8;~o,H_&bLsy^yOb!Ec$d' );
define( 'NONCE_KEY',        ':q@0h;@)h$aB{!kTBs[8V9$8ImQvI*z;?G>c7}JmQqc&mTt2uqa,*%s9?`JYnnI]' );
define( 'AUTH_SALT',        'iM)qC`N2Z*x9GGzgxYvSkQKV3NEaw+r<%:@ @DT:q|LDw4E!IgU8mzv/yKE![;)=' );
define( 'SECURE_AUTH_SALT', ';nX)TYup,[IC#znh<s.Zd}Rk7Cpkqu2 |)^.(b>yc;6va]57m14@SJTbrkpwE)z`' );
define( 'LOGGED_IN_SALT',   'xVH~_uj2B t_#W~i-;0bNrk /c9(V%=eORdglu$oRPX5d~}^T}Eqn89H>]qdYNg$' );
define( 'NONCE_SALT',       '|J;07fcma6hg;mFL48T}QYPG|&)_xaK0u3!_dKX^27a|0i880& `cjqs>EA/;pX^' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
