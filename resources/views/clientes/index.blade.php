@extends('layout')

<!-- Section hearder -->
@section('header')
<svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-terminal-dash" viewBox="0 0 16 16">
    <path d="M2 3a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h5.5a.5.5 0 0 1 0 1H2a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v4a.5.5 0 0 1-1 0V4a1 1 0 0 0-1-1H2Z" />
    <path d="M3.146 5.146a.5.5 0 0 1 .708 0L5.177 6.47a.75.75 0 0 1 0 1.06L3.854 8.854a.5.5 0 1 1-.708-.708L4.293 7 3.146 5.854a.5.5 0 0 1 0-.708ZM5.5 9a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1H6a.5.5 0 0 1-.5-.5ZM16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-5.5 0a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 0-1h-3a.5.5 0 0 0-.5.5Z" />
</svg>
Bank Setup Now
@endsection

<!-- Section contents -->
@section('contents')

<!-- Verify mensagem sucess -->
@if(!empty($mensagem))
<div class="alert alert-success">
    {{$mensagem}}
</div>
@endif

<div class="form-group">
    <a href="/create" class="btn btn-success btn-sm" title="Novo usuário">Adicionar cliente</a>
    <a href="/" class="btn btn-primary btn-sm" title="Home">Home</a>
</div>

<table class="table table-hover table-sm">
    <thead class="thead-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">E-mail</th>
            <th scope="col">Nome Conta</th>
            <th scope="col">Saldo</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    @foreach($clientes as $cliente)
    <tbody>
        <tr>
            <th scope="row">{{$cliente->id}}</th>
            <td>{{$cliente->nome}}</td>
            <td>{{$cliente->email}}</td>
            <td><?php App\Http\Controllers\ClientesController::dadosConta('nome_chave_bsn', $cliente->id) ?></td>
            <td><?php App\Http\Controllers\ClientesController::dadosConta('saldo_bsn', $cliente->id) ?></td>
            <td>
                <div class="btn-group">

                    <!-- Botão excluir usuário -->
                    <form method="post" class="form-group" action="/dash/{{$cliente->id}}" onsubmit="return confirm('Tem certeza que deseja excluir {{addslashes($cliente->nome)}}')">
                        <!-- toekn laravel -->
                        @csrf

                        <!-- Method post = delete -->
                        @method('DELETE')

                        <button class="btn btn-outline-danger btn-sm mr-1" title="Excluir usuário {{$cliente->nome}}">
                            <i class="bi bi-trash"></i>
                        </button>
                    </form>

                    <!-- Botão editar usuário -->
                    <a href="/edit/{{$cliente->id}}">
                        <button class="btn btn-outline-warning btn-sm mr-1" title="Editar usuário {{$cliente->nome}}">
                            <i class="bi bi-pencil-square"></i>
                        </button>
                    </a>

                    <!-- Visualização prévia -->
                    <a href="/perfil/{{$cliente->id}}">
                        <button class="btn btn-outline-primary btn-sm" title="Profile">
                            <i class="bi bi-person-circle"></i>
                        </button>
                    </a>
                </div>
            </td>
        </tr>
    </tbody>
    @endforeach
</table>
@endsection