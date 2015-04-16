@extends('app')


@section('content')
	
	<!-- als de array $taken leeg en er dus niets in de todo lijst zit tonen we deze boodschap -->
	@if(empty($taken))

		<p class="bountybeach"> Ah! Een lege to-do-lijst. Heb je vakantie? </p>
		<img src="{{ asset('/img/empty.jpg') }}" class="bountybeach" alt="">

	<!-- zitten er wel taken in de todolijst dan ... -->	
	@else

		<!-- checken we eerst of de array nietKlaar (waar de onvoltooide taken in zitten) niet leeg is -->	
		@if ( !empty( $nietKlaar ) )

		<!-- als er dus taken zijn die nog niet klaar zijn, tonen we de tabel met die taken in -->
		<table border="1">

		<!-- tabel hoofding -->
			<th> Taak </th>
			<th> Categorie </th>		
			<th> Klaar? </th>
			<th> Verwijderen </th>


			<!-- uitloopen van de array met alle taken in -->
			@foreach ($taken as $key => $array)

				<tr>

				<!-- als de taak een waarde heeft van 0 op het veld voltooid dan worden ze hier afgebeeld -->
					@if($array->voltooid == 0)

						<!-- onderstaande notatie gebruiker ipv $array['taak']
						 $array['taak'] zal niet werken omdat het hier om een object gaat van een klasse ipv een array -->
						<td> 					{{ $array->taak }} 		</td>
						<td class="center"> 	{{ $array->categorie }}	</td>

						<td class="center">		

							<form method="post" action="voltooien">

								<button value="{{ $array->taken_id }} " name="voltooien"> <img src="{{ asset('/img/check.png') }}" alt="voltooien">  </button>
								<input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
								<input type="hidden" name="voltooid" value="{{ $array->voltooid }} ">

							</form>

						</td>	

						<td class="center">		

							<form method="post" action="deleten">

								<button value="{{ $array->taken_id }} " name="deleten"> <img src="{{ asset('/img/delete.png') }}" alt="deleten">  </button>
								<input type="hidden" name="_token" value="<?php echo csrf_token() ?>">

							</form>
							
						</td>							
					
					@endif

					</td>
				</tr>

			@endforeach

		</table>


		@else

			<p class="bountybeach"> Ah! Een lege to-do-lijst. Heb je vakantie? </p>
			<img src="{{ asset('/img/empty.jpg') }}" class="bountybeach" alt="">

		@endif



		<!-- checken we eerst of de array klaar (waar de voltooide taken in zitten) niet leeg is -->	
		@if ( !empty( $klaar ) )

		<table border="1">

			<th> Afgeronde taken </th>
			<th> Categorie </th>		
			<th> Verwijderen </th>
			<th> Toch niet klaar?</th>

			@foreach ($taken as $key => $array)

				<tr>

					@if($array->voltooid == 1)

						<!-- onderstaande notatie gebruiker ipv $array['taak']
						 $array['taak'] zal niet werken omdat het hier om een object gaat van een klasse ipv een array -->
						<td> 	{{ $array->taak }} 		</td>
						<td class="center"> 	{{ $array->categorie }}	</td>
						<td class="center">		

							<form method="post" action="deleten">

								<button value="{{ $array->taken_id }} " name="deleten"> <img src="{{ asset('/img/delete.png') }}" alt="deleten">  </button>
								<input type="hidden" name="_token" value="<?php echo csrf_token() ?>">

							</form>
							
						</td>	

						<td class="center">		

							<form method="post" action="voltooien">

								<button value="{{ $array->taken_id }} " name="voltooien"> <img src="{{ asset('/img/check.png') }}" alt="voltooien">  </button>
								<input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
								<input type="hidden" name="voltooid" value="{{ $array->voltooid }} ">

							</form>

						</td>		
					@endif
					
					
				</tr>

			@endforeach

		</table>

	@endif	

	@endif





@stop