<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Complementos extends Model
{
    use HasFactory;

    public function evento(): BelongsTo {
        return $this->belongsTo(Evento::class);
    }
}
