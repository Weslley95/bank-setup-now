@extends('layout')

<!-- Section hearder -->
@section('header')
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
  <a href="/dash/create" class="btn btn-dark">Adicionar</a>
</div>

<ul class="list-group">
  <?php foreach ($usuarios as $usuario) : ?>
    <li class="list-group-item  d-flex justify-content-between align-items-center">
      {{ $usuario->nome }}
      <form method="post" action="/dash/{{$usuario->id}}" onsubmit="return confirm('Tem certeza que deseja excluir {{addslashes($usuario->nome)}}')">
        <!-- toekn laravel -->
        @csrf
        <!-- Method post = delete -->
        @method('DELETE')
        <button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
      </form>
    </li>
  <?php endforeach; ?>
</ul>
<table class="table table-hover table-sm">
  <thead class="thead-dark">
    <tr class="">
      <th scope="col">ID</th>
      <th scope="col">Login</th>
      <th scope="col">Nome</th>
      <th scope="col">E-mail</th>
      <th scope="col">Nome Conta</th>
      <th scope="col">Saldo</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <?php foreach ($usuarios as $usuario) : ?>
  <tbody>
    <tr>
      <th scope="row">{{ $usuario->id }}</th>
      <td>{{ $usuario->login }}</td>
      <td>{{ $usuario->nome }}</td>
      <td>{{ $usuario->email }}</td>
      <td>Conta BSN</td>
      <td>B$N 50</td>
      <td>
          <form method="post" action="/dash/{{$usuario->id}}" onsubmit="return confirm('Tem certeza que deseja excluir {{addslashes($usuario->nome)}}')">
              <!-- toekn laravel -->
        @csrf
        <!-- Method post = delete -->
        @method('DELETE')
        <button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
      </td>
    </tr>
  </tbody>
  <?php endforeach; ?>
</table>
@endsection