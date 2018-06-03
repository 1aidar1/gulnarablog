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

//какаято штука против ошибки с базой
//define ('WP_ALLOW_REPAIR', true);


// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'myfirstbase');

/** Имя пользователя MySQL */
define('DB_USER', 'root');


/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'aezakmi0101');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'sCKOR!SEy}-;_:A_:gaYiKg`Bd7FSR^XY=km,}{$DDx?eO@ia0sN2aRO6:&Rw,gb');
define('SECURE_AUTH_KEY',  'lKs*J6Dn1jC!M,#,2%)^vqWor5-i8)p59mZI]veo_JI&L^vZXv{OscqTJa%~v^gA');
define('LOGGED_IN_KEY',    'H?AWhj^53MY8nok;R4vSSh0ry51z*mDdwwODdahPA3P8JmQ.tHZS}z}nPBXm8YVK');
define('NONCE_KEY',        'FIzj{>mJe_?FH_UdQ_q`RyZn~wo<4!/nz};0A[R.HQLg;6+=eqrbn<_3H&(rS%=L');
define('AUTH_SALT',        'J Pnu*<sr|f T@nSZM5LX r6j2@W.Q|)tpm`wjz)$cy8sLtj#l7,z`sq?w&G+_f[');
define('SECURE_AUTH_SALT', 'lqg03>G=(Jc[)rc1Qo6PT[hX-K@9ygd%IU^<:FeC}!HLwRvnf-g>a`WldcW,pT&K');
define('LOGGED_IN_SALT',   '=ROr$758p,=8,x$q{/X8#W/hlo4a4Gl(eS~w]BMr-2~?Vu/Hz}U`Y%enXxe[=_L$');
define('NONCE_SALT',       '8B^K_&TL=%0n>`SKLg?|dwS~:VS{B)2#$Awzy]sUbAC^SS8$1[-f2Zj(D!Fe_P,H');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
