<?php namespace App\Http\Controllers;

use Input;
use Redirect;

// Dit is een klasse genaamd RegistreerController
class TakenController extends Controller {
	

	public function nieuweTaak()
	{	

		if  ( \Auth::guest() )
			
			{
				return redirect('/');	
			}


		return view('todo.nieuweTaak');
	}

	// als ge gebruiker naar index.php/nieuweTaak surft wordt onderstaande query uitgevoerd.
	public function nieuweTaakToevoegen()
	{
 
		if  (Input::get('taak') == "") 

			{

				flash()->error('Je kan geen lege taak toevoegen.');
				return redirect('/nieuweTaak');
			}

		else 

			{

				// deze query werkt als de backslash er voor staat, dit heeft iets te maken met de PHP namespaces
				// als je binnen een klasse naar een andere klasse verwijst, zet je die backslash er voor 
				// zelfde principe als in een css bestand verwijzen naar iets in de img map

				\DB::insert('insert into taken (taak, categorie, voltooid, token, gebruiker) values (?, ?, ?, ?, ?)',

					[
						Input::get('taak'),
						Input::get('categorie'),
						Input::get('voltooid'),
						Input::get('_token'),
						Input::get('gebruiker')
					]
				);

				flash()->success('Jouw nieuwe taak werd succesvol toegevoegd!');

				return redirect('/taken');
			}	

	}


	public function voltooien()
	{
		$voltooid = Input::get('voltooid');

		if  ($voltooid == 0) 
			
			{

				\DB::table('taken')
			            ->where('taken_id', Input::get('voltooien'))
			            ->update(array('voltooid' => 1));

			   	flash()->success('Super! Weer een taak van je to-do-lijst geschrapt.');
        
				
			}

		else

			{

				\DB::table('taken')
			            ->where('taken_id', Input::get('voltooien'))
			            ->update(array('voltooid' => 0));

			    flash()->success('Toch nog niet klaar? Jouw taak staat weer op je to-do-lijst.');
        
			}

		return redirect('/taken');

	}

	public function deleten()
	{

		\DB::table('taken')->where('taken_id', Input::get('deleten'))->delete();

		flash()->success('Deze taak werd succesvol verwijderd.');
		return redirect('/taken');

	}

}
