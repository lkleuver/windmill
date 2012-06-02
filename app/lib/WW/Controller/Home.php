<?php

class WW_Controller_Home extends WW_Controller_Base {

	public function __contruct($output, $params) {
		parent::__construct($output, $params);
	}

	public function indexAction() {
		$template = $this->output->loadTemplate('home.html');
		
		$items = Windmill::$bridge->getPosts("news");
		$welcome = Windmill::$bridge->getPageContent("welcome");
		$sponsors = Windmill::$bridge->getPageContent("sponsors");
		
		$template->display(array("items" => $items, "welcome" => $welcome, "sponsors" => $sponsors));
	
	}
	
	
}