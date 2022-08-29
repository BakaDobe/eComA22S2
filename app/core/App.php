<?php
	
	namespace app\core;

	class App{
		public function __constraint(){
			echo $_GET['url'];
		}
	}