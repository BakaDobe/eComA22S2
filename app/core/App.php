<?php
	
	namespace app\core;

	class App{
		private $controller = 'Main';
		private $method = 'index';

		public function __construct(){
			//echo $_GET['url'];
			//TODO: replace this echo with the routing algorithm
			//goal: seperate the url in parts
			//use the first part to determine the class to load
			//use the second part to determine the method to run
			//while passing all other parts as arguments

			$url = self::parseUrl(); //get the url parsed and returned as an array of URL segment

			if (isset($url[0])) {
				if (file_exists('app/controllers/' . $url[0] . '.php')) {
					$this->controller = $url[0]; //$this refers to the current object
				}
				unset($url[0]);
			}
			$this->controller = 'app\\controllers\\' . $this->controller; //provide a fully qualified classname
			$this->controller = new $this->controller;

			//use the second part to determine the method to run
			//while passing all ohter parts as arguments

			if(isset($url[1])){
				if (method_exists($this->controller, $url[1])){
					$this->method = $url[1];
				}
				unset($url[1]);
			}

			$params = $url ? array_values($url): [];

			call_user_func_array([ $this->controller, $this->method ], $params);
		}

		public static function parseUrl(){
			if (isset($_GET['url']))//get url exists 
			{
				return explode('/', //return parts in an array seperated by /
					filter_var( //remove non-URL characters and sequences
						rtrim($_GET['url'], '/'))
					,FILTER_SANITIZE_URL);
			}
		}
	}