<?php
namespace app\controllers;

class Main extends \app\core\Controller{
	public function index(){
		$this->view('Main/index');
	}

	public function index2(){
		echo "Main index2";
	}

	public function say($message){
		$this->view('Main/say',$message);
	}
}