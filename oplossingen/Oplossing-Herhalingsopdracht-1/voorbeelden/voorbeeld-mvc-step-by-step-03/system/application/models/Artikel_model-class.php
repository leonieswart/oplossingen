<?php

	class Artikel_model extends Model
	{
		public function getAllArticles()
		{
			$data	=	$this->selectAll( 'artikels' );

			return $data['data'];
		}

		public function getArticle( $id )
		{
			$query	=	'SELECT * 
							FROM artikels
							WHERE id = :id';

			$tokens	=	array( ':id' => $id );

			$articleData	=	 $this->query( $query, $tokens );

			return $articleData;
		}
	}

?>