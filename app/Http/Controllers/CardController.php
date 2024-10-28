<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;

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
        return view('cards.create');
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
