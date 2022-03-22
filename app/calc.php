<?php
require_once dirname(__FILE__).'/../config.php';
require_once _ROOT_PATH.'/lib/smarty/Smarty.class.php';

function getParams(&$form)
{
	$form['kwota'] = isset($_REQUEST['kwota']) ? $_REQUEST['kwota'] : null;
	$form['procent'] = isset($_REQUEST['procent']) ? $_REQUEST['procent'] : null;
	$form['czas'] = isset($_REQUEST['czas']) ? $_REQUEST['czas'] : null;	
}

function validate(&$form,&$infos,&$msgs,&$hide_intro)
{

	if ( ! (isset($form['kwota']) && isset($form['procent']) && isset($form['czas']) ))	return false;	
	
 
	$hide_intro = true;
	$infos [] = 'Przekazano parametry.';

	if ( $form['kwota'] == "") $msgs [] = 'Nie podano kwoty';
	if ( $form['procent'] == "") $msgs [] = 'Nie podano oprocentowania';
	if ( $form['czas'] == "") $msgs [] = 'Nie podano okresu';

	if ( count($msgs)==0 ) 
	{
		if (! is_numeric( $form['kwota'] )) $msgs [] = 'Wprowadzona kwota nie jest liczbą';
		if (! is_numeric( $form['procent'] )) $msgs [] = 'Wprowadzone oprocentowanie nie jest liczbą';
		if (! is_numeric( $form['czas'] )) $msgs [] = 'Wprowadzony okres czasu nie jest liczbą';
	}
	
	if (count($msgs)>0) return false;
	else return true;
}
	
// wykonaj obliczenia
function process(&$form,&$infos,&$msgs,&$result){
	$infos [] = 'Parametry poprawne. Wykonuję obliczenia.';
	
	$form['kwota'] = floatval($form['kwota']);
	$form['procent'] = floatval($form['procent']);
	$form['czas'] = floatval($form['czas']);

	
	//wykonanie operacji

    $n = $form['czas']*12;             //liczba rat
    $result = round(($form['kwota']/$n)+($form['kwota']*(($form['procent']/100)/12)), 2);
	
}

//inicjacja zmiennych
$form = null;
$infos = array();
$messages = array();
$result = null;
$hide_intro = false;
	
getParams($form);
if ( validate($form,$infos,$messages,$hide_intro) )
{
	process($form,$infos,$messages,$result);
}

// 4. Przygotowanie danych dla szablonu

$smarty = new Smarty();

$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('page_title','Kalkulator kredytowy');
$smarty->assign('page_description','Profesjonalne obliczanie miesięcznej raty kredytu');
$smarty->assign('page_header','Kalkulator kredytowy');
$smarty->assign('hide_intro',$hide_intro);

$smarty->assign('form',$form);
$smarty->assign('result',$result);
$smarty->assign('messages',$messages);
$smarty->assign('infos',$infos);

$smarty->display(_ROOT_PATH.'/app/calc.html');