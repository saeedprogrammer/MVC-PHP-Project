<?php
//namespace Main\Controllers\Firstbackage;
//namespace Main2\Urils;
//namespace Main\Urils\Persons;


namespace MVC\app\model;
//include 'AbstractModel.php';
   
//require "app\model\AbstractModel.php";
//use PDO;

//require "app\model\DB.php";
require "app\model\DB.php";
use PDO;
class Employee extends AbstractModel
{
  public $ID;
  public $name;
  public $age;
  public $adress;
  public $salary;
  public $tax;
  
  public static $tableName = "employees";
  public static $primaryKey = "ID";
  public static $tableSchema = array('name' ,'age','adress','salary','tax');
  
  public static function get_called_calss()
  {
	return __CLASS__;
  }
  
  public function calculateSalary()
  {
	return ($this->salary - $this->tax);
  }

  public static function  getsaeed()
  {
    //require "app\model\DB.php";
    global $pdo;
    var_dump($pdo);
  }

}




?>

