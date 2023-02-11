@extends('adminlte::page')

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="{{ asset('site/bootstrap.css') }}">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css"/> --}}
    <link rel="stylesheet" href="https://kit.fontawesome.com/b1da8a5e28.css" crossorigin="anonymous">
@stop

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
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
            <div class="table-responsive col-md-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            {{-- <th>ID Opção</th> --}}
                            {{-- <th class="col-md-1">ID</th> --}}
                            <th class="col-md-1">CÓDIGO:</th>
                            <th class="col-md-1">PN:</th>
                            <th class="col-md-2">DESCRIÇÃO</th>
                            <th class="col-md-1">MARCA:</th>
                            <th class="col-md-1">MODELO:</th>
                            <th class="col-md-1">UM</th>
                            <th class="col-md-1">CATEGORIA</th>
                            <th class="col-md-1">SUB-CATEGORIA</th>
                            <th class="col-md-1">LOCAL:</th>
                            <th class="col-md-1">EST.MIN:</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($products as $product)
                            <tr>
                                {{-- <td>{{$product->id}}</td> --}}
                                <td>{{$product->code}}</td>
                                <td>{{$product->partNumber}}</td>
                                <td>{{$product->description}}</td>
                                <td>{{$product->brand}}</td>
                                <td>{{$product->model}}</td>
                                <td>{{$product->um}}</td>
                                <td>{{$product->category}}</td>
                                <td>{{$product->subCategory}}</td>
                                <td>{{$product->address}}</td>
                                <td>{{$product->minQuantity}}</td>
                                <!-- <td>
                                    <div class="btn-group mr-2">
                                    <a href="{{ route('product-edit', [$product->id]) }}" class="btn btn-primary mr-2 sm">Edit</a>
                                    <form action="{{ route('product-delete', [$product->id]) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger sm">Delete</button>
                                    </form>
                                </div> -->
                                </td>
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

@section('js')
    <script src="{{ asset('site/jquery.js') }}"></script>
    <script src="{{ asset('site/bootstrap.js') }}"></script>
    <script src="https://kit.fontawesome.com/b1da8a5e28.js" crossorigin="anonymous"></script>
@stop
