@extends('layouts.admin')
@section('content')


<div class="container m-2">

	@if (count($errors) > 0) 
	<div class="alert alert-danger">
		<strong>Errors: </strong>
		<ul>
			@foreach ($errors->all() as $error)
				<li> {{ $error }} </li>
			@endforeach
		</ul>
	</div>
	@endif

		<a href="{{route('products.index')}}" class="fa fa-arrow-left"></a>
		<h1 class="mb-3">Vizualizare produs</h1>
		<br>

		<div class="form-row">
			<div class="col-sm-2">
				<label for="id" class="ml-2 text-center">&nbsp;Id produs:</label>
			</div>
			<div class="col-sm-7">
				<strong> {{$product->id}} </strong>
			</div>
		</div>
		
		<div class="form-row my-2">
			<div class="col-sm-2">
				<label for="name" class="ml-2">Nume:</label>	
			</div>
			<div class="col-sm-7">
				<strong> {{$product->name}} </strong>
			</div>
		</div>
		
		<div class="form-row my-2">
			<div class="col-sm-2">
				<label for="category" class="bold mx-2">Categorie:</label>
			</div>
			<div class="col-sm-7">
				<strong> {{$product->category}} </strong>
			</div>
		</div>
				
		<div class="form-row my-2">
			<div class="col-sm-2">
				<label for="quantity" class="bold mx-2">Cantitate:</label>
			</div>
			<div class="col-sm-7">
				<strong> {{$product->quantity}} </strong>
			</div>
		</div>

		<div class="form-row my-2">
			<div class="col-sm-2">
				<label for="gramaj" class="bold mx-2">Gramaj:</label>
			</div>
			<div class="col-sm-7">
				<strong> {{$product->gramaj}} </strong>
			</div>
		</div>
			
		<div class="form-row my-2">
			<div class="col-sm-2">
				<label for="description" class="bold mx-2">Descriere:</label>
			</div>
			<div class="col-sm-7">
				<textarea rows="7" class="form-control" name="description" readonly> {{$product->description}}
				</textarea>
			</div>
		</div>
			
		<div class="form-row my-2">
			<div class="col-sm-2">
				<label for="prop_car" class="bold mx-2">Proprietati si caracteristici:</label>
			</div>
			<div class="col-sm-7">
				<textarea rows="7" class="form-control" name="prop_car" readonly> {{$product->prop_car}}
				</textarea>
			</div>
		</div>
		
		<div class="form-row my-2">
			<div class="col-sm-2">
				<label for="image" class="bold mx-2">Imagine:</label>
			</div>
			<div class="col-sm-7">
				<img src="{{asset('img/'. $product->image) }}" style="height: :400px; width:310px" alt="imagine">
			</div>
		</div>
			
		<div class="form-row my-2">
			<div class="col-sm-2">
				<label for="price" class="bold mx-2">*Price:</label>
			</div>
			<div class="col-sm-7">
				<strong> {{$product->price}} </strong>
			</div>
		</div>
		
</div>
@endsection