<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CardVariant extends Model
{
    use HasFactory;

    protected $fillable = [
        'card_id',
        'language',
        'is_foil',
        'quantity'
    ];

    public function card(): BelongsTo
    {
        return $this->belongsTo(Card::class);
    }

    public function marketInfo(): HasMany
    {
        return $this->hasMany(MarketInfo::class);
    }
}
