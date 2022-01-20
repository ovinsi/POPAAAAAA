<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'php' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '$h>?0VZ6pvZ8[5A7<Ko*V1,B*Oq#rtI}CP[bj&BWL qgIvQNTSuI5>pjD__Q4K`:' );
define( 'SECURE_AUTH_KEY',  'X`TVZr!5HrJT08)d3R4Qh-D54q-yVPBL{t:oiC#-$YE,|Ua>g^O,g)b<XHLEWx8$' );
define( 'LOGGED_IN_KEY',    'GQPu`8xVMLDV+pY+eZckHZS<+6_(lbk|xO~(._)#AlcJaYMN^,8&){{fL8x1?cip' );
define( 'NONCE_KEY',        '%lWC+6oocrGfqbmo$.#8loU8z{a,GuKy[>$(>/bY+?37M.eiVG16JKZF.a4>5rJ_' );
define( 'AUTH_SALT',        '@{l0?7IkV5kY}8^tjuqozm3haj3pc34N3+V:W4p.nH@1OI-F=_wCN/vc|M9Q.A&p' );
define( 'SECURE_AUTH_SALT', 'x!Hu1YQS=3$<>~N,:2&SM$Dn`:hxvvR+ g+.064INyOm%ps+>=nvWV5Jd+w)I4rb' );
define( 'LOGGED_IN_SALT',   '.Y;Y^6x1`.SMiwi/4WyeWILZTPvObUk1)7cuAfl*B9+j&cpI;}~r802?sje7U|Or' );
define( 'NONCE_SALT',       'hA|3)m,jKbuGCj#xPs7wmGr4+3.NdXWiy58?f1B_*Eeh472eddlB`wI9IsTusC,(' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
