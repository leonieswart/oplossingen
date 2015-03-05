<?php

	// Check of de request een ajax-request was
	if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
	{


		$winnendeGetallen	=	array(5,18,29,78,99);

		// Check of de juiste post geset is (post['submit'] wordt automatisch gestript bij serialize)
		if (isset($_POST['winnend-getal']))
		{

			$gekozenGetal	=	$_POST['winnend-getal'];

			// Zet de status standaard op verloren
			$returnData['status'] = 'verloren!';

			// Controleer of het doorgegeven getal een winnend nummer is.
			if(in_array($gekozenGetal, $winnendeGetallen))
			{
				$returnData['status'] = 'gewonnen!';
			}
			
			// Zet de door te geven waarden om naar JSON zodat deze makkelijker te interpreteren zijn door de caller (in dit geval: AJAX)
			$jsonData = json_encode($returnData);

			echo $jsonData;
		}
	}

	

?>