@extends('app')


@section('content')

<!-- we openen de form en zetten als action de functie nieuweTaakToevoegen uit de takencontroller -->
{!! Form::open( array( 'action' => 'TakenController@nieuweTaakToevoegen', 'class' => "horizontal" ) )  !!}

	<div class="form-group">
		
		<!-- label -->
		{!! 	Form::label('taak', 'Taak', array( 'class' => 'label' ) ) 	!!}

		<!-- input field -->
		{!! 	Form::text('taak', '', array( 	'required', 
				              					'class'=>'control', 
				              					'placeholder'=>'Vul hier een taak in.' ) ) 	!!}
	
	</div>              

	<div class="form-group">

		{!! 	Form::label('categorie', 'Categorie', array( 'class' => 'label' ) ) 	!!}
		{!! 	Form::select('categorie', [	'sport'  	=> 'Sport',
											'werk' 		=> 'Werk',
										    'school' 	=> 'School',
									  	    'vrijetijd' => 'Vrije tijd'  ] ) 	!!}

	</div>	

	<div class="form-group clear ">
		
		{!! 	Form::label('nieuwecat', 'Categorie toevoegen:', array( 'class' => 'label new' ) ) 	!!}
		{!!		Form::text('nieuweCat', '', array(	'class' => 'control new',
													'placeholder' => 'Vul hier de nieuwe categorie in. Klik dan op de + .',
													'id' => 'nieuweCat'	) ) 	!!}

		{!!		Form::button('+', array(	'onclick' => 'categorieToevoegen()', 'class' => 'new knop' ) ) 	!!}											


	</div>

	<div class="form-group clearboth">

		{!! 	Form::label('deadline', 'Deadline', array( 'class' => 'label' ) ) 	!!}
		{!! 	Form::text('date', null, array(		'class' => 'control datepicker',
													'placeholder' => 'Kies een datum waartegen deze taak voltooid moet zijn.', 
													'id' => 'datetimepicker') ) 	!!}

	</div>								  	   

	<div class="form-group">

		<!-- standaard wordt taak meegegeven als ontvoltooid -->
		{!! Form::hidden('voltooid', '0') !!}

		<!-- emailadres van user wordt meegegeven om te kunnen filteren -->
		{!! Form::hidden('gebruiker',  $user ) !!}


		{!! Form::submit('Toevoegen!', array( 'class' => "btn btn-default")) !!}

	</div>	

{!!Form::close()!!}



@stop