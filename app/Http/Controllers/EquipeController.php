<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;
use App\Models\Funcionario;

class EquipeController extends Controller
{
    public function index() {
        $funcionarios = DB::table('funcionarios')->get();

        return Inertia::render('Administrativo/Equipe', [
          'funcionarios' => $funcionarios,
        ]);
    }

    public function create(Request $request) {
        Funcionario::create($request->validate([
            // Regras de validação
            'nome'      => ['required', 'max:100'],
            'telefone'  => ['required', 'min:14', 'max:15'],
            'chave_pix' => ['max:50']
        ],
        [
            // Mensagens de validação
            'nome.required'     => 'É obrigatório informar o nome',
            'nome.max'          => 'Até 100 caractéres permitidos',
            'telefone.required' => 'É obrigatório informar o telefone',
            'telefone.min'      => 'Informe o telefone no formado (00) 00000-0000',
            'telefone.max'      => 'Informe o telefone no formado (00) 00000-0000',
            'chave_pix.max'     => 'Até 50 caractéres permitidos'
        ]));

        return back();
    }
}
