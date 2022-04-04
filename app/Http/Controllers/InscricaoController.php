<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inscricao;
use App\Http\Requests\InscricaoRequest;
use Barryvdh\DomPDF\Facade\Pdf;

class InscricaoController extends Controller
{
    public function index(){
        $inscricoes = Inscricao::all();
        return view('welcome',['inscricoes' => $inscricoes]);
    }

    public function create(){
        return view('inscricoes.create');
    }

    public function store(InscricaoRequest $request){

        $inscricao = new inscricao;
        $inscricao->nome =ucwords ($request->nome);
        $inscricao->cpf = $request->cpf;
        $inscricao->endereco = $request->endereco;
        $inscricao->cidade = $request->cidade;
        $inscricao->estado = $request->estado;
        $inscricao->cargo = $request->cargo;
        $inscricao->situacao = 'Enviado';

        $inscricao->save();  

        return view('inscricoes.show',['inscricao'=> $inscricao]);
    }
    public function gerarPDF($id){
        $inscricao = Inscricao::findOrFail($id);
        $pdf =  PDF::loadView('inscricoes.pdf',['inscricao' =>$inscricao])->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->setPaper('a4')->stream("Comprovante_Inscrição");

    }
}
    