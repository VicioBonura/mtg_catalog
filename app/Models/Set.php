<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Set extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'name',
        'set_type',
        'block',
        'card_count',
        'release_date',
        'created_at',
        'updated_at'
    ];
}
