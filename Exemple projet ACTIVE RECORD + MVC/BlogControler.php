<?php

    include('Controler.php');

    class BlogControler extends Controler {

	public function __construct() {
	    $this->actionList = array(
		'list'	 => 'listAction',
		'detail' => 'detailAction',
		'cat'	 => 'catAction');
	}

	protected function listAction($tab) {
	    echo 'listAction -> param : ' . print_r($tab);
	}

	protected function detailAction($tab) {
	    if (array_key_exists('id', $tab)) {
		echo 'detailAction -> param : ' . $tab['id'];
	    }
	}

	protected function catAction($tab) {
	    if (array_key_exists('id', $tab)) {
		echo 'catAction -> param : ' . $tab['id'];
	    }
	}

	protected function defaultAction($tab) {
	    $this->listAction($tab);
	}

    }