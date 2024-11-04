{{-- resources/views/cards/index.blade.php --}}
@extends('layouts.app')
@section('title', 'Cards - MTG Catalog')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection
@section('header', 'Cards')
@section('content')
<div class="container-fluid">
    @if($cards->isEmpty())
    <div class="h-100 flex-center">
            <div>
                <p class="text-center">Catalogo vuoto</p>
                <a role="button" href="{{ route('cards.create') }}" class="btn btn-primary">Aggiungi una carta</a>
            </div>
        </div>
    @else
        <table class="table">
            <thead>
                <tr class="groups">
                    <th colspan="5">Carta</th>
                    <th colspan="1">Varianti</th>
                    <th colspan="2">Market</th>
                    <th></th>
                </tr>
                <tr>
                    <th>Nome</th>
                    <th>Set</th>
                    <th title="Rarità">R</th>
                    <th title="Costo Mana">Mana</th>
                    <th class="groupEnd" title="Costo Mana Convertito">CMC</th>
                    <th class="groupEnd" title="Quantità (foil)">Pezzi</th>
                    <th title="EUR">EUR</th>
                    <th class="groupEnd" title="USD">USD</th>
                    <th>Azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cards as $card)
                <tr>
                    <td>{{ $card->name }}</td>
                    <td>{{ $card->set->name }}</td>
                    <td>{{ $card->rarity }}</td>
                    <td>{{ $card->mana_cost }}</td>
                    <td>{{ $card->cmc }}</td>
                    <td>{{ $card->variants->sum('quantity') }} ({{ $card->variants->where('is_foil', true)->sum('quantity') }})</td>
                    <td>{{ $card->marketInfos->sum('value_eur') }}</td>
                    <td>{{ $card->marketInfos->sum('value_usd') }}</td>
                    <td>
                        <a href="{{ route('cards.show', $card->id) }}"><i class="bi bi-eye"></i><span class="visually-hidden">Dettagli</span></a>
                        <a href="{{ route('cards.edit', $card->id) }}"><i class="bi bi-pencil"></i><span class="visually-hidden">Modifica</span></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    <a role="button" href="{{ route('cards.create') }}" class="btn btn-primary quick-action">
        <i class="bi bi-plus"></i><span class="visually-hidden">Aggiungi Carta</span>
    </a>
</div>
@endsection

