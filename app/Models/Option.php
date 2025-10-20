<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Option extends Model
{
    use HasFactory;

    public function pool() :BelongsTo
    {
        return $this->belongsTo(Pool::class);
    }

    protected $fillable = [
        'text',
        'votes',
        'pool_id',
    ];
}
