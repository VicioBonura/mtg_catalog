<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MarketInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'card_variant_id',
        'value_eur',
        'value_usd',
    ];

    public function cardVariant(): BelongsTo
    {
        return $this->belongsTo(CardVariant::class);
    }
}
