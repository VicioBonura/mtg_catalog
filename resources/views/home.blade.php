{{-- resources/views/home.blade.php --}}
@extends('layouts.app')

@section('title', 'Dashboard - MTG Catalog')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
@endsection
@section('header', 'Dashboard')

@section('content')
<div class="content-fluid">
    {{-- 
    pannelli della dashboard:
    - torale carte
    - valore catalogo
    - info su tipi di carte
    - info su rarità
    - info su set
    --}}
</div>
@endsection
