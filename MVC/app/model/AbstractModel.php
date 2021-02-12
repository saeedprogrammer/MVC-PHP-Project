<?php 
namespace MVC\app\model;

require "app\model\DB.php";
use PDO;

class AbstractModel 
{

    static function buildNamedParametersSQL()
	{
	

		$namedParams= "";
		foreach (static::$tableSchema as $columnName)
		{
		
			$namedParams = $namedParams . $columnName. "= :" .$columnName. ",";
			
		}
		//echo $namedParams;
		return trim($namedParams , ',');
	}

	public function insert()
	{
	global $pdo;
	  $sql = "INSERT INTO ".static::$tableName." SET ".static::buildNamedParametersSQL();
	  $stm = $pdo->prepare($sql);
	 $paramArray = array(); 
	 foreach (static::$tableSchema as $columnName)
		{
		
	
			$paramArray[":".$columnName] = $this->$columnName;
			
		}
		
		
	$stm->execute($paramArray);	
		
	//var_dump ($stm->execute($paramArray));
	
	//echo $stm->debugDumpParams();


}


public function update($ID)
	{
		 $primaryKey = static::$primaryKey;
	//var_dump ($this->$(static::$primaryKey));
	global $pdo;
	  $sql = "update ".static::$tableName." SET ".static::buildNamedParametersSQL() ." where ". $primaryKey ." = ".$ID;
	  $stm = $pdo->prepare($sql);
	 
	 $paramArray = array(); 
	 foreach (static::$tableSchema as $columnName)
		{
		
	
			$paramArray[":".$columnName] = $this->$columnName;
			
		}
		
		
		$stm->execute($paramArray);
		



}

public function delete()
	{
	//echo (static::$primaryKey);
		 $primaryKey = static::$primaryKey;
	global $pdo;
	  $sql = "delete from ".static::$tableName." where ".  $primaryKey ." = :". $primaryKey;
	  $stm = $pdo->prepare($sql);
	 
	$paramArray[":". $primaryKey] = $this->$primaryKey;
			
		
		
		$stm->execute($paramArray);
		



}

public static function  getAll()
	{
		
	
	 global $pdo;
	
	  $sql = "select * from ".static::$tableName ;
	  $stm = $pdo->prepare($sql);
	 
	 $stm->execute();

 
	
	$people = $stm->fetchAll($pdo::FETCH_CLASS,  static::get_called_calss());

	return $people;


}

public static function  getByPrimaryKey($ID)
	{

		 $primaryKey = static::$primaryKey;
		 echo $primaryKey;
echo $ID;

	 global $pdo;
	  $sql = "select * from ".static::$tableName." where  " . $primaryKey ." = :".$primaryKey;
	  $stm = $pdo->prepare($sql);
	 
	 $paramArray[":".$primaryKey] = $ID;
	 $stm->execute($paramArray);                                                                                                                                                                                                  
	

	
	$people = $stm->fetchAll(PDO::FETCH_CLASS,  static::get_called_calss());
		
	var_dump($people[0]) ;
	return $people[0];


}

}
?>

