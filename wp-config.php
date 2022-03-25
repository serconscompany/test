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

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'test' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'user' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'pass' );

/** Имя сервера базы данных */
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
define( 'AUTH_KEY',         '!p3R$90b%YUv}@_#uo(S2b$,(F[cqKwNr4lkb,%^xSqKOurt9@! WIBYs1{%uT j' );
define( 'SECURE_AUTH_KEY',  '@oah&B;~6?u{15I=jK=S[f-*}LoHx6ySgH!Kwz%:) wW4ft5Y%pJGIy kn5,W_nb' );
define( 'LOGGED_IN_KEY',    '`I|F#E{qO@:3#WFcN61ooo80U(c_Cto$k$c;.F@Y@j8Jc=f)QLj,S)p6[h/b&f~X' );
define( 'NONCE_KEY',        'KrGu)QObdJ>S~[uN)msCq>Uqiiwtq/P9n3p|ZDeLHrk;!}4v:sCx_.oR!7sG}YMB' );
define( 'AUTH_SALT',        'ZgmB!=$/eEpJ*}eeVg#f_=|10s72_dA N`uDKXdJ4XY!G!=J&Iv=2m)5GyV%QI$=' );
define( 'SECURE_AUTH_SALT', '+:z,tC*R@ZBC7FsX63wfstB3#Jfv]9HuLI&ZZ[hQHSWkBq#O,^YBHv#%[rjKe=&:' );
define( 'LOGGED_IN_SALT',   'QQREWoFO7a;P1uiRO5HMCHWzpANLk6xGG4.3Iqj^a=Tm{h>ltOaP{YS24R]sMs>`' );
define( 'NONCE_SALT',       'h $cZ|mmrE~8`C.Zw{MeoyvxKuJzW}GQJT5B^HM;MPJ81Y*)}@9|3Jx*~~hCaA} ' );

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
