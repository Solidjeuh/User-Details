<?php
/**
*
* @package User Details Extension
* @copyright (c) 2016 david63
* Nederlandse vertaling @ Solidjeuh <https://www.froddelpower.be> 
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
	$lang = array();
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
// ’ » « “ ” …
//

$lang = array_merge($lang, array(
	'ACP_USER_DETAILS'			=> 'Gebruiker details',
	'ALL'						=> 'Alle',

	'CLEAR_FILTER'				=> ' Verwijder filters ',

	'DEFAULT_STYLE'				=> '<strong>** %1$s **</strong>',

	'ERROR_EXPLAIN'				=> '<strong>Opmerking:</strong> Eventuele attributen die omringd zijn door “<strong>**</strong>” geven aan dat dit attribuut voor de gebruiker ontbreekt in de database of ongeldig is.',

	'FILTER_BY'					=> 'Filter op',

	'HASH'						=> '#',

	'NO_ATTRIBUTES_SELECTED'	=> 'Geen attributen geselecteerd',
	'NO_DATA'					=> 'Het verzoek heeft geen gegevens gemaakt om te exporteren',
	'NO_GROUP'					=> '<strong>** Geen groep **</strong>',
	'NO_VISIT'					=> 'Nooit bezocht',

	'OTHER'						=> 'Andere',

	'TOTAL_USERS'				=> 'Totaal gebruikers',

	'UD_BACK'					=> ' « Terug naar selecteer ',
	'UD_GO'						=> ' Sorteer/Filter ',
	'USER_ALLOW_PM'				=> 'PB toestaan',
	'USER_ALLOW_VIEWONLINE'		=> 'Bekijk online',
	'USER_ALLOW_VIEWEMAIL'		=> 'Bekijk email',
	'USER_ALLOW_MASSEMAIL'		=> 'Massa mail',
	'USER_AOL'					=> 'AOL',
	'USER_AVATAR'				=> 'Avatar',
	'USER_AVATAR_TYPE'			=> 'Avatar type',
	'USER_BIRTHDAY'				=> 'Verjaardag',
	'USER_DATE_FORMAT'			=> 'Datum formaat',
	'USER_DETAILS_DISPLAY'		=> 'Dit is de weergave van de gebruikers attributen die u hebt geselecteerd.',
	'USER_EMAIL'				=> 'Email',
	'USER_EMAILTIME'			=> 'Email tijd',
	'USER_GROUP'				=> 'Groep',
	'USER_ID'					=> 'Gebruiker id',
	'USER_INACTIVE_REASON'		=> 'Inactiviteit reden',
	'USER_INACTIVE_TIME'		=> 'Inactiviteit tijd',
	'USER_IP'					=> 'Gebruiker ip',
	'USER_JABBER'				=> 'Jabber',
	'USER_LANG'					=> 'Taal',
	'USER_LASTMARK'				=> 'Laatste markering',
	'USER_LAST_PAGE'			=> 'Laatste pagina',
	'USER_LAST_PRIVMSG'			=> 'Laatste private bericht',
	'USER_LAST_SEARCH'			=> 'Laatste zoekopdracht',
	'USER_LAST_WARNING'			=> 'Laatste waarschuwing',
	'USER_LASTPOST_TIME'		=> 'Laatste post tijd',
	'USER_LASTVISIT'			=> 'Laatste bezoek',
	'USER_LOGIN_ATTEMPTS'		=> 'Login pogingen',
	'USER_NEW_PRIVMSG'			=> 'Nieuwe private berichten',
	'USER_NOTIFY'				=> 'Notificatie post',
	'USER_NOTIFY_PM'			=> 'Notificatie PB',
	'USER_NOTIFY_TYPE'			=> 'Notificatie type',
	'USER_PASS_CHANGE'			=> 'Wachtwoord gewijzigd',
	'USER_POSTS'				=> 'Posten',
	'USER_RANK'					=> 'Rang',
	'USER_REGDATE'				=> 'Registratie datum',
	'USER_SIG'					=> 'Onderschrift',
	'USER_STYLE'				=> 'Stijl',
	'USER_TIMEZONE'				=> 'Tijdzone',
	'USER_TYPE'					=> 'Gebruiker type',
	'USER_UNREAD_PRIVMSG'		=> 'Ongelezen private berichten',
	'USER_WARNINGS'				=> 'Waarschuwingen',
	'VERSION'					=> 'Versie',

	// Translators - set these to whatever is most appropriate in your language
	// These are used to populate the filter keys
	'START_CHARACTER'	=> 'A',
	'END_CHARACTER'		=> 'Z',

	'avatar_type' => array(
		AVATAR_UPLOAD				=> 'Geuploade avatar',
		AVATAR_REMOTE				=> 'Remote avatar',
		AVATAR_GALLERY				=> 'Galerij avatar',
		'avatar.driver.gravatar'	=> 'Gravatar',
	),

	'inactive_type' => array(
		INACTIVE_REGISTER	=> 'Nieuw geregistreerd account',
		INACTIVE_PROFILE	=> 'Profiel gegevens gewijzigd',
		INACTIVE_MANUAL		=> 'Account gedeactiveerd door beheerder',
		INACTIVE_REMIND		=> 'Gedwongen gebruikersaccount reactivering',
	),

	'month_types' => array(
		'1'  => 'Januari',
		'2'  => 'Februari',
		'3'  => 'Maart',
		'4'  => 'April',
		'5'  => 'Mei',
		'6'  => 'Juni',
		'7'  => 'Juli',
		'8'  => 'Augustus',
		'9'  => 'September',
		'10' => 'Oktober',
		'11' => 'November',
		'12' => 'December',
	),

	'notify_type' => array(
		NOTIFY_EMAIL	=> 'Email',
		NOTIFY_IM		=> 'Jabber',
		NOTIFY_BOTH		=> 'E-mail & Jabber',
	),

	'user_type' => array(
		USER_NORMAL 	=> 'Normaal',
		USER_INACTIVE	=> 'Inactief',
		USER_IGNORE 	=> 'Genegeerd',
		USER_FOUNDER 	=> 'P^richter',
	),
));
