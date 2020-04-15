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
define( 'DB_NAME', 'includ10_teste_procopio' );

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
define( 'AUTH_KEY',         ')0!ky*!}.-kL=|*FuuW^Rwb<o<ntBR[8F*})}cxL=Y R.kYNY|<uy6^9`WtPCzQ@' );
define( 'SECURE_AUTH_KEY',  '&4<k;qBxNF=It47[0gy>g4v^o=N|T?wJz }D0-(<Q,<FD/@T=s}8wNV#Gl?Jf-eH' );
define( 'LOGGED_IN_KEY',    ',tQ:tTG]||46Z/ja=]4-z-u[ZTXa35Vlr)noe%is6I1<Z2H]@Ki,)yt|~E|yI)!9' );
define( 'NONCE_KEY',        't5u?tx6U6fHI2gr(zGwb_];%&p,>]i~v^fSG`-ZD8WF`l6~U[37G@q.u)i~5t=b{' );
define( 'AUTH_SALT',        'Q|0{GxL}Vn&z.ih&~)38NQO+16&r}tMk#[z9L~_[NyurK0@aeMLAh)b0A5[`0JYd' );
define( 'SECURE_AUTH_SALT', 'z+[,-+6<#m~}iujT+B.wLN:cUPfN%W)yy(W_fO0YL}=tZhnR>j2^o{a>io~WB$s|' );
define( 'LOGGED_IN_SALT',   '&tz)8wccs_>:tN/1n{X:jn.-(#C]t(l@8u!Fvc``%eHJ;3Hp](4LC;K2cAMO<MUm' );
define( 'NONCE_SALT',       'lArfIqGkC$/~:pT*8MrK$W_q-~s5]X74!|d;8E:AtGvah VIezdtB7]!#:::jUM7' );

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

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
