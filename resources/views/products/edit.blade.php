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
		<h1 class="mb-3">Modificare produs</h1>
		<br>

	<!-- Populare campuri formular cu datele aferente din tabela Product -->
	{!! Form::model($product, ['method' => 'PATCH', 'route' => ['products.update', $product->id]]) !!}
		<div class="form-row">
			<div class="col-sm-2">
				<label for="id" class="ml-2 text-center">&nbsp;Id produs:</label>
			</div>
			<div class="col-sm-7">
				<input class="form-control" type="text" name="id" readonly value="{{$product->id}}">
			</div>
		</div>
		
		<div class="form-row my-2">
			<div class="col-sm-2">
				<label for="name" class="ml-2">*Nume:</label>	
			</div>
			<div class="col-sm-7">
				<input type="text" class="form-control" name="name" value="{{$product->name}}">
			</div>
		</div>
		
		<div class="form-row my-2">
			<div class="col-sm-2">
				<label for="category" class="bold mx-2">*Categorie:</label>
			</div>
			<div class="col-sm-7">
				<input type="text" class="form-control" name="category" value="{{$product->category}}">
			</div>
		</div>
				
		<div class="form-row my-2">
			<div class="col-sm-2">
				<label for="quantity" class="bold mx-2">*Cantitate:</label>
			</div>
			<div class="col-sm-7">
				<input type="number" class="form-control" name="quantity" value="{{$product->quantity}}">
			</div>
		</div>

		<div class="form-row my-2">
			<div class="col-sm-2">
				<label for="gramaj" class="bold mx-2">Gramaj:</label>
			</div>
			<div class="col-sm-7">
				<input type="number" class="form-control" name="gramaj" value="{{$product->gramaj}}">
			</div>
		</div>
			
		<div class="form-row my-2">
			<div class="col-sm-2">
				<label for="description" class="bold mx-2">Descriere:</label>
			</div>
			<div class="col-sm-7">
				<textarea rows="7" class="form-control" name="description">{{$product->description}}</textarea>
			</div>
		</div>
			
		<div class="form-row my-2">
			<div class="col-sm-2">
				<label for="prop_car" class="bold mx-2">Proprietati si caracteristici:</label>
			</div>
			<div class="col-sm-7">
				<textarea rows="7" class="form-control" name="prop_car">{{$product->prop_car}}</textarea>
			</div>
		</div>
		
		<div class="form-row my-2">
			<div class="col-sm-2">
				<label for="image" class="bold mx-2">*Imagine:</label>
			</div>
			<div class="col-sm-7">
				<input type="file" class="form-control" name="image" value="{{$product->image}}">
			</div>
		</div>
			
		<div class="form-row my-2">
			<div class="col-sm-2">
				<label for="price" class="bold mx-2">*Price:</label>
			</div>
			<div class="col-sm-7">
				<input type="number" class="form-control" name="price" value="{{$product->price}}">
			</div>
		</div>
		
		<div class="form-row my-2">
			<div class="col-sm-2"></div>
			<div class="col-sm-7">
				<input value="Modificare produs" type="submit" name="update_submit" class="btn btn-success my-2 form-control">
				<a href="{{route('products.index')}}" class="btn btn-info form-control">Cancel</a>
			</div>
		</div>
	
	{!! Form::close() !!}
</div>
@endsection