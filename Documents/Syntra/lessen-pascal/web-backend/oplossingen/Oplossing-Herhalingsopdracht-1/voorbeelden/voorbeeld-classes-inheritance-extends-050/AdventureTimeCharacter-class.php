<?php

	class AdventureTimeCharacter {

		public $timestamp, 
				$name,
				$catchPhrase,
				$profilePicture;

		// Een constructor wordt automatisch uitgevoerd bij het aanmaken van een instantie van een class
		public function __construct( $name, $catchPhrase, $profilePicture )
		{
			$this->timestamp 		= 	time();
			$this->name 			=	$name;
			$this->catchPhrase 		=	$catchPhrase;
			$this->profilePicture 	=	$profilePicture;
		}
		
		public function renewTimestamp()
		{
			$this->timeStamp = time();
		}
		
		public function getFormattedChatchPhrase() 
		{
			$processedTimestamp = date( "H:i", $this->timestamp );
			return '[' . $processedTimestamp . ']' . ' ' . $this->name .': "' . $this->catchPhrase . '"';
		}
	}

?>