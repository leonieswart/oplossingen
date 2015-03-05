<?php 

	class GoodGuy extends AdventureTimeCharacter
	{

		public function __construct( $name, $catchPhrase, $profilePicture )
		{
			parent::__construct( $name, $catchPhrase, $profilePicture );
		}

		public function tauntBadGuy( $character )
		{
			$this->renewTimestamp();
			$processedTimestamp = date( "H:i", $this->timestamp );
			return '[' . $processedTimestamp . ']' . ' ' . $this->name .': "Nanana, you\'ll never catch me, ' . $character->name . '!"';
		}

		public function freeCharacter( $prisoner, $kidnapper )
		{
			$this->renewTimestamp();
			$processedTimestamp = date( "H:i", $this->timestamp );
			return '[' . $processedTimestamp . ']' . ' ' . $this->name .': "I am ' . $this->name . ' and I\'m freeing ' . $prisoner->name . ' from ' . $kidnapper->name .'."';
		}

	}

?>