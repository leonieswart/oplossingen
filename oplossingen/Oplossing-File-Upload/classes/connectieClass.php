<?php
		class Database
		{
			private $db;

			public  function __construct( $connectie )
					{
						$this->db = $connectie;
					}

			public  function query( $queryString, $placeholders = FALSE )
					{
						$statement = $this->db->prepare( $queryString );

						if  ( $placeholders )

							{
								foreach( $placeholders as $placeholderName => $placeholderValue )

								{
									$statement->bindValue( $placeholderName, $placeholderValue );
								}

							}
						
						$statement->execute();

						$result	=	array();
						
						while   ( $row = $statement->fetch( PDO::FETCH_ASSOC ) )
								{
									$result[]	=	$row;
								}

						if  ( empty( $result ) )
							{
								$result = false;
							}

						return $result;
					}

			public  function queryInsert ($queryString, $placeholders = FALSE)
					{
						$statement = $this->db->prepare ( $queryString );

						if  ( $placeholders )

							{
								foreach( $placeholders as $placeholderName => $placeholderValue )

								{
									$statement->bindValue( $placeholderName, $placeholderValue );
								}

							}

						$statement->execute();

					}		
		}
?>