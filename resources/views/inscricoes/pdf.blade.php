<div id="inscricao-create-container" class="col-md-6 offset-md-3">
        <h1>Comprovante da Inscrição</h1>
        <form>
            <div class="form-group">
                <label for="id">ID da Inscrição: </label>
                <h4>{{$inscricao->id}}</h4>
            </div>
            <div class="container">
                 <div class="row">
                 <div class="form-group">
                <label for="created_at">Data da Incrição: </label>
                <?php
                    $data_timestamp = strtotime($inscricao->created_at);
                    $data_brasileira = date("d/m/Y   H:i",$data_timestamp);
                 ?>
                 <h4>{{$data_brasileira}}</h4>
                </div>
                 <div class="col-6">
                    <label for="situacao">Situação: </label>
                    <h4>{{$inscricao->situacao}}</h4>
                 </div>
             </div>
            </div>
            <div class="form-group">
                <label for="nome">Nome: </label>
                <h4>{{$inscricao->nome}}</h4>
            </div>
            <div class="form-group">
                <label for="cpf">CPF: </label>
                <h4>{{$inscricao->cpf}}</h4>
            </div>
            <div class="form-group">
                <label for="endereco">Endereço: </label>
                <h4>{{$inscricao->endereco}}</h4>
            </div>
            <div class="container">
                 <div class="row">
                  <div class="col-6">
                    <label for="cidade">Cidade: </label>
                    <h4>{{$inscricao->cidade}}</h4>
                 </div>
                 <div class="col-6">
                    <label for="estado">Estado: </label>
                    <h4>{{$inscricao->estado}}</h4>
                 </div>

             </div>
            </div>
            <div class="form-group">
                <label for="cargo">Cargo: </label>
                <h4>{{$inscricao->cargo}}</h4>
            </div>
        </form>
    </div> 