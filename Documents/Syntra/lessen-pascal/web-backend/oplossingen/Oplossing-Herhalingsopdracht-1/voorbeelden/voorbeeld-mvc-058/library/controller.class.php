<?php
class Controller {

	// Variabelen die beginnen met een underscore, tonen aan dat het hier om een private of protected variabele gaat
	// Dit is geen verplichting, maar een algemeen aanvaarde conventie
	protected $_model;
	protected $_controller;
	protected $_action;
	protected $_template;

	function __construct($model, $controller, $action) {

		$this->_controller = $controller;
		$this->_action = $action;
		$this->_model = $model;
		
		// Maak een object aan van het model op basis van de parameter $model (= deeltje uit de url)
		// Deze objecten zijn aanspreekbaar vanuit de klasse Controller
		// Dit betekent dat het object van een bepaalde klasse $this->$modelnaam en $this->_template zullen heten
		// Met gevolg betekent dit dat properties van deze klasses aangesproken kunnen worden door middel van $this->_template->propertynaam 
		$this->$model = new $model;
		$this->_template = new Template($controller,$action);
	}

	function set($name,$value) {
		$this->_template->set($name,$value);
	}

	// Destruct wordt uitgevoerd op het einde van de klasse
	// In dit geval wordt de view (template) gerenderd, gebaseerd op de methodes die zijn uitgevoerd in de de klasses
	function __destruct() {
			$this->_template->render();
	}

}