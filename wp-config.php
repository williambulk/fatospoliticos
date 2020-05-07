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
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'fatospoliticos' );

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
define( 'AUTH_KEY',         ' >aA[*se~HVcP:*NEIg)WtKJ^v(fwPCTgz4GORJfqT}Y,`&R,N.fyM&R/uW7/wTU' );
define( 'SECURE_AUTH_KEY',  'X7k2Blv-R+z_VuulD})Mp:e3]E~N%[wV<8lzGi1P.Pi!JRzr)P.DP~8^|iz6K9q8' );
define( 'LOGGED_IN_KEY',    '%wxCEax(@}^y$MsitOHV1VU:dm;FWw_F[fD*MMW m6Hsm^=UT#_tN]#6fhN1me.e' );
define( 'NONCE_KEY',        '%Ut@PKuVqY,oVA1oxy6<R0BNAZ}8+ms@l(G[OS4~PQ 0{gnpNEYn>fpC!Z<+my~l' );
define( 'AUTH_SALT',        'p*w;|XX9+-v[jq|WMfJc&FGL??jcN>1U>;]x F&#-XmmM7*PO)R9NH_n4V6iQPiZ' );
define( 'SECURE_AUTH_SALT', 'TG51-Dq4@dJ]Dg;C(KG_u|gB_UC32AUtEU[dj!XmzzNyXKDCZ#8+T}6yZzR@to$t' );
define( 'LOGGED_IN_SALT',   'olZhJAN=(!xs5?SEebn@`Vs6~S|c]p^Ig)BR)i%mPVs/o}c&hT0w-f|qRtu/7xCX' );
define( 'NONCE_SALT',       'z!RguY/n8rFm8V.>0EVaa?Nu6l|J>2A_dWR.{#O}6o<9_THEybV^YSLDF!~j-l*/' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'fp_';

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

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';