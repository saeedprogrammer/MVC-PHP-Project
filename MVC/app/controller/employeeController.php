<?php
namespace MVC\app\controller;

//require_once 'app\model\DB.php';


//require "app\model\DB.php";

//use MVC\app\model;

//require "app\model\Employee.php";
use MVC\app\model\Employee;

use MVC\app\lib\Helper;
class EmployeeController extends AbstractController
{
	use  Helper;
	function __construct() {
		echo "</br>";
		//echo "IndexController";
		//define('SS', 'saeed');
		//echo SS;
  }



	public function defaultAction()
	{


		$this->data["employee"] = Employee::getAll();

		$className = str_replace('Controller','',basename(__CLASS__)) ;
		$functionName = str_replace('Action','',basename(__FUNCTION__)) ;
		
		echo $this->view($className,$functionName);
	}

	public function addAction()
	{

  if (isset($_POST["submit_button"]))
		{
			$emp = new Employee();
			$emp->name = $_POST["name"];
			$emp->age = $_POST["age"];
			$emp->adress = $_POST["name"];
			$emp->salary = $_POST["salary"];
			$emp->tax = $_POST["tax"];
			$emp->insert();
			$this->redirect("/employee");
		
		}
		else
		{
			
		
		$className = str_replace('Controller','',basename(__CLASS__)) ;
		$functionName = str_replace('Action','',basename(__FUNCTION__)) ;
		
		 $this->view($className,$functionName);
		}

		
	}

	public function editAction()
	{

		if (isset($_POST["submit_button"]))
		{
			$emp = new Employee();
			$emp->name = $_POST["name"];
			$emp->age = $_POST["age"];
			$emp->adress = $_POST["name"];
			$emp->salary = $_POST["salary"];
			$emp->tax = $_POST["tax"];
			$emp->update($this->params[0]);
			$this->redirect("/employee");
		
		}
		else
		{
		if (isset($this->params))
		{
			$this->data["person"] = Employee::getByPrimaryKey($this->params[0]);
		}
		$className = str_replace('Controller','',basename(__CLASS__)) ;
		$functionName = str_replace('Action','',basename(__FUNCTION__)) ;
		
		 $this->view($className,$functionName);
		}
		
	}
	
	public function deleteAction()
	{

		$emp = Employee::getByPrimaryKey($this->params[0]);
	
			
			$emp->delete();
			$this->redirect("/employee");
		
	}
	
}

