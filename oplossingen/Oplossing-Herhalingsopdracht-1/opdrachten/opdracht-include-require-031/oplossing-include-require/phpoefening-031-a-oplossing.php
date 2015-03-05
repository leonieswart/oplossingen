<?php

	var_dump( $_GET );

	$artikels =	array(
					array(	'title'	=> 'Titel artikel 1',
							'body' 	=> 'Body artikel 1',
							'tags' 	=> 'Kernwoorden artikel 1',
					),
					array(	'title'	=> 'Titel artikel 2',
							'body' 	=> 'Body artikel 2',
							'tags' 	=> 'Kernwoorden artikel 2',
					),
					array(	'title'	=> 'Titel artikel 3',
							'body' 	=> 'Body artikel 3',
							'tags' 	=> 'Kernwoorden artikel 3',
					)
				);

	if ( isset( $_GET[ 'artikel' ] ) )
	{
		$artikel	=	$artikels[ $_GET[ 'artikel' ] ];
	}


	include 'view/partial-header.html';
	if ( !isset( $_GET[ 'artikel' ] ) )
	{
		include 'view/partial-artikels.html';
	}
	else
	{
		include 'view/partial-artikel.html';
	}
	include 'view/partial-footer.html';
	
?>