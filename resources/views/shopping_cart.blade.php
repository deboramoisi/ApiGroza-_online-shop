@extends('layouts.app')
@section('content')

	@if (Session::has('cart')) 
	<section id="cart" class="py-3">

	<!-- decrease the width to 75% -->
	<div class="container-fluid w-75 font-castoro">
		
		<h3 class="font-castoro bold pt-2 pb-4">Coș de cumpărături</h3>

		<!-- GOLIRE COS DE CUMPARATURI -->
		<div class="text-right mb-2 font-raleway">
			<!-- GOLIRE TOT COSUL -->
			<a href="{{ route('remove_cart') }}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> &nbsp;Golire coș</a>
		</div>

		<!-- Headers pentru tabel cu produse din cos -->
		<div class="row py-2 font-raleway color-third-bg">

			<div class="col-sm-1"></div>
			<div class="col-sm-1"></div>
			<div class="col-sm-4">PRODUS</div>
			<div class="col-sm-2">PREȚ</div>
			<div class="col-sm-2">CANTITATE</div>
			<div class="col-sm-2">SUB-TOTAL</div>
		
		</div>

		@if ($products)
			@foreach ($products as $product)

			<div class="row py-2 font-raleway border">
				
				<div class="col-sm-1 text-center">
					
					@if (count($product) > 0)

					<!-- Stergere item -->
					<a href="{{ route('remove', $product['item']['id']) }}" class="btn fa fa-times-circle font-size-20" aria-hidden="true"></a>

					</div>

					<div class="col-sm-1">
						<img src="{{ asset('img/' . $product['item']['image']) }}" class="img-fluid" alt="Miere">
					</div>

					<div class="col-sm-4">
						 {{ $product['item']['name'] }}
					</div>
								
					<div class="col-sm-2">
						 {{ $product['item']['price']}} RON 
					</div>
				
					<!-- Cantitatea preluata cu ajutorul interogarii bazei de date -->
					<div class="col-sm-2">
						<input type="number" name="cantitate" min="0" max="30" value="{{ $product['quantity'] }}" readonly>
						<a href="{{ route('increase', $product['item']['id']) }}" class="btn btn-success"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
						<a href="{{ route('reduce', $product['item']['id']) }}" class="btn btn-danger"><i class="fa fa-minus-circle" aria-hidden="true"></i></a>
					</div>
						
				<!-- TOTAL -->
				<div class="col-sm-2">
					  {{ $product['price'] }} RON 
				</div>
						
				@endif
			</div>
			@endforeach
			
		@endif
	</div>
</section>


@if ($totalPrice > 0)

<!-- !!!! TOTAL CART !!!! -->
<section id="total-cart">
	
	<div class="container-fluid py-5 font-raleway">
		
		<div class="row">
			
			<div class="col-sm-4"></div>
			<div class="col-sm-8">
				
				<div class="form-row px-3">
					
					<div class="col-sm-7 offset-3 font-raleway color-third-bg py-3 text-center">
						Total Cos
					</div>
				
					<div class="col-sm-7 offset-3 border py-3 px-4">
						<div class="row">
							<div class="col-sm-5 offset-2">
								Total
							</div>
							<div class="col-sm-5 bold">
								{{ $totalPrice }}  RON
							</div>
						</div>
					</div>

					<div class="col-sm-7 offset-3 border py-3 px-4">
						<a href="{{ route('sumar_comanda') }}" class="btn btn-warning color-black form-control text-white">Continuă cu finalizarea comenzii</a>
					</div>
				
				</div>
			
			</div>
		
		</div>
	
	</div>
		
</section>
<!-- pentru totalPrice > 0 -->
@endif

	@else
		<div class="container alert alert-danger">
					Nu exista produse in cos!
		</div>
	@endif

@endsection