{{-- resources/views/sets/create.blade.php --}}
@extends('layouts.app')
@section('title', 'Nuovo Set - MTG Catalog')
@section('header', 'Sets')
@section('content')
<div class="container main-content flex-center">
    <form action="{{ route('sets.store') }}" method="post" class="form">
        <h3 class="col-span-12">Nuovo Set</h3>
        @csrf
        <div class="form-group col-span-9">
            <input type="text" id="name" name="name" placeholder="Nome" value="{{ old('name') }}" required>
            <label for="name">Nome</label>
        </div>

        <div class="form-group col-span-3">
            <input type="text" id="code" name="code" maxlength="3" placeholder="Code" value="{{ old('code') }}" required>
            <label for="code">Code</label>
        </div>

        <div class="form-group col-span-6">
            <select id="set_type_id" name="set_type_id">
                <option value="" selected disabled>--- Seleziona ---</option>
                @foreach($setTypes as $setType)
                <option value="{{ $setType->id }}" {{ old('set_type_id') == $setType->id ? 'selected' : '' }}>{{ $setType->name }}</option>
                @endforeach
            </select>
            <label for="set_type_id">Tipo</label>
        </div>

        <div class="form-group col-span-6">
            <select id="block_id" name="block_id">
                <option value="" selected disabled>--- Seleziona ---</option>
                @foreach($blocks as $block)
                <option value="{{ $block->id }}" {{ old('block_id') == $block->id ? 'selected' : '' }}>{{ $block->name }}</option>
                @endforeach
            </select>
            <label for="block_id">Blocco</label>
        </div>

        <div class="form-group col-span-3">
            <input type="number" id="card_count" name="card_count" min="1" max="999" placeholder="# Carte" value="{{ old('card_count') }}">
            <label for="card_count"># Carte</label>
        </div>

        <div class="form-group col-span-5">
            <input type="date" id="release_date" name="release_date" value="{{ old('release_date') }}">
            <label for="release_date">Data di rilascio</label>
        </div>
        <div class="btn-container col-span-4">
            <button type="submit">Aggiungi</button>
        </div>
    </form>
</div>
@endsection
