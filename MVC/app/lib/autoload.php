<?php
/*class Autoload
{
    public static function load($className) {
    	echo "d";
    }
}
spl_autoload_register("Autoload::load");*/

spl_autoload_register(function($className)
{
	//use MVC\app\lib\FrontController;
   // require $_SERVER['DOCUMENT_ROOT'].$className.".php";
	//echo $className;
	/*echo $className;
	echo "</br>";
	echo $_SERVER['DOCUMENT_ROOT'];
	echo "</br>";*/

	
	$className = str_replace("MVC","",$className);
	$className = str_replace("\\","/",$className);	
	$filePath = $_SERVER['DOCUMENT_ROOT'].$className.".php";
	
	if (file_exists($filePath))
	{
			
		require($filePath);
	
		//echo $filePath;
	}
	else
	{
		echo "</br>";
		echo $filePath." not created";
		echo "</br>";
	}
	

	

})

?>