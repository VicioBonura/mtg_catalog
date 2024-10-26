<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Card extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'set_id',
        'type_id',
        'subtype_id',
        'rarity_id',
        'mana_cost',
        'cmc',
        'color_id',
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
