<?php 

	class BadGuy extends AdventureTimeCharacter
	{

		public function __construct( $name, $catchPhrase, $profilePicture )
		{
			parent::__construct( $name, $catchPhrase, $profilePicture );
		}

		public function doEvilLaughter()
		{
			$this->renewTimestamp();
			$processedTimestamp = date( "H:i", $this->timestamp );
			return '[' . $processedTimestamp . ']' . ' ' . $this->name .': "Moehahaha!"';
		}

		public function kidnapCharacter( $prisoner )
		{
			$this->renewTimestamp();
			$processedTimestamp = date( "H:i", $this->timestamp );
			return '[' . $processedTimestamp . ']' . ' ' . $this->name .': "I am ' . $this->name . ' and I\'m kidnapping ' . $prisoner->name .'"';
		}
		
	}

?>