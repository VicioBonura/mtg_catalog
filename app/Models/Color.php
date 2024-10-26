<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
class Color extends Model
{
    protected $fillable = ['name', 'code', 'symbol'];

    public $timestamps = false;

    public function cards(): BelongsToMany
    {
        return $this->belongsToMany(Card::class);
    }
}
