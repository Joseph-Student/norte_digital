@extends('layouts.app')

@section('title', 'Cliente '.$client->name)

@section('sidebar')
    @parent

@endsection

@section('content')
    <h2>Nombre del Cliente: </h2>
    <p>{{ $client->name }}</p>

    <h3>Productos: </h3>
    <ul>
        @foreach($client->products as $product)
            <li>{{ $product->name }} -- {{ $product->price }}</li>
        @endforeach
    </ul>
@endsection