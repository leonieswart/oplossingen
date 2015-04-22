<?php namespace App\Http\Controllers;

// Dit is een klasse genaamd ToDoController
class ToDoController extends Controller {

	 

// ------------------------- STANDAARD ----------------------------------//

	// Als de gebruiker naar index surft wordt de index pagina uit de view geladen
	public function index()
	{
		
		return view('todo.index');
	}





// -------------------------- TAKEN OVERZICHT WEERGEVEN ---------------------//

	// als de gebruiker terechtkomt bij /home of /taken wordt die doorverwezen naar deze functie 
	public function overzicht()
	{

		// als je enkel een gast bent, wordt je teruggestuurd naar de index
		if  ( \Auth::guest() )
			
			{
				return redirect('/');	
			}
	

		$user = \Auth::user()->email;	
		$vandaag = date("Y/m/d");
		$vandaag = strtotime($vandaag);

		
		// ben je ingelogd dan krijg je het overzicht van de taken te zien			
		$taken = \DB::select('select taken_id, taak, categorie, voltooid, deadline from taken where gebruiker = :gebruiker', ['gebruiker' => $user]);

		$taken = array_dot($taken);
		
		return view('todo.taken')->with('taken', $taken)->with('vandaag', $vandaag);
	}


	


	

}
