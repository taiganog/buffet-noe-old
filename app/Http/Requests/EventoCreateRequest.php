<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventoCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array {
        return [
            // Responsável
            'nome'              => ['required'],
            'telefone'          => ['required', 'min:14', 'max:15'],
            'telefone_2'        => ['required', 'min:14', 'max:15'],
            'cpf'               => ['required', 'min:14', 'max:18'],
            'rg'                => ['required', 'min:9'],
            'endereco'          => ['required'],

            // Evento
            'local'             => ['required'],
            'data'              => ['required', 'date'],
            'tipo'              => ['required'],
            'numero_convidados' => ['required', 'numeric'],
            'observacao'        => ['nullable']
        ];
    }

    public function messages(): array {
        return [
            // Responsável
            'nome.required'                 => 'O campo "Nome" é obrigatório',

            'telefone.required'             => 'O campo "Telefone" é obrigatório',
            'telefone.min'                  => 'Formato (XX) XXXXX-XXXX',
            'telefone.max'                  => 'Formato (XX) XXXXX-XXXX',
            'telefone_2.required'           => 'O campo "Telefone" é obrigatório',
            'telefone_2.min'                => 'Formato (XX) XXXXX-XXXX',
            'telefone_2.max'                => 'Formato (XX) XXXXX-XXXX',

            'cpf.required'                  => 'O campo "CPF é obrigatório',
            'cpf.max'                       => 'Formato XXX.XXX.XXX-XX',
            'cpf.min'                       => 'Formato XXX.XXX.XXX-XX',

            'rg.required'                   => 'O campo "RG" é obrigatório',
            'rg.min'                        => 'Formato XXX.XXX.XXX-XX',

            'endereco.required'             => 'O campo "Endereço" é obrigatório',

            // Evento
            'local.required'                => 'O campo "Endereço" é obrigatório',
            'data.required'                 => 'O campo "Data" é obrigatório',
            'tipo.required'                 => 'O campo "Tipo" é obrigatório',
            'numero_convidados.required'    => 'O campo "Convidados" é obrigatório',
            'numero_convidados.numeric'     => 'Aceito somente números',
        ];
    }
}
