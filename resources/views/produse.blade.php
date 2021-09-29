@extends('layouts.app')
@section('content')
<div class="container pt-5 font-raleway">
	<h4 class="bold">Produse</h4>
	<h6 class="italic">
			{{ $title }}
	</h6>
	<hr>
</div>

<section id="apicole">
	<div class="container py-2 font-raleway" style='display:flex;flex-wrap:wrap;'>
			@if (count($products) > 0)
				@foreach ($products as $key => $product)

				<div class="m-2 border p-1">
					<a href="{{ route('produs', $product->id) }}" class=" color-secondary">
						<img src="{{ asset(
						'img/' . $product->image) }}" style="height: 300px; width: 250px;transition: all 1s;">
					</a>
						<center>
							<span style="font-weight:bold;"> {{ $product->name }} </span>
							<p>
								{{ $product->price }} &nbsp;RON
							</p>
			
						<a href="{{ route('addToCart', ['id' => $product->id]) }}" class="btn btn-warning font-size-12 mb-2"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to Cart
						</a>
				</center>
				</div>
			
			@endforeach
			@else 
			<div class="m-2 border p-1">
				Nu exista produse.
			</div>
			@endif
			
	</div>
@endsection