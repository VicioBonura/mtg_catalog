<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $fillable = [
        'name',
        'set_id',
        'type',
        'subtype',
        'rarity',
        'mana_cost',
        'cmc',
        'number',
    ];

    public function set(): BelongsTo
    {
        return $this->belongsTo(Set::class);
    }

    public function variants(): HasMany
    {
        return $this->hasMany(Card::class, 'card_id', 'id');
    }
}
