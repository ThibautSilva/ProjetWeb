<?php

    abstract class Controler {

	protected $actionList;

	public function callAction($tab) {

	    if (array_key_exists('a', $tab)) {
		$temp = $this->actionList[$tab['a']];
		$this->$temp($tab);
	    } else {
		$this->defaultAction($tab);
	    }
	}

	abstract protected function defaultAction($tab);
    }