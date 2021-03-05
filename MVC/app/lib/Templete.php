<?php
namespace MVC\app\lib;
class Templete
{
	private $templeteConfig;
	private $mainView;
	private $data;
	public function __construct(array $templeteConfig)
	{
		$this->templeteConfig = $templeteConfig;
	}

	public function setData($data)
	{
		$this->data = $data;
	}
	public function setMainView($mainView)
	{
		$this->mainView = $mainView;
	}

	public function renderApp()
	{

$header = "";
		$header_resources = $this->templeteConfig["header_resources"];
		$css = $header_resources["css"];
		foreach ($css as $cssKey => $cssPath) {
			$link = '<link type="text/css" rel="stylesheet" href="'.$cssPath.'"/>';
			$header = $header . $link;
		}
		//echo "-----";
		$js = $header_resources["js"];
		foreach ($js as $jsKey => $jsPath) {
			$script = '<script  src="'.$jsPath.'"></script>';
	//	echo	'<script src="/public/templete/JS/jquery.js"></script>';
	//echo '<script src="/public/templete/JS/script.js"></script>';
			//echo $script;
			$header = $header . $script;
		}
		echo $header;
		extract($this->data);
require TEMPLETE_DIRECTORY_START_HEAD_FILE_PATH;
require TEMPLETE_DIRECTORY_END_HEAD_FILE_PATH;

require TEMPLETE_HEADER;
require TEMPLETE_BODY_WRAPPER_START_PATH;
require $this->mainView;

//require VIEWS_PATH.$className.DS.$functionName.".view.php";
//require 
require TEMPLETE_BODY_WRAPPER_END_PATH;
	}
}
?>