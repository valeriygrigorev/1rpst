<?php 
require_once "base_classes/controller.php";
require_once "base_classes/view.php";
require_once "base_classes/mod.php";
require_once "models/model.php";

class Model_Main extends Model
{
	public function data()
	{	
		$p = select();
		return $p;
	}
}

class Controller_Main extends Controller
{
	function __construct()
	{
		$this->model = new Model_Main();
		$this->view = new View();
	}
		
	function action_index()
	{	
		$data = $this->model->data();
		$this->view->generate('views/main_view.php', 'views/template_view.php', $data);
	}
}


$controller = new Controller_Main;
$action = "action_index";
$controller->$action();