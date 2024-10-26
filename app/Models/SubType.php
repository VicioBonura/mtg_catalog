<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubType extends Model
{
    protected $fillable = ['name'];

    public $timestamps = false;

    protected $table = 'subtypes';

    public function cards(): BelongsToMany
    {
        return $this->belongsToMany(Card::class);
    }
}
