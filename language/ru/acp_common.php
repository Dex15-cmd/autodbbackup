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
	'DONATE'					=> 'Пожертвовать',
	'DONATE_EXTENSIONS'			=> 'Поддержите мои расширения',
	'DONATE_EXTENSIONS_EXPLAIN'	=> 'Данное расширение, как и все мои расширения, распространяется абсолютно бесплатно. Если оно полезно Вам, пожалуйста, сделайте пожертвование, нажав на кнопку напротив. Я оценю ваш вклад и обещаю, что больше не буду просить вас об этом, хотя и не откажусь от дальнейшех пожертвований.',
	'NEW_VERSION'				=> 'Новая версия - %s',
	'NEW_VERSION_EXPLAIN'		=> 'Версия расширения %1$s доступна для скачивания.<br>%2$s',
	'NEW_VERSION_LINK'			=> 'Скачайте здесь',
	'NO_VERSION_EXPLAIN'		=> 'Информация об обновлениях недоступна.',

	'PAYPAL_BUTTON'				=> 'Пожертвовать с помощью PayPal',
	'PAYPAL_TITLE'				=> 'PayPal - безопасный и простой способ оплаты онлайн!',

	'VERSION'					=> 'Версия',
));
