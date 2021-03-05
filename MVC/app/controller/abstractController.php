<?php
namespace MVC\app\controller;
use MVC\app\lib\Templete;
class AbstractController
{
	protected $data = [];
	protected $templete;
public  function notFoundAction()
	{
	  require VIEWS_PATH."notFound.view.php";
	}


public function setTemplete(Templete $templete)
{
	$this->templete = $templete;
}
    public function view($className , $functionName)
	{

//extract($this->data);
//var_dump($employees);
	//	$className = str_replace('Controller','',basename(__CLASS__)) ;
	//	$functionName = str_replace('Action','',basename(__FUNCTION__)) ;
	//	$calledName = str_replace('Action','',basename(get_called_class())) ;
	//	echo "</br>";
//echo $className , " , ", $functionName , " , ",$calledName;
//echo "</br>";
//echo(debug_backtrace()[1]["function"]);
//echo "saeed";
/*echo "<pre>";
var_dump($this->templete);
echo "</pre>";
require TEMPLETE_DIRECTORY_START_HEAD_FILE_PATH;
require TEMPLETE_DIRECTORY_END_HEAD_FILE_PATH;

require TEMPLETE_HEADER;
require TEMPLETE_BODY_WRAPPER_START_PATH;


require VIEWS_PATH.$className.DS.$functionName.".view.php";

require TEMPLETE_BODY_WRAPPER_END_PATH;*/

//$templete = new \MVC\app\lib\Templete($this->templete);
$this->templete->setMainView(VIEWS_PATH.$className.DS.$functionName.".view.php");
$this->templete->setData($this->data);
$this->templete->renderApp();
	}
	

	
}

?>	