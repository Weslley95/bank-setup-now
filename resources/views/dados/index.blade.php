@extends('layout')

<!-- Section hearder -->
@section('header')
Dados
@endsection

<!-- Section contents -->
@section('contents')
<a href="/dash/create" class="btn btn-dark m-3">Adicionar</a>

<ul class="list-group">
  <?php foreach ($dados as $dado) : ?>
    <li class="list-group-item">
      <center><?= $dado; ?></center>
    </li>
  <?php endforeach; ?>
</ul>
@endsection