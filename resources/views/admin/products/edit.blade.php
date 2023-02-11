@extends('adminlte::page')

@section('title', 'Cadastro')

@section('content_header')

    <div class="card card-header">
        <h1 class="text text-center text-blue">EDITAR PRODUTOS</h1>
    </div>

@stop

@section('content')

    <div class="card-body">

        <form id="form_updateProd" class="form_updateProd" action="{{ route('product-update', $product ) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="exampleInputText">PN:</label>
                <input type="text" class="form-control" id="exampleInputText" name="sku" value="{{$product->sku}}" aria-describedby="textlHelp" placeholder="Part number...">
              </div>
            <div class="form-group">
              <label for="exampleInputText">Description</label>
              <input type="text" class="form-control" id="exampleInputText" name="description" value="{{$product->description}}" aria-describedby="textlHelp" placeholder="Description...">
            </div>
            <div class="form-group">
              <label for="exampleInputText">Reference</label>
              <input type="text" class="form-control" id="exampleInputText" name="reference" value="{{$product->reference}}" aria-describedby="textlHelp" placeholder="Reference...">
            </div>
            <div class="form-group">
              <label for="exampleInputText">Qtde. Min.</label>
              <input type="text" class="form-control" id="exampleInputText" name="qtd_min" value="{{$product->qtd_min}}" aria-describedby="textlHelp" placeholder="Qtde. Min...">
            </div>
            <button type="submit" class="btn btn-primary">Editar</button>
          </form>

    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
