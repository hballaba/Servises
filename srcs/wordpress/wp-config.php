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
define( 'DB_NAME', 'wordpress' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'admin' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'admin' );

/** Имя сервера MySQL */

define( 'DB_HOST', 'localhost' );

//define('DB_HOST', '127.0.0.1:3306');


/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'mOPt;XznaVM/%V/~[Dz-my~,QP-mBR!s3@Gk%~!^ESwQIG(cYk&3:>ty>ghH%C*S');
define('SECURE_AUTH_KEY',  '+L-]S+qpNE$N4VeQdEn),Q_X/U%`K8d<+bAQV])XX~@E.lg+kk7q||!DB2T%WDKy');
define('LOGGED_IN_KEY',    ' a:cv[YBWDk *<nj?c-Gk8iG6&3JGp%Z(o(T[gLX0`Ln^J6(2_XF#-PoEk%#d[+-');
define('NONCE_KEY',        '6^sws#8t$jiOyAP(w8`XhKnTIr&JX9UXGI^O+hlKb.>xTH8+1Gb398&>Nyu%Li:=');
define('AUTH_SALT',        'n_b1TpMB:o,;nfOc9rQPkS~(d(a:mbu+{j2yB`u!V;7!3^K/.mI= [rSUf$_ntO5');
define('SECURE_AUTH_SALT', '0R6F^gin<^PU:n-#&e[C4NtOIyW==VzaC_a.Z<`-S+|d;[k-hcq+& 6;O0t?0xR@');
define('LOGGED_IN_SALT',   'Q{KuImfUgf0Da^0j4]Nf2We Tr!-u#6DJ]`*g.6zJ:}=7&jT8Ln@D]{C?sXK!r^E');
define('NONCE_SALT',       'C15<`hgm*S8k-tr-A?wPxvqsCI1U5x~>>iO?ys2W}->,PEajCrV2T4PB5B7l[qN:');

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

define('FS_METHOD', 'direct'); 
