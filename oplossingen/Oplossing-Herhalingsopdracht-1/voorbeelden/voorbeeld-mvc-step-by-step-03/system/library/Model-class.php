<?php

	class Model
	{

		public $db;

		public function __construct()
		{
			try
			{
				$this->db = new PDO('mysql:host=localhost;dbname=voorbeeld-mvc;charset=utf8mb4', 'root', '' ); // Connectie maken
			}
			catch ( PDOException $e )
			{
				var_dump( $e );
			}
		}

		// Algemene functie die voor elk model aanspreekbaar is
		public function query( $query, $tokens = false )
		{
			$statement = $this->db->prepare( $query );
			
			if ( $tokens )
			{
				foreach ( $tokens as $token => $tokenValue )
				{
					$statement->bindValue( $token, $tokenValue );
				}
			}

			$statement->execute();

			/*  Veldnamen ophalen*/
			$fieldnames	=	array();

			for ( $fieldNumber = 0; $fieldNumber < $statement->columnCount(); ++$fieldNumber )
			{
				$fieldnames[]	=	$statement->getColumnMeta( $fieldNumber )['name'];
			}

			/*De brouwer-data ophalen*/
			$data	=	array();

			while( $row = $statement->fetch( PDO::FETCH_ASSOC ) )
			{
				$data[]	=	$row;
			}

			$returnArray['fieldnames']	=	$fieldnames;
			$returnArray['data']		=	$data;

			return $returnArray;
		}

		// Algemene functie die voor elk model aanspreekbaar is
		public function selectAll( $table )
		{

			// Een query klaarmaken. 
			$query = 'SELECT * 
						FROM ' . $table;

			$tokens	=	array( ':table' => $table );

			$result 	=	$this->query( $query, $tokens );

			return $result;
		}

	}

?>