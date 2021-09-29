@extends('layouts.admin')
@section('content')

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

<div class="m-2">

		<a href="{{route('products.index')}}" class="fa fa-arrow-left"></a>
		<h1 class="mb-3">Adaugare produs nou</h1>
		<br>

	{{ Form::open(array('route' => 'products.store', 'method' => 'POST')) }}
	
		<div class="form-row my-2">
			<div class="col-sm-2">
				<label for="name" class="mx-2">*Nume:</label>
			</div>
			<div class="col-sm-7">
				<input type="text" class="form-control" name="name" value="{{old('name')}}">
			</div>
		</div>
			
		<div class="form-row my-2">
			<div class="col-sm-2">
				<label for="category" class="bold mx-2">*Categorie:</label>
			</div>
			<div class="col-sm-7">
				<input type="text" class="form-control" name="category">
			</div>
		</div>
	
		<div class="form-row my-2">
			<div class="col-sm-2">
				<label for="quantity" class="bold mx-2">*Cantitate:</label>
			</div>
			<div class="col-sm-7">
				<input class="form-control" type="number" name="quantity">
			</div>
		</div>
			
		<div class="form-row my-2">
			<div class="col-sm-2">
				<label for="gramaj" class="bold mx-2">Gramaj:</label>
			</div>
			<div class="col-sm-7">
				<input type="number" class="form-control" name="gramaj">
			</div>
		</div>
		
		<div class="form-row my-2">
			<div class="col-sm-2 bold">
				<label for="description" class="mx-2">Descriere:</label>
			</div>
			<div class="col-sm-7">
				<textarea rows="7" class="form-control" name="description"></textarea>
			</div>
		</div>
		
		<div class="form-row my-2">
			<div class="col-sm-2">
				<label for="prop_car" class="bold mx-2">Proprietati si caracteristici:</label>
			</div>
			<div class="col-sm-7">
				<textarea rows="7" class="form-control" name="prop_car"></textarea>
			</div>
		</div>
		
		<div class="form-row my-2">
			<div class="col-sm-2">
				<label for="image" class="bold mx-2">*Imagine:</label>
			</div>
			<div class="col-sm-7">
				<input class="form-control" type="file" name="image">
			</div>
		</div>
		
		<div class="form-row my-2">
			<div class="col-sm-2">
				<label for="price" class="bold mx-2">*Price:</label>
			</div>
			<div class="col-sm-7">
				<textarea class="form-control" name="price"></textarea>
			</div>
		</div>
		
		<div class="form-row my-2">
			<div class="col-sm-2"></div>
			<div class="col-sm-7">
				<input type="submit" name="insert_submit" value="Adauga produs nou" class="btn btn-success my-2 form-control">
				<a href="{{route('products.index')}}" class="btn btn-info form-control"> Cancel </a>
			</div>
		</div>
	            
	{{ Form::close() }}
</div>

@endsection
