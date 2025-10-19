<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pool extends Model
{   
    use HasFactory;

    public function options(): HasMany
    {
        return $this->hasMany(Option::class);
    }

    protected $fillable = [
        'title',
        'question',
        'date_start',
        'date_end',
        'status',
    ];
    
    protected $casts = [
        'date_start' => 'datetime',
        'date_end' => 'datetime',
    ];
}
