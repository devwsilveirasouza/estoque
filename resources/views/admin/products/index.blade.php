@extends('adminlte::page')

@section('title', 'Products')

@section('content_header')

    <div class="card card-header">
        <h1 class="text text-center text-blue">PRODUTOS CADASTRADOS
            <a href="{{route('product-create');}}" class="btn btn-info float-end sm">Novo</a>
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
                            <th class="col-md-5">Descrição</th>
                            <th class="col-md-3">Rerência</th>
                            <th class="col-md-1">Qtd. Min</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($products as $product)
                            <tr>
                                <td>{{$product->id}}</td>
                                <td>{{$product->sku}}</td>
                                <td>{{$product->description}}</td>
                                <td>{{$product->reference}}</td>
                                <td>{{$product->qtd_min}}</td>
                            </tr>
                    @endforeach
                    </tbody>
                </table>
                {{-- PAGINAÇÃO LARAVEL --}}
                {{ $products->links() }}
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
