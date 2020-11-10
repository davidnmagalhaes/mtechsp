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
define( 'DB_NAME', 'u366622768_mtc' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'u366622768_mtc' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'PLqanb01' );

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
define( 'AUTH_KEY',         'T@P[aBRiKev+4mFSPM_jW/x~uzW7sr+4]e5a.G7Lw=U{}FFvs(]<]H]Iz&%N72*8' );
define( 'SECURE_AUTH_KEY',  'G$h>>pXn.z,LX:5C: q{=/EjtBD+V4,Om#SOiP K&`Gp+tzU(YcbQVsbF,#,gu95' );
define( 'LOGGED_IN_KEY',    'N=l7Vxn6Ti&JUiWE)s6d$/Vz>>Y kE;kPoZ~h1;u7@{j^Tmi[ (Lwa%>Q&}InoaI' );
define( 'NONCE_KEY',        'hk</g`AX<b})o~e?4A<{srgE|c7Mtq94<$6dFH%W*J#Gfz fr^8rk`qD7N}7-wH}' );
define( 'AUTH_SALT',        '7zgW.fO{F@sixxZ|G`.vp,rh~Aao[H+MP2WLqjhG7A09dXE4(_T2SL#EA:8!WAd6' );
define( 'SECURE_AUTH_SALT', 'RSJCdma!pRvb@4lj7s*lzW;C|3xM<zVKd7V*1u~J0#`O53VuLM[-Cb6*DBwR>A?F' );
define( 'LOGGED_IN_SALT',   '1 !q0:6m;Udm>rb&y5s<(*]&_eFMQ4>7wqyJ/>]> ck%RIZdx}h=8eJ$#u^Z._)_' );
define( 'NONCE_SALT',       'Ypf|xIir{;7t_O{#fp} wS@#[_gNtLu-n8!rc$7U3@c_tO5;=0{?G;@A9Wq<Rv@s' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'mt_';

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
