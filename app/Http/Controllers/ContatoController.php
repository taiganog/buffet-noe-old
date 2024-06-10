<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContatoRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Models\Orcamento;
use Inertia\Inertia;

class ContatoController extends Controller
{
    public function contato(Request $request) {
        return Inertia::render('Publico/Contato');
    }

    public function salvar(Request $request) {

        $request->validate([
            // Regras de validação
            'nome'              => ['required', 'min:4', 'max:100'],
            'telefone'          => ['required', 'min:14', 'max:15'],
            'email'             => ['email'],
            'tipo'              => ['required'],
            'mensagem'          => ['required', 'min:20', 'max:500']
        ],
        [
            // Mensagens de validação
            'nome.required'     => 'Precisamos de seu nome completo!',
            'nome.min'          => 'Precisamos de seu nome completo!',
            'nome.max'          => 'O nome informado é muito grande',

            'telefone.required' => 'Precisamos de seu telefone!',
            'telefone.min'      => 'Informe seu telefone como (00) 00000-0000.',
            'telefone.max'      => 'Informe seu telefone como (00) 00000-0000.',

            'email.email'       => 'O campo E-mail precisa ser um endereço válido!',

            'tipo.required'     => 'Informe o tipo de evento que você deseja!',

            'mensagem'          => 'Precisamos da sua ideia! Informe sua mensagem!',
            'mensagem.min'      => 'Mínimo de 20 caractéres',
            'mensagem.max'      => 'Máximo de 500 caractéres'
        ]);

        Orcamento::create($request->all());

        return back();
    }
}
