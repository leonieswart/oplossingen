@extends('app')


@section('content')

{!! Form::open( array( 'action' => 'TakenController@nieuweTaakToevoegen', 'class' => "form-horizontal" ) )  !!}

	<div class="form-group">
		
		{!! 	Form::label('taak', 'Taak', array( 'class' => 'label' ) ) 	!!}

		{!! 	Form::text('taak', '', array( 	'required', 
				              					'class'=>'form-control', 
				              					'placeholder'=>'Vul hier een taak in.' ) ) 	!!}
	
	</div>              

	<div class="form-group">

		{!! 	Form::label('categorie', 'Categorie', array( 'class' => 'label' ) ) 	!!}
		{!! 	Form::select('categorie', [	'sport'  	=> 'Sport',
											'werk' 		=> 'Werk',
										    'school' 	=> 'School',
									  	    'vrijetijd' => 'Vrije tijd'  ] ) 	!!}

	</div>								  	   

	<div class="form-group">

		{!! Form::hidden('voltooid', '0') !!}
		{!! Form::hidden('gebruiker',  $user ) !!}


		{!! Form::submit('Toevoegen!', array( 'class' => "btn btn-default")) !!}

	</div>	

{!!Form::close()!!}



@stop