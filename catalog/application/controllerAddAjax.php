
 <?php 
require_once "models/model.php";
require_once "base_classes/controller.php";
require_once "base_classes/view.php";
require_once "base_classes/mod.php";

class Model_Add extends Model
{
	public function data($jenre, $author, $name, $year_db)
	{	
		insert($jenre, $author, $name, $year_db);
	}
}

class Controller_Add extends Controller
{
	function __construct()
	{
		$this->model = new Model_Add();
	}
		
	function action_index($jenre, $author, $name, $year_db)
	{	
		$this->model->data($jenre, $author, $name, $year_db);
	}
}

$jenre=$_REQUEST['addJenre'];
$author=$_REQUEST['addAuthor'];
$name=$_REQUEST['addName'];
$year=$_REQUEST['addYear'];
$year_db=$year."-01-01";

$controller = new Controller_Add;
$controller->action_index($jenre, $author, $name, $year_db);