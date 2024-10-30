{{-- resources/views/cards/create.blade.php --}}
@extends('layouts.app')
@section('title', 'Add Card - MTG Catalog')
@section('header', 'Add Card')
@section('content')
<div class="container-fluid">
    <form action="{{ route('cards.store') }}" method="post" class="form">
        <h3 class="col-span-12">Nuova Carta</h3>
        @csrf
        <input type="text" name="name" placeholder="Name">
        <input type="text" name="set_id" placeholder="Set ID">
        <button type="submit">Add Card</button>
    </form>
</div>
@endsection
