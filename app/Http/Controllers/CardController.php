<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;
use App\Models\Set;
use App\Models\SetType;
use App\Models\SubType;
use Illuminate\Support\Facades\DB;

class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cards = Card::all();
        return view('cards.index', compact('cards'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sets = Set::orderBy('name')->get();
        $setTypes = SetType::orderBy('name')->get();
        $superTypes = DB::table('super_types')->orderBy('name')->get();
        $types = Type::orderBy('name')->get();
        $subTypes = SubType::orderBy('name')->get();
        $rarities = DB::table('rarities')->orderBy('name')->get();
        $colors = Color::orderBy('name')->get();

        return view('cards.create', compact('sets', 'setTypes', 'superTypes', 'types', 'subTypes', 'rarities', 'colors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //XXX TODO: validate request
        Card::create($request->all());
        return redirect()->route('cards.index')->with('success', 'Carta inserita con successo');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $card = Card::find($id);
        if (!$card) {
            return redirect()->route('cards.index')->with('error', 'Carta non trovata');
        }
        return view('cards.show', compact('card'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $card = Card::find($id);
        if (!$card) {
            return redirect()->route('cards.index')->with('error', 'Carta non trovata');
        }
        return view('cards.edit', compact('card'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $card = Card::find($id);
        if (!$card) {
            return redirect()->route('cards.index')->with('error', 'Carta non trovata');
        }
        //XXX TODO: validate request
        $card->update($request->all());
        return redirect()->route('cards.index')->with('success', 'Carta aggiornata con successo');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $card = Card::find($id);
        if (!$card) {
            return redirect()->route('cards.index')->with('error', 'Carta non trovata');
        }
        $card->delete();
        return redirect()->route('cards.index')->with('success', 'Carta eliminata con successo');
    }
}
