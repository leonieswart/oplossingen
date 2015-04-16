<?php
// ----------------------- HOE WERKT DIT?? ---------------------- 
// Als de gebruiker naar de url surft (VB. localhost:8888/laravel/public) en de variabele login er achter plakt
// dus zo: localhost:8888/laravel/public/login
// dan gaan we naar de ToDoCOntroller en daar wordt de functie login ingeladen
// Deze functie zegt: ga naar de map view en open daar de login.php pagina
//Route::get('login', 'ToDoController@login');
// --------------------------------------------------------------





// Route naar index pagina, standaard als er naar public gesurft wordt
Route::get('/', 'ToDoController@index');

// als er naar home gesurft wordt (na registratie en login) doorverwijzing naar takenoverzicht
Route::get('home', 'ToDoController@overzicht');






// route voor taken
Route::get('nieuweTaak', 'TakenController@nieuweTaak');

Route::post('nieuweTaakToevoegen', 'TakenController@nieuweTaakToevoegen');

Route::get('taken', 'ToDoController@overzicht');

Route::post('voltooien', 'TakenController@voltooien');

Route::post('deleten', 'TakenController@deleten');



// route die hier standaard in stond, heeft te maken met de authentificatie van de login en registratie pagina
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


