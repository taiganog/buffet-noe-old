<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Models\Orcamento;

class ContatoController extends Controller
{
    public function contato(Request $request) { 
        $tipos_festa = [
            'FESTA_INFANTIL' => 'Festa infantil',
            '15_ANOS' => 'Festa 15 anos',
            'FESTA_ADULTO' => 'Festa adulta',
            'FORMATURA' => 'Formatura',
            'CASAMENTO' => 'Casamento',
            'CONFRATERNIZACAO' => "Confraternização"
        ];

        return view('contato', ['tipos_festa' => $tipos_festa]);
    }

    public function salvar(Request $request) {
        $request->validate([
            'nome' => ['required', 'min:4', 'max:100'],
            'telefone' => ['required', 'min:14', 'max:15'],
            'email' => ['email'],
            'tipo' => ['required'],
            'mensagem' => ['required']
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

            'mensagem'          => 'Precisamos da sua ideia! Informe sua mensagem!'
        ]);

        Orcamento::create($request->all());

        return redirect()->route('principal');
    }
}
