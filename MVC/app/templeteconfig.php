<?php

return 
[
	'templete' =>
	[ 
		'head_start' => TEMPLETE_DIRECTORY_HEAD_DIRECTORY_PATH,
		'head_end' 	 => TEMPLETE_DIRECTORY_END_HEAD_FILE_PATH,
		'header'     => TEMPLETE_HEADER,
		'wrapper_start'  => TEMPLETE_BODY_WRAPPER_START_PATH,
		':view' => ":action_view",
		'wrapper_end'  	 => TEMPLETE_BODY_WRAPPER_END_PATH
	],

	'header_resources' =>
	[
		'css' => 
		[
			CSS."header.css",
			CSS."navBar.css"
		]
		,
		'js' => 
		[
			JS."jquery.js",
			JS."script.js"

		
		]


	]
];

?>

