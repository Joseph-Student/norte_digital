@extends('layouts.app')

@section('title', 'Crear Producto')

@section('sidebar')
    @parent

@endsection

@section('content')
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>Horizontal form</h5>
            <div class="ibox-tools">
                <a class="collapse-link">
                    <i class="fa fa-chevron-up"></i>
                </a>
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-wrench"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#">Config option 1</a>
                    </li>
                    <li><a href="#">Config option 2</a>
                    </li>
                </ul>
                <a class="close-link">
                    <i class="fa fa-times"></i>
                </a>
            </div>
        </div>
        <div class="ibox-content">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form class="form-horizontal" action="/products" method="POST">
                @csrf
                @method('POST')
                @include('product._form')
                <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                        <button class="btn btn-sm btn-white" type="submit">Guardar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection