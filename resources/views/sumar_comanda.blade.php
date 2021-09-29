@extends('layouts.app')
@section('content')
<div class="container font-raleway">
	
	<h1 class="my-4">Sumar comanda</h1>

	<div class="row bold border py-2">
		<div class="col-sm-3">
				Produse
		</div>
		<div class="col-sm-3">
				Pret
		</div>
		<div class="col-sm-3">
				Cantitate		
		</div>
		<div class="col-sm-3">
				Sub-total		
		</div>
	</div>

	@if (count($products) > 0)
		@foreach ($products as $product)
		
	<div class="row border py-2">
		<div class="col-sm-3">
				{{ $product['item']['name'] }}
		</div>
		<div class="col-sm-3">
				{{ $product['item']['price'] }}
		</div>
		<div class="col-sm-3">
				{{ $product['quantity'] }}
		</div>
		<!-- SUBTOTAL -->
		<div class="col-sm-3">
				{{ $product['item']['price'] * $product['quantity'] }}
		</div>
	</div>
	
	@endforeach
	@endif


	<div class="row border py-2">
		<div class="col-sm-9 bold">TOTAL</div>
		<div class="col-sm-3 bold font-size-16">
			{{ $product['price'] }}
		</div>
	</div>

	<!-- BUTOANE PENTRU REINTOARCERE -->
	<!-- BUTOANE PENTRU FINALIZARE -->
	<div class="row border py-2 my-5">
		<div class="col-sm-6"></div>
		<div class="col-sm-6">
			<div class="form-row">
				<div class="col-sm-6">
					<a href="{{ route('shopping_cart') }}" class="btn btn-info form-control">
					Inapoi la cos
					</a>
				</div>
				<div class="col-sm-6">

				<a href="{{ route('checkout') }}" name="finish" class="btn btn-success form-control text-white">
						Finalizare comanda
				</a>
				</div>
			</div>
		</div>
	</div>
		
	</div>

</div>
@endsection