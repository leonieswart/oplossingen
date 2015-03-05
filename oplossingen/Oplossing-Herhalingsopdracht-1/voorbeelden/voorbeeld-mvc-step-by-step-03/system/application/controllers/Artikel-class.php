<?php

	// Controller van artikels
	class Artikel extends Controller
	{
		public $model;

		public function __construct( $functionality )
		{
			// Instantie aanmaken van het model
			$this->model = new Artikel_model();

			if ( empty( $functionality ) )
			{
				// Roep de methode aan die instaat voor het aanmaken van het artikel-overview
				$this->showArtikels();
			}
			else
			{
				// Roep de methode aan die instaat voor het aanmaken van één artikel-view
				$this->showArtikel( $functionality[0] );
			}

			
		}

		# Overzicht
		public function showArtikels()
		{
			$data['title']		=	'Overzicht van de artikels';
			$data['artikels'] 	=	$this->model->getAllArticles();

			View::show( 'header', $data );
			View::show( 'artikel-overzicht-body', $data );
			View::show( 'footer' );
		}

		# Eén artikel
		public function showArtikel( $id )
		{
			# Haal data op op basis van het ID dat in de url staak (=de hook)
			$articleData	=	$this->model->getArticle( $id );

			# Prepare data voor in body
			$data['artikel']	=	$articleData['data'][0];

			# Zet title in head
			$data['title']		=	$data['artikel']['titel'];

			View::show( 'header', $data );
			View::show( 'artikel-enkel-body', $data );
			View::show( 'footer' );
		}
	}

?>