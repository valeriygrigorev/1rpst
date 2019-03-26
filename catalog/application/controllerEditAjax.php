
 <?php 
require_once "models/model.php";
require_once "base_classes/controller.php";
require_once "base_classes/view.php";
require_once "base_classes/mod.php";

class Model_Edit extends Model
{
	public function data($id, $jenre, $author, $name, $year_db)
	{	
		update($id, $jenre, $author, $name, $year_db);
	}
}

class Controller_Edit extends Controller
{
	function __construct()
	{
		$this->model = new Model_Edit();
	}
		
	function action_index($id, $jenre, $author, $name, $year_db)
	{	
		
		$this->model->data($id, $jenre, $author, $name, $year_db);
	}
}

$id=$_REQUEST['id']; 
$jenre=$_REQUEST['addJenre'];
$author=$_REQUEST['addAuthor'];
$name=$_REQUEST['addName'];
$year=$_REQUEST['addYear'];
$year_db=$year."-01-01";

$controller = new Controller_Edit;
$controller->action_index($id, $jenre, $author, $name, $year_db);