<?php

class WW_Controller_Default extends WW_Controller_Base {

	public function __contruct($output, $params) {
		parent::__construct($output, $params);
	}

	public function indexAction() {
	
	}
	
	
	public function showTemplate($name) {
		$template = $this->output->loadTemplate($name.'.html');
		$template->display(array());
	}
	
}