<?php

	function __autoload($className)
	{
		include_once 'classes/' . $className . '-class.php'; 
	}

	$body 	= (isset( $_GET['page'] ) ? $_GET['page'] : 'index') . '-body.html';
	
	$page	=	new HTMLbuilder('header.html', $body, 'footer.html');


?>