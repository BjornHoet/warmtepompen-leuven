<?php
//Start a new session
session_start();

$duration = 1800;
$localhost = in_array($_SERVER['SERVER_NAME'], ['localhost', '127.0.0.1']) ? 'X' : '';
$sendMails = true;
$mailOverruleTo = true;
$showTranslationKeys = false; 

setlocale(LC_MONETARY, 'nl_BE');
error_reporting(2);

if($localhost == 'X') {
	require_once($_SERVER['DOCUMENT_ROOT'] . '/warmtepompen-leuven/includes/translator.php');
	require_once($_SERVER['DOCUMENT_ROOT'] . '/warmtepompen-leuven/bin/functions/general.php');
	}
else {
	require_once($_SERVER['DOCUMENT_ROOT'] . '/includes/translator.php');
	require_once($_SERVER['DOCUMENT_ROOT'] . '/bin/functions/general.php');
	}

$errors = array();
const monthNames = ["Januari", "Februari", "Maart", "April", "Mei", "Juni", "Juli", "Augustus", "September", "Oktober", "November", "December"];  
?>