<?php
require_once "base_classes/controller.php";
require_once "base_classes/view.php";
require_once "base_classes/mod.php";


class Controller_Add extends Controller
{
	function __construct()
	{
		$this->view = new View();
	}
		
	function action_index()
	{	
		$this->view->generate('views/add_view.php', 'views/template_view.php', $data = null);
	}
}


$controller = new Controller_Add;
$action = "action_index";
$controller->$action();