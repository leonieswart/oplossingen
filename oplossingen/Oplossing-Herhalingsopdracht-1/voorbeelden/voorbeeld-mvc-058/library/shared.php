<?php

/** Check if environment is development and display errors **/

function setReporting() {
	if (DEVELOPMENT_ENVIRONMENT == true) {
		error_reporting(E_ALL);
		ini_set('display_errors','On');
	} else {
		error_reporting(E_ALL);
		ini_set('display_errors','Off');
		ini_set('log_errors', 'On');
		ini_set('error_log', ROOT.DS.'tmp'.DS.'logs'.DS.'error.log');
	}
}

/** Check for Magic Quotes and remove them **/

function stripSlashesDeep($value) {
	$value = is_array($value) ? array_map('stripSlashesDeep', $value) : stripslashes($value);
	return $value;
}

function removeMagicQuotes() {
if ( get_magic_quotes_gpc() ) {
	$_GET    = stripSlashesDeep($_GET   );
	$_POST   = stripSlashesDeep($_POST  );
	$_COOKIE = stripSlashesDeep($_COOKIE);
}
}

/** Check register globals and remove them **/

function unregisterGlobals() {
    if (ini_get('register_globals')) {
        $array = array('_SESSION', '_POST', '_GET', '_COOKIE', '_REQUEST', '_SERVER', '_ENV', '_FILES');
        foreach ($array as $value) {
            foreach ($GLOBALS[$value] as $key => $var) {
                if ($var === $GLOBALS[$key]) {
                    unset($GLOBALS[$key]);
                }
            }
        }
    }
}


/** Main Call Function **/

function callHook() {
	
	// Spreek de url aan die we in index.php hebben gedefined hebben.
	global $url;

	// Maak een array aan waarin alle deeltjes van de url komen te staan
	$urlArray = array();
	// Zet elke term die tussen '/' staat op een aparte key in de array $urlArray
	$urlArray = explode("/",$url);

	// De controller heeft de naam van het eerste deel in de url. Dit stemt overeen met de 0-key uit de array $urlArray
	$controller = $urlArray[0];
	// Verwijder het eerste element van de array (naam van de controller)
	array_shift($urlArray);
	
	// De action heeft ook de naam van het tweede deel uit de url
	// Deze maakt eveneens gebruik van de key '0', omdat we het eerste deel (=controller) geshift hebben.
	$action = $urlArray[0];
	//Verwijder de action uit de array $urlArray
	array_shift($urlArray);
	
	// De query die moet uitgevoerd worden is nu alles wat overblijft in de array $urlArray
	$queryString = $urlArray;

	$controllerName = $controller;
	// De naam van de controller begint -altijd- met een hoofdletter. Zorg ervoor dat deze klasse dan ook met en hoofdletter wordt aangesproken
	//ucwords() zet het eerste karakter in hoofdletter.
	$controller = ucwords($controller);
	
	// De naam van het klassemodel moet altijd in het enkelvoud. Als er op het einde een s voorkomt, zorg dan dat deze verwijderd wordt.
	// Let op: rtrim leest van rechts naar links (laatste karakter = eerst) 
	$model = rtrim($controller, 's');
	
	// De controller-naam bevat altijd het woord Controller achteraan.
	// De concatenatie zorgt ervoor dat dit deel uit de url wordt geconcateneerd met Controller.
	// Het woords controller wordt niet gebruikt in de url omdat dit niet user-friendly is.
	$controller .= 'Controller';
	
	// Maak een object aan van de klasse met het model, de controllernaam en de actie als argumenten
	$dispatch = new $controller($model,$controllerName,$action);


	// Controlleer of er binnen het object dat we juist hebben aangemaakt de methode $controller en $action bestaan.
	// Zoniet kan er eventueel een foutboodschap gegenereerd worden.
	if ((int)method_exists($controller, $action)) {
		// call_user_func_array() doet beroep op een array als eerste argument waarbij eerst de klasse (op key 0) aan en daarna de methode (op key 1) wordt aangeroepen
		// Het tweede argument staat voor de parameters die met deze methode moeten meegegeven worden.
		call_user_func_array(array($dispatch,$action),$queryString);
	} else {
		/* Error Generation Code Here */
	}
}

/** Autoload any classes that are required **/

function __autoload($className) {
	
	if (file_exists(ROOT . DS . 'library' . DS . strtolower($className) . '.class.php')) {
		
		require_once(ROOT . DS . 'library' . DS . strtolower($className) . '.class.php');
		
	} else if (file_exists(ROOT . DS . 'application' . DS . 'controllers' . DS . strtolower($className) . '.php')) {
		
		require_once(ROOT . DS . 'application' . DS . 'controllers' . DS . strtolower($className) . '.php');
		
	} else if (file_exists(ROOT . DS . 'application' . DS . 'models' . DS . strtolower($className) . '.php')) {
		
		require_once(ROOT . DS . 'application' . DS . 'models' . DS . strtolower($className) . '.php');
		
	} else {
		/* Error Generation Code Here */
	}
}

setReporting(); 
callHook();