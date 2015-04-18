
<!-- DIT IS DE ALGEMENE PAGINA WAARIN DE HEADER HTML ZIT -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel</title>

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" />

	


	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>

	<nav class="navbar navbar-default">

		<div class="container-fluid">

		<!-- navbar voor kleine schermen -->
			<div class="navbar-header">

				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>

				</button>

				<a class="navbar-brand" href="{{ url('/') }}">Leonie's To-Do-App</a>

			</div>
		<!-- einde navbar kleine schermen -->	

		<!-- standaard navbar -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

				<ul class="nav navbar-nav">

					<li>	<a href="{{ url('/') }}">Home</a>	</li>
			
				</ul>


				<ul class="nav navbar-nav navbar-right">

					<!-- als je niet ingelogd bent en dus gast bent dan krijg je de opties login en registreren -->
					@if (Auth::guest())
						<li><a href="{{ url('/auth/login') }}">Aanmelden</a></li>
						<li><a href="{{ url('/auth/register') }}">Registreren</a></li>

					<!-- als je bent ingelogd krijg je de optie logout -->
					@else
						<li> <a href="{{ url('/taken') }}" class="score"> 	 TO DO: {{$onvoltooid}}  -   DONE: {{$voltooid}}  </a></li>

						<li><a href="{{ url('/nieuweTaak') }}">Taak toevoegen</a></li>
						<li><a href="{{ url('/auth/logout') }}">Afmelden ( {!! $user !!} )</a></li>
				
					@endif

				</ul>

			</div>
		<!-- einde standaard navbar -->	

		</div>

	</nav>

	<div class="container">

	@include('flash::message')
<!-- HIER ZEGGEN WE DAT DE SECTION CONTENT (DIE MAKEN WE IN DE ANDERE PAGINA'S) INGEVOEGD MOET WORDEN -->
	@yield('content')

</div>
	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>

	<script type="text/javascript">
	    jQuery(document).ready(function(){
	        jQuery('#datetimepicker').datepicker({dateFormat: 'yy/mm/dd'});
	    })
	</script>


</body>
</html>
