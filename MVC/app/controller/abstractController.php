<?php
namespace MVC\app\controller;
class AbstractController
{
	protected $data = [];
public  function notFoundAction()
	{
	  require VIEWS_PATH."notFound.view.php";
	}

    public function view($className , $functionName)
	{

extract($this->data);
//var_dump($employee);
	//	$className = str_replace('Controller','',basename(__CLASS__)) ;
	//	$functionName = str_replace('Action','',basename(__FUNCTION__)) ;
	//	$calledName = str_replace('Action','',basename(get_called_class())) ;
	//	echo "</br>";
//echo $className , " , ", $functionName , " , ",$calledName;
//echo "</br>";
//echo(debug_backtrace()[1]["function"]);
		require VIEWS_PATH.$className.DS.$functionName.".view.php";
	}
	

	
}

?>	