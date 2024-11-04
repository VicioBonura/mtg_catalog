<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\Color;
use App\Models\Type;
use App\Models\Set;
use App\Models\SubType;
use App\Models\CardVariant;
use App\Models\MarketInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;
class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cards = Card::with(['variants', 'marketInfos'])->get();
        return view('cards.index', compact('cards'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $existingCards = Card::orderBy('name')->get();
        $sets = Set::orderBy('name')->get();
        $superTypes = DB::table('supertypes')->orderBy('name')->get();
        $types = Type::orderBy('name')->get();
        $subTypes = SubType::orderBy('name')->get();
        $rarities = DB::table('rarities')->orderBy('name')->get();
        $colors = Color::orderBy('name')->get();

        return view('cards.create', compact('existingCards', 'sets', 'superTypes', 'types', 'subTypes', 'rarities', 'colors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if(!$request->has('is_foil')) {
            $request->merge(['is_foil' => false]);
        } else {
            $request->merge(['is_foil' => true]);
        }

        if ($request->input('use_existing') == 'true') {
            $validated = $request->validate([
                'card_id' => 'required|exists:cards,id',
                'local_name' => 'nullable|string|max:255',
                'language' => 'required|string|max:255',
                'quantity' => 'required|integer',
                'is_foil' => 'nullable|boolean',
                'value_eur' => 'nullable|numeric',
                'value_usd' => 'nullable|numeric',
            ]);

        } else {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'set_id' => 'required|exists:sets,id',
                'types' => 'nullable|array',
                'types.*' => 'exists:types,id',
                'supertype_id' => 'nullable|exists:supertypes,id',
                'subtypes' => 'nullable|array',
                'subtypes.*' => 'exists:subtypes,id',
                'rarity_id' => 'nullable|exists:rarities,id',
                'mana_cost' => 'nullable|string',
                'cmc' => 'nullable|integer',
                'number' => 'nullable|integer',
                'colors' => 'nullable|array',
                'colors.*' => 'exists:colors,id',
                'local_name' => 'nullable|string|max:255',
                'language' => 'required|string|max:255',
                'quantity' => 'required|integer',
                'is_foil' => 'nullable|boolean',
                'value_eur' => 'nullable|numeric',
                'value_usd' => 'nullable|numeric',
            ]);

            $cardData = Arr::only($validated, ['name', 'set_id', 'supertype_id', 'rarity_id', 'mana_cost', 'cmc', 'number']);
            $card = Card::create($cardData);

            $validated['card_id'] = $card->id;
        }

        //colors
        if (isset($validated['colors'])) {
            $card->colors()->sync($validated['colors']);
        }

        //types
        if (isset($validated['types'])) {
            $card->types()->sync($validated['types']);
        }

        //subtypes
        if (isset($validated['subtypes'])) {
            $card->subtypes()->sync($validated['subtypes']);
        }

        //variant
        $variantData = Arr::only($validated, ['card_id', 'local_name', 'language', 'quantity', 'is_foil']);
        $variant = CardVariant::create($variantData);
        $validated['card_variant_id'] = $variant->id;

        //market info
        $marketInfoData = Arr::only($validated, ['card_variant_id', 'value_eur', 'value_usd']);
        MarketInfo::create($marketInfoData);

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
