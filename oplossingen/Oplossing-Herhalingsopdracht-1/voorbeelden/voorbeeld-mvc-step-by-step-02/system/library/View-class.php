<?php

	class View
	{

		public function show( $filename )
		{
			include ( APPLICATION_ROOT . 'application/views/partials/' . $filename . '.php' );
		}

	}

?>