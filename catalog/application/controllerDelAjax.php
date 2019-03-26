
<?php 
require_once "models/model.php";
require_once "base_classes/controller.php";
require_once "base_classes/view.php";
require_once "base_classes/mod.php";

class Model_Del extends Model
{
	public function data($id)
	{	
		del($id);
	}
}

class Controller_Del extends Controller
{
	function __construct()
	{
		$this->model = new Model_Del();
	}
		
	function action_index($id)
	{	
		$this->model->data($id);
	}
}
$id=$_REQUEST['id']; 
$controller = new Controller_Del;
$controller->action_index($id);