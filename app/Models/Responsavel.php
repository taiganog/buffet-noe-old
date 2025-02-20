<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Responsavel extends Model
{
    use HasFactory;

    protected $table = 'responsaveis';
    protected $fillable = [
        'nome',
        'telefone',
        'telefone_2',
        'cpf',
        'rg',
        'endereco'
    ];

    public function evento(): BelongsTo {
        return $this->belongsTo(Evento::class);
    }
}
