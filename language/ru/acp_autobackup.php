<?php
/**
*
* @package Auto db Backup
* @copyright (c) 2015 david63
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'AUTO_DB_BACKUP_COPIES'					=> 'Хранение копий',
	'AUTO_DB_BACKUP_COPIES_EXPLAIN'			=> 'Количество резервных копий, которые одновременно будут храниться на сервере.<br>0 (ноль) означает, что все созданные копии будут сохранены на сервере.',
	'AUTO_DB_BACKUP_ENABLE'					=> 'Включить автоматическое создание резервных копий',
	'AUTO_DB_BACKUP_ENABLE_EXPLAIN'			=> 'Включить или отключить автоматическое создание резервных копий базы данных.',
	'AUTO_DB_BACKUP_FILETYPE'				=> 'Тип файла',
	'AUTO_DB_BACKUP_FILETYPE_EXPLAIN'		=> 'Выберите тип файла резервного копирования.',
	'AUTO_DB_BACKUP_FREQ'					=> 'Частота резервного копирования',
	'AUTO_DB_BACKUP_FREQ_EXPLAIN'			=> 'Задайте частоту создания копий в часах.',
	'AUTO_DB_BACKUP_MAINTAIN_FREQ'			=> 'Сохранить частоту резервного копирования',
	'AUTO_DB_BACKUP_MAINTAIN_FREQ_EXPLAIN'	=> 'Укажите <strong>"Да"</strong>, чтобы заданная частота резервного копирования всегда соблюдалась. <br>Например, если копирование назначено на 23:15 и установлена 24-часовая частота, то копирование всегда будет выполняться в 23:15. Если установлено значение <strong>"Нет"</strong>, то следующее копирование будет выполнено спустя 24 часа после окончания заданного копирования.',
	'AUTO_DB_BACKUP_OPTIMIZE'				=> 'Оптимизировать базу данных перед  копированием',
	'AUTO_DB_BACKUP_OPTIMIZE_EXPLAIN'		=> 'Оптимизировать только требующие оптимизации таблицы базы данных перед созданием резервной копии.',
	'AUTO_DB_BACKUP_SETTINGS'				=> 'Настройки расширения Auto database backup',
	'AUTO_DB_BACKUP_SETTINGS_CHANGED'		=> 'Настройки Auto database backup изменены.',
	'AUTO_DB_BACKUP_SETTINGS_EXPLAIN'		=> 'Здесь вы можете задать настройки автоматического создания резервной копии. Сжатие файла резервной копии может быть доступно в зависимости от конфигурации вашего сервера. <br>Все копии будут сохранены в папке <samp>/store/</samp>. Вы можете восстановить резервную копию через пункт меню <em>Восстановление</em>.',
	'AUTO_DB_BACKUP_TIME'					=> 'Время следующего копирования',
	'AUTO_DB_BACKUP_TIME_ERROR'				=> 'Параметр <strong>Время следующего копирования</strong> задан неправильно. Время должно быть задано в будущем.',
	'AUTO_DB_BACKUP_TIME_EXPLAIN'			=> 'Время, когда должно состояться следующее копирование базы данных.<br><strong>Примечание:</strong> установленное время (дата) должно быть в будущем.',

	'CLICK_SELECT'							=> 'Нажмите на текстовое поле, чтобы выбрать время/дату',

	'DATE_FORMAT_ERROR'						=> 'Формат времени следующего копирования задан неправильно.',

	'INVALID_PHP_TIMEZONE'					=> 'Параметр timezone в файле php.ini задан неверно.',
	'INVALID_USER_TIMEZONE'					=> 'Проблема с часовым поясом, установленном в личных настройках вашего профиля.',

	'NO_TIMEZONE_SET'						=> 'В личных настройках вашего профиля не задан часовой пояс, пожалуйста, настройте его, чтобы продолжить.',

	'FILETYPE'	=> array(
		'gzip'	=> 'gzip',
		'bzip2'	=> 'bzip2',
		'text'	=> 'text',
	),

	'FILE_SIZE'	=> array(
		1 => 'байт',
		2 => 'Кб',
		3 => 'Мб',
		4 => 'Гб',
		5 => 'Тб',
	),
));

// Date/time picker
$lang = array_merge($lang, array(
	'HOUR_TEXT'				=> 'Час',
	'MINUTE_TEXT'			=> 'Минута',
	'NEXT_TEXT'				=> 'След. »',
	'PREV_TEXT'				=> '« Пред.',
	'TIME_TEXT'				=> 'Время',

	// Translators note: retain the format of [" "] as they are creating JSON compatible arrays
	'DAY_NAMES_MIN'			=> '["Вс", "Пн", "Вт", "Ср", "Чт", "Пт", "Сб"]',
	'MONTH_NAMES' 			=> '["Январь", "Февраль", "Март", "Апрель", "Май", "Июнь", "Июль", "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь"]',
));
