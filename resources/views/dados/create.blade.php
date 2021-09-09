@extends('layout')

<!-- Section hearder -->
@section('header')
Adicionar Dados
@endsection

<!-- Section contents -->
@section('contents')
<form method="post">
  <div class="form-group">
    <label for="name"></label>
    <input type="text" class="form-control" name="name" id="name" placeholder="Nome">
  </div>

  <button class="btn btn-primary">Adicionar</button>
</form>
@endsection