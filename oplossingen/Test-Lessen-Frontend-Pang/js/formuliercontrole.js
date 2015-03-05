
		function emailcontrole(){

			var mailControle = document.formulier.txtEmail.value;
			var aapWaar = mailControle.indexOf("@");
			var puntWaar = mailControle.lastIndexOf(".");

			if (aapWaar < 1 || puntWaar - aapWaar < 3)

			{
				document.formulier.txtEmail.focus();
				document.getElementById("FeedbackPers").style.display = "block";
				document.getElementById("FeedbackPers").innerHTML = "Noteer je emailadres in de correcte vorm. vb. voorbeeld@test.com";
				return false;
			}

		}

		function valideren(){

			if (document.formulier.txtNaam.value == "") 

			{
				document.formulier.txtNaam.focus();
				document.getElementById("FeedbackPers").style.display = "block";
				document.getElementById("FeedbackPers").innerHTML = "Naam invullen!";
				return false;
			}

			if (document.formulier.txtPostcode.value == "") 

			{
				document.formulier.txtPostcode.focus();
				document.getElementById("FeedbackPers").style.display = "block";
				document.getElementById("FeedbackPers").innerHTML = "Postcode invullen!";
				return false;
			}

			if (document.formulier.txtPostcode.value.length != 4) 

			{
				document.formulier.txtPostcode.focus();
				document.getElementById("FeedbackPers").style.display = "block";				
				document.getElementById("FeedbackPers").innerHTML = "Postcode moet 4 karakters lang zijn!";
				return false;
			}


			if (isNaN(document.formulier.txtPostcode.value)) 

			{
				document.formulier.txtPostcode.focus();
				document.getElementById("FeedbackPers").style.display = "block";
				document.getElementById("FeedbackPers").innerHTML = "Postcode mag enkel uit cijfers bestaan!";
				return false;
			}


			if (document.formulier.txtEmail.value == "") 

			{
				document.formulier.txtEmail.focus();
				document.getElementById("FeedbackPers").style.display = "block";
				document.getElementById("FeedbackPers").innerHTML = "E-mail invullen!";
				return false;
			}
			
			else

			{
				var emailOK = emailcontrole();
				if (emailOK == false) {
					return false;
				};
			}


			if (document.formulier.txtHuisdier.value == "") 

			{
				document.formulier.txtHuisdier.focus();
				document.getElementById("FeedbackDier").style.display = "block";
				document.getElementById("FeedbackPers").style.display = "none";
				document.getElementById("FeedbackDier").innerHTML = "Naam van je huisdier invullen!";
				return false;
			}

			if (document.formulier.txtRas.value == "") 

			{
				document.formulier.txtRas.focus();
				document.getElementById("FeedbackDier").style.display = "block";				
				document.getElementById("FeedbackPers").style.display = "none";
				document.getElementById("FeedbackDier").innerHTML = "Ras van je huisdier invullen!";
				return false;
			}

			

			if (document.formulier.txtLeeftijd.value == "") 

			{
				document.formulier.txtLeeftijd.focus();
				document.getElementById("FeedbackDier").style.display = "block";
				document.getElementById("FeedbackPers").style.display = "none";
				document.getElementById("FeedbackDier").innerHTML = "Leeftijd van je huisdier invullen!";
				return false;
			}

			if (isNaN(document.formulier.txtLeeftijd.value)) 

			{
				document.formulier.txtLeeftijd.focus();
				document.getElementById("FeedbackDier").style.display = "block";
				document.getElementById("FeedbackPers").style.display = "none";
				document.getElementById("FeedbackDier").innerHTML = "De leeftijd mag enkel uit cijfers bestaan!";
				return false;
			}

		}
