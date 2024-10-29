<?php

namespace App\Http\Controllers;

use App\Models\Set;
use App\Models\SetType;
use App\Models\Block;
use Illuminate\Http\Request;

class SetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sets = Set::orderBy('name')->get();
        return view('sets.index', compact('sets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $setTypes = SetType::orderBy('name')->get();
        $blocks = Block::orderBy('name')->get();
        return view('sets.create', compact('setTypes', 'blocks'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string|size:3',
            'set_type_id' => 'nullable|integer|exists:set_types,id',
            'block_id' => 'nullable|integer|exists:blocks,id',
            'card_count' => 'nullable|integer|min:1',
            'release_date' => 'nullable|date',
        ]);

        $validatedData['code'] = strtolower($validatedData['code']);
        $validatedData['symbol_uri'] = $validatedData['code'] . '.svg';
        Set::create($validatedData);
        return redirect()->route('sets.index')->with('success', 'Set inserito con successo');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $set = Set::find($id);
        if (!$set) {
            return redirect()->route('sets.index')->with('error', 'Set non trovato');
        }
        return view('sets.show', compact('set'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $set = Set::find($id);
        if (!$set) {
            return redirect()->route('sets.index')->with('error', 'Set non trovato');
        }
        return view('sets.edit', compact('set'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $set = Set::find($id);
        if (!$set) {
            return redirect()->route('sets.index')->with('error', 'Set non trovato');
        }
        //XXX TODO: validate request
        $set->update($request->all());
        return redirect()->route('sets.index')->with('success', 'Set aggiornato con successo');
    }

     /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $set = Set::find($id);
        if (!$set) {
            return redirect()->route('sets.index')->with('error', 'Set non trovato');
        }
        $set->delete();
        return redirect()->route('sets.index')->with('success', 'Set eliminato con successo');
    }
}
