<?php
require_once $conf->root_path.'/lib/smarty/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/calc/CalcForm.class.php';
require_once $conf->root_path.'/app/calc/CalcResult.class.php';

class CalcCtrl 
{

	private $msgs;   
	private $form;  
    private $infos;  
	private $result; 
	private $hide_intro; 

    public function __construct()
    {
		$this->msgs = new Messages();
		$this->form = new CalcForm();
		$this->result = new CalcResult();
		$this->hide_intro = false;
	}

    public function getParams()
    {
        $this->form->kwota = isset($_REQUEST['kwota']) ? $_REQUEST['kwota'] : null;
        $this->form->procent = isset($_REQUEST['procent']) ? $_REQUEST['procent'] : null;
        $this->form->czas = isset($_REQUEST['czas']) ? $_REQUEST['czas'] : null;	
    }
    
    public function validate()
    {

	if (! (isset ( $this->form->kwota ) && isset( $this->form->procent) && isset($this->form->czas)))	
    {
        return false;	
    } 
    else 
    { 
        $this->hide_intro = true;
    }
	

	if ($this->form->kwota == "") 
    {
        $this->msgs->addError('Nie podano kwoty');
    }
	if ($this->form->procent == "") 
    {
        $this->msgs->addError('Nie podano oprocentowania');

    }
	if ($this->form->czas == "") 
    {
        $this->msgs->addError('Nie podano oprocentowania');

    }
	if (! $this->msgs->isError()) 
	{
		if (! is_numeric( $this->form->kwota ))
        {
            $this->msgs->addError('Wprowadzona kwota nie jest liczbą');
        }
		if (! is_numeric( $this->form->procent )) 
        {
            $this->msgs->addError('Wprowadzone oprocentowanie nie jest liczbą');
        }
		if (! is_numeric( $this->form->czas )) 
        {
            $this->msgs->addError('Wprowadzony okres czasu nie jest liczbą');
        }
	}
	
    return ! $this->msgs->isError();

}
	
// wykonaj obliczenia
public function process()
    {
        $this->getparams();

        if ($this->validate()) 
        {
        
        
            $this->form->kwota = intval($this->form->kwota);
            $this->form->procent = intval($this->form->procent);
            $this->form->czas = intval($this->form->czas);
            $this->msgs->addInfo('Parametry poprawne.');

            $n = $this->form->czas*12;             //liczba rat
            $this->result->result = round(($this->form->kwota/$n)+($this->form->kwota*(( $this->form->procent/100)/12)), 2);
            
            $this->msgs->addInfo('Obliczono miesięczną rate.');
        }

        
        $this->generateView();

    }



public function generateView()
    {
    global $conf;
    $smarty = new Smarty();
    $smarty->assign('conf',$conf);

    $smarty->assign('page_title','Kalkulator kredytowy');
    $smarty->assign('page_description','Profesjonalne obliczanie miesięcznej raty kredytu');
    $smarty->assign('page_header','Kalkulator kredytowy');

    $smarty->assign('hide_intro',$this->hide_intro);

    $smarty->assign('msgs',$this->msgs);
    $smarty->assign('form',$this->form);
    $smarty->assign('res',$this->result);

    $smarty->display($conf->root_path.'/app/calc/CalcView.html');
    }
}