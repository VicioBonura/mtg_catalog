{{-- resources/views/cards/index.blade.php --}}
@extends('layouts.app')
@section('title', 'Sets - MTG Catalog')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection
@section('header', 'Sets')
@section('content')
<div class="container-fluid">
    @if($sets->isEmpty())
        <div class="h-100 flex-center">
            <div>
                <p class="text-center">Catalogo vuoto</p>
                <a role="button" href="{{ route('sets.create') }}" class="btn btn-primary">Aggiungi un set</a>
            </div>
        </div>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Code</th>
                    <th>Tipo</th>
                    <th>Blocco</th>
                    <th>Carte</th>
                    <th>Data di rilascio</th>
                    <th>Azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach($sets as $set)
                <tr>
                    <td>{{ $set->name }}</td>
                    <td>{{ $set->code }}</td>
                    <td>{{ $set->setType?->name }}</td>
                    <td>{{ $set->block?->name }}</td>
                    <td>{{ $set->card_count ?? '-' }}</td>
                    <td>{{ $set->release_date ?? '-' }}</td>
                    <td class="actions">
                        <a href="{{ route('sets.show', $set->id) }}"><i class="bi bi-eye"></i><span class="visually-hidden">Dettagli</span></a>
                        <a href="{{ route('sets.edit', $set->id) }}"><i class="bi bi-pencil"></i><span class="visually-hidden">Modifica</span></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    <a role="button" href="{{ route('sets.create') }}" class="btn btn-primary quick-action">
        <i class="bi bi-plus"></i><span class="visually-hidden">Aggiungi Set</span>
    </a>
</div>
@endsection