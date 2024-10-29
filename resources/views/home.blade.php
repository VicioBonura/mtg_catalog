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
    <div class="dashboard">
        <div class="column">
            <div class="panel">
                <header>Totali</header>
                <table>
                    <tr>
                        <td><strong>Carte</strong></td>
                        <td class="right">1.660</td>
                    </tr>
                    <tr>
                        <td><strong>Valore</strong></td>
                        <td class="right">€ 1.234,56</td>
                    </tr>
                </table>
            </div>
            <div class="panel">
                <header>Tipi</header>
                <table>
                    <tr>
                        <td><strong>Artefatto</strong></td>
                        <td class="right">153</td>
                    </tr>
                    <tr>
                        <td><strong>Creatura</strong></td>
                        <td class="right">845</td>
                    </tr>
                    <tr>
                        <td><strong>Incantesimo</strong></td>
                        <td class="right">235</td>
                    </tr>
                    <tr>
                        <td><strong>Istantaneo</strong></td>
                        <td class="right">395</td>
                    </tr>
                    <tr>
                        <td><strong>Terra</strong></td>
                        <td class="right">395</td>
                    </tr>
                    <tr>
                        <td><strong>Stregoneria</strong></td>
                        <td class="right">123</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="column">
            <div class="panel">
                <header>Rarità</header>
                <table>
                    <tr>
                        <td><strong>Mitica</strong></td>
                        <td class="right">1.234</td>
                    </tr>
                    <tr>
                        <td><strong>Rara</strong></td>
                        <td class="right">1.234</td>
                    </tr>
                    <tr>
                        <td><strong>Non Comune</strong></td>
                        <td class="right">1.234</td>
                    </tr>
                    <tr>
                        <td><strong>Comune</strong></td>
                        <td class="right">1.660</td>
                    </tr>
                </table>
            </div>
            <div class="panel">
                <header>Colore</header>
                <table>
                    <tr>
                        <td><strong>White</strong></td>
                        <td class="right">1.234</td>
                    </tr>
                    <tr>
                        <td><strong>Blue</strong></td>
                        <td class="right">1.567</td>
                    </tr>
                    <tr>
                        <td><strong>Black</strong></td>
                        <td class="right">1.890</td>
                    </tr>
                    <tr>
                        <td><strong>Red</strong></td>
                        <td class="right">1.234</td>
                    </tr>
                    <tr>
                        <td><strong>Green</strong></td>
                        <td class="right">1.456</td>
                    </tr>
                    <tr>
                        <td><strong>Mixed</strong></td>
                        <td class="right">1.789</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="column">
            <div class="panel">
                <header>Info su set</header>
                <p>100</p>
            </div>
        </div>
    </div>
</div>
@endsection
