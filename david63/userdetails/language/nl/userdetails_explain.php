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
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'USER_DETAILS_SELECT'			=> '&bull;&nbsp;Van hieruit kunt u de gebruikersattributen selecteren die u wilt weergeven.<br />&bull;&nbsp;Wees ervan bewust dat het aantal geselecteerde attributen mogelijk niet correct op de pagina past (dit hangt af van de browser breedte).',

	'ATTRIBUTE'						=> 'Attributen',
	'ATTRIBUTE_EXPLAIN'				=> 'Attributen beschrijving',
	'SIZE'							=> 'Attributen kolom grootte',
	'CAN_FILTER'					=> 'kan filteren',
	'CLEAR_ATTRIB'					=> 'Verwijder attributen',
	'CSV'							=> 'Exporteer CSV',

	'USER_ALLOW_PM_EXPLAIN'			=> 'Sta andere gebruikers toe om deze gebruiker een priv&eacute; bericht te sturen.',
	'USER_ALLOW_VIEWONLINE_EXPLAIN'	=> 'Verbergt de gebruiker zijn/haar online status?',
	'USER_ALLOW_VIEWEMAIL_EXPLAIN'	=> 'Kan een gebruiker deze gebruiker per email contacteren?',
	'USER_ALLOW_MASSEMAIL_EXPLAIN'	=> 'Kan de gebruiker worden gecontacteerd via massa mail van een beheerder?',
	'USER_AOL_EXPLAIN'				=> 'Het AOL adres van de gebruiker.',
	'USER_AVATAR_EXPLAIN'			=> 'Toon de avatar van de gebruiker.',
	'USER_AVATAR_TYPE_EXPLAIN'		=> 'Avatar type van de gebruiker.',
	'USER_BIRTHDAY_EXPLAIN'			=> 'Geboortedatum van de gebruiker, indien ingevoerd en leeftijd.',
	'USER_DATE_FORMAT_EXPLAIN'		=> 'Het formaat waarin de gebruiker de datum en tijd ziet.',
	'USER_EMAIL_EXPLAIN'			=> 'Het e-mailadres van de gebruiker.',
	'USER_EMAILTIME_EXPLAIN'		=> 'De datum en tijd van de laatste e-mail van de gebruiker.',
	'USER_GROUP_EXPLAIN'			=> 'De standaard groep van de gebruiker.',
	'USER_ID_EXPLAIN'				=> 'Het ID van de gebruiker op dit forum.',
	'USER_INACTIVE_REASON_EXPLAIN'	=> 'De reden waarom het account van deze gebruiker niet actief is.',
	'USER_INACTIVE_TIME_EXPLAIN'	=> 'De datum en tijd dat het account van de gebruiker inactief werd.',
	'USER_IP_EXPLAIN'				=> 'Gebruikers IP adres tijdens registratie op dit forum.',
	'USER_JABBER_EXPLAIN'			=> 'Het Jabber-adres van de gebruiker.',
	'USER_LANG_EXPLAIN'				=> 'De taal van de gebruiker.',
	'USER_LASTMARK_EXPLAIN'			=> 'De laatste keer dat de gebruiker alle forums als gelezen heeft gemarkeerd.',
	'USER_LAST_PAGE_EXPLAIN'		=> 'De laatste pagina die de gebruiker heeft bezocht.',
	'USER_LAST_PRIVMSG_EXPLAIN'		=> 'De datum en tijd van het laatste priv&eacute; bericht van de gebruiker.',
	'USER_LAST_SEARCH_EXPLAIN'		=> 'De datum en tijd wanneer de gebruiker het laatst de zoekfunctie heeft gebruikt.',
	'USER_LAST_WARNING_EXPLAIN'		=> 'De datum waarop de gebruiker de laatste waarschuwing heeft ontvangen.',
	'USER_LASTPOST_TIME_EXPLAIN'	=> 'De datum en tijd wanneer de gebruiker het laatste bericht geplaatst heeft op dit forum',
	'USER_LASTVISIT_EXPLAIN'		=> 'De datum en tijd van het laatste bezoek van de gebruiker op dit forum.',
	'USER_LOGIN_ATTEMPTS_EXPLAIN'	=> 'Het aantal mislukte login pogingen die de gebruiker heeft gemaakt.',
	'USER_NEW_PRIVMSG_EXPLAIN'		=> 'Het aantal nieuwe priv&eacute; berichten die de gebruiker heeft.',
	'USER_NOTIFY_EXPLAIN'			=> 'Ontvangt de gebruiker meldingen voor nieuwe berichten in forums waaraan ze zijn aangemeld?',
	'USER_NOTIFY_PM_EXPLAIN'		=> 'Ontvangt de gebruiker meldingen voor priv&eacute; berichten?',
	'USER_NOTIFY_TYPE_EXPLAIN'		=> 'Welk type meldingen ontvangt de gebruiker?',
	'USER_PASS_CHANGE_EXPLAIN'		=> 'De datum waarop het wachtwoord van de gebruiker moet worden gewijzigd.',
	'USER_POSTS_EXPLAIN'			=> 'Het aantal berichten dat de gebruiker op dit bord heeft gemaakt.',
	'USER_RANK_EXPLAIN'				=> 'De rang van de gebruiker.',
	'USER_REGDATE_EXPLAIN'			=> 'De datum waarop de gebruiker zicht geregistreerd heeft op dit forum.',
	'USER_SIG_EXPLAIN'				=> 'Toon het onderschrift van de gebruiker.',
	'USER_STYLE_EXPLAIN'			=> 'De stijl van de gebruiker.<br />OPMERKING: Dit is mogelijk niet de stijl die de gebruiker ziet - het hangt af of de gebruikers stijl op het forum overschreven word of niet',
	'USER_TIMEZONE_EXPLAIN'			=> 'De tijdzone van de gebruiker.',
	'USER_TYPE_EXPLAIN'				=> 'Het gebruikers type.',
	'USER_UNREAD_PRIVMSG_EXPLAIN'	=> 'Het aantal ongelezen priv&eacute; berichten die de gebruiker heeft.',
	'USER_WARNINGS_EXPLAIN'			=> 'Het aantal waarschuwingen dat de gebruiker heeft ontvangen.',
));
