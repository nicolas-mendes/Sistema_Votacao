<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Options extends Model
{
    use HasFactory;

    public function options(): BelongsTo
    {
        return $this->belongsTo(Pool::class);
    }
}
