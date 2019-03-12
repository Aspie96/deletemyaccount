<?php
/**
 *
 * Delete My Account. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2017 BrokenCrust
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(

	'DELETE_MY_ACCOUNT' => 'Elimina il Mio Account',
	'DELETE_YOUR_ACCOUNT' => 'Elimina il Tuo Account',
	'DELETE_MY_ACCOUNT_TEXT' => 'Puoi usare questo modulo per cancellare il tuo account. Una volta completata l’operazione, tutti i tuoi dati personali e privati saranno cancellati da questo sito e non potrai più autenticarti.',
	'REALY_DELETE' => 'Voglio davvero cancellare il mio account.',
	'UNDERSTAND_DELETE' => 'Comprendo che quest’azione non può essere annullata.',
	'DELETE_MY_POSTS' => 'Elimina anche i mei post (i post diventaranno post di ospite se non selezionata).',
	'ENTER_PASSWORD' => 'Inserisci la tua password',
	'ENTER_PASSWORD_HERE' => 'Digita la tua password qui...',
	'DELETED_USER' => 'Utente Eliminato %s',
	'DELETE_FINAL' => 'Conferma Finale',
	'DELETE_FINAL_CONFIRM' => '<p>Grazie per essere stato un membro di questo sito. Ci dispiace che tu te ne vada.</p><p>La tua richiesta è stata validata. Questa è la conferma finale. Vuoi cancellare il tuo account in modo permanente?</p>',

	'LOG_USER_DELETED' => 'L’utente %s (ID %s) ha cancellato il suo account. ',
	'LOG_POST_REMOVED' => 'I suoi post sono stati rimossi.',
	'LOG_POST_RETAINED' => 'I suoi post sono stati mantenuti.',
	'LOG_NO_POSTS' => 'Non aveva nesun post.',

	'REALLY_ERROR' => 'Devi confermare che vuoi effettivamente cancellare il tuo account.',
	'UNDERSTAND_ERROR' => 'Devi confermare che capisci che questo processo non può essere annullato.',
	'PASSWORD_ERROR' => 'La password che hai inserito non è corretta.',
	'FOUNDER_ERROR' => 'I fondatori non possono usare la procedura di autocancellazione.',
	'BAD_FORM_KEY_ERROR' => 'L’invio del form non ha potuto essere validato. Per favore, invia di nuovo la tua richiesta.',
	'GOODBYE_ERROR' => 'Il tuo account è stato eliminato.'

));
