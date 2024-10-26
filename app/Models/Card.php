<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
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
        return $this->hasMany(Card::class, 'card_id', 'id');
    }

    public function types(): BelongsToMany
    {
        return $this->belongsToMany(Type::class);
    }

    public function subtypes(): BelongsToMany
    {
        return $this->belongsToMany(SubType::class);
    }

    public function color(): BelongsToMany
    {
        return $this->belongsToMany(Color::class);
    }
}
