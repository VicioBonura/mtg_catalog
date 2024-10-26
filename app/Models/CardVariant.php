<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CardVariant extends Model
{
    protected $fillable = [
        'card_id',
        'language',
        'is_foil',
        'quantity',
        'value_eur',
        'value_usd'
    ];

    public function card(): BelongsTo
    {
        return $this->belongsTo(Card::class);
    }
}
