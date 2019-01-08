@extends('layouts.app')

@section('title', 'Lista de clientes')

@section('sidebar')
    @parent

@endsection

@section('content')
    @foreach($clients as $client)
        <h2>Nombre del Cliente: </h2>
        <p>{{ $client->name }}</p>
        <br>
    @endforeach
@endsection