<?php
namespace MVC\app\lib;

class FrontController
{

private $__controller = "Index";
private $__action  = "default";
private $__param = array();
	function __construct() {
        $this->parseURL();
  }

  private function parseURL()
  {
  	$url = $_SERVER['REQUEST_URI'];
  	$arr = explode("/", trim($url , "/")  ) ;


  	if ( isset($arr[0]) && !empty($arr[0]))
  	{
  		$this->__controller = $arr[0];
  	}

  	if ( isset($arr[1]) && !empty($arr[1]))
  	{
  		$this->__action = $arr[1];
  	}

  	if ( isset($arr[2]) && !empty($arr[2]))
  	{
  		$this->__param = explode("/", $arr[2] );
  	}
  	
  	/*echo $controller . ", ".$action. ", ".$params;
  	echo "</br>";
  	echo $url;*/
  	//var_dump(explode("/", trim($url , "/") , 3));
  }

  function dispatch()
  {
  	$classController =  "MVC\app\controller\\".$this->__controller."Controller";  	
  	
  	
  	if (!class_exists($classController))  
  	{
  		$classController =     "MVC\app\controller\NotFoundController";
	
  	}
  
 	 

 	 $controller = new $classController;
  	

	
     $action = $this->__action."Action";


     if(!method_exists($controller, $action))
     {

     	 $action = "notFoundAction";
     }

     $controller->params =  $this->__param;
     $controller->$action();	


   
  	
  }
}