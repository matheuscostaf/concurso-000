@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')
    <div id="inscricao-create-container" class="col-md-6 offset-md-3">
        <h1>Inscrição</h1>
        <form action="/inscricoes" method="POST">
            @csrf
            <div class="form-group">
                <label for="nome">Nome: </label>
                <input type="text" value="{{old('nome')}}" class="form-control {{$errors->has('nome') ? 'is-invalid' : ''}}" id="nome" name="nome" placeholder="Nome do candidato">
            </div>
            <div>{{$errors->first('nome')}}</div>
            <div class="form-group">
                <label for="cpf">CPF: </label>
                <input type="text" value="{{old('cpf')}}" class="form-control {{$errors->has('cpf') ? 'is-invalid' : ''}}" id="cpf" name="cpf" placeholder="CPF do candidato">
            </div>
            <div>{{$errors->first('cpf')}}</div>
            <div class="form-group">
                <label for="endereco">Endereço: </label>
                <input type="text" value="{{old('endereco')}}" class="form-control {{$errors->has('endereco') ? 'is-invalid' : ''}}" id="endereco" name="endereco" placeholder="Endereço do candidato">
            </div>
            <div>{{$errors->first('endereco')}}</div>
            <div class="container">
                 <div class="row">
                  <div class="col-6">
                    <label for="cidade">Cidade: </label>
                     <input type="text" value="{{old('cidade')}}" class="form-control {{$errors->has('cidade') ? 'is-invalid' : ''}}" id="cidade" name="cidade" placeholder="Cidade do candidato">
                     <div>{{$errors->first('cidade')}}</div>
                 </div>
                 <div class="col-6">
                    <label for="estado">Estado: </label>
                     <input type="text" value="{{old('estado')}}" class="form-control {{$errors->has('estado') ? 'is-invalid' : ''}}" id="estado" name="estado" placeholder="Estado do candidato">
                     <div>{{$errors->first('estado')}}</div>
                 </div>

             </div>
            </div>
            <div class="form-group">
                <label for="cargo">Cargo: </label>
                <input type="text" value="{{old('cargo')}}" class="form-control {{$errors->has('cargo') ? 'is-invalid' : ''}}" id="cargo" name="cargo" placeholder="Cargo do candidato">
            </div>
            <div>{{$errors->first('cargo')}}</div>
            <div class="form-group">
            <input type="submit" class="btn btn-outline-dark btn-lg"  value="Cadastrar">
            </div> 
        </form>
    </div> 
@endsection
