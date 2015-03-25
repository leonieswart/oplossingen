<?php
	
	header("Content-type: application/json");

	$var1 = $_POST['var1'];
	$var2 = $_POST['var2'];

	$jsonObj = '{

		"obj1"	:	{	"EigenschapA" : "'.$var1.'",	"EigenschapB" : "'.$var2.'"    }

	}'


	echo $jsonObj;

?>