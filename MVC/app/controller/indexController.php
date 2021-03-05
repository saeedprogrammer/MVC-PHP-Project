<?php
namespace MVC\app\controller;

//require "MVC\app\config.php";
//require "..\MVC\app\config.php";
//require "app\config.php";

class IndexController extends AbstractController
{
	function __construct() {
		//echo "</br>";
		echo "IndexController";
		
  }

	public function defaultAction()
	{
		$className = str_replace('Controller','',basename(__CLASS__)) ;
		$functionName = str_replace('Action','',basename(__FUNCTION__)) ;
		
		echo $this->view($className,$functionName);
	}
	
	
}

