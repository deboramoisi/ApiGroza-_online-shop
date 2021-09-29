@extends('layouts.app')
@section('content')

<div class="container pt-5 font-castoro">
	<h4 class="bold">Categorii de produse</h4>
	<hr>
</div>

<section class="apicole">
	<div class="container py-2" style='display:flex;flex-wrap:wrap;'>

		<!-- Produse apicole -->
		<a href="{{ route('produse_apicole') }}" class="m-5 border color-secondary" style="text-decoration: none;">
			<img src="{{ asset('img/Produse_apicole.jpg') }}" style="height: 300px; width: 250px;transition: all 1s">
				<center>
							
				<p class="m-3">
					Produse apicole
				</p>
				</center>
		</a>

		<!-- Produse cosmetice -->
		<a href="{{ route('produse_cosmetice') }}" class="m-5 border color-secondary" style="text-decoration: none;">
			<img src="{{ asset('img/Cosmetice.jpg') }}" style="height: 300px; width: 250px;transition: all 1s">
				<center>
							
				<p class="m-3">
					Produse cosmetice
				</p>
				</center>
		</a>

		<!-- Echipamente -->
		<a href="{{ route('produse_echipamente') }}" class="m-5 border color-secondary" style="text-decoration: none;">
			<img src="{{ asset('img/Echipamente.jpg') }}" style="height: 300px; width: 250px;transition: all 1s">
				<center>
							
				<p class="m-3">
					Echipamente
				</p>
				</center>
		</a>
			
		<!-- Familii -->
		<a href="{{ route('produse_familii') }}" class="m-5 border color-secondary" style="text-decoration: none;">
			<img src="{{ asset('img/Familii.jpg') }}" style="height: 300px; width: 250px;transition: all 1s">
				<center>
							
				<p class="m-3">
					Familii
				</p>
				</center>
		</a>

		<!-- Matci -->
		<a href="{{route('produse_matci')}}" class="m-5 border color-secondary" style="text-decoration: none;">
			<img src="{{ asset('img/Matci.jpg') }}" style="height: 300px; width: 250px;transition: all 1s">
				<center>
							
				<p class="m-3">
					Matci
				</p>
				</center>
		</a>	
			
	</div>		
	
</section>

@endsection