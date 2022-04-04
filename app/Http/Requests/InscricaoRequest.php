<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\Cpf;
use App\Rules\nome_validacao;

class InscricaoRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nome'=> ['required', new nome_validacao],
            'cpf'=> ['required', new Cpf,'unique:inscricoes,cpf'],
            'endereco'=>'required',
            'cidade'=>'required',
            'estado'=>'required',
            'cargo'=>'required',
        ];
    }
}
