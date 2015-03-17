<?php
		class Insert
		{
			private $database;

			public  function __construct( $connectie )
					{
						$this->database = $connectie;
					}

			public  function queryInsert( $queryString )
					{
						$InsertStatement = $this->database->prepare( $queryString );
						
						$InsertStatement->execute();

						$message = "Het registreren verliep succesvol.";

						return $message;
					}
		}
?>