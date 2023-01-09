@extends('adminlte::page')

@section('title', 'Products')

@section('content_header')

    <div class="card card-header">
        <h1 class="text text-center text-blue">PRODUTOS CADASTRADOS
            <a href="{{route('product-create');}}" class="btn btn-success sm">Novo</a>
        </h1>
    </div>

@stop

@section('content')

    <div class="card">
        <div class="card-body">
            <div class="table-responsive col-md-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            {{-- <th>ID Opção</th> --}}
                            <th class="col-md-1">ID</th>
                            <th class="col-md-2">SKU</th>
                            <th class="col-md-5">Description</th>
                            <th class="col-md-3">Reference</th>
                            <th class="col-md-1">Qtd. Min</th>
                        </tr>
                    </thead>
                    <tbody>

                            <tr>
                                <td>1</td>
                                <td>EG0564</td>
                                <td>Plástico bolha - 3M RL</td>
                                <td>PB-3MRL</td>
                                <td>2</td>
                            </tr>

                    </tbody>
                </table>
                {{-- PAGINAÇÃO LARAVEL
                {{ $productss->links() }} --}}
            </div>
        </div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="{{ asset('site/bootstrap.css') }}">
@stop

@section('js')
    <script src="{{ asset('site/jquery.js') }}"></script>
    <script src="{{ asset('site/bootstrap.js') }}"></script>
@stop
