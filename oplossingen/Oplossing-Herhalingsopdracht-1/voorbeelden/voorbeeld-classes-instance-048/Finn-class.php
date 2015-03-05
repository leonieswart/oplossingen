<?php

	class Finn {

		public $timestamp;
		public $name 			= 'Finn';
		public $profilePicture 	= "finn.jpg";

		
		public function getCatchPhrase() 
		{
			return 'Mathematical!';
		}

		public function setTimestamp( ) 
		{
			$this->timestamp = time();
		}

		public function getTimestamp()
		{
			$processedTimestamp = date( "H:i", $this->timestamp );
			return $processedTimestamp;
		}

	}

?>