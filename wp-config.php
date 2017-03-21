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
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', 'E:\Install_OpenServer_Joomla\OpenServer\domains\wpsite\wp-content\plugins\wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'wpsite');

/** Имя пользователя MySQL */
define('DB_USER', 'wpsite');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'IW ?oIszgK%JTSFc)7cZcwj-xtu53htDf!v4x({^G1Vs-*;w.#@H9IRJgP88m*M?');
define('SECURE_AUTH_KEY',  'iULxJ</_Y4YMwyt!Y|s#U{HFV4F3zZzdw [QXE}d[+K-v1o>R6sUT,F6vZ.6-e>O');
define('LOGGED_IN_KEY',    'M.A)-c:cjx^_9.=c>rq~}*}oN~f-NfxE{7L6sgs*5uP#}x;~^/;qYp|,0r#ZR#3H');
define('NONCE_KEY',        '0P,giNk8,seK]v`P,`lxCi$?v:iARtl{|6YU>b3E>lGw;m(QKs!|3vsL2MIgA]wC');
define('AUTH_SALT',        'fxq~T DIBm)1!:hh<M6]_ePWk}dIqRW7%=nm2*)y:)0a;fW[~4{py3DWhc@ EMQH');
define('SECURE_AUTH_SALT', 'A}6*@!u=vM#VAni<mH=.m47e$Tun#X&1~_oh Kc,U/IN+Pl8 N.vg3KJ*Nw/WYRQ');
define('LOGGED_IN_SALT',   'z`/ykbLQCjq`x)e4B%q9Uh{A=&+Wp8bIQ-DcmMI9!yvSFg;#Rv!$ep?mW!(WplX2');
define('NONCE_SALT',       'YnD+ pJ/:.#p-MJ&){l<~?1_47+|>D)Q:F.&WMHm?SD*c JNw<ElGxq;R6X}s23F');

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
