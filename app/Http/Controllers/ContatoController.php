<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Models\Orcamento;

class ContatoController extends Controller
{
    public function contato(Request $request) {
        return view('contato');
    }

    public function salvar(Request $request) {
        Validator::make($request, [
            'nome' => ['required'],
            'telefone' => ['required'],
            'email' => ['required'],
            'categoria-festa' => ['required'],
            'orcamento' => ['required']
        ]);

        $orcamento = new Orcamento();

        $orcamento->nome = $request->input('nome');
        $orcamento->telefone = $request->input('telefone');
        $orcamento->email = $request->input('email');
        $orcamento->tipo = $request->input('categoria-festa');
        $orcamento->mensagem = $request->input('orcamento');

        $orcamento->save();

        return view('contato');
    }
}
