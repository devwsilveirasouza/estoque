@extends('adminlte::page')

@section('title', 'Cadastro')

@section('content_header')

    <div class="card card-header">
        <h1 class="text text-center text-blue">CADASTRO DE USUÁRIO</h1>
    </div>

@stop

@section('content')

    <div class="card-body">

        <form id="form_cadUser" class="form_cadUser" action="{{  }}" method="post">
            @csrf
            <div class="form-group">
                <label for="exampleInputText">Usuário</label>
                <input type="text" class="form-control" id="exampleInputText" name="name" aria-describedby="textlHelp" placeholder="Usuário...">
              </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Email...">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
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
