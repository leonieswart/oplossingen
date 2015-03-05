<?php

	class HTMLbuilder {

		private $header;
		 $body;
		private $footer;

		
		public function __construct($header, $body, $footer)
		{
			$this->header 	= 	$header;
			$this->body 	= 	$body;
			$this->footer 	= 	$footer;

		}

		public function BuildHeader()
		{
			include ("../partials/" . $this->header .".html");

		}

		public function BuildBody()
		{
			include("../partials/" . $this->body . ".php");
		}

		public function BuildFooter()
		{
			include("../partials/" . $this->footer . ".html");
		}

		public function BuildPage()
		{
			$this->BuildHeader();
			$this->BuildBody();
			$this->BuildFooter();
		}

		public function showList($directory)
		{
			$lijst = scandir($directory);
			return $lijst;
		}

		public function CSSfiles()
		{
			$directory = "../css/";
			showList($directory);
			var_dump($lijst);
		}

		public function JSfiles()
		{
			$directory = "../js/";
			showList($directory);
			var_dump($lijst);
		}


	}





?>

buildHeader
zorgt ervoor dat de header op het scherm verschijnt
Zorg ervoor dat alle bestanden uit de css map automatisch worden ingeladen. Dus wanneer je een .css bestand verwijdert, mag dit niet in de header verschijnen.

buildFooter
zorgt ervoor dat de footer op het scherm verschijnt
Zorgt ervoor dat alle bestanden uit de jsmap automatisch worden ingeladen. Dus wanneer je een .js bestand verwijdert, mag dit niet in de footer verschijnen