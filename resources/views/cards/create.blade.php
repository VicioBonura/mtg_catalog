{{-- resources/views/cards/create.blade.php --}}
@extends('layouts.app')
@section('title', 'Nuova Carta - MTG Catalog')
@section('header', 'Cards')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/card-form.css') }}">
@endsection
@section('content')
<div class="container-fluid">
    <form action="{{ route('cards.store') }}" method="post" class="form form-xl">
        @csrf
        <h3 class="col-span-12">Nuova Carta</h3>

        <!-- Dropdown per selezionare una carta esistente -->
        <div class="form-group col-span-9">
            <select id="card_id" name="card_id">
                <option value="">-- Seleziona --</option>
                @foreach($existingCards as $card)
                    <option value="{{ $card->id }}">{{ $card->name }} - {{ $card->set->name }}</option>
                @endforeach
            </select>
            <label for="card_id">Seleziona Carta Esistente</label>
        </div>
        <div class="form-group col-span-3">
            <button type="button" id="create_new" data-action="create_new">Crea Nuova</button>
        </div>
        <input type="hidden" name="use_existing" id="use_existing" value="true">

        <!-- Informazioni Base -->
        <fieldset id="base_info" disabled class="hidden col-span-12">
            <legend>Informazioni Base</legend>

            <!-- Nome -->
            <div class="form-group col-span-8">
                <input type="text" id="name" name="name" placeholder="Nome" value="{{ old('name') }}" required>
                <label for="name">Nome</label>
            </div>

            <!-- Set -->
            <div class="form-group col-span-4">
                <select id="set_id" name="set_id">
                    <option value="" selected disabled>--- Seleziona ---</option>
                    @foreach($sets as $set)
                        <option value="{{ $set->id }}" {{ old('set_id') == $set->id ? 'selected' : '' }}>{{ $set->name }}</option>
                    @endforeach
                </select>
                <label for="set_id">Set</label>
            </div>

            <!-- Tipi -->
            <div class="form-group col-span-4 row-span-5">
                <select id="types" name="types[]" multiple>
                    <option value="" selected disabled>--- Seleziona ---</option>
                    @foreach($types as $type)
                        <option value="{{ $type->id }}" {{ old('types') == $type->id ? 'selected' : '' }}>{{ $type->name }}</option>
                    @endforeach
                </select>
                <label for="types">Tipi</label>
            </div>

            <!-- Sottotipi -->
            <div class="form-group col-span-4 row-span-5">
                <select id="subtypes" name="subtypes[]" multiple>
                    <option value="" selected disabled>--- Seleziona ---</option>
                    @foreach($subTypes as $subtype)
                        <option value="{{ $subtype->id }}" {{ old('subtypes') == $subtype->id ? 'selected' : '' }}>{{ $subtype->name }}</option>
                    @endforeach
                </select>
                <label for="subtypes">Sottotipi</label>
            </div>

            <!-- Rarità -->
            <div class="form-group col-span-4">
                <select id="rarity_id" name="rarity_id">
                    <option value="" selected disabled>--- Seleziona ---</option>
                    @foreach($rarities as $rarity)
                        <option value="{{ $rarity->id }}" {{ old('rarity') == $rarity->id ? 'selected' : '' }}>{{ $rarity->name }}</option>
                    @endforeach
                </select>
                <label for="rarity_id">Rarità</label>
            </div>

            <!-- Supertipo -->
            <div class="form-group col-span-4">
                <select id="supertype_id" name="supertype_id">
                    <option value="" selected disabled>--- Seleziona ---</option>
                    @foreach($superTypes as $supertype)
                        <option value="{{ $supertype->id }}" {{ old('supertype') == $supertype->id ? 'selected' : '' }}>{{ $supertype->name }}</option>
                @endforeach
                </select>
                <label for="supertype_id">Supertipo</label>
            </div>

            <!-- Numero -->
            <div class="form-group col-span-2">
                <input type="text" id="number" name="number" placeholder="# Carta">
                <label for="number">Num.</label>
            </div>

            <!-- Colori -->
            <div class="form-group col-span-2 row-span-3">
                <label>Colori</label>
                <div id="colors">
                    @foreach($colors as $color)
                        <div>
                            <input type="checkbox" id="color_{{ $color->id }}" name="colors[]" value="{{ $color->id }}" {{ in_array($color->id, old('colors', [])) ? 'checked' : '' }}>
                            <label for="color_{{ $color->id }}">{{ $color->name }}</label>
                        </div>
                    @endforeach
                </div>
                
            </div>

            <!-- Costo di Mana -->
            <div class="form-group col-span-2">
                <input type="text" id="mana_cost" name="mana_cost" placeholder="Mana">
                <label for="mana_cost">Mana</label>
            </div>

            <!-- Costo di Mana Convertito -->
            <div class="form-group col-span-2">
                <input type="text" id="cmc" name="cmc" placeholder="CMC" readonly>
                <label for="cmc">CMC</label>
            </div>
        </fieldset>

        <!-- Informazioni Variante -->
        <fieldset id="variant_info" class="col-span-12">
            <legend>Informazioni Variante</legend>
            <div class="form-group col-span-7">
                <input type="text" id="local_name" name="local_name" placeholder="Nome Locale (Se ≠ EN)">
                <label for="local_name">Nome Locale (Se ≠ EN)</label>
            </div>
            <div class="form-group col-span-2">
                <input type="text" id="language" name="language" placeholder="Lingua">
                <label for="language">Lingua</label>
            </div>
            <div class="form-group col-span-2">
                <input type="number" id="quantity" name="quantity" placeholder="Pezzi">
                <label for="quantity">Pezzi</label>
            </div>
            <div class="form-group col-span-1" id="checkbox-group">
                <label for="is_foil">Foil</label>
                <input type="checkbox" id="is_foil" name="is_foil" value="true">
            </div>
        </fieldset>

        <!-- Informazioni di Mercato -->
        <fieldset id="market_info" class="col-span-12">
            <legend>Informazioni di Mercato</legend>
            <div class="form-group col-span-2">
                <input type="number" step="0.01" id="value_eur" name="value_eur" placeholder="Valore in Euro">
                <label for="value_eur">Euro</label>
            </div>
            <div class="form-group col-span-2">
                <input type="number" step="0.01" id="value_usd" name="value_usd" placeholder="Valore in Dollari">
                <label for="value_usd">Dollari</label>
            </div>
            <div class="form-group col-span-8 btn-group submit-group">
                <button type="submit">Invia</button>
                <a role="button" class="outline" id="cancel" href="{{ route('cards.index') }}">Indietro</a>
            </div>
        </fieldset>
    </form>
</div>
@endsection
@section('scripts')
    <script src="{{ asset('js/card-form.js') }}"></script>
@endsection
