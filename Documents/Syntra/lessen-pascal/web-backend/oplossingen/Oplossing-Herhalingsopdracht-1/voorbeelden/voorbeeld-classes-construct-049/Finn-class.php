<?php

	class Finn {

		public $timestamp, $secretMessage;
		public $name 			= 	'Finn';
		public $profilePicture 	= 	'finn.jpg';

		// Een constructor wordt automatisch uitgevoerd bij het aanmaken van een instantie van een class
		public function __construct( )
		{
			$this->secretMessage = 'Psst, dit is een geheime boodschap van ' . $this->name . ' vanuit de constructor.';
			$this->timestamp = time();
		}
		
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