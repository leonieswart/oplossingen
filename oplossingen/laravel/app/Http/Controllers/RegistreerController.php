<?php namespace App\Http\Controllers;

use Input;
use Redirect;
use Validator;

// Dit is een klasse genaamd RegistreerController
class RegistreerController extends Controller {

	// de constructor stond hier standaad in
	public function __construct()
	{
		$this->middleware('guest');
	}

	// als ge gebruiker naar index.php/registreer surft wordt de registreer pagina gelader uit de view
	public function registreer()
	{
		return view('auth.register');
	}
}
