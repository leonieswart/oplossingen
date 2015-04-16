<?php namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

abstract class Controller extends BaseController {

	use DispatchesCommands, ValidatesRequests;


	public function __construct()
	{
			if  ( \Auth::guest() )
			
			{
				return redirect('/');	
			}

			else

			{

					if (\Auth::check())
						{
						   $user = \Auth::user()->email;
							\View::share('user', $user);
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
