<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SetType extends Model
{
    protected $fillable = [
        'name',
        'description'
    ];

    public function sets(): HasMany
    {
        return $this->hasMany(Set::class);
    }
}
