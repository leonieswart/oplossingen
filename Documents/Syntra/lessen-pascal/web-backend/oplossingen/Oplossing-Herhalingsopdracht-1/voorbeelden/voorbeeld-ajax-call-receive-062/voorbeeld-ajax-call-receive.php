<?php

	$array	= array( 'vanille', 'aarbij', 'beste-smaak' => 'speculoos' );

	if ( isset( $_POST[ 'alert' ] ) )	
	{
		echo json_encode($array);
	}
	
?>