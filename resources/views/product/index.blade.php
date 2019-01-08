@extends('layouts.app')

@section('title', 'Lista de Productos')

@section('sidebar')
    @parent

@endsection

@section('content')
    @foreach($products as $product)
        <h2>Nombre del producto: </h2>
        <p>{{ $product->name }}</p>
        <br>
    @endforeach
@endsection