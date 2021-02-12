<?php
namespace MVC\app\controller;

class NotFoundController extends AbstractController
{
	function __construct() {
		echo "</br>";
		echo "NotFoundController";
  }
  
  public function defaultAction()
	{
		echo "</br>";
		echo "defaultAction";
	}



}

