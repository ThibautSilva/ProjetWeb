<?php

    include('Controler.php');

    class AdminContoler {

	public function __construct() {
	    $this->actionList = array(
		'addM'	 => 'addMAction',
		'saveM'	 => 'saveMaction',
		'addC'	 => 'addCAction',
		'saveC'	 => 'saveCAction');
	}

	protected function addMaction($tab) {
	    echo ('addMAction -> param : ' . print_r($tab));
	}

	protected function saveMaction($tab) {
	    echo ('saveMaction -> param : ' . $tab['id']);
	}

	protected function addCAction($tab) {
	    echo ('addCAction -> param : ' . $tab['id']);
	}

	protected function saveCAction($tab) {
	    echo ('saveCAction -> param : ' . $tab['id']);
	}

	protected function defaultAction($tab) {
	    $this->addMaction($tab);
	}

    }