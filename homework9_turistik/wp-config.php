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
define('DB_NAME', 'wploftsc');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '123');

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
define('AUTH_KEY',         '|WHtYxizGaC|]7j1|S&@56b16$}POG0dhP*i#FV|},!>sBBBr/]7Yy(<^&1U)rlO');
define('SECURE_AUTH_KEY',  'N#lVvHqYPAogMqRhAk&/1[65lGj~DhPe>]Rh*:k`gU%(BKNJXom5/#C1P.;FI-ej');
define('LOGGED_IN_KEY',    ':-@so8%KO8)r9-j8n*hMyyYmGo)T,z(Ve:r,`F,40Swq5`m_h$0^zWc0gVo7no/<');
define('NONCE_KEY',        'fmM9:=cPmSSp&kG(+XlvIPF`>IvRWlOWO=To1^.$(i6>fWIgSEl:51)K(x@,(pkA');
define('AUTH_SALT',        '!W,>G#_:I#2pi}QEFAp ?G_TLcql6aJ/*ve3tp+>F@u#CP9a/TcjZ}9;cH`?g/A5');
define('SECURE_AUTH_SALT', 'yXx+NFs> dg;K+-qHl#s/c/6B; 0MK88yp2^v6,k{}=Xy9ZufO%`DC~8hXM}$/;k');
define('LOGGED_IN_SALT',   '2%+U1M^9J(WEAW{cOHt2s9s1j|a^2kO1fMwTT|y*M8Pv6,oU>6Wo$P%is/18kWoL');
define('NONCE_SALT',       'X@^X;mk616jl_7%N5~1Az5ZxbT@<&iv*hiU`=9Zd$S1Lw]k+z6KeU`,nb2pPCG`m');

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

if(is_admin()) {
//add_filter('filesystem_method', create_function('$a', 'return "direct";' ));
//define( 'FS_CHMOD_DIR', 0751 );
define('FS_METHOD', 'direct');
}
