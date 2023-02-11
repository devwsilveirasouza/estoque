@extends('adminlte::page')

@section('title', 'Cadastro')

@section('content_header')

    <div class="card card-header">
        <h1 class="text text-center text-blue">CADASTRO DE PRODUTOS</h1>
    </div>

@stop

@section('content')

    <div class="card-body">

        <form id="form_cadProd" class="form_cadProd form-row" action="{{ route('product-store'); }}" method="post">
            @csrf
            <div class="form-row col-2">
                <!-- <label for="exampleInputText">Codigo:</label> -->
                <input type="text" class="form-control" id="exampleInputText" name="code" aria-describedby="textlHelp" placeholder="CODE...">
            </div>
            <div class="form-row col-6'">
              <!-- <label for="exampleInputText">Part Number:</label> -->
              <input type="text" class="form-control" id="exampleInputText" name="partNumber" aria-describedby="textlHelp" placeholder="Part Number...">
            </div>
            <div class="form-group col-6'">
              <!-- <label for="exampleInputText">Descrição:</label> -->
              <input type="text" class="form-control" id="exampleInputText" name="description" aria-describedby="textlHelp" placeholder="Decrição...">
            </div>
            <div class="form-group col-6'">
              <!-- <label for="exampleInputText">Marca:</label> -->
              <input type="text" class="form-control" id="exampleInputText" name="brand" aria-describedby="textlHelp" placeholder="Marca...">
            </div>
            <div class="form-group col-6'">
              <!-- <label for="exampleInputText">Model:</label> -->
              <input type="text" class="form-control" id="exampleInputText" name="model" aria-describedby="textlHelp" placeholder="Modelo...">
            </div>
            <div class="form-group col-6'">
              <!-- <label for="exampleInputText">UM:</label> -->
              <input type="text" class="form-control" id="exampleInputText" name="um" aria-describedby="textlHelp" placeholder="UM..">
            </div>
            <div class="form-group col-6'">
              <!-- <label for="exampleInputText">Categoria:</label> -->
              <input type="text" class="form-control" id="exampleInputText" name="category" aria-describedby="textlHelp" placeholder="Categoria...">
            </div>
            <div class="form-group col-6'">
              <!-- <label for="exampleInputText">Sub-categoria:</label> -->
              <input type="text" class="form-control" id="exampleInputText" name="subCategory" aria-describedby="textlHelp" placeholder="Sub-categoria...">
            </div>
            <div class="form-group col-6'">
              <!-- <label for="exampleInputText">Localização:</label> -->
              <input type="text" class="form-control" id="exampleInputText" name="address" aria-describedby="textlHelp" placeholder="Localização...">
            </div>
            <div class="form-group">
              <!-- <label for="exampleInputText">Estoque Mínimo:</label> -->
              <input type="text" class="form-control" id="exampleInputText" name="minQuantity" aria-describedby="textlHelp" placeholder="Estoque mínimo...">
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
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
