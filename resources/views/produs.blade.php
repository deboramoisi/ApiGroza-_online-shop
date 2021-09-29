@extends('layouts.app')
@section('content')
<section id="main-product" class="py-3">
	<div class="container font-sans-pro">
		<div class="row">
					
			<div class="col-sm-6 py-3">
				<img src="{{ asset('img/' . $produs->image)}}" class="img-fluid border" alt="Miere">
			</div>

			<!-- TITLU -->
			<div class="col-sm-6">
				<h4 class="font-sans-pro bold py-3">	{{ $produs->name }} 
				</h4>
				
				<!-- DISPONIBILITATE -->
				@if ($produs->quantity > 0) 
					<h5 class="bold font-size-16 text-success">In stoc
					
				@else 
					<h5 class=" bold font-size-16 text-danger"> Indisponibil
				@endif
							</h5>
				<hr>

				<!-- GRAMAJ-->
				@if ($produs->gramaj != 0)
				@if ($produs->category != 'Echipamente')
				<div>
					<div class="d-flex">
						Gramaj
						<h4 class="ml-3 color-primary">
							{{ $produs->gramaj }}
							<!-- Afisam g pentru produse apicole -->
							@if ($produs->category == 'Produse_apicole')
							g 
							@else if ($produs->category == 'Cosmetice')
								ml
							@endif
						</h4>
					</div>			
				</div>
				<hr>
				@endif
				@endif

			<!-- PRET -->
			<div>
				<h3 class="color-primary italic col-sm-6">
					{{ $produs->price }} RON
				</h3>
				<br>
				<!-- Cantitate&nbsp;&nbsp;
				<input type="number" name="quantity" min="1" max="10" placeholder="1" value="1"> -->
			</div>
			
			<hr>

			<!-- POLITICI -->	
			<div class="policy">
				
				<div class="d-flex">
					
					<!-- Livrare -->
					<div class="text-center mr-4">
						
						<div class="font-size-20 my-2 color-second">
							<span class="fa fa-home border p-3 rounded-pill"></span>
						</div>
						Livrare la domiciliu in 2-3 zile lucratoare
					
					</div>
					
					<!-- Timp de livrare -->
					<div class="text-center mr-4">
						
						<div class="font-size-20 my-2 color-second">
							<span class="fas fa-truck border p-3 rounded-pill"></span>
						</div>
						Livrare gratuita la comenzi de peste 75 RON
					
					</div>
					
					<!-- Produs verificat -->
					<div class="text-center mr-4">
							
						<div class="font-size-20 my-2 color-second">
							<span class="fas fa-check border p-3 rounded-pill"></span>
						</div>
						Produs verificat
						
					</div>
				</div>
			</div>

			<hr>
			<!-- Finalizare comanda -->
			<div class="row form-row pt-5">
				<div class="col">
					<a href="./cart.php" class="btn btn-danger form-control">Finalizati comanda</a>
				</div>
				
				<div class="col">
					<!-- Adaugare in cos -->
						<a href="{{ route('addToCart', ['id' => $produs->id]) }}" class="btn btn-warning form-control"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to Cart</a>
				</div>
			</div>
					
		</div>
		</div>
		<hr>

			<!-- DESCRIERE -->
			<div>
				<h5 class="font-sans-pro bold py-3"> Descriere </h5>
				<span class="py-5"> {{ $produs->description }} </span>
			</div>


			@if ($produs->prop_car != null)
			<!-- PROPRIETATI SI CARACTERISTICI -->
			<div>
				<h5 class="font-sans-pro bold pt-3 pb-5"> Proprietati si caracteristici </h5>
				{{ $produs->prop_car }}
			</div>
			@endif
			
	</div>
</section>
@endsection