<?php


	class Pages extends Controller
	{


		public function __construct( $page )
		{
			if ( isset( $page[0] ) && $page[0] == 'home')
			{
				$this->showIndex();
			}
		}

		public function showIndex()
		{
			$data['title'] = 'Overzicht van MVC: step 3';

			View::show( 'header', $data );
			View::show( 'index-body');
			View::show( 'footer' );
		}

	}

?>