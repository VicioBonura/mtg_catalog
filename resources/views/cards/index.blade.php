{{-- resources/views/cards/index.blade.php --}}
@extends('layouts.app')
@section('title', 'Cards - MTG Catalog')
@section('header', 'Cards')
@section('content')
<div class="container-fluid">
    @if($cards->isEmpty())
        <p>Catalogo vuoto</p>
        <a href="{{ route('cards.create') }}" class="btn btn-primary">Aggiungi una carta</a>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Set</th>
                    <th>Rarità</th>
                    <th>Prezzo</th>
                    <th>Azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cards as $card)
                <tr>
                    <td>{{ $card->name }}</td>
                    <td>{{ $card->set->name }}</td>
                    <td>{{ $card->rarity }}</td>
                    <td>{{ $card->market_price }}</td>
                    <td>
                        <a href="{{ route('cards.show', $card->id) }}" class="btn btn-info">Dettagli</a>
                        <a href="{{ route('cards.edit', $card->id) }}" class="btn btn-warning">Modifica</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection

