@extends('layout')

<!-- Section hearder -->
@section('header')
<svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-graph-up" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M0 0h1v15h15v1H0V0Zm14.817 3.113a.5.5 0 0 1 .07.704l-4.5 5.5a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61 4.15-5.073a.5.5 0 0 1 .704-.07Z"/>
</svg>
Cotação
@endsection

<!-- Section contents -->
@section('contents')

<div class="form-group">
    <a href="/dash" class="btn btn-success btn-sm" title="Dash">Dash</a>
    <a href="/" class="btn btn-primary btn-sm" title="Home">Home</a>
    <a href="/economia" class="btn btn-primary btn-sm" title="Home">Cotação</a>
</div>

<div class="table-responsive mt-3">
    <h4>Cotações de Moedas - últimos fechamentos</h4>
    <table class="table table table-sm text-center">
        <thead>
            <tr class="thead-dark">
                <th scope="col">Moeda</th>
                <th scope="col">De / Para</th>
                <th scope="col">Maxímo</th>
                <th scope="col">Minímo</th>
                <th scope="col">Variação</th>
                <th scope="col">% de Variação</th>
                <th scope="col">Compra</th>
                <th scope="col">Venda</th>
                <th scope="col">Data de fechamento</th>
            </tr>
        </thead>
        <tbody>
        @foreach($btcs as $btc)
            <tr scope="row">
                <td>BTC/BRL</td>
                <td>Bitcoin/Real Brasileiro</td>
                <td>R${{$btc->high}}</td>
                <td>R${{$btc->low}}</td>
                <td>R${{$btc->varBid}}</td>
                <td>%{{$btc->pctChange}}</td>
                <td>R${{$btc->bid}}</td>
                <td>R${{$btc->ask}}</td>
                <td>{{date('d M Y',$btc->timestamp)}}</td>
            </tr>
            @endforeach
            @foreach($usds as $usd)
            <tr scope="row">
                <td>USD/BRL</td>
                <td>Dólar Americano/Real Brasileiro</td>
                <td>R${{$usd->high}}</td>
                <td>R${{$usd->low}}</td>
                <td>R${{$usd->varBid}}</td>
                <td>%{{$usd->pctChange}}</td>
                <td>R${{$usd->bid}}</td>
                <td>R${{$usd->ask}}</td>
                <td>{{date('d M Y',$usd->timestamp)}}</td>
            </tr>
            @endforeach
            @foreach($eurs as $eur)
            <tr scope="row">
                <td>EUR/BRL</td>
                <td>Euro/Real Brasileiro</td>
                <td>R${{$eur->high}}</td>
                <td>R${{$eur->low}}</td>
                <td>R${{$eur->varBid}}</td>
                <td>%{{$eur->pctChange}}</td>
                <td>R${{$eur->bid}}</td>
                <td>R${{$eur->ask}}</td>
                <td>{{date('d M Y',$eur->timestamp)}}</td>
            </tr>
            @endforeach
            @foreach($brlts as $brlt)
            <tr scope="row">
                <td>USD/BRLT</td>
                <td>Dólar Americano/Real Brasileiro Turismo</td>
                <td>R${{$brlt->high}}</td>
                <td>R${{$brlt->low}}</td>
                <td>R${{$brlt->varBid}}</td>
                <td>%{{$brlt->pctChange}}</td>
                <td>R${{$brlt->bid}}</td>
                <td>R${{$brlt->ask}}</td>
                <td>{{date('d M Y',$brlt->timestamp)}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection