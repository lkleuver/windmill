<?php

class WW_Controller_Default extends WW_Controller_Base {

	public function __contruct($output, $params) {
		parent::__construct($output, $params);
	}

	public function indexAction() {
	
	}
	
	
	public function showTemplate($section, $action) {
		$this->output->addGlobal("section", $section);
		
		if($section == "content") {
			$template = $this->output->loadTemplate($action.'.html');
			$template->display(array());
		}else{
			if($action == "" || $action == "index") {
				$content = Windmill::$bridge->getPageContent($section);
			}else{
				$content = Windmill::$bridge->getPageContent($action, true);
			}
			
			$template = $this->output->loadTemplate('content.html');
			$template->display(array("content" => $content));
		}
	}
	
}