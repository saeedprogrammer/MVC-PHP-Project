<?php
namespace MVC;

//echo "saeed";
require "app\model\DB.php";
use PDO;


require "app\config.php";
$templeteConfig = require "app\\templeteconfig.php";

use MVC\app\lib\Templete;
use MVC\app\lib\FrontController;
require("app/lib/autoload.php");



$templete = new Templete($templeteConfig);
$frontController = new  FrontController($templete);
$frontController->dispatch();


//use PDO;

//use MVC\app\model\Employee; 
//require "app\model\DB.php";
//Employee::getAll();
//$f = new Employee;
//global $pdo;


 /*class FF
 {
 	static function f()
 	{
 		global $pdo;
 		var_dump($pdo);
 		 $sql = "select * from Person" ;
		 $stm = $pdo->prepare($sql);
		 $stm->execute();
		 $people = $stm->fetchAll(PDO::FETCH_CLASS,  "MVC\app\model\Employee");
		 var_dump($people);
 	}
 }*/

//$fs = new FF();
//FF::f();
//echo "</br>";
//Employee::getAll();
//$f = new Employee;
 // var_dump($pdo);    



?>