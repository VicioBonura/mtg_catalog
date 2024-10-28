{{-- resources/views/sets/create.blade.php --}}
@extends('layouts.app')
@section('title', 'Nuovo Set - MTG Catalog')
@section('header', 'Nuovo Set')
@section('content')
<div class="container">
    <form action="{{ route('sets.store') }}" method="post">
        @csrf
        <div>
            <label for="name">Nome</label>
            <input type="text" id="name" name="name" required>
        </div>

        <div>
            <label for="code">Code</label>
            <input type="text" id="code" name="code" maxlength="3" required>
        </div>

        <div>
            <label for="set_type_id">Tipo</label>
            <select id="set_type_id" name="set_type_id">
                <option value="" selected disabled> --- Tipo di set --- </option>
                @foreach($setTypes as $setType)
                    <option value="{{ $setType->id }}">{{ $setType->name }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="block_id">Blocco</label>
            <select id="block_id" name="block_id" required>
                <option value="" selected disabled> --- Blocco --- </option>
                @foreach($blocks as $block)
                    <option value="{{ $block->id }}">{{ $block->name }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="card_count">Numero di carte</label>
            <input type="number" id="card_count" name="card_count" min="1" required>
        </div>

        <div>
            <label for="release_date">Data di rilascio</label>
            <input type="date" id="release_date" name="release_date" required>
        </div>

        <button type="submit">Inserisci Set</button>
    </form>
</div>
@endsection
