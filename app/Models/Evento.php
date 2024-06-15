<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Evento extends Model
{
    use HasFactory;

    protected $table = 'eventos';
    protected $fillable = [
        'local',
        'data',
        'tipo',
        'numero_convidados',
        'valor',
        'observacao',
    ];

    public function responsavel(): HasOne {
        return $this->hasOne(Responsavel::class);
    }

    public function complementos(): HasOne {
        return $this->hasOne(Complementos::class);
    }

    public function valores(): HasOne {
        return $this->hasOne(Valores::class);
    }
}
