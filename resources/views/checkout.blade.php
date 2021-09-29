@extends('layouts.app')
@section('content')

<center>
<div class="container">		
			<h1>Checkout</h1>
			<h3>Comanda dumneavoastra a fost finalizata cu succes!</h3>
			<h3>Va multumim si va mai asteptam pe la noi :)</h3>
			<hr>

			<!-- Info cumparator -->
			<p>Cumparator: {{ Auth::user()->name }}</p>
			<p>Total comanda: {{ $total }} RON </p>
			<p>Total produse cumparate: {{ $qty }} </p>

			<!-- Stergem cosul de cumparaturi -->
			@php 
				if (Session::has('cart')) {
					Session::forget('cart');
				}
			@endphp 
</div>
</center>
@endsection