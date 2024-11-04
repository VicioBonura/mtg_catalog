<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Card extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'set_id',
        'supertype_id',
        'rarity_id',
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
        return $this->hasMany(CardVariant::class);
    }

    public function marketInfos(): HasManyThrough
    {
        return $this->hasManyThrough(MarketInfo::class, CardVariant::class, 'card_id', 'card_variant_id');
    }

    public function types(): BelongsToMany
    {
        return $this->belongsToMany(Type::class);
    }

    public function subtypes(): BelongsToMany
    {
        return $this->belongsToMany(SubType::class, 'card_subtype', 'card_id', 'subtype_id');
    }

    public function colors(): BelongsToMany
    {
        return $this->belongsToMany(Color::class);
    }
}
