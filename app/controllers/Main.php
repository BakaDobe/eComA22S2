<?php
namespace app\controllers;

class Main extends \app\core\Controller{
	public function index(){
		$this->view('Main/index');
	}

	public function index2(){
		$this->view('Main/index2');
	}

	public function say($message="Defaut messages"){
		$this->view('Main/say',$message);
	}

	public function foods(){
		var_dump($_POST);
		//the form is submitted
		if (isset($_POST['action'])) {
			$fh = fopen('app/Resources/foods.txt', 'a');
			flock($fh, LOCK_EX);
			fwrite($fh, $_POST['new_food'] . "\n");
			flock($fh, LOCK_UN);
			fclose($fh);
		}
		//read a file 
		$foods = file('app/Resources/foods.txt');
		//call a view that displays the file contents
		$this->view('Main/foods',$foods);
	}
}