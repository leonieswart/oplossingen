@extends('app')


@section('content')

	<div class="home">

	<!-- $pad is een url en die wordt bepaald a.d.h.v. ingelogd te zijn of niet -->
		<a href="{{ $pad }}">

		<!-- afbeelding begin pagina -->
			<img src="{{ asset('/img/keepcalm.png') }}" alt="keep calm and let's get started!">

		</a>
			
	</div>	


@stop