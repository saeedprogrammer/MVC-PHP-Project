<?php
 
//namespace MVC\app\model;
//require "app\model\AbstractModel.php";
// use PDO;

$pdo = null;
try
{
$pdo = new PDO("mysql://hostname=localhost;dbname=testdb" ,"root", "");

}
catch(PDOException $exp)
{
echo $exp->getMessage();
}

?>	