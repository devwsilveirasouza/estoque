@extends('adminlte::page')

@section('title', 'Usuários')

@section('content_header')

    <div class="card card-header">
        <h1 class="text text-center text-blue">LISTAGEM DE USUÁRIOS</h1>
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
                            <th class="col-md-6">Nome</th>
                            <th class="col-md-5">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{-- PAGINAÇÃO LARAVEL --}}
                {{ $users->links() }}
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
