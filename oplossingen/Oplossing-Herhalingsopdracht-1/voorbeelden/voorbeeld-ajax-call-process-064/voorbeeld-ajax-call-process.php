<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Voorbeeld AJAX-call process</title>
    <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
    <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
</head>

<body class="web-backend-voorbeeld">

	<section class="body">

		<style>
			.ajax-call
			{
				font-size			:	50px;
				color				:	#FFFFFF;
				display				:	inline-block;
				padding				:	50px;
				background-color	:	cyan;
			}
		</style>

		<h1>Voorbeeld AJAX-call process</h1>

			<h2>Wat is het winnende getal?</h2>

			<form method="post" id="lotto-form">
				<label for="winnend-getal">Raad een getal tussen 0 en 100</label>
				<input type="text" id="winnend-getal" name="winnend-getal">

				<input type="submit" name="submit" value="Waag een gok">
			</form>

			<div class="placeholder"></div>
	</section>
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script>
	
		// Voer de code pas uit wanneer alle HTML-elementen geladen zijn.
		$(function(){

			// jQuery heeft een methode die luistert naar wanneer iemand een formulier probeert te submitten: de submit()-methode
			$('#lotto-form').submit(function(){

				// Formdata ophalen
				// De serialize-methode zet automatisch alle inputvelden om naar het nodige formaat om doorgestuurd te kunnen worden als post of get-variabele.
				var formData = $('#lotto-form').serialize();
				console.log('formData:' + formData);

				// Een simpele ajax-request
				$.ajax({

					type: 'POST',
					url: 'voorbeeld-ajax-call-process-api.php',
					data: formData,
					success: function(data) {

							// De parameter 'data' is niet verplicht en hangt af van de situatie, maar aan te raden (vooral voor debugging)
							// Deze parameter bevat de returnwaarde van de pagina die het heeft opgeroepen.

							// De data wordt teruggegeven in JSON-formaat, maar wordt voorlopig nog geïnterpreteerd als een normale string
							// Deze string moet eerst nog omgezet worden naar leesbare JSON
							parsedData	=	JSON.parse(data);

								$('.placeholder').append('<p>' + parsedData['status'] + '<p>');

							}

				});

				// Zeker niet vergeten return false toe te passen, anders zal het formulier automatisch verstuurd worden.
				// Dit proberen we tegen te gaan
				return false;
			})
			
		})

	</script>
	</body>
</html>