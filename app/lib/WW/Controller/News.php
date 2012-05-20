<?php

class WW_Controller_News extends WW_Controller_Base {

	public function __contruct($output, $params) {
		parent::__construct($output, $params);
	}

	public function postAction() {
	

		$template = $this->output->loadTemplate('news/post.html');
		$post = Windmill::$bridge->getPost($this->params[0]);
		$template->display(array("post" => $post));
	
	}
	
	
}