<?php

	class View
	{

		public function show( $filename, $data = false )
		{
			include ( APPLICATION_ROOT . 'application/views/partials/' . $filename . '.php' );
		}

	}

?>