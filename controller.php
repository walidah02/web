<?php
include_once "Model/model.php";

class Controller {
	public $model;

	public function __construct(){
		$this->model = new Model();
	}

	public function proses(){
         $reslt = $this->model->getlogin();

     if($reslt == 'login'){
     	include 'view/afterlogin.php';
     }
     else{
     	include 'view/login.php';
     }

	}
}
?>