@extends('layouts.app')

@section('title', 'Cliente '.$product->name)

@section('sidebar')
    @parent

@endsection

@section('content')
    <h2>Nombre del Producto: </h2>
    <p>{{ $product->name }}</p>

    <h3>Cliente que lo compraron: </h3>
    <ul>
        @foreach($product->clients as $client)
            <li>{{ $client->name }}</li>
        @endforeach
    </ul>
@endsection