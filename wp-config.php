<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'mkvadrat_diadema' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'mkvadrat_diadema' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'rSDENQm1' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '+efHVqZ)].l.S?Q#O58#4M/]RmGwYj2)ZM{pusU}dmm6>}c|#vYnVlRv2Q?$S.oI' );
define( 'SECURE_AUTH_KEY',  'MnVwLW*S&?7JO%OE0rcPNi,jnz-!@M}qymx/$E)oeha>+4KtS&Me{v.P;~yi5D:B' );
define( 'LOGGED_IN_KEY',    '$$uF}%s} o5g~z6w_].40(6Z0o)x}>IjSp%Fa;NXnUt/z_qK)OKO~bz3=HTKl&N;' );
define( 'NONCE_KEY',        '?<Kr]FKae^tT^2WU!Zt{.MD~$dcMXwtf}<N26,CIZ%zdlE;l*mvWEUu-8c!M7=Cn' );
define( 'AUTH_SALT',        'sg%3Hx0zLtSCJzKji5h2, *A>]p!>q]-i_7%k3u9tKdq)@8Z#7}=KN>(~m_jzT!&' );
define( 'SECURE_AUTH_SALT', 'C!+z<u%YpokL3}s{F; QXC/Ab>#+C=r8u-9%{^JA;d|Rx;+t>b[_z^2D/,_lk`Lj' );
define( 'LOGGED_IN_SALT',   'm!%RjK-~{qGU+#JP[!PCWC+z4wiJ.R^T!F;6p>d7 gtOZM7Gw-m9F}3y- :pxM45' );
define( 'NONCE_SALT',       '/)%wgs^Z/iOvxvZ@GRI2^~V =D/obH-duji>,{e[@1zsZ*k(_H](j8+&B}B$ccf1' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
