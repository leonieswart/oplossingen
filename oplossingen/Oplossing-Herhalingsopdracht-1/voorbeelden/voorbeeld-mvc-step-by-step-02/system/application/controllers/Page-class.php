<?php


	class Page extends Controller
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
			View::show( 'header' );
			View::show( 'index-body' );
			View::show( 'footer' );
		}

	}

?>