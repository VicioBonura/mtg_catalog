<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Block extends Model
{
    protected $fillable = [
        'name'
    ];

    public function sets(): HasMany
    {
        return $this->hasMany(Set::class);
    }
}
