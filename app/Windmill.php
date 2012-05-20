<?php

class Windmill {

	/* static variables */
	public static $path;
	public static $config;
	public static $bridge;

	//twig
	private $output;
	
	//wordpress

	
	public function Windmill($config) {
		//path to root of stallcount9 app
		Windmill::$path = dirname(__FILE__)."/";
		Windmill::$config = $config;
		$this->registerAutoloader();


		//output controller
		$this->output = new WW_Output_TwigOutput(Windmill::$path.'tpl', Windmill::$path.'data/output/cache');
		$this->output->setBase($config["siteroot"]);
		
		Windmill::$bridge = new WW_Input_WordpressBridge($config["db"]);
		if(!Windmill::$bridge->connect()) {
			echo "Could not connect to database, whoopsie";
			exit;
		}
	}

	/**
	 * 
	 * Handle HTTP requests matching controller and action automatically
	 * @param Array $req request object ($_REQUEST usually)
	 */
	public function handleRequests() {
		$n = isset($_SERVER["REQUEST_URI"]) ? $_SERVER["REQUEST_URI"] : "";
		$xpl = explode("/", trim($n,"/")); // make array and drop prepending or trailing slashes

		$section 	= count($xpl) > 0 && $xpl[0] != "" ? array_shift($xpl) : "home"; // $n was empty
		$action 	= count($xpl) > 0 ? array_Shift($xpl) : "index";				 // $n only contained a section

		//hack
		if(count($xpl) > 0) {
			$_REQUEST[$section."Id"] = $xpl[0];
		} 


		$class 	= "WW_Controller_".ucfirst($section);
		$method	= $action."Action"; 

		if(class_exists($class)) {
			$controller = new $class($this->output, $xpl);
			if(method_exists($controller, $method)) {
				$controller->{$method}();	
			}else{
				$controller->indexAction();
			}
		}else{
			$controller = new WW_Controller_Default($this->output, $xpl);
			$controller->showTemplate($section, $action);
		}
	}


	/** 
	 * Register autoloaders used by stallcount9
	 */
	public function registerAutoloader() {
		ini_set('unserialize_callback_func', 'spl_autoload_call');
		spl_autoload_register(array('Windmill', 'autoload'));
	}


	/**
	 * 
	 * Autoloading function
	 * @param String $class name of class being autoloaded
	 */
    static public function autoload($class) {
		$file = Windmill::$path.'lib/'.str_replace('_', '/', $class).'.php';
		
		
        if (file_exists($file)) {
            require $file;
            return;
        }
    }

}