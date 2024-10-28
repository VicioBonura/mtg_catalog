<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Set extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'name',
        'symbol_uri',
        'set_type_id',
        'block_id',
        'card_count',
        'release_date',
        'created_at',
        'updated_at'
    ];

    public function cards(): HasMany
    {
        return $this->hasMany(Card::class);
    }

    public function setType(): BelongsTo
    {
        return $this->belongsTo(SetType::class);
    }

    public function block(): BelongsTo
    {
        return $this->belongsTo(Block::class);
    }
}
