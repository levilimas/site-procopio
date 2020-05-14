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
define( 'DB_NAME', 'include_procopio' );

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
define( 'AUTH_KEY',         'r$v*TD_Xw;s_Ac??-@afXDI@ &#;/{Nqe5-k3pr%kjKk%!J/[8?]%MJqoa*hs6un' );
define( 'SECURE_AUTH_KEY',  '7B7Sq0?Y:Kw#+320Y/v|V9-IR0iMH4ctw<@kU1:Co9afi/zi?2|ddz:ld]qvW>RI' );
define( 'LOGGED_IN_KEY',    ', Y;d*KE<o:X[BPkZ%c*d6wUC+B{O[99U>:KSuX`<T[Ivy/[K^6SK-,Lsn0(k`5v' );
define( 'NONCE_KEY',        '%_ui^?=Q`wU i8o+K)G2ec6mLFwy^/Jttc)HW,V;!Vo!~S;s[cs$8j)a9g0][n-F' );
define( 'AUTH_SALT',        '7/q[p1L>,<sBWC|9v#jH:lr$PUa[h!?s2rD0V2O~]l0Con*W?O<7Qc?j..u?znOA' );
define( 'SECURE_AUTH_SALT', '|Rg~L;`dpI@< yBw&[1/L)z*gS#QfJyXI9]}WDHQaIM7p&Q(($e!b<2%+}$law4{' );
define( 'LOGGED_IN_SALT',   '-hbS}T?tHHWpDnMw<#Q(wsCmRyMN/8:R`_.DARzkRNEy3 @lQZg`<6+0}5u!z2{S' );
define( 'NONCE_SALT',       'g%m@<[NhNf@uimEt?#{nQT%Q[*Oi%s/:TAW}a[pog+&M8goxA.@tWorV]@0(yXPX' );

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

/** Permite o downloads e atualizações no localhost */
define('FS_METHOD', 'direct');