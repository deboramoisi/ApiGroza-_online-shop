@extends('layouts.admin')
@section('content')

	@if($message = Session::get('success')) 
		<div class="alert alert-success">
			<p> {{ $message }} </p>
		</div>
	@endif

	<div class="m-3">

		<h1 class="bold my-2">Inregistrari tabela produse</h1>

		<!-- View create -->
		<a href="/products/create" class="btn btn-info my-3"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;Adauga produs nou</a>
		<a href="{{ route('produse') }}" class="btn btn-warning my-3 mx-3 text-white">
			<img src="{{ asset('img/bee.png') }}">
			&nbsp;Inapoi la magazin	
		</a>


	<table border="1" class="table">
		<thead class="thead-dark">
			<th scope="col">Id</th>
			<th scope="col">Nume</th>
			<th scope="col">Categorie</th>
			<th scope="col">Stoc</th>
			<th scope="col">Gramaj*</th>
			<th scope="col">Descriere</th>
			<th scope="col">Proprietati si caracteristici*</th>
			<th scope="col">Imagine</th>
			<th scope="col">Pret</th>
			<th>Show</th>
			<th>Edit</th>
			<th>Delete</th>
		</thead>
     		
     	<!-- Intr-o tabela html se afiseaza toate produsele memorate in variabila $product a matricei $products -->
     	@if (count($products) > 0)
     		@foreach ($products as $key => $product)
            <tr scope="row">
            	<td> {{ $product->id }} </td>
            	<td> {{ $product->name }} </td>
            	<td> {{ $product->category }} </td>
            	<td> {{ $product->quantity }} </td>
            	<td> {{ $product->gramaj }} </td>
            	<td> {{ $product->description }} </td>
            	<td> {{ $product->prop_car }} </td>
            	<td> {{ $product->image }} </td>
            	<td> {{ $product->price }} </td>
            	<td>
            		<a class="btn btn-success" href="{{ route('products.show', $product->id) }}">Show</a>
            	</td>
            	<td>
					<a href="{{ route('products.edit', $product->id) }}"><img src="https://img.icons8.com/cotton/64/000000/ball-point-pen--v1.png"/></a>
				</td>
            	<td>
            		<!--  -->
            		{{ Form::open(['method' => 'DELETE', 'route' => ['products.destroy', $product->id], 'style' => 'display:inline']) }}
            		{{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
            		{{ Form::close() }}
            	</td>
            		
            </tr>
      	@endforeach
      @else
      	<tr>
      		<td colspan="4"> Nu exista produse </td>
      	@endif
    </table>
    <!-- Introduce numar pagina -->
    <!-- Render e utilizat pentru paginare -->
    {{ $products->render() }}
	</div>
@endsection