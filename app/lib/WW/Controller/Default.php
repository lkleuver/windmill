<?php

class WW_Controller_Default extends WW_Controller_Base {

	public function __contruct($output, $params) {
		parent::__construct($output, $params);
	}

	public function indexAction() {
	
	}
	
	
	public function showTemplate($section, $action) {
		if($section == "content") {
			$content = Windmill::$bridge->getPageContent($action);
			$template = $this->output->loadTemplate('content.html');
			$template->display(array("content" => $content));
		}else{
			$template = $this->output->loadTemplate($name.'.html');
			$template->display(array());
		}
	}
	
}