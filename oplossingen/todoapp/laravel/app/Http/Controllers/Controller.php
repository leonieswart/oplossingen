<?php namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

abstract class Controller extends BaseController {

	use DispatchesCommands, ValidatesRequests;


	public function __construct()
	{

			//als je een gast bent dan word je gestuurd naar index
			if  ( \Auth::guest() )
			
			{
				$pad = "auth/register";
				\View::share('pad', $pad);
	
				return redirect('/');
				
			}

			// ben je ingelogd dan word je gestuurd naar taken overzicht
			else

			{

					if (\Auth::check())
						{
						   $user = \Auth::user()->email;
							\View::share('user', $user);

							$pad = "taken";
							\View::share('pad', $pad);
						}

					else
						
						{
							$user = \Auth::guest(); 
						
							\View::share('user', $user);
						}	

					$nietKlaar = \DB::table('taken')->where('gebruiker', $user)->where('voltooid', '0')->get();
					$klaar = \DB::table('taken')->where('gebruiker', $user)->where('voltooid', '1')->get();

					$onvoltooid = count($nietKlaar);
					$voltooid = count($klaar);

					\View::share('nietKlaar', $nietKlaar);
					\View::share('klaar', $klaar);
					\View::share('onvoltooid', $onvoltooid);
					\View::share('voltooid', $voltooid);	

			}		

	}
	

}
