<?php
		class Database
		{
			private $db;

			public  function __construct( $connectie )
					{
						$this->db = $connectie;
					}

			public  function query( $queryString )
					{
						$statement = $this->db->prepare( $queryString );
						
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
		}
?>